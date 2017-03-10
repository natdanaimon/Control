<?php

session_start();
include '../ConnectDB/DB.php';

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