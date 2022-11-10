<?php

include $_SERVER["DOCUMENT_ROOT"]."/volleyball/back/inc/connect.php";

// 데이터 가져오기
$u_name = $_POST["u_name"];

$qna_title = $_POST["qna_title"];
$qna_title = str_replace("'","\'",$qna_title);
$qna_title = str_replace('"','\"',$qna_title);

$qna_content = $_POST["qna_content"];
$qna_content = str_replace("'","\'",$qna_content);
$qna_content = str_replace('"','\"',$qna_content);

$sql = "INSERT INTO board (u_name, title, content) VALUES ('$u_name','$qna_title','$qna_content');";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "<script>
    alert('글을 등록했습니다');
    location.href = '../qna.php';
</script>"

?>