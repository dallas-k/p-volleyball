<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>한국전력 배구단</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/index_style.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $("#header").load("/volleyball/common/header.php");
            $("#footer").load("/volleyball/common/footer.html");
        });
    </script>
</head>
<body>
    <div class="wrap">
        <header id="header" class="header"></header>

        <main class="main" id="main" onmouseover="menuOut()">
            <div class="banner">
                <img class="banner_image" src="images/banner_image.jpg" alt="">

                <section class="next_match">
                    <h2 class="screen_out">다음 경기 안내</h2>
                    <p class="match_day"><span class="screen_out">경기일</span> 2022.09.15</p>
                    <p class="match_location"><span class="screen_out">경기장소</span> 수원실내체육관</p>
                    <p><span class="match_hanjun">한국전력</span> <span class="versus">대</span> <span class="match_woori">우리카드</span></p>
                    <a href="#" class="reserve_ticket">티켓 예매하기</a>
                </section>
            </div>


            <section class="player_background">
                
                <h2 class="screen_out">선수소개</h2>

                <h3 class="position" id="plyLeft" onclick="choosePosition('left_players',this)">레프트</h3>
                <ul class="player_list" id="left_players">
                    <li onclick="loadData('seo1')">서재덕</li>
                    <li onclick="loadData('lim14')">임성진</li>
                    <li onclick="loadData('gong13')">공재학</li>
                    <li onclick="loadData('lee7')">이시몬(군입대)</li>
                    <li onclick="loadData('kang9')">강우석</li>
                    <li class="sixth_player" onclick="loadData('ta4')">타이스 덜 호스트</li>
                </ul>

                <h3 class="position" id="plyCenter" onclick="choosePosition('center_players',this)">센터</h3>
                <ul class="player_list"  id="center_players">
                    <li onclick="loadData('shin20')">신영석</li>
                    <li onclick="loadData('park18')">박지윤</li> 
                    <li onclick="loadData('park17')">박찬웅</li>
                    <li onclick="loadData('cho11')">조근호</li>
                    <li onclick="loadData('park19')">박태환</li>
                </ul>

                <h3 class="position" id="plyRight" onclick="choosePosition('right_players',this)">라이트</h3>
                <ul class="player_list" id="right_players">
                    <li onclick="loadData('park3')">박철우</li>
                    <li onclick="loadData('lee10')">이태호(군입대)</li>
                    <li onclick="loadData('kim16')">김동영(군입대)</li>
                </ul>

                <h3 class="position" id="plySetter" onclick="choosePosition('setter_players',this)">세터</h3>
                <ul class="player_list"  id="setter_players">
                    <li onclick="loadData('kim15')">김광국</li>
                    <li onclick="loadData('lee2')">이민욱</li>
                </ul>

                <h3 class="position" id="plyLibero" onclick="choosePosition('libero_players',this)">리베로</h3>
                <ul class="player_list" id="libero_players">
                    <li onclick="loadData('kum4')">금태용(군입대)</li>
                    <li onclick="loadData('kim8')">김강녕</li>
                    <li onclick="loadData('lee12')">이지석</li>
                </ul>

                <div class="ply_desc" id="ply_desc_seo1">
                    <dl>
                        <dt id="ply_desc_name">서재덕</dt>
                        <dd id="ply_desc_position">레프트</dd>
                        <dd id="ply_desc_birth">1989년 7월 21일</dd>
                        <dd id="ply_desc_body">194cm / 94kg</dd>
                        <dd id="ply_desc_reg">2011년</dd>
                        <dd id="ply_desc_school">문흥중-전자공고-성균관대</dd>
                        <dd><img src="" alt=""></dd>
                    </dl>
                </div>

            </section>

            <div class="team_rank">            
                <!-- <section>
                    <h2 class="screen_out">다음 경기 안내</h2>
                    <p>경기일 2022.09.15
                    경기장소 수원실내체육관
                    한국전력 대 우리카드</p>
                    <a>티켓 예매하기</a>
                </section> -->
                
                <section class="rank_table">
                    <h3 class="screen_out">팀 순위</h3>

                    <table>
                        <caption>현재 순위 4위</caption>

                        <tr class="table_th">
                            <th>순위</th>
                            <th>팀명</th>
                            <th>경기수</th>
                            <th>승</th>
                            <th>패</th>
                            <th>승점</th>
                        </tr>

                        <tr>
                            <td>1위</td>
                            <td>대한항공</td>
                            <td>36경기</td>
                            <td>24승</td>
                            <td>12패</td>
                            <td>70점</td>
                        </tr>
                        <tr>
                            <td>2위</td>
                            <td>KB손해보험</td>
                            <td>36경기</td>
                            <td>19승</td>
                            <td>17패</td>
                            <td>70점</td>
                        </tr>
                        <tr>
                            <td>3위</td>
                            <td>우리카드</td>
                            <td>36경기</td>
                            <td>17승</td>
                            <td>19패</td>
                            <td>59점</td>
                        </tr>
                        <tr class="table_myteam">
                            <td>4위</td>
                            <td>한국전력</td>
                            <td>36경기</td>
                            <td>20승</td>
                            <td>16패</td>
                            <td>56점</td>
                        </tr>
                    </table>

                    <a class="table_more" href="/volleyball/pages/game/rank.html">더보기</a>
                </section>
            </div>
            
            <div class="content3">
                <section class="content3_event">
                    <h2>이벤트</h2>
                    <ul>
                        <li>현재 진행중인 이벤트가 없습니다</li>
                        <li>한국전력 배구단 팬 감사대축제</li>
                        <li>빅스톰과 함께하는 크리스마스 경기 이벤트</li>
                    </ul>
                    <a class="more" href="/volleyball/pages/fan/event.html">이벤트 더 보기</a>
                </section>

                <section class="content3_news">
                    <?php
                    $sql = "SELECT * FROM news ORDER BY idx DESC LIMIT 0, 3;";
                    $result = mysqli_query($dbcon, $sql);
                    ?>
                    <h2>뉴스</h2>
                    <ul>
                        <?php while($array = mysqli_fetch_array($result)) { ?>
                        <li><a href="/volleyball/pages/news/news/news_view.php?idx=<?php echo $array["idx"];?>"><?php echo mb_strimwidth($array["n_title"],0,48,"...","utf-8");?></a></li>
                        <?php } ?>
                    </ul>
                    <a class="more" href="/volleyball/pages/news/news.php">뉴스 더보기</a>
                </section>
            </div>
                
            <div class="aside_box">
                <div class="aside_content">
                <h2 class="screen_out">바로가기</h2>
                    <ul>    
                        <li id="side_ticket" class="side_menu"><a href="/volleyball/pages/game/reservation.html">티켓예매</a></li>
                        <li id="side_qna" class="side_menu"><a href="/volleyball/pages/fan/qna.php">질의게시판</a></li>
                        <li id="side_location" class="side_menu"><a href="/volleyball/pages/club/stadium.html">위치 정보</a></li>
                        <li id="side_calendar" class="side_menu"><a href="/volleyball/pages/game/calendar.html">경기 일정</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="sponsor">
                <h2 class="screen_out">스폰서</h2>
                <dl>
                    <div class="sponsor01">
                        <dt class="red_yellow_bar">후원사</dt>
                            <div class="sponsor_container01">
                                <dd id="spon_01" class="spon_img"><a href="#" >수원특례시</a></dd>
                                <dd id="spon_02" class="spon_img"><a href="#" >아식스</a></dd>
                                <dd id="spon_03" class="spon_img"><a href="#" >도드람양돈농협</a></dd>
                        </div>
                    </div>

                    <div class="sponsor02">
                        <dt class="red_yellow_bar">협찬사</dt>
                            <div class="sponsor_container02">
                                <dd id="spon_04" class="spon_img"><a href="#">한국수력원자력</a></dd>
                                <dd id="spon_05" class="spon_img"><a href="#">한국전력기술</a></dd>
                                <dd id="spon_06" class="spon_img"><a href="#">한전KPS</a></dd>
                                <dd id="spon_07" class="spon_img"><a href="#">한전KDN</a></dd>
                                <dd id="spon_08" class="spon_img"><a href="#">한국원자력연료</a></dd>
                                <dd id="spon_09" class="spon_img"><a href="#">한국서부발전</a></dd>
                                <dd id="spon_10" class="spon_img"><a href="#">안국약품(주)</a></dd>
                                <dd id="spon_11" class="spon_img"><a href="#">웰컴저축은행</a></dd>
                                <dd id="spon_12" class="spon_img"><a href="#">일화</a></dd>
                                <dd id="spon_13" class="spon_img"><a href="#">루바스바이오</a></dd>
                                <dd id="spon_14" class="spon_img"><a href="#">리더스코스메틱</a></dd>
                                <dd id="spon_15" class="spon_img"><a href="#">이즈치과</a></dd>
                                <dd id="spon_16" class="spon_img"><a href="#">온페이스</a></dd>
                            </div>
                    </div>

                    <div class="sponsor03">
                        <dt class="red_yellow_bar">MD쇼핑몰</dt>
                        <div class="sponsor_container03">
                            <dd id="spon_17" class="spon_img"><a href="#">코보마켓</a></dd>
                        </div>
                    </div>
                </dl>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
    </div>

    <script src="/volleyball/js/main.js"></script>
</body>
</html>