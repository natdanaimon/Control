<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {
    header("location:login.php");
}

?>