<?php

session_start();
include '../ConnectDB/DB.php';


$sql = "insert into bank (  bank_name , acc_name , acc_no ) VALUES ( "
        . "'" . $_POST[bank]. "', "
        . "'" . $_POST[bank_name] . "', "
        . "'" . $_POST[bank_acc] . "' "
        . ") ";

//echo $dateNow;
//echo $sql;

if (mysql_query($sql)) {
    $_SESSION["err_addBank"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_addBank"] = "true";
}

//echo  $_SESSION["err_addNews"] ;
header("location:../bank.php");
