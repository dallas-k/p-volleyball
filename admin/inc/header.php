<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/admin_session.php";
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/admin_logincheck.php";
?>

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
        <dd><a href="/volleyball/admin/pages/game_schedule.php">경기결과 입력</a></dd>
        <dd>경기기록실 <span><a>[이동]</a></span></dd>
        <dd>팀종합순위 <span><a>[이동]</a></span></dd>
        <dd>티켓예매 <span><a>[이동]</a></span></dd>
    </div>
    <div>
        <dt>FAN</dt>
        <dd>포토갤러리 <span><a>[이동]</a></span></dd>
        <dd>응원가 <span><a>[이동]</a></span></dd>
        <dd>이벤트 <span><a>[이동]</a></span></dd>
        <dd><a href="/volleyball/admin/pages/qna.php">구단 문의사항</a></dd>
    </div>
    <div>
        <dt>NEWS</dt>
        <dd>VIXTORM 뉴스 <span><a>[이동]</a></span></dd>
        <dd>공지사항 <span><a>[이동]</a></span></dd>
    </div>
</dl>