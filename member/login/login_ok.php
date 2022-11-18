<?php

include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

$query = "SELECT * FROM members WHERE u_id = '$u_id';";

$result = mysqli_query($dbcon, $query);

$array = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);

if(!$num){
    echo "<script>
    alert('아이디를 찾을 수 없습니다.');
    location.href = 'loginForm.html';
    </script>
    ";
} else {
    if($pwd !== $array["pwd"]){
        echo "<script>
        alert('비밀번호가 일치하지 않습니다');
        location.href = 'loginForm.html';
        </script>";
    }

    else{
        session_start();
        $_SESSION["s_id"] = $array["u_id"];
        $_SESSION["s_idx"] = $array["idx"];
        $_SESSION["s_name"] = $array["u_name"];
        echo "<script>
        alert('로그인 되었습니다');
        </script>";
    }
}

if($_SESSION["s_id"]){
    echo "<script>
    window.close();
    opener.location.reload();
    </script>";
}

mysqli_close($dbcon);

?>