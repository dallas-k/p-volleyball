<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php";

// Data get
$idx = isset($_POST["idx"]) ? $_POST["idx"] : "";
$h_score = isset($_POST["h_score"]) ? $_POST["h_score"] : "";
$a_score = isset($_POST["a_score"]) ? $_POST["a_score"] : "";
$date = substr($_POST["date"],0,10);
$home_team = $_POST["home_team"];
$away_team = $_POST["away_team"];
$home_db = $_POST["home_team"];
switch($home_db){
    case "대한항공":
        $home_db = 'daehan_result';
        break;
    case "KB손해보험":
        $home_db = 'kb_result';
        break;
    case "한국전력":
        $home_db = 'hanjun_result';
        break;
    case "삼성화재":
        $home_db = 'samsung_result';
        break;
    case "OK금융그룹":
        $home_db = 'ok_result';
        break;
    case "우리카드":
        $home_db = 'woori_result';
        break;
    case "현대캐피탈":
        $home_db = 'hyundai_result';
        break;
}
$away_db = $_POST["away_team"];
switch($away_db){
    case "대한항공":
        $away_db = 'daehan_result';
        break;
    case "KB손해보험":
        $away_db = 'kb_result';
        break;
    case "한국전력":
        $away_db = 'hanjun_result';
        break;
    case "삼성화재":
        $away_db = 'samsung_result';
        break;
    case "OK금융그룹":
        $away_db = 'ok_result';
        break;
    case "우리카드":
        $away_db = 'woori_result';
        break;
    case "현대캐피탈":
        $away_db = 'hyundai_result';
        break;
}

// 경기 결과 기록 (스케줄표)
$sql = "UPDATE schedule SET home_score = $h_score, away_score = $a_score WHERE idx = $idx;";
mysqli_query($dbcon, $sql);

// 팀 승점 기록 (home)
$home_sql = "SELECT * FROM $home_db WHERE day = '$date';";
$home_result = mysqli_query($dbcon, $home_sql);
$home_array = mysqli_fetch_array($home_result);
// INSERT
if(!$home_array){
    if($h_score > $a_score){
        $point = ($a_score == 2) ? 2 : 3;
        $sql = "INSERT INTO $home_db (enemy, day, win, lose, my_set, enemy_set, point) VALUES ('$away_team', '$date', 1, 0, $h_score, $a_score, $point);";
    } else {
        $point = ($h_score == 2) ? 1 : 0;
        $sql = "INSERT INTO $home_db (enemy, day, win, lose, my_set, enemy_set, point) VALUES ('$away_team', '$date', 0, 1, $h_score, $a_score, $point);";
    }
    mysqli_query($dbcon, $sql);
} else {
    if($h_score > $a_score){
        $point = ($a_score == 2) ? 2 : 3;
        $sql = "UPDATE $home_db SET enemy = '$away_team', win = 1, lose = 0, my_set = $h_score, enemy_set = $a_score, point = $point WHERE day = '$date';";
    } else {
        $point = ($h_score == 2) ? 1 : 0;
        $sql = "UPDATE $home_db SET enemy = '$away_team', win = 0, lose = 1, my_set = $h_score, enemy_set = $a_score, point = $point WHERE day = '$date';";
    }
    mysqli_query($dbcon, $sql);
}

// 팀 승점 기록 (away)
$away_sql = "SELECT * FROM $away_db WHERE day = '$date';";
$away_result = mysqli_query($dbcon, $away_sql);
$away_array = mysqli_fetch_array($away_result);
// INSERT
if(!$away_array){
    if($a_score > $h_score){
        $point = ($h_score == 2) ? 2 : 3;
        $sql = "INSERT INTO $away_db (enemy, day, win, lose, my_set, enemy_set, point) VALUES ('$home_team', '$date', 1, 0, $a_score, $h_score, $point);";
    } else {
        $point = ($a_score == 2) ? 1 : 0;
        $sql = "INSERT INTO $away_db (enemy, day, win, lose, my_set, enemy_set, point) VALUES ('$home_team', '$date', 0, 1, $a_score, $h_score, $point);";
    }
    mysqli_query($dbcon, $sql);
} else {
    if($a_score > $h_score){
        $point = ($h_score == 2) ? 2 : 3;
        $sql = "UPDATE $away_db SET enemy = '$home_team', win = 1, lose = 0, my_set = $a_score, enemy_set = $h_score, point = $point WHERE day = '$date';";
    } else {
        $point = ($a_score == 2) ? 1 : 0;
        $sql = "UPDATE $away_db SET enemy = '$home_team', win = 0, lose = 1, my_set = $a_score, enemy_set = $h_score, point = $point WHERE day = '$date';";
    }
    mysqli_query($dbcon, $sql);
}

echo "<script>
    opener.location.reload();
    window.close();
</script>";
mysqli_close($dbcon);
?>