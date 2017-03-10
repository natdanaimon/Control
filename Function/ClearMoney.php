<?php

session_start();
include '../ConnectDB/DB.php';
$id1 = $_POST['idUser1'];
$id2 = $_POST['idUser2'];

if ($id1 != null) {
    $id = $id1;
}
if ($id2 != null) {
    $id = $id2;
}

$strSql .= " update bill b  ";
$strSql .= "   set b.s_clear = 'Y' ";
if ($id2 > 0) {
    $strSql .= " WHERE EXISTS ";
    $strSql .= " (select 1 from user u ";
    $strSql .= " where b.s_user = u.user ";
    $strSql .= " and u.id  = '" . $id . "'";
    $strSql .= " ) ";
}





try {
    $_SESSION["TYPE_UPDATE"] = "Y";
    mysql_query($strSql);
    header("location:../user.php");
} catch (Exception $ex) {
    $_SESSION["TYPE_UPDATE"] = "N";
    header("location:../user.php");
}
