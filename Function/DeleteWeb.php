<?php

session_start();
include '../ConnectDB/DB.php';

$_SESSION["TYPE_DELETEWEB"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);

$strSQL = "delete from web  where i_id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
if ($objQuery) {
    $_SESSION["TYPE_DELETEWEB"] = "Y";
}

$strSQL = "delete from weburl where i_id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);


$strSQL = "delete from web2user where  i_id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);


//echo $strSQL;
//header("location:/Control/user.php");
header("location:../webgame.php");
