<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php";
$idx = $_GET["idx"];
$sql = "SELECT * FROM schedule WHERE idx = $idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

$home_score = isset($array["home_score"]) ? $array["home_score"] : "";
$away_score = isset($array["away_score"]) ? $array["away_score"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            margin:40px auto 40px auto;
            width:250px;
            height:80px;
            text-align: center;
            position: relative;
        }
        .buttons {
            width:300px;
            margin:40px auto 0 auto;
            text-align: center;
        }
        .home {
            float: left;
        }
        .away {
            float: right;
        }
        input {
            width:100px;
        }
    </style>
</head>
<body>
    <form action="back/game_result_update_ok.php" method="POST">
        <input type="hidden" name="idx" value="<?php echo $idx;?>">
        <input type="hidden" name="home_team" value="<?php echo $array['home_team'];?>">
        <input type="hidden" name="away_team" value="<?php echo $array['away_team'];?>">
        <input type="hidden" name="date" value="<?php echo $array['game_date'];?>">
        <div class='container'>
            <div class='home'>
                <p>Home Team</p>
                <label for=""><?php echo $array["home_team"]?></label>
                <br>
                <input type="text" name="h_score" value ="<?php echo $home_score;?>">
            </div>
            <div class='away'>
                <p>Away Team</p>
                <label for=""><?php echo $array["away_team"]?></label>
                <br>
                <input type="text" name="a_score" value="<?php echo $away_score;?>">
            </div>
        </div>
        <div class='buttons'>
            <button type="submit">저장</button>
            <button type="button" onclick="closePop()">취소</button>
        </div>
    </form>
    <script>
        function closePop(){
            window.close();
        }
    </script>
</body>
</html>