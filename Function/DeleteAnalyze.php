<?php

session_start();
include '../ConnectDB/DB.php';

$_SESSION["ANALYZE_DELETE"] = "N";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);


$strSQL = "delete from $database.analyze  where id=" . $_GET['id'];

echo $strSQL;


$objQuery = mysql_query($strSQL);


if($objQuery){
    $_SESSION["ANALYZE_DELETE"] = "Y";
    
}







//echo $strSQL;
//header("location:/Control/user.php");
header("location:../analyze.php");
