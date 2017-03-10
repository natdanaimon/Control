<?php

session_start();
include '../ConnectDB/DB.php';
//mysql_connect($hostname, $username, $password);
//mysql_select_db($database);
 $_SESSION["TYPE_UPDATEWEBURL"] = "N";
$strSQL = " update  weburl "
        . " set s_url = '" . $_POST['weburl_add'] . "' , "
        . " s_url_type = '" . $_POST['url_type'] . "' , "
        . " d_change =  now()  "
        . " where id= '" . $_POST['url_id'] . "'";

try {
    
    $result = mysql_query($strSQL);
    if($result){
        $_SESSION["TYPE_UPDATEWEBURL"] = "Y";
    }
    header("location:../weburl.php");
} catch (Exception $ex) {
   
    header("location:../weburl.php");
}
