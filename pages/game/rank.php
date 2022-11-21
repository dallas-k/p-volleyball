<?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";
function arr_sort($array, $key, $sort='asc') //정렬대상 array, 정렬 기준 key, 오름/내림차순
    {   
        $keys = array();
        $vals = array();
        foreach ($array as $k=>$v)
            {
                $i = $v[$key].'.'.$k;
                $vals[$i] = $v;
                array_push($keys, $k);
            }
        unset($array);
         if ($sort=='asc') {
            ksort($vals);
        } else {
            krsort($vals);
        }
        $ret = array_combine($keys, $vals);
        unset($keys);
        unset($vals);
        return $ret;
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/rank.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $("#header").load("/volleyball/common/header.php");
            $("#footer").load("/volleyball/common/footer.html");
            $("#page-main").load("/volleyball/common/page-main.html");
        });
    </script>
</head>
<body>
    <header id="header" class="header"></header>
    <main class="main" id="main" onmouseover="menuOut()">
        <div id="page-main"></div>
        <div class="title">
            <h2>GAME</h2>
        </div>
        <div class="menu_tab_square">
            <div class="menu_tab_box">
                <section class="menu_tab">
                    <div class='box_blank'></div>
                    <h3><a href="/volleyball/index.php">첫화면</a></h3>
                    <ul class="menu_box" id="box1">
                    <li>GAME</li>
                        <div class="not_selected">
                            <li><a href="/volleyball/pages/club/history.html">CLUB</a></li>
                            <li><a href="/volleyball/pages/team/player.html">TEAM</a></li>
                            <li><a href="/volleyball/pages/game/calendar.php">GAME</a></li>
                            <li><a href="/volleyball/pages/news/news.php">NEWS</a></li>
                            <li><a href="/volleyball/pages/fan/qna.php">FAN</a></li>
                        </div>
                    </ul>
                    <ul class="menu_box" id="box2">
                        <li>팀 종합순위</li>
                        <div class="not_selected">
                            <li><a href="/volleyball/pages/news/calendar.php">경기일정, 결과</a></li>
                            <li><a href="/volleyball/pages/news/noticement.html">경기기록실</a></li>
                            <li><a href="/volleyball/pages/news/rank.php">팀 종합순위</a></li>
                            <li><a href="/volleyball/pages/news/noticement.html">티켓예매</a></li>
                        </div>
                    </ul>
                </section>
            </div>
        </div>

        <div class="query">
            <h3>팀 종합순위</h3>
        </div>
        <div class="table_box">
            <table>
                <tr>
                    <th class='table_header' id='header1'>순위</th>
                    <th class='table_header' id='header2'>팀명</th>
                    <th class='table_header' id='header3'>경기수</th>
                    <th class='table_header' id='header4'>승</th>
                    <th class='table_header' id='header5'>패</th>
                    <th class='table_header' id='header6'>승점</th>
                </tr>

                <?php
                $sql_daehan = "SELECT '대한항공', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM daehan_result;";
                $sql_hanjun = "SELECT '한국전력', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM hanjun_result;";
                $sql_hyundai = "SELECT '현대캐피탈', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM hyundai_result;";
                $sql_kb = "SELECT 'KB손해보험', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM kb_result;";
                $sql_ok = "SELECT 'OK금융그룹', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM ok_result;";
                $sql_samsung = "SELECT '삼성화재', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM samsung_result;";
                $sql_woori = "SELECT '우리카드', SUM(win), SUM(lose), SUM(my_set), SUM(enemy_set), SUM(point) FROM woori_result;";
                
                $points = array(
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                    array('team' => "", 'win' => 0, 'lose' => 0, 'my_set' => 0, 'enemy_set' => 0, "point" => 0),
                );
                $sql_array = [$sql_daehan, $sql_hanjun, $sql_hyundai, $sql_kb, $sql_ok, $sql_samsung, $sql_woori];

                for($i = 0; $i < count($sql_array); $i++){
                    $sum = mysqli_query($dbcon, $sql_array[$i]);
                    $fetch = mysqli_fetch_row($sum);
                    for($k = 0; $k < 6; $k++){
                        $points[$i][$k] = $fetch[$k];
                    }
                }
                $points_desc = arr_sort($points, 'team', 'desc');
                print_r($points_desc);
                ?>
                <tr>
                    <td><?php echo $j."위"?></td>
                    <td></td>
                    <td>경기수</td>
                    <td>승</td>
                    <td>패</td>
                    <td>승점</td>
                </tr>
            </table>
        </div>
    </main>
    <footer id="footer" class="footer"></footer>
    <?php mysqli_close($dbcon);?>
    <footer id="footer" class="footer"></footer>
</body>
</html>