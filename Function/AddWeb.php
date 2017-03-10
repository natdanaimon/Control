<?php
session_start();
include '../ConnectDB/DB.php';


$sql = "insert into web (  s_name , s_status , d_create , d_change ) VALUES ( "
        . "'" . $_POST['webname_add'] . "', "
        . "'" . $_POST['web_type'] . "', "
        . "now() , now()"
        . ") ";

//echo $dateNow;
//echo $sql;

if (mysql_query($sql)) {
    $_SESSION["err_addWeb"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_addWeb"] = "true";
}

//echo  $_SESSION["err_addNews"] ;
header("location:../webgame.php");
