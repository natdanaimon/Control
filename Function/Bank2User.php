<?php

session_start();
include '../ConnectDB/ConnectDB.php';
$call = new ConnectDB();


$_SESSION["TYPE_UPDATE_W2U"] = "N";
$db = new ConnectDB();
$db->conn();
$sql = array(
    array("query" => "DELETE FROM bank2user WHERE s_user = '$_POST[user_add]' ")
);
$db->insert_for_upadte($sql);
$db->commit();
//if ($resultDelete == null) {
//    $db->commit();
//} else {
//    $db->rollback();
//    $_SESSION["TYPE_UPDATE_W2U"] = "N";
//    header("location:/Control/web2user.php");
//}

foreach ($_POST[my_multi_select2] as $var) {
    $strSQL = "insert into bank2user (i_id , s_user) values ($var,'$_POST[user_add]') ";
    $sql2 = array(
        array("query" => "$strSQL")
    );
    $db->insert_for_upadte($sql2);
//    if ($db->insert_for_upadte($sql2) == NULL) {
//        $resultInsert = TRUE;
//    } else {
//        $resultInsert = FALSE;
//    }
}
//if ($resultInsert) {
$db->commit();
$_SESSION["TYPE_UPDATE_W2U"] = "Y";
header("location:../bank2user.php");
//} else {
//    $db->rollback();
//    $_SESSION["TYPE_UPDATE_W2U"] = "N";
//    header("location:/Control/web2user.php");
//}

    