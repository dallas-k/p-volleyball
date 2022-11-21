<?php
include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";

$sql = "SELECT * FROM board ORDER BY idx DESC;";
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);

// 한 페이지당 보여질 목록 수
$article_per_page = 5;

// 한 블럭 당 페이지 수
$page_per_block = 10;

// 현재 페이지
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// 전체 페이지 수
$total_page = ceil($num / $article_per_page);

// 전체 블럭 수
$total_block = ceil($num / $page_per_block);

// 현재 블럭 번호
$now_block = ceil($page / $page_per_block);

// 블럭 시작, 끝 번호
$b_start_num = ($now_block - 1) * $page_per_block + 1;
if($b_start_num <= 1) {$b_start_num = 1;}
$b_end_num = $now_block * $page_per_block;
if($b_end_num > $total_page) {$b_end_num = $total_page;}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/volleyball/css/reset.css">
    <link rel="stylesheet" href="/volleyball/css/qna_style.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $("#header").load("/volleyball/common/header.php");
            $("#footer").load("/volleyball/common/footer.html");
            $("#page-main").load("/volleyball/common/page-main.html");
            $('.menu_box').click(function(){
                $(this).find(".not_selected").slideToggle();
            })
        });
    </script>
</head>
<body>
    <div class="wrap">
        <header id="header" class="header"></header>

        <main class="main" id="main" onmouseover="menuOut()">
            <div id="page-main"></div>
            <div class="title">
                <h2>FAN</h2>
            </div>
            <div class="query">
                <h3>구단 문의사항</h3>
            </div>

            <div class="search_bar_box">
                <div class="search_bar">
                    <select name="selection" id="selection" onchange="ChangeOption()">
                        <option value="all">모두</option>
                        <option value="title">제목</option>
                        <option value="title_content">제목 + 내용</option>
                        <option value="u_name">작성자</option>
                    </select>
                    <input type="text" id="specific">
                    <button type="button" onclick="searchSpecific()">찾기</button>
                </div>
            </div>

            <section class="table_box">
                <table class="table">
                    <tr class="table_th">
                        <th>number</th>
                        <th>title</th>
                        <th>writer</th>
                        <th>date</th>
                        <th>click</th>
                    </tr>

                    <?php
                    $start = ($page - 1) * $article_per_page;

                    $sql = "SELECT * FROM board ORDER BY idx DESC LIMIT $start, $article_per_page;";

                    $result = mysqli_query($dbcon, $sql);
                    $i = $num - (($page - 1) * $article_per_page);
                    while($array = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><a href="board/article.php?idx=<?php echo $array['idx']?>"><?php echo $array["title"]; ?></a></td>
                        <td><?php echo $array["u_name"]; ?></td>
                        <td><?php echo substr($array["sign_date"],0,10); ?></td>
                        <td><?php echo $array["click"]; ?></td>
                    </tr>
                    <?php $i--;} ?>
                </table>

                <a class="write_button" href="board/qna_write.php"><button type="button">글쓰기</button></a>
            </section>

            <div class="page_move_box">
                <section class="page_move">
                    <?php if($page <= 1) {;?>
                    <a href="qna.php?page=1">이전</a>
                    <?php } else {;?>
                    <a href="qna.php?page=<?php echo ($page-1);?>">이전</a>
                    <?php }; ?>

                    <?php for($print_page = $b_start_num; $print_page <= $b_end_num; $print_page++){;?>
                    <a href="qna.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
                    <?php };?>
                    <?php if($page >= $total_page) {;?>
                    <a href="qna.php?page=<?php echo $total_page;?>">다음</a>
                    <?php } else {;?>
                    <a href="qna.php?page=<?php echo ($page + 1);?>">다음</a>
                    <?php }; ?>

                </section>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
    </div>
    <script>
        function ChangeOption(){
            let selection = document.getElementById("selection");
            let option_value = selection.options[selection.selectedIndex].value;
        }
        function searchSpecific(){
            let specific = document.getElementById("specific");
            if(!specific.value) {
                alert('내용을 입력해주세요');
            };
        }
    </script>
</body>
</html>