<?php

session_start();
include '../ConnectDB/DB.php';


$sql = "insert into $database.news ( subject , detail , date ) VALUES ( "
        . "'" . $_POST['s_topic'] . "', "
        . "'" . $_POST['editor'] . "', "
        . "'" . $dateNow . "'"
        . ") ";

//echo $dateNow;
//echo $sql;

if (mysql_query($sql) && (strlen($_POST['s_topic']) > 0 && strlen($_POST['editor']) > 0)) {
    $_SESSION["err_addNews"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_addNews"] = "true";
}

//echo  $_SESSION["err_addNews"] ;
header("location:/Control/news.php");
