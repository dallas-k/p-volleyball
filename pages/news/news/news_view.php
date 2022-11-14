<?php
    include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
    include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";
    $idx = $_GET["idx"];
    $sql = "SELECT * FROM news WHERE idx = $idx;";
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
    <link rel="stylesheet" href="/volleyball/css/news-view.css">
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
                <h2>NEWS</h2>
            </div>
            <div class="menu_tab_square">
                <div class="menu_tab_box">
                    <section class="menu_tab">
                        <h3>첫화면</h3>
                        <ul>
                            <li class="selected_tab">NEWS</li>
                        </ul>
                        <ul>
                            <li>구단 뉴스</li>
                        </ul>
                    </section>
                </div>
            </div>

            <div class="query">
                <h3>구단 뉴스</h3>
            </div>

            <div class="container">
                <div class="item_title">
                    <h3><?php echo $array["n_title"];?></h3>
                <div>
                <div class="item_desc">
                    <p>
                        <span class='title_name'>작성일</span>
                        <span><?php echo $array["reg"];?></span>
                    </p>
                    <p>
                        <span class='title_name'>매체사</span>
                        <span><?php echo $array["n_company"];?></span>
                    </p>
                    <p>
                        <span class='title_name'>조회수</span>
                        <span><?php echo $array["click"];?></span>
                    </p>
                </div>
                <div class="item_content">
                    <p><img src="" alt=""></img></p>
                </div>
            </div>
            <div class="btn_box">
                <button type="button" onclick="location.href='../news.php'">목록</button>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
    </div>

    <script>
            
    </script>
</body>
</html>