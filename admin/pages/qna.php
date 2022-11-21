<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/volleyball/admin/style.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <style>
        #link {color: blue; cursor:pointer;}

        .table_box{
            position:relative;
            top:-80px;
        }
        .admin_answer{
            position:relative;
        }

        #header1 {width:300px;}
        #header2 {width:80px;}
        #header3 {width:180px;}
        #header4 {width:120px;}
        #header5 {width:120px;}
        table a {color: blue;}
        .hiddenToggle {display:none;}
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
                    <?php include $_SERVER["DOCUMENT_ROOT"]."/volleyball/admin/inc/header.php"; ?>
                </div>
                <div class="editor">
                    <div class="table_box">
                        <table>
                            <tr>
                                <th class='table_header' id='header1'>제목</th>
                                <th class='table_header' id='header2'>작성자</th>
                                <th class='table_header' id='header3'>날짜</th>
                                <th class='table_header' id='header4'>조회수</th>
                                <th class='table_header' id='header5'>답변</th>
                            </tr>

                            <?php
                            $sql = "SELECT * FROM board;";
                            $result = mysqli_query($dbcon, $sql);
                            echo "<style>
                                table tr td {text-align:center; padding:5px 10px; box-sizing:border-box;}
                                #title, #content {text-align:left;}
                                </style>";
                            $num = -1;
                            while ($array = mysqli_fetch_array($result)) {
                                $num++;
                            ?>
                            <tr>
                                <td class='title' id="title">
                                    <?php echo $array["title"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["u_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["sign_date"]; ?>
                                </td>
                                <td>
                                    <?php echo $array["click"]; ?>
                                </td>
                                <td class='answer' id='answer'>
                                    <?php if($array['answer'] === NULL){
                                        echo "<style>#answer {color:blue}</style>";
                                        echo "[답변하기]";
                                    } else {echo "---";}
                                    ?>
                                </td>
                            </tr>
                            <tr class='admin_answer'>
                                <div class='content hiddenToggle' id='content'>
                                    <p><?php echo $array["content"]; ?></p>
                                    <div>
                                        <label for="qna_answer">답변</label>
                                    </div>
                                    <div>
                                        <input type="text" name='qna_answer'>
                                    </div>
                                    <button>등록</button>
                                </div>
                            </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function updateResult(i) {
            let site = "/volleyball/admin/pages/game_result_update.php?idx=" + i;
            window.open(site, 'resultUpdate','width=480, height=320, left=200, top=50');
        }
        let title = document.querySelectorAll('.title');
        let content = document.querySelectorAll('.content');
        let answer = document.querySelectorAll('.answer');
        for(let i = 0; i < title.length; i++){
            title[i].addEventListener('click', function(){
            content[i].classList.toggle('hiddenToggle');
            })
            answer[i].addEventListener('click', function(){
            content[i].classList.toggle('hiddenToggle');
            })
        }
        
        
    </script>
    <?php mysqli_close($dbcon); ?>
</body>
</html>
    
