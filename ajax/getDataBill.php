<?php

session_start();
include '../ConnectDB/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// get the q parameter from URL

$bill = $_REQUEST["bill"];
//$bill = "20160417124745";
//$id = 1;
// lookup all hints from array if $q is different from "" 
$strSql = "";
$strSql .= "SELECT ";
$strSql .= "  h.s_user, ";
$strSql .= "  h.s_bill_no, ";
$strSql .= "  h.f_accu, ";
$strSql .= "  h.f_accu_pay, ";
$strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
$strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
$strSql .= "  h.s_status ,  ";
$strSql .= "   h.d_change ,  ";
$strSql .= "  sum(d.f_debit)d_total, sum(d.f_credit) c_total, ";
$strSql .= "  sum(d.f_debit) - sum(d.f_credit) as total ";
$strSql .= "FROM ";
$strSql .= "  bill h, ";
$strSql .= "  bill_detail d ";
$strSql .= "WHERE ";
$strSql .= "  h.s_bill_no = d.s_bill_no ";
$strSql .= "  and h.s_bill_no = '$bill' ";
$strSql .= "GROUP BY ";
$strSql .= "  h.s_user, ";
$strSql .= "  h.s_bill_no, ";
$strSql .= "  h.f_accu, ";
$strSql .= "  h.f_accu_pay ";
$strSql .= "ORDER by h.s_status asc, ";
$strSql .= "  h.s_bill_no , ";
$strSql .= "   h.s_user ";
$objQuery = mysql_query($strSql);
$objResult = mysql_fetch_array($objQuery);

if ($objResult) {

    $_bill = $objResult["s_bill_no"];
    $_total = $objResult["total"];
    $_acc = $objResult["s_user"];
   




    $strResult = $_bill . ","
            . $_total. ","
            . $_acc;
}

mysql_close();

// Output "no suggestion" if no hint was found or output correct values 
echo $strResult === "" ? "no suggestion" : $strResult;
?>