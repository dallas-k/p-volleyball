<?php
include "c:/xampp/htdocs/volleyball/back/inc/session.php";
if(!$s_idx){
    echo "<script>
    alert('로그인을 해주세요');
    location.href = '../qna.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUERY</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/qna-write.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $("#header").load("/volleyball/common/header.php");
            $("#footer").load("/volleyball/common/footer.html");
            $("#page-main").load("/volleyball/common/page-main.html");
        });
        
        function write_check(){
            let qna_title = document.getElementById("qna_title");
            let qna_content = document.getElementById("qna_content");

            if(!qna_title.value){
                alert('제목을 입력해주세요');
                qna_title.focus();
                return false;
            };
            if(!qna_content.value){
                alert('내용을 입력해주세요');
                qna_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <div class="wrap">
    <header id="header" class="header"></header>

    <main class="main" id="main" onmouseover="menuOut()">
        <div id="page-main"></div>
        <div class="title">
            <h2>FAN</h2>
        </div>
        <div class="menu_tab_square">
            <div class="menu_tab_box">
                <section class="menu_tab">
                    <h3>첫화면</h3>
                    <ul>
                        <li class="selected_tab">FAN</li>
                    </ul>
                    <ul>
                        <li>구단 문의</li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="query">
            <h3>구단 문의사항</h3>
        </div>

        <div class="form_container">
            <form name="qna_write_form" action="qna_write_ok.php" method="post" onsubmit="return write_check()">
                <div class="btn_box">
                    <button type="submit">등록</button>
                    <button type="button" onclick="location.href='../qna.php'">취소</button>
                </div>
                <div class="title_box">
                    <input type="hidden" name="u_name" value=<?php echo $s_name;?>>
                    <label for="qna_title">제목</label>
                    <input type="text" name="qna_title" id="qna_title" placeholder="제목을 입력하세요">
                </div>
                <textarea name="qna_content" id="qna_content" rows="20" cols="100" placeholder="본문을 입력해주세요"></textarea>
            </form>
        </div>
    </main>

    <footer id="footer" class="footer"></footer>
    </div>
</body>
</html>