<?php

session_start();

unset($_SESSION["s_id"]);
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);

echo "<script>
    window.close();
    opener.location.reload();
</script>";

?>