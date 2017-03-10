<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {
    header("location:login.php");
}
if ($_SESSION['status'] > 0) {
    header("location:login.php");
    exit(0);
}
?>