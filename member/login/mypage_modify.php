<?php

include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";

$u_name = $_POST["u_name"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];
$email_subscribe = $_POST["email_subscribe"];
$news_subscribe = $_POST["news_subscribe"];

if ($pwd) {
    $sql = "UPDATE members SET u_name = '$u_name', pwd = '$pwd', email = '$email', email_subscribe = '$email_subscribe', news_subscribe = '$news_subscribe' WHERE idx=$s_idx;";
} else {
    $sql = "UPDATE members SET u_name = '$u_name', email = '$email', email_subscribe = '$email_subscribe', news_subscribe = '$news_subscribe' WHERE idx=$s_idx;";
}

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "<script>
    alert('수정이 완료되었습니다');
    location.href = 'mypage.php';
</script>";

mysqli_close($dbcon);
?>