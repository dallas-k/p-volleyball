<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/admin_session.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/admin_logincheck.php";
?>

<dl>
    <div>
        <dt>회원관리</dt>
        <dd><a href="/volleyball/admin/pages/members.php">회원목록</a></span></dd>
    </div>
    <div>
        <dt>게시판</dt>
        <dd><a href="/volleyball/admin/pages/qna.php">구단 문의사항</a></dd>
    </div>
    <div>
        <dt>경기</dt>
        <dd><a href="/volleyball/admin/pages/game_schedule.php">경기결과 입력</a></dd>
    </div>
</dl>