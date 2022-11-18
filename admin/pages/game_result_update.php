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
</head>
<body>
    <form action="back/game_result_update_ok.php" method="GET">
        <input type="hidden" name="idx" value="<?php echo $idx;?>">
        <div class='home'>
            <label for=""><?php echo $array["home_team"]?></label>
            <input type="text" name="h_score" value = "<?php echo $home_score;?>">
        </div>
        <div class='away'>
            <label for=""><?php echo $array["away_team"]?></label>
            <input type="text" name="a_score" value=<?php echo $away_score;?>>
        </div>
        <button type="submit">저장</button>
        <button type="button" onclick="closePop()">취소</button>
    </form>
    <script>
        function closePop(){
            window.close();
        }
    </script>
</body>
</html>