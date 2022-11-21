<?php
    include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
    include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";
    $article_idx = $_GET["idx"];
    $sql = "SELECT * FROM board WHERE idx = $article_idx;";
    $result = mysqli_query($dbcon, $sql);
    $array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUERY</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/qna-article.css">
    <style>
    .title_box p {
        padding-bottom:20px;
        font-size:24px;
    }
    .title_box p span {
        font-size:24px;
    }

    </style>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $("#header").load("/volleyball/common/header.php");
            $("#footer").load("/volleyball/common/footer.html");
            $("#page-main").load("/volleyball/common/page-main.html");
        });
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

            <div class="query">
                <h3>구단 문의사항</h3>
            </div>

            <div class="form_container">
                <form name="qna_update_form" action="qna_update_ok.php" method="post" onsubmit="return update()">
                    <div class="btn_box">
                        <?php if($array["u_name"] === $s_name){ ?>
                        <button type="submit" onclick="update_check()">수정</button>
                        <button type="button" onclick="location.href='../qna.php'">취소</button>
                        <?php } else {?>
                            <button type="button" onclick="location.href='../qna.php'">목록</button>
                        <?php } ?>
                    </div>
                    <div class="title_box">
                        <input type="hidden" name="article_idx" value="<?php echo $article_idx?>">
                        <p><span>작성자 : </span><?php echo $array['u_name'];?></p>
                        <label for="qna_title">제목</label>
                        <input type="text" name="qna_title" id="qna_title" value="<?php echo $array['title']?>">
                    </div>
                    <textarea name="qna_content" id="qna_content" rows="20" cols="100"><?php echo $array['content']?></textarea>
                </form>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
    </div>

    <script>
        function update_check(){
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
            if('<?php echo $array["u_name"] !== $s_name;?>'){
                alert('권한이 없습니다');
                return false;
            }
        };
            
    </script>
</body>
</html>