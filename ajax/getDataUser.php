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
$strSQL = "SELECT * FROM $database.user WHERE id = $id";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {

    $_user = $objResult["user"];
    $_pass = $objResult["pass"];
    $_fname = $objResult["fname"];
    $_lname = $objResult["lname"];
    $_phone = $objResult["phone"];
    $_email = $objResult["email"];

    $_status = $objResult["status"];
    $_type = $objResult["type"];
    $_address = $objResult["address"];
    $_zipcode = $objResult["zipcode"];
    $_line = $objResult["line"];
    $_facebook = $objResult["facebook"];
    $_map_excel = $objResult["map_excel"];



    $strResult = $_user . ","
            . $_pass . ","
            . $_fname . ","
            . $_lname . ","
            . $_phone . ","
            . $_email . ","
            . $_status . ","
            . $_type . ","
            . $_address . ","
            . $_zipcode . ","
            . $_line . ","
            . $_facebook . ","
            . $_map_excel;
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>