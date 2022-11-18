<?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/volleyball/admin/style.css">
    <style>
        .table_
        .table_box .table_header #header1 {width:120px;}
        .table_box .table_header #header2 {width:80px;}
        .table_box .table_header #header3 {width:180px;}
        .table_box .table_header #header4 {width:180px;}
        .table_box .table_header #header5 {width:180px;}
        .table_box .table_header #header6 {width:180px;}
        .table_box .table_header #header7 {width:240px;}
        .table_box .table_header #header7 {width:120px;}
        table a {color: blue;}
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>관리자 페이지 입니다.</h1>
        </header>
        <main>
            <div class="container">
                <div class="menu_tab">
                    <?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/header.html"; ?>
                </div>
                <div class="editor">
                    <div class="table_box">
                        <table>
                            <tr>
                                <th class='table_header' id='header1'>날짜</th>
                                <th class='table_header' id='header2'>시간</th>
                                <th class='table_header' id='header3'>Home</th>
                                <th class='table_header' id='header4'>Away</th>
                                <th class='table_header' id='header5'>장소</th>
                                <th class='table_header' id='header6'>라운드</th>
                                <th class='table_header' id='header7'>스코어(홈:어웨이)</th>
                                <th class='table_header' id='header8'>입력</th>
                            </tr>

                            <?php
            $sql = "SELECT * FROM schedule;";
            $result = mysqli_query($dbcon, $sql);
            echo "<style>
                table tr td {text-align:center; padding:5px 10px; box-sizing:border-box;}
                </style>";
            $num = -1;
            while ($array = mysqli_fetch_array($result)) {
                $num++;
            ?>
                            <tr>
                                <td>
                                    <?php echo substr($array["game_date"], 0, 10); ?>
                                </td>
                                <td>
                                    <?php echo substr($array["game_date"], 11, 5); ?>
                                </td>
                                <td>
                                    <?php echo $array["home_team"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["away_team"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["stadium"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["round"] . "라운드" ?>
                                </td>
                                <td class="score_board">
                                    <?php echo $array["home_score"] === NULL ? "입력 전" : $array["home_score"] . " : " . $array["away_score"]; ?>
                                </td>
                                <td>
                                    <a class="score_update" onclick="updateResult(<?php echo $array['idx']; ?>)">[입력]</a>
                                </td>
                            </tr>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function updateResult(i) {
            let site = "/volleyball/admin/pages/game_result_update.php?idx=" + i;
            window.open(site, 'resultUpdate','width=480, height=320, left=200, top=50');
        }
    </script>
    <?php mysqli_close($dbcon); ?>
</body>
</html>
    
