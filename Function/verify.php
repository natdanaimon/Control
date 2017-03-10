<?php

@session_start();
include '../ConnectDB/DB.php';
$_SESSION["lock"] = TRUE;
$_SESSION[top] = 200;
$_SESSION[pathWeb] = "http://vipsbo888.com/Control/";
try {

    if (preg_match("/[^A-Za-z0-9]/", $_POST['username'])) {
        $_SESSION["err"] = "Username (doesn't contain only a-z A-Z 0-9)";
        if ($_SESSION["lockScreen"]) {
            header("location:../extra_lock.php");
            exit(0);
        }
        header("location:../login.php");
        exit(0);
    }
    if (preg_match("/[^A-Za-z0-9]/", $_POST['password'])) {
        $_SESSION["err"] = "Password (doesn't contain only a-z A-Z 0-9)";
        if ($_SESSION["lockScreen"]) {
            header("location:../extra_lock.php");
            exit(0);
        }
        header("location:../login.php");
        exit(0);
    }




    $_SESSION["LAN_TYPE"] = 1;
    $strSQL = "SELECT * FROM user WHERE user = '" . $_POST['username'] . "' 
	and pass = '" . $_POST['password'] . "'";

    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
//echo  $strSQL;
    if ($objResult) {

        $_SESSION["useradmin"] = $objResult["fname"] . " " . $objResult["lname"];
        $_SESSION["user"] = $objResult["user"];
        $_SESSION["pass"] = $objResult["pass"];
        $_SESSION["title"] = "ACCSYSTEM";
        $_SESSION["mail"] = $objResult["email"];
        $_SESSION["phone"] = $objResult["phone"];
        $_SESSION["type"] = $objResult["type"];
        $_SESSION["status"] = $objResult["status"];
        $_SESSION["pic_show"] = $objResult["picture"];
        $_SESSION["pic_user_id"] = $objResult["id"];
        $_SESSION["err"] = "";
        if ($objResult["status"] == 1) {
            $_SESSION["popup"] = true;
        }
        if ($objResult["status"] == 1) {
            $_SESSION["footer"] = true;
        }



        include '../Function/language.php';





        //echo $_SESSION["pic_show"];
        header("location:../index.php");
    } else {
        $_SESSION["err"] = "Username or Password  Incorrect !!!";

        if (!$_SESSION["lockScreen"]) {
            header("location:../login.php");
        } else {
            header("location:../extra_lock.php");
        }
    }
    mysql_close();
} catch (Exception $e) {
    $_SESSION["err"] = "Connection Fail !!! ";
    if (!$_SESSION["lockScreen"]) {
        header("location:../login.php");
    } else {
        header("location:../extra_lock.php");
    }
}
?>
