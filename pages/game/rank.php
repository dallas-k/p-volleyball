<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";
?>

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
                    <th class='table_header' id='header6'>세트 승</th>
                    <th class='table_header' id='header7'>세트 패</th>
                    <th class='table_header' id='header8'>승점</th>
                </tr>

                <?php for($i = 0; $i < 7; $i++){?>
                <tr>
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $rank[$i][0]?></td>
                    <td><?php echo $rank[$i][1]+$rank[$i][2];?></td>
                    <td><?php echo $rank[$i][1]?></td>
                    <td><?php echo $rank[$i][2]?></td>
                    <td><?php echo $rank[$i][3]?></td>
                    <td><?php echo $rank[$i][4]?></td>
                    <td><?php echo $rank[$i][5]?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </main>
    <footer id="footer" class="footer"></footer>
    <?php mysqli_close($dbcon);?>
</body>
</html>