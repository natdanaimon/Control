<?php

session_start();
include '../ConnectDB/DB.php';
$_SESSION["USERSUB_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);

$strSQL = "delete from sub_user   where id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
$_SESSION["USERSUB_DELETE"] = "Y";
//echo $strSQL;
//header("location:/Control/user.php");
header("location:../userSub.php?user=" . $_GET['user']);
