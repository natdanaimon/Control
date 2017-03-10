<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);
$sum_add = $_POST[sum_add];
if ($sum_add < 0) {
    $sum_add = $sum_add * -1;
}
if ($_POST[pay_add] >= $sum_add && ($_POST[pay_add] != 0)) {
    exit("<script>alert('จำนวนเงินที่ค้างชำระจะต้อง น้อยกว่า ยอดเรียกเก็บทั้งหมด !');history.back();</script>");
}

$sum_db = $sum_add - $_POST[pay_add];


$_SESSION["TYPE_UPDATEBILLSTATUS"] = "N";
$strSQL = " update  bill "
        . " set f_accu =   $sum_db  , "
        . " s_status = 'Y' , "
        . " d_change = now()  "
        . " where s_bill_no= '" . $_POST[bill_add] . "'";

try {

    $result = mysql_query($strSQL);
    if ($result) {
        $_SESSION["TYPE_UPDATEBILLSTATUS"] = "Y";
    }
    header("location:../create_bill_search.php");
} catch (Exception $ex) {

    header("location:../create_bill_search.php");
}
