<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";
$sql = "SELECT * FROM members WHERE idx=$s_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

$check_email_y = $array["email_subscribe"] === 'Y' ? 'checked' : "";
$check_email_n = $array["email_subscribe"] === 'N' ? 'checked' : "";
$check_news_y = $array["news_subscribe"] === 'Y' ? 'checked' : "";
$check_news_n = $array["news_subscribe"] === 'N' ? 'checked' : "";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {box-sizing: border-box;}
        body, div, label, input, span, p {margin:0; padding:0;}
        fieldset {
            border: none;
            margin: 40px auto 0 auto;
            width: 600px;
        }
        legend {
            margin-bottom:12px;
            font-weight: bold;
            font-size:24px;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            border: none;
            border-bottom: 1px solid #ccc;
        }
        input::placeholder {
            color: #ccc;
        }
        .form_group {
            width: 600px;
        }

        .form_group label {
            display: inline-block;
            width: 120px;
            color: #444;
            margin:8px 0;
        }
        button {
            outline: none;
            border: none;
        }
        .pwd_title {
            float: left;
            width: 120px;
        }
        .pwd_announce {
            float: left;
            width: 480px;
        }
        .err_msg {
            color:red;
            font-style: italic;
        }
        .subscribe_group {
            margin-bottom:12px;
        }
        .button_list {
            margin-top:12px;
            width:600px;
            margin:auto;
        }
        .button_list button {
            background-color:rosybrown;
            color:white;
        }
        #GetId span {
            margin-left:72px;
        }

    </style>
</head>
<body>
    <form action="mypage_modify.php" method="post" onsubmit="return submitForm()">
        <fieldset>
            <legend>기본정보입력</legend>
            <div class="form_group" id="GetId">
                <p> 아이디 <span><?php echo $array['u_id'];?></span></p>
            </div>

            <div class="form_group">
                <label for="u_name">이름</label>
                <input type="text" name="u_name" id="u_name" value="<?php echo $array['u_name'];?>">
                <span class="err_msg" id="err_name"></span>
            </div>

            <div class="form_group">
                <div class="pwd_title">
                    <label for="pwd">비밀번호</label>
                </div>
                <div class="pwd_announce">
                    <input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요">
                    <br><span class="err_msg" id="err_psw"></span>
                    <p>* 비밀번호는 8~12자의 영문 대문자, 영문 소문자, 숫자, 특수문자를 혼합해서 사용할 수 있습니다.</p>
                </div>
                
            </div>
            <div class="form_group">
                <label for="pswCheck">비밀번호 확인</label>
                <input type="password" name="pswCheck" id="pswCheck" placeholder="비밀번호를 다시 입력하세요">
                <span class="err_msg" id="err_pswCheck"></span>
            </div>
            <div class="form_group">
                <label for="email">이메일</label>
                <input type="email" name="email" id="email" value="<?php echo $array['email']?>">
                <span class="err_msg" id="err_email"></span>
            </div>
            
            
        </fieldset>

        <fieldset>
            <legend>뉴스&정보 수신여부</legend>
            <div class="subscribe_group">
                <span>이메일</span>
                <label>
                    <input type="radio" name="email_subscribe" value="Y" <?php echo $check_email_y?>>수신
                </label>
                <label>
                    <input type="radio" name="email_subscribe" value="N" <?php echo $check_email_n?>>수신거부
                </label>
            </div>
            <div class="subscribe_group">
                <span>뉴스레터</span>
                <label>
                    <input type="radio" name="news_subscribe" value="Y" <?php echo $check_news_y?>>수신
                </label>
                <label>
                    <input type="radio" name="news_subscribe" value="N" <?php echo $check_news_n?>>수신거부
                </label>
            </div>
        </fieldset>
        <div class="button_list">
            <button type="submit">정보수정</button>
            <button type="button">돌아가기</button>
        </div>
    </form>

    <script>
        function submitForm() {
            let user_id, user_name, user_email, user_psw, user_pswCheck, user_array, err_msg, txt_req;
            user_id = document.getElementById("u_id");
            user_name = document.getElementById("u_name");
            user_email = document.getElementById("email");
            user_pwd = document.getElementById("pwd");
            user_pswCheck = document.getElementById("pswCheck");
            user_array = [user_id, user_name, user_psw, user_pswCheck, user_email];
            err_msg = document.getElementsByClassName("err_msg");
            txt_req = "필수 입력 값입니다"

            // 이름 검사
            let regName = /^[가-힣a-zA-Z]{2,}$/;
            if(!user_name.value){
                err_msg[0].textContent = "필수 입력 값입니다";
                user_name.focus();
                return false;
            } else {
                if(!regName.test(user_name.value)) {
                    err_msg[0].textContent = "이름은 한글, 영어 대소문자만 적어주세요";
                    user_name.focus();
                    return false;
                }
                else {
                    err_msg[0].textContent = "";
                }
            }

            // PW 검사
            let regPw = /^[0-9a-zA-Z_-~!@#$%^&*()<>?]{4,20}$/;
            if(user_pwd.value){
                if(!regPw.test(user_pwd.value)) {
                    err_msg[1].textContent = "비밀번호는 영어 대소문자, 숫자, 특수문자를 이용해 4~20자로 만들어주세요";
                    user_pwd.focus();
                    return false;
                }
                else {
                    err_msg[1].textContent = "";
                }
            }

            // PW Check
            if(user_pswCheck.value != user_psw.value){
                err_msg[2].textContent = "비밀번호가 일치하지 않습니다"
                user_pswCheck.focus()
                return false;
            } else {
                err_msg[2].textContent = ""
            } 

            // Email 검사
            let regMail = "/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]*\.[a-zA-Z]{2,3}$/i/";
            if(!user_email.value){
                err_msg[3].textContent = "필수 입력 값입니다";
                user_email.focus();
                return false;
            } else {
                if(!regMail.test(user_email.value)) {
                    err_msg[3].textContent = "이메일 형식이 아닙니다";
                    user_email.focus();
                    return false;
                }
                else {
                    err_msg[3].textContent = "";
                }
            }

        } 
    </script>
</body>
</html>