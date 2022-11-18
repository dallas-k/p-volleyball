<?php

if($s_id !== "admin"){
    echo "<script>
    alert('잘못된 접근입니다');
    location.href = '/volleyball/index.php';
    </script>";
};

?>