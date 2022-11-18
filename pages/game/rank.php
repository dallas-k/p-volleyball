<?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php"; ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/rank.css">
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
    <header id="header" class="header"></header>
    <main class="main" id="main" onmouseover="menuOut()">
        <div id="page-main"></div>
        <div class="title">
            <h2>GAME</h2>
        </div>
        <div class="menu_tab_square">
            <div class="menu_tab_box">
                <section class="menu_tab">
                    <div class='box_blank'></div>
                    <h3><a href="/volleyball/index.php">첫화면</a></h3>
                    <ul class="menu_box" id="box1">
                    <li>GAME</li>
                        <div class="not_selected">
                            <li><a href="/volleyball/pages/club/history.html">CLUB</a></li>
                            <li><a href="/volleyball/pages/team/player.html">TEAM</a></li>
                            <li><a href="/volleyball/pages/game/calendar.php">GAME</a></li>
                            <li><a href="/volleyball/pages/news/news.php">NEWS</a></li>
                            <li><a href="/volleyball/pages/fan/qna.php">FAN</a></li>
                        </div>
                    </ul>
                    <ul class="menu_box" id="box2">
                        <li>팀 종합순위</li>
                        <div class="not_selected">
                            <li><a href="/volleyball/pages/news/calendar.php">경기일정, 결과</a></li>
                            <li><a href="/volleyball/pages/news/noticement.html">경기기록실</a></li>
                            <li><a href="/volleyball/pages/news/rank.php">팀 종합순위</a></li>
                            <li><a href="/volleyball/pages/news/noticement.html">티켓예매</a></li>
                        </div>
                    </ul>
                </section>
            </div>
        </div>

        <div class="query">
            <h3>팀 종합순위</h3>
        </div>
        <div class="table_box">
            <table>
                <tr>
                    <th class='table_header' id='header1'>순위</th>
                    <th class='table_header' id='header2'>팀명</th>
                    <th class='table_header' id='header3'>경기수</th>
                    <th class='table_header' id='header4'>승</th>
                    <th class='table_header' id='header5'>패</th>
                    <th class='table_header' id='header6'>승점</th>
                </tr>

                <?php
                $sql = "SELECT * FROM schedule;";
                $result = mysqli_query($dbcon, $sql);
                echo "<style>
                    table tr td {text-align:center; padding:5px 0; box-sizing:border-box;}
                </style>";
                while($array = mysqli_fetch_array($result)){
                    if($array["home_score"] !== NULL){
                        $game_result = $array["home_score"]." : ".$array["away_score"];
                    } else {
                        $game_result = " vs ";
                    };
                ?>
                <tr>
                    <td><?php echo substr($array["game_date"],0,10);?></td>
                    <td><?php echo substr($array["game_date"],11,5);?></td>
                    <td><?php echo $array["home_team"]." ".$game_result." ".$array["away_team"];?></td>
                    <td><?php echo $array["stadium"];?></td>
                    <td><?php echo $array["round"]."라운드"?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </main>
    <footer id="footer" class="footer"></footer>
    <?php mysqli_close($dbcon);?>
    <footer id="footer" class="footer"></footer>
</body>
</html>