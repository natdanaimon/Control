<?php

session_start();
include '../ConnectDB/DB.php';
include '../ConnectDB/ConnectDB.php';
$_SESSION["err_addBilling"] = "true";

$db = new ConnectDB();
$db->conn();
$sql = array(
    array("query" => "delete from bill_detail  where s_bill_no = '$_SESSION[generateBill]' ")
);
$db->insert_for_upadte($sql);
$db->commit();




$strSql = "";
$strSql .= "select w.* from ";
$strSql .= "web2user w2u,  ";
$strSql .= "web w  ";
$strSql .= "where w.i_id = w2u.i_id ";
$strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";
//     
$objQuery = mysql_query($strSql);
$sumtotal = 0;
while ($objResult = mysql_fetch_array($objQuery)) {
    for ($i = 0; $i < 99; $i++) {
        $txtD = "tmpD_" . $objResult["i_id"] . "_" . $i;
        $txtD2 = "tmpD2_" . $objResult["i_id"] . "_" . $i;
        if ($_POST[$txtD] != NULL) {
            if (($_POST[$txtD]) != 0) {
//        echo "GAME : " . $objResult["s_name"] . "<br/>";
//        echo "User : " . $_SESSION['form_user'] . "<br/>";
//        echo "D => " . $_POST[$txtD] . "<br/>";
//        echo "C => " . $_POST[$txtC] . "<br/>";
                $strSql = "";
                $strSql .= "INSERT ";
                $strSql .= "INTO ";
                $strSql .= "  bill_detail( ";
                $strSql .= "    s_bill_no, ";
                $strSql .= "    i_reference, ";
                $strSql .= "    s_dname, ";
                $strSql .= "    f_debit, ";
                $strSql .= "    f_credit, ";
                $strSql .= "    f_debit_pay, ";
                $strSql .= "    f_credit_pay, ";
                $strSql .= "    s_status ";
                $strSql .= "  ) ";
                $strSql .= "VALUES( ";
                $strSql .= "  '$_SESSION[generateBill]', ";
                $strSql .= "  $objResult[i_id], ";
                $strSql .= "  '$_POST[$txtD2]', ";
                if ($_POST[$txtD] > 0) {
                    $strSql .= "  $_POST[$txtD], ";
                    $strSql .= "  0, ";
                } else if ($_POST[$txtD] < 0) {
                    $strSql .= "  0, ";
                    $strSql .= "  $_POST[$txtD]*-1, ";
                }
                $strSql .= "  0, ";
                $strSql .= "  0, ";
                $strSql .= "  'N' ";
                $strSql .= ") ";
                $sql = array(
                    array("query" => "$strSql")
                );
                $db->insert_for_upadte($sql);

                $sumtotal = $sumtotal + ($_POST[$txtD]);
            }
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




