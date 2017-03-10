<?php
session_start();
include '../ConnectDB/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// get the q parameter from URL

$_email = $_REQUEST["email"];
//$id = 1;
// lookup all hints from array if $q is different from "" 
$strSQL = "SELECT * FROM $database.user WHERE email = '" . $_email . "'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {

    $strTo =  $objResult["email"];
    $strSubject = "Billing Forget Password  My Account (" . $objResult["user"] . ")";
    $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //
    $strHeader .= "From: Billing";
    $strMessage = "";
    $strMessage .= "แจ้งลืมรหัสผ่านของ USER ID : " . $objResult["user"] . "<br>";
    $strMessage .= "รหัสผ่านสำหรับใช้งาน WebSite : " . $objResult['pass'] . "<br>";
    $strMessage .= "=================================<br>";

    $flgSend = mail($strTo, $strSubject, $strMessage, $strHeader);
    $strResult = "true";
} else {
    $strResult = "false";
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>