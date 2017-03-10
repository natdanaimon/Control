<?php

session_start();
include '../ConnectDB/DB.php';

$_SESSION["TYPE_DELETE_URL"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);

$strSQL = "delete from weburl  where id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
if ($objQuery) {
    $_SESSION["TYPE_DELETE_URL"] = "Y";
}

//echo $strSQL;
//header("location:/Control/user.php");
header("location:../weburl.php");
