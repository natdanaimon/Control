<?php

session_start();
include '../ConnectDB/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// get the q parameter from URL
//
$id = $_REQUEST["id"];

$strSql .= " SELECT url.id , url.i_id , url.s_url  , url.s_url_type ,w.s_name FROM weburl url , web w ";
$strSql .= " WHERE w.i_id = url.i_id ";
$strSql .= " and url.id = $id";


$objQuery = mysql_query($strSql);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {
    $_id = $objResult["id"];
    $_s_name = $objResult["s_name"];
    $_s_url = $objResult["s_url"];
    $_s_url_type = $objResult["s_url_type"];




    $strResult = $_id . ","
            . $_s_name . ","
            . $_s_url . ","
            . $_s_url_type;
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>