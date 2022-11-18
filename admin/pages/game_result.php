<?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                while($array = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <?php echo substr($array["game_date"],0,10);?>
                </td>
                <td>
                    <?php echo substr($array["game_date"],11,5);?>
                </td>
                <td>
                    <?php echo $array["home_team"];?>
                </td>
                <td>
                    <?php echo $array["away_team"];?>
                </td>
                <td>
                    <?php echo $array["stadium"];?>
                </td>
                <td>
                    <?php echo $array["round"]."라운드"?>
                </td>
                <td>
                    <?php echo $array["home_score"] === NULL ? "입력 전" : $array["home_score"]." : ".$array["away_score"];?>
                </td>
                <td>
                    <a href='game_result_update.php'>[입력(수정)]</a>
                </td>
            </tr>
            <?php } ?>
    </div>
</body>
</html>
    
