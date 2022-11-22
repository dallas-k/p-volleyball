<?php

session_start();

$s_id =  isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";
$s_idx =  isset($_SESSION["s_idx"])?  $_SESSION["s_idx"] : "";
$s_name =  isset($_SESSION["s_name"])? $_SESSION["s_name"] : "";

$rank = isset($_SESSION["rank"]) ? $_SESSION["rank"] : "";
$rank1 = isset($_SESSION["rank1"]) ? $_SESSION["rank1"] : "";
$rank2 = isset($_SESSION["rank2"]) ? $_SESSION["rank2"] : "";
$rank3 = isset($_SESSION["rank3"]) ? $_SESSION["rank3"] : "";
$rank4 = isset($_SESSION["rank4"]) ? $_SESSION["rank4"] : "";
$rank5 = isset($_SESSION["rank5"]) ? $_SESSION["rank5"] : "";
$rank6 = isset($_SESSION["rank6"]) ? $_SESSION["rank6"] : "";
$rank7 = isset($_SESSION["rank7"]) ? $_SESSION["rank7"] : "";

?>