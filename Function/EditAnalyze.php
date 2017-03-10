<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);
$_SESSION["ANALYZE_UPDATE"] = "N";

try {
    if (strlen($_POST['_date']) > 0 &&
        strlen($_POST['_time']) == 5 &&
        strlen($_POST['_league']) > 0 &&
        strlen($_POST['_price']) > 0 &&
        strlen($_POST['_score']) > 0 &&
        strlen($_POST['_state']) > 0 && $_POST['_state'] != "-1" &&
        strlen($_POST['_state1']) > 0 && $_POST['_state1'] != "-1"
) {
    $strSQL = " update  $database.analyze  "
            . " set date = '" . $_POST['_date'] . "' , "
            . " time = '" . $_POST['_time'] . ":00' ,"
            . " league = '" . $_POST['_league'] . "' ,"
            . " team_1 = '" . $_POST['_state'] . "' ,"
            . " team_msg_1 = '" . $_POST['_state_msg'] . "' ,"
            . " team_2 = '" . $_POST['_state1'] . "' ,"
            . " team_msg_2 = '" . $_POST['_state1_msg'] . "' ,"
            . " price = '" . $_POST['_price'] . "' ,"
            . " score = '" . $_POST['_score'] . "' ,"
            . " detail = '" . $_POST['_detail'] . "' "
            . " where id=" . $_POST['_id'];
    mysql_query($strSQL);
    $_SESSION["ANALYZE_UPDATE"] = "Y";
    
    }
} catch (Exception $ex) {
    $_SESSION["ANALYZE_UPDATE"] = "N";
    header("location:/Control/analyze.php");
}
header("location:/Control/analyze.php");