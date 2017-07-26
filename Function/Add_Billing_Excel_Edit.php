<?php

session_start();
include '../ConnectDB/DB.php';
include '../ConnectDB/ConnectDB.php';
$_SESSION["err_addBilling"] = "true";
$generateBill = $_SESSION[generateBill];
$db = new ConnectDB();
$db->conn();
/*$sql = array(
    array("query" => "delete from bill_detail  where s_bill_no = '$_SESSION[generateBill]' ")
);
$db->insert_for_upadte($sql);
$db->commit();*/




$strSql = "";
$strSql .= "select w.* from ";
$strSql .= "web2user w2u,  ";
$strSql .= "web w  ";
$strSql .= "where w.i_id = w2u.i_id ";
$strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";
//     

$strSql = "";  
 $strSql .= "  SELECT ";
                                                    $strSql .= "    h.s_user, ";
                                                    $strSql .= "    h.s_bill_no, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_start, ";
                                                    $strSql .= "    '%Y-%m-%d') d_start, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_end, ";
                                                    $strSql .= "    '%Y-%m-%d') d_end, ";
                                                    $strSql .= "    h.s_status, ";
                                                    $strSql .= "    d.i_id, ";
                                                    $strSql .= "    d.f_debit, ";
                                                    $strSql .= "    d.f_credit, ";
                                                    $strSql .= "    d.i_reference, ";
                                                    $strSql .= "    d.s_reference ";
                                                    $strSql .= "  FROM ";
                                                    $strSql .= "    bill h, ";
                                                    $strSql .= "    bill_detail d ";
                                                    $strSql .= "  WHERE ";
                                                    $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no = '".$generateBill."' ";
$objQuery = mysql_query($strSql);
$sumtotal = 0;
while ($objResult = mysql_fetch_array($objQuery)) {
        $txtD = "tmpD_" . $objResult["i_id"];
        $txtD2 = "tmpD2_" . $objResult["i_id"];
        echo $_POST[$txtD];
        if ($_POST[$txtD] != NULL) {
            if (($_POST[$txtD]) != 0) {
//        echo "GAME : " . $objResult["s_name"] . "<br/>";
//        echo "User : " . $_SESSION['form_user'] . "<br/>";
//        echo "D => " . $_POST[$txtD] . "<br/>";
//        echo "C => " . $_POST[$txtC] . "<br/>";


$strSql = "";
$strSql .= "UPDATE ";
$strSql .= "bill_detail set ";
$strSql .= "  s_bill_no = '".$_SESSION[generateBill]."' , ";
$strSql .= "  s_reference = '".$_POST[$txtD2]."', ";
if ($_POST[$txtD] > 0) {

$strSql .= "  f_debit = $_POST[$txtD] , ";
$strSql .= "  f_credit = 0, ";                    
                } else if ($_POST[$txtD] < 0) {
$strSql .= "  f_debit = 0 , ";
$strSql .= "  f_credit = $_POST[$txtD]*-1, ";                      
                }


$strSql .= "  f_debit_pay = '$_SESSION[form_d_end]' , ";
$strSql .= "  f_credit_pay = '$_SESSION[form_d_end]' , ";
$strSql .= "  s_status = '$_SESSION[form_d_end]'  ";
$strSql .= "  where i_id = '".$objResult[i_id]."' ";

 
 
                $sql = array(
                    array("query" => "$strSql")
                );
                $db->insert_for_upadte($sql);

                $sumtotal = $sumtotal + ($_POST[$txtD]);
            }
        }

}
//$strSql = "";
//$strSql .= "INSERT ";
//$strSql .= "INTO ";
//$strSql .= "  bill( ";
//$strSql .= "    s_user, ";
//$strSql .= "    s_bill_no, ";
//$strSql .= "    d_start, ";
//$strSql .= "    d_end, ";
//$strSql .= "    s_status, ";
//$strSql .= "    d_create, ";
//$strSql .= "    d_change ";
//$strSql .= "  ) ";
//$strSql .= "VALUES( ";
//$strSql .= "  '$_SESSION[form_user]', ";
//$strSql .= "  '$_SESSION[generateBill]', ";
//$strSql .= "  '$_SESSION[form_d_start]', ";
//$strSql .= "  '$_SESSION[form_d_end]', ";
//$strSql .= "  'N', ";
//$strSql .= "  '$_SESSION[form_d_create]', ";
//$strSql .= "  now() ";
//$strSql .= ") ";

$strSql = "";
$strSql .= "UPDATE ";
$strSql .= "bill set ";
$strSql .= "  d_change = now() , ";
$strSql .= "  d_start = '$_SESSION[form_d_start]', ";
$strSql .= "  d_end = '$_SESSION[form_d_end]'  ";
$strSql .= "  where s_bill_no = '$_SESSION[generateBill]' ";



$sql = array(
    array("query" => "$strSql")
);
$db->insert_for_upadte($sql);
$db->commit();

$_SESSION["err_addBilling"] = "false";
header("location:../create_bill_4_edit.php");




