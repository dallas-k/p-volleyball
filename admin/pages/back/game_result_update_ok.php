<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php";


$idx = isset($_GET["idx"]) ? $_GET["idx"] : "";
$h_score = isset($_GET["h_score"]) ? $_GET["h_score"] : "";
$a_score = isset($_GET["a_score"]) ? $_GET["a_score"] : "";
$sql = "UPDATE schedule SET home_score = $h_score, away_score = $a_score WHERE idx = $idx;";
mysqli_query($dbcon, $sql);

echo "<script>
    opener.location.reload();
    window.close();
</script>";
// mysqli_close($dbcon);
?>