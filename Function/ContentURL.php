<?php

session_start();
include '../ConnectDB/DB.php';

if (!$_SESSION["GetData"]) {
    $strSQL = "insert into weburl (  i_id , s_url , s_url2 ,user_a ,  user_m , pass_a ,  pass_m , s_url_type , d_create ,d_change) VALUES ( "
            . "" . $_POST['serial'] . ", "
            . "'" . $_POST['editorAgent'] . "', "
            . "'" . $_POST['editorMember'] . "', "
            . "'" . $_POST['agent_user'] . "', "
            . "'" . $_POST['member_user'] . "', "
            . "'" . $_POST['agent_pass'] . "', "
            . "'" . $_POST['member_pass'] . "', "
            . "'A', "
            . " now() , now() "
            . ") ";
    if (mysql_query($strSQL)) {
        $_SESSION["err_addWeb"] = "false";
    } else {
        $_SESSION["err_addWeb"] = "true";
    }
    header("location:../webgame.php");
} else {



    $strSQL = " update  weburl "
            . " set s_url = '" . $_POST['editorAgent'] . "' , "
            . " s_url2 = '" . $_POST['editorMember'] . "' ,  "
            . " user_a = '" . $_POST['agent_user'] . "' ,  "
            . " user_m = '" . $_POST['member_user'] . "' ,  "
            . " pass_a = '" . $_POST['agent_pass'] . "' ,  "
            . " pass_m = '" . $_POST['member_pass'] . "' ,  "
            . " d_change =  now()  "
            . " where i_id= " . $_POST['serial'] . "";
    if (mysql_query($strSQL)) {
        $_SESSION["err_addWeb"] = "false";
    } else {
        $_SESSION["err_addWeb"] = "true";
    }
    header("location:../webgame.php");
}