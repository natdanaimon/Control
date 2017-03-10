<?php

session_start();
include '../ConnectDB/DB.php';


$sql = "insert into weburl (  i_id , s_url , s_url_type , d_create , d_change ) VALUES ( "
        . "'" . $_POST['user_search'] . "', "
        . "'" . $_POST['weburl_add'] . "', "
        . "'" . $_POST['url_type'] . "', "
        . "now() , now()"
        . ") ";

//echo $dateNow;
//echo $sql;

if (mysql_query($sql)) {
    $_SESSION["err_addWebURL"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_addWebURL"] = "true";
}

//echo  $_SESSION["err_addNews"] ;
header("location:../weburl.php");
