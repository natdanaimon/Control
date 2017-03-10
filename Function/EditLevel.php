<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);

$strSQL = " update  $database.level  "
        . " set type = '" . $_POST['level_add'] . "' , "
        . " number = " . $_POST['icon_add'] . " ,"
        . " score_end = " . $_POST['score_end_add'] . " "
        . " where score_start= '" . $_POST['score_start_add'] . "'";

try {
    mysql_query($strSQL);
    $_SESSION["LEVEL_UPDATE"] = "Y";
    header("location:/Control/level.php");
} catch (Exception $ex) {
    $_SESSION["LEVEL_UPDATE"] = "N";
    header("location:/Control/level.php");
}
