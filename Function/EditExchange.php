<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);


$strSQL = " update  $database.exchange  "
        . " set silver = '" . $_POST['silver'] . "' , "
        . " gold = '" . $_POST['gold'] . "'";

try {
    mysql_query($strSQL);
    $_SESSION["EXCHANGE_UPDATE"] = "Y";
    header("location:/Control/exchange.php");
} catch (Exception $ex) {
    $_SESSION["EXCHANGE_UPDATE"] = "N";
    header("location:/Control/exchange.php");
}
