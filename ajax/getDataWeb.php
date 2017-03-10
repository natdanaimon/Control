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
$strSQL = "SELECT * FROM web WHERE i_id = $id";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {

    $_id = $objResult["i_id"];
    $_name = $objResult["s_name"];
    $_status = $objResult["s_status"];




    $strResult = $_id . ","
            . $_name . ","
            . $_status;
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>