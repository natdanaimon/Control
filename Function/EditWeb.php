<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);
 $_SESSION["TYPE_UPDATEWEB"] = "N";
$strSQL = " update  web "
        . " set s_name = '" . $_POST['webname_add'] . "' , "
        . " s_status = '" . $_POST['web_type'] . "' , "
        . " d_change =  now()  "
        . " where i_id= '" . $_POST['id_add'] . "'";

try {
    
    $result = mysql_query($strSQL);
    if($result){
        $_SESSION["TYPE_UPDATEWEB"] = "Y";
    }
    header("location:../webgame.php");
} catch (Exception $ex) {
   
    header("location:../webgame.php");
}
