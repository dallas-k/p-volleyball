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