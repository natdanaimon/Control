<?php

session_start();
include '../ConnectDB/DB.php';
$_SESSION["POPUP_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
//
//$flgDelete = unlink("../assets/img/popup/" + $_GET['filename']);
//if (!$flgDelete) {
//    header("location:../webpopup.php");
//}

$strSQL = "delete from new_popup  where id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
$_SESSION["POPUP_DELETE"] = "Y";
//echo $strSQL;
//header("location:/Control/user.php");
header("location:../webpopup.php");
