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
    <link rel="stylesheet" href="admin_index.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>관리자 페이지</title>
    <script>
        $(function(){
        
        })
        function adminOpen(page){
            $(".editor").load(page)
        }
    </script>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>관리자 페이지 입니다.</h1>
        </header>
        <main>
            <div class="container">
                <div class="menu_tab">
                    <dl>
                        <div>
                            <dt>CLUB</dt>
                            <dd>구단연혁 <span><a>[이동]</a></span></dd>
                            <dd>TI&엠블램 <span><a>[이동]</a></span></dd>
                            <dd>조직도 <span><a>[이동]</a></span></dd>
                            <dd>홈코트 <span><a>[이동]</a></span></dd>
                            <dd>스폰서 <span><a>[이동]</a></span></dd>
                        </div>
                        <div>
                            <dt>TEAM</dt>
                            <dd>선수 <span><a>[이동]</a></span></dd>
                            <dd>코칭스텝 <span><a>[이동]</a></span></dd>
                            <dd>응원단 <span><a>[이동]</a></span></dd>
                        </div>
                        <div>
                            <dt>GAME</dt>
                            <dd onclick="adminOpen('pages/game_result.php')">경기결과 입력</dd>
                            <dd>경기기록실 <span><a>[이동]</a></span></dd>
                            <dd>팀종합순위 <span><a>[이동]</a></span></dd>
                            <dd>티켓예매 <span><a>[이동]</a></span></dd>
                        </div>
                        <div>
                            <dt>FAN</dt>
                            <dd>포토갤러리 <span><a>[이동]</a></span></dd>
                            <dd>응원가 <span><a>[이동]</a></span></dd>
                            <dd>이벤트 <span><a>[이동]</a></span></dd>
                            <dd>구단 문의사항 <span><a>[이동]</a></span></dd>
                        </div>
                        <div>
                            <dt>NEWS</dt>
                            <dd>VIXTORM 뉴스 <span><a>[이동]</a></span></dd>
                            <dd>공지사항 <span><a>[이동]</a></span></dd>
                        </div>
                    </dl>
                </div>
                <div class="editor">

                </div>
            </div>
        </main>
    </div>
</body>
</html>