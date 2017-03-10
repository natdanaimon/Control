<?php

session_start();
include '../ConnectDB/DB.php';

//alert_edit_pass
//err_editPass
$_SESSION["err_editPass"] = "TRUE";

$old = $_POST[txt_old];
$txt_new1 = $_POST[txt_new1];
$txt_new2 = $_POST[txt_new2];

if ($txt_new1 != $txt_new2) {
    $_SESSION["err_editPass"] = "TRUE";
    $_SESSION["alert_edit_pass"] = $_SESSION["_cp_msg1"];
    header("location:/Control/index.php");
    exit(0);
}
if ($old == "" || $txt_new1 == "" || $txt_new2 = "") {
    $_SESSION["err_editPass"] = "TRUE";
    $_SESSION["alert_edit_pass"] = $_SESSION["_cp_msg2"];
    header("location:/Control/index.php");
    exit(0);
}

$strSQL = "SELECT * FROM user WHERE user = '" . $_SESSION["user"] . "' and pass ='" . $old . "' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);


if (!$objResult) {
    $_SESSION["err_editPass"] = "TRUE";
    $_SESSION["alert_edit_pass"] = $_SESSION["_cp_msg3"];
    header("location:/Control/index.php");
    exit(0);
} else {
    $strSQLs = " update  $database.user  "
            . " set pass = '" . $txt_new1 . "'  "
            . " where user= '" . $_SESSION["user"] . "'";

    try {
        mysql_query($strSQLs);
        $_SESSION["err_editPass"] = "FALSE";
        $_SESSION["alert_edit_pass"] = $_SESSION["alert_edit"];
        header("location:/Control/index.php");
        exit(0);
    } catch (Exception $ex) {
        $_SESSION["err_editPass"] = "TRUE";
        $_SESSION["alert_edit_pass"] = $_SESSION["alert_error"];
        header("location:/Control/index.php");
        exit(0);
    }
}













$_SESSION["err_addAnalyze"] = "true";
if (strlen($_POST['date']) > 0 &&
        strlen($_POST['time']) == 5 &&
        strlen($_POST['league']) > 0 &&
        strlen($_POST['price']) > 0 &&
        strlen($_POST['score']) > 0 &&
        strlen($_POST['state']) > 0 && $_POST['state'] != "-1" &&
        strlen($_POST['state1']) > 0 && $_POST['state1'] != "-1"
) {

    $sql = "insert into $database.analyze ( date ,time, league , team_1 , team_msg_1 , team_2 , team_msg_2 , price , score , detail"
            . " ) VALUES ( "
            . "'" . $_POST['date'] . "', "
            . "'" . $_POST['time'] . ":00', "
            . "'" . $_POST['league'] . "', "
            . "'" . $_POST['state'] . "', "
            . "'" . $_POST['state_msg'] . "', "
            . "'" . $_POST['state1'] . "', "
            . "'" . $_POST['state1_msg'] . "', "
            . "'" . $_POST['price'] . "', "
            . "'" . $_POST['score'] . "', "
            . "'" . $_POST['detail'] . "'"
            . ") ";
    mysql_query($sql);
    $_SESSION["err_addAnalyze"] = "false";
} else {

    $_SESSION["err_addAnalyze"] = "true";
}
header("location:/Control/analyze.php");
?>