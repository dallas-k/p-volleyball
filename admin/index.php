<?php
include "inc/admin_session.php";
include "inc/admin_logincheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>관리자 페이지</title>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>관리자 페이지 입니다.</h1>
        </header>
        <main>
            <div class="container">
                <div class="menu_tab">
                    <?php include "inc/header.html"; ?>
                </div>
                <div class="editor">

                </div>
            </div>
        </main>
    </div>
</body>
</html>