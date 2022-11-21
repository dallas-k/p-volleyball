<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>관리자 페이지</title>
    <style>
        #link {color: blue; cursor:pointer;}
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>관리자 페이지 입니다.</h1>
            <a id='link' href="/volleyball/admin/index.php">[관리자 홈]</a>
            <a id='link' href="/volleyball/index.php">[사용자 페이지]</a>
        </header>
        <main>
            <div class="container">
                <div class="menu_tab">
                    <?php include "inc/header.php"; ?>
                </div>
                <div class="editor">

                </div>
            </div>
        </main>
    </div>
</body>
</html>