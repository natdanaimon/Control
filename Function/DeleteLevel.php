<?php

session_start();
include '../ConnectDB/DB.php';
$_SESSION["LEVEL_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);

$strSQL = "delete from level  where id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
$_SESSION["LEVEL_DELETE"] = "Y";
//echo $strSQL;
//header("location:/Control/user.php");
header("location:../level.php");
