<?php

session_start();
include '../ConnectDB/DB.php';

$_SESSION["LEAGUE_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
$path = "../img/league/" . $_GET['img'];

$strSQL = "delete from league  where id=" . $_GET['id'];



if (unlink($path)) {
    $objQuery = mysql_query($strSQL);
    $_SESSION["LEAGUE_DELETE"] = "Y";
} 





//echo $strSQL;
//header("location:/Control/user.php");
header("location:../league.php");
