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
//$id = 3;
// lookup all hints from array if $q is different from "" 
$strSQL = "SELECT  a.*  , b.name nameteam_1 , c.name nameteam_2 ";
$strSQL .= " FROM $database.analyze  a , $database.team b , $database.team c ";
$strSQL .= " WHERE a.id = $id ";
$strSQL .= " and a.team_1 = b.id ";
$strSQL .= " and a.team_2 = c.id ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {

    $_date = $objResult["date"]; //0
    $_time = $objResult["time"]; //1
    $_league = $objResult["league"]; //2
    $_team_1 = $objResult["team_1"]; //3
    $_team_msg_1 = $objResult["team_msg_1"]; //4
    $_team_2 = $objResult["team_2"]; //5
    $_team_msg_2 = $objResult["team_msg_2"]; //6
    $_price = $objResult["price"]; //7
    $_score = $objResult["score"]; //8
    $_detail = $objResult["detail"]; //9
    $_name1 = $objResult["nameteam_1"]; //10
    $_name2 = $objResult["nameteam_2"]; //11
    $_id = $objResult["id"]; //0



    $strResult = $_date . "," . $_time . "," . $_league . "," . $_team_1 . "," . $_team_msg_1 . "," . $_team_2 . "," . $_team_msg_2 . "," . $_price . "," . $_score . "," . $_detail . "," . $_name1 . "," . $_name2 . "," . $_id;
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>