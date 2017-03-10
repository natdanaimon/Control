<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);

$strSQL = " update  user  "
        . " set phone = '" . $_POST['phone_add'] . "' , "
        . " email = '" . $_POST['mail_add'] . "' , "
        . " fname = '" . $_POST['fname_add'] . "' , "
        . " lname = '" . $_POST['lname_add'] . "' , "
        . " pass = '" . $_POST['pass_add'] . "' ,"
        
        . " address = '" . $_POST['address1_add'] . "' ,"
        . " zipcode = " . $_POST['address2_add'] . " ,"
        . " status = '" . $_POST['status'] . "' ,"
        . " type = '" . $_POST['type'] . "' ,"
        . " line = '" . $_POST['line_add'] . "' ,"
        . " facebook = '" . $_POST['facebok_add'] . "' "
        . " where user= '" . $_POST['user_add'] . "'";

try {
    $_SESSION["TYPE_UPDATE"] = "Y";
    mysql_query($strSQL);


    $_SESSION["useradmin"] = $_POST["fname_add"] . " " . $_POST["lname_add"];

    header("location:../user.php");
} catch (Exception $ex) {
    $_SESSION["TYPE_UPDATE"] = "N";
    header("location:../user.php");
}
