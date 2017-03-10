<?php

session_start();
include '../ConnectDB/DB.php';
$_SESSION["BANK_DELETE"] = "N";

//
//$flgDelete = unlink("../assets/img/popup/" + $_GET['filename']);
//if (!$flgDelete) {
//    header("location:../webpopup.php");
//}

$strSQL = "delete from bank  where id=" . $_GET['id'];
$objQuery = mysql_query($strSQL);
$_SESSION["BANK_DELETE"] = "Y";
//echo $strSQL;
//header("location:/Control/user.php");
header("location:../bank.php");
