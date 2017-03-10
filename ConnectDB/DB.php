<?php
date_default_timezone_set('Asia/Bangkok');
$dateNow = date('Y-m-d H:i:s'); //Returns IST 
//$hostname = "127.0.0.1";
//$username = "root";
//$password = "";
//$database = "Control";
$hostname = "localhost";
$username = "admin_root";
$password = "tXOvOfTT1O";
$database = "admin_control";

//DO NOT EDIT BELOW THIS LINE 
//mysql_connect($hostname, $username, $password, $database);
@mysql_connect($hostname, $username, $password);
mysql_select_db($database);
mysql_db_query($database,"SET NAMES UTF8"); 
mysql_query("SET character_set_results=UTF8");
mysql_query("SET character_set_client=UTF8");
mysql_query("SET character_set_connection=UTF8");
?>