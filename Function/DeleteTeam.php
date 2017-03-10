<?php

session_start();
include '../ConnectDB/DB.php';

$_SESSION["TEAM_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
$path = "../img/team/" . $_GET['img'];

$strSQL = "delete from team  where id=" . $_GET['id'];



if (unlink($path)) {
    $objQuery = mysql_query($strSQL);
    $_SESSION["TEAM_DELETE"] = "Y";
} 





//echo $strSQL;
//header("location:/Control/user.php");
header("location:../team.php");
