<?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/session.php";?>

<style>
    /* ----------- Header --------------------*/

    /* title */
    .header {
        border-top:1px solid white;
        background-color:white;
        position: relative;
        height: 175px;
    }

    .title_bar {
        background-color:red;
        width:1200px;
        margin:auto;
    }

    .logo_color {
        width: 75px;
        height: 75px;
        margin: auto;
    }
    .logo_color a {
        display:block;
        width: 75px;
        height: 75px;
        background: no-repeat url(/volleyball/images/logo_color.png);
        background-size:115%;
        text-indent:-9999px;
    }

    /* menu bar bg */

    .white_menu{
        width: 1200px;
        height: 60px;
        margin: 0 auto;
        background: white;
        position:relative;
    }

    /* menu bar title */

    .menu_title {
        width:100%;
        height:60px;
    }

    .menu_title > li {
        width: 100px;
        height: 60px;
        float: left;
        margin-right: 30px;
        cursor: pointer;
    }

    .menu_title li > a {
        display:block;
        width: 100px;
        height: 60px;
        text-indent:-9999px;
    }

    #menu_club > a {background: no-repeat url(/volleyball/images/menu_01.jpg);}
    #menu_team > a {background: no-repeat url(/volleyball/images/menu_02.jpg);}
    #menu_game > a {background: no-repeat url(/volleyball/images/menu_03.jpg);}
    #menu_news > a {background: no-repeat url(/volleyball/images/menu_04.jpg);}
    #menu_fan > a {background: no-repeat url(/volleyball/images/menu_05.jpg);}

    /* menu bar under */

    .specific_outer {
        width:1200px;
        background-color: white;
        height:40px;
        position:relative;
        margin: auto;
        overflow: hidden;
    }

    .specific_bg {
        width:800px;
        position: absolute;
        left:-20px;
        height:40px;
        background: red;
        float:left;
    }

    .specific_bg_right {
        width:500px;
        background:black;
        position: absolute;
        right:-20px;
        height:40px;
        transform:skewx(-45deg);
    }

    .menu_specific {
        display: none;
        width: 1200px;
        height:40px;
        z-index:99;
    }

    .menu_specific li {
        display: block;
        float: left;
        width:112px;
        height:32px;
        font-size:16px;
        box-sizing: border-box;
        padding-top:8px;
        text-align: center;
        cursor: pointer;
        margin-right:8px;
    }
    .menu_specific li:first-child {
        margin-left:60px;
    }
    .menu_specific li a {
        color: white;
    }


    /* User menu */

    .user_menu_outerBox {
        width:1200px;
        margin:auto;
        position:relative;
    }

    .user_menu_innerBox{
        width:440px;
        margin:auto;
        position:absolute;
        height:30px;
        top:-84px;
        right:16px;
    }
    .user_menu_innerBox ul {
        position: relative;
    }
    
    .usermenu {
        float:left;
        margin-left:-6px;
        margin-top: 6px;
    }
    
    .usermenu a{
        display:block;
        width: 112px;
        height: 24px;
        text-indent:-9999px;
        cursor: pointer;
    }
    #user_qna{background: no-repeat url(/volleyball/images/usermenu_faq.jpg);}

    <?php if(!$s_idx) { ?>
    #user_login{background: no-repeat url(/volleyball/images/usermenu_login.jpg);}
    #user_signup{background: no-repeat url(/volleyball/images/usermenu_signup.jpg);}

    <?php } else { ?>
    .loginmenu {
        float:left;
        margin-left:-6px;
        margin-top: 6px;
    }
    .loginmenu span{
        font-size:20px;
        line-height: 0.9;
        margin-right:24px;
        font-weight:bold;
    }
    .loginmenu a{
        display:block;
        height: 24px;
        font-size:16px;
        margin-right:20px;
        cursor: pointer;
    }
    <?php } ?>
    
    .top_ico {
        float:left;
        margin-left: 20px;
        position:absolute;
    }
    .top_ico a{
        display:block;
        width: 30px;
        height: 30px;
        text-indent:-9999px;
        cursor: pointer;
    }

    #ico_facebook{
        right:32px;
        background: no-repeat url(/volleyball/images/ico_facebook.jpg);
    }
    #ico_naver{
        right:-8px;
        background: no-repeat url(/volleyball/images/ico_naver.jpg);
    }
</style>



<div class='title_bar'>
    <h1 class='logo_color'>
        <a href='/volleyball/index.php'>한국전력 배구단</a>
    </h1>
</div>

<nav class='gnb' id='gnb'>
    <h2 class='screen_out'>주요메뉴</h2>
    <div class='white_menu'>
        <ul class='menu_title'>
            <li id='menu_club'><a onmouseover='menuOn("menu_club_list")'>클럽 소개</a></li>
            <li id='menu_team'><a onmouseover='menuOn("menu_team_list")'>팀 소개</a></li>
            <li id='menu_game'><a onmouseover='menuOn("menu_game_list")'>경기</a></li>
            <li id='menu_news'><a onmouseover='menuOn("menu_news_list")'>뉴스</a></li>
            <li id='menu_fan'><a onmouseover='menuOn("menu_fan_list")'>팬</a></li>
        </ul>
    </div>
    <h2 class='screen_out'>세부메뉴</h2>
    <div class='specific_outer'>
        <div class='specific_bg'>
            <ul class='menu_specific' id='menu_club_list'>
                <li><a href="/volleyball/pages/club/history.html">구단연혁</a></li>
                <li><a href="/volleyball/pages/club/emblem.html">TI&엠블램</a></li>
                <li><a href="/volleyball/pages/club/organization.html">조직도</a></li>
                <li><a href="/volleyball/pages/club/stadium.html">홈코트</a></li>
                <li><a href="/volleyball/pages/club/sponsor.html">스폰서</a></li>
            </ul>
        
            <ul class='menu_specific' id='menu_team_list'>
                <li><a href="/volleyball/pages/team/player.html">선수</a></li>
                <li><a href="/volleyball/pages/team/coach.html">코칭스텝</a></li>
                <li><a href="/volleyball/pages/team/cheerleader.html">응원단</a></li>
            </ul>

            <ul class='menu_specific' id='menu_game_list'>
                <li><a href="/volleyball/pages/game/calendar.php">경기일정, 결과</a></li>
                <li><a href="/volleyball/pages/game/result.html">경기기록실</a></li>
                <li><a href="/volleyball/pages/game/rank.html">팀종합순위</a></li>
                <li><a href="/volleyball/pages/game/reservation.html">티켓예매</a></li>
            </ul>

            <ul class='menu_specific' id='menu_news_list'>
                <li><a href="/volleyball/pages/news/news.php">뉴스</a></li>
                <li><a href="/volleyball/pages/news/noticement.html">공지사항</a></li>
            </ul>

            <ul class='menu_specific' id='menu_fan_list'>
                <li><a href="/volleyball/pages/fan/gallery.html">포토갤러리</a></li>
                <li><a href="/volleyball/pages/fan/song.html">응원가</a></li>
                <li><a href="/volleyball/pages/fan/event.html">이벤트</a></li>
                <li><a href="/volleyball/pages/fan/qna.php">구단 문의사항</a></li>
            </ul>
        
        </div>
        <div class='specific_bg_right'></div>
    </div>    
</nav>

<div class='user_menu_outerBox'>
    <div class='user_menu_innerBox'>
        <h2 class='screen_out'>사용자 메뉴</h2>
        <ul>
            <li class='usermenu' id='user_qna'><a href="/volleyball/pages/fan/qna.php">문의사항</a></li>
            <?php if(!$s_idx) {?>
            <li class='usermenu' id='user_login'><a onclick='openLogin()'>로그인</a></li>
            <li class='usermenu' id='user_signup'><a onclick="openSignup()">회원가입</a></li>
            <?php } else {?>
            <li class='loginmenu' id='myname'><span><?php echo '\''.$s_name.'\''."님";?></span></li>
            <li class='loginmenu' id='mypage'><a onclick="myPage()">마이페이지</a></li>
            <li class='loginmenu' id='logout'><a onclick="logout()">로그아웃</a></li>
            <?php } ?>
            <li class='top_ico' id='ico_facebook'><a>페이스북</a></li>
            <li class='top_ico' id='ico_naver'><a>네이버</a></li>
        </ul>
    </div>
</div>
<script>
    // Menu, 세부메뉴
    function menuOn(menuList){
        let i, target;
        target = document.getElementsByClassName('menu_specific');
        for (i = 0; i < target.length; i++){
            target[i].style.display = 'none';
        }
        document.getElementById(menuList).style.display = 'block';
    }
    function menuOut(){
        let i, target;
        target = document.getElementsByClassName('menu_specific')
        for (i = 0; i < target.length; i++){
            target[i].style.display = 'none';
        }
    } 

    // UserMenu //
    function openLogin() {
        window.open('/volleyball/member/login/loginForm.html','loginPopup', 'width=640, height=520, left=200, top=50')
    }
    function openSignup() {
        window.open('/volleyball/member/signup/signup.html','signupPopup', 'width=640, height=520, left=200, top=50')
    }
    function myPage() {
        window.open('/volleyball/member/login/mypage.php','Mypage', 'width=640, height=520, left=200, top=50')
    }
    function logout() {
        window.open("/volleyball/member/login/logout.php")
    }
</script>