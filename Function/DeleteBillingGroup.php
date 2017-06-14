<?php

session_start();
include '../ConnectDB/DB.php';
$_SESSION["BILLS_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
$_GET[s_bill_group];
$strSQLH = "delete from bill  where s_bill_group = '$_GET[s_bill_group]' ";
$objQueryH = mysql_query($strSQLH);

$strSQLD = "delete from bill_detail  where s_bill_group = '$_GET[s_bill_group]' ";
$objQueryD = mysql_query($strSQLD);

$_SESSION["BILLS_DELETE"] = "Y";
//echo $strSQL;
//header("location:/Control/user.php");
header("location:../create_bill_search.php");
