<?php
include "../../back/inc/connect.php";

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];
$email_subscribe = $_POST["email_subscribe"];
$news_subscribe = $_POST["news_subscribe"];

$sql = "INSERT INTO members (u_name, u_id, pwd, email, email_subscribe, news_subscribe)
VALUES ('$u_name', '$u_id', '$pwd', '$email', '$email_subscribe', '$news_subscribe');";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script>
    alert('회원 가입이 완료되었습니다');
    location.href = \"../login/loginForm.html\"
    </script>
"
?>