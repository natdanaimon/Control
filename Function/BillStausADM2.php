<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);


$sum_add = $_POST[ADMsum_add2];
if ($sum_add < 0) {
    $sum_add = $sum_add * -1;
}


if ($_POST[ADMpay_add2] > $sum_add) {
    exit("<script>alert('จำนวนเงินที่ชำระจะต้อง น้อยกว่าหรือเท่ากับ ยอดที่ค้างชำระ !');history.back();</script>");
}
$_SESSION["TYPE_UPDATEBILLSTATUS_ADM2"] = "N";
$strSQL = " update  bill "
        . " set f_accu_pay =   f_accu_pay+$_POST[ADMpay_add2]  , "
        . " s_status = 'Y' , "
        . " d_change = now()  "
        . " where s_bill_no= '" . $_POST[ADMbill_add2] . "'";

try {

    $result = mysql_query($strSQL);
    if ($result) {
        $_SESSION["TYPE_UPDATEBILLSTATUS_ADM2"] = "Y";
    }
    header("location:../index.php");
} catch (Exception $ex) {

    header("location:../index.php");
}
