<?php

include $_SERVER['DOCUMENT_ROOT'].'/volleyball/admin/inc/connect.php';

$idx = $_POST["idx"];
$value = $_POST["admin_answer"];

$sql = "UPDATE board SET answer = '$value' WHERE idx = $idx;";
mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "<script>
alert('답변이 등록되었습니다');
window.close();
location.href = '/volleyball/admin/pages/qna.php';
opener.location.reload();
</script>"
?>