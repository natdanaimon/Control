<?php

session_start();
include '../ConnectDB/DB.php';

$ct = 0;
$strSql = "select count(*) ct from sub_user where user_main='".$_POST['user_main']."' and user_sub = '".$_POST['user_sub']."'";
$objQuery = mysql_query($strSql);
while ($objResult = mysql_fetch_array($objQuery)) {
    $ct = $objResult["ct"];
}



if ($ct == 0) {

    $sql = "insert into sub_user  select "
            . " (select max(id)+1 from sub_user) , "
            . "'" . $_POST['user_main'] . "', "
            . "'" . $_POST['user_sub'] . "'"
            . " ";

    if (mysql_query($sql)) {
        $_SESSION["err_addusersub"] = "false";
    } else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $_SESSION["err_addusersub"] = "true";
    }
} else {
    $_SESSION["err_addusersub"] = "true";
}
header("location:../userSub.php?user=" . $_POST['user_main']);
