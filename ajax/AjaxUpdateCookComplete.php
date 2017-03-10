<?php

session_start();
include '../ConnectDB/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// get the q parameter from URL

$id = $_REQUEST["id"];
//$id = 1;
// lookup all hints from array if $q is different from "" 
$_SESSION["TYPE_COOK_COMPLETE"] = "N";


$strSQL = "UPDATE `$database`.`order` set `cook_name` = '". $_SESSION["useradmin"] . "' , `cook_time`=NOW()   WHERE `id` =" . $id;

//echo $strSQL;

mysql_query($strSQL);
$_SESSION["TYPE_COOK_COMPLETE"] = "Y";

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>