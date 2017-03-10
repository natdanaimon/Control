<?php

@session_start();
include '../ConnectDB/DB.php';
$_SESSION["LAN_TYPE"] = $_GET['lan'];
include '../Function/language.php';
header("location:../index.php");
?>