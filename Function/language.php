<?php

@session_start();
$sqlLanguage = "SELECT * FROM language";
$objQuery = mysql_query($sqlLanguage);
$lan = $_SESSION["LAN_TYPE"];
while ($objResult = mysql_fetch_array($objQuery)) {

    if ($lan == 1) { // THAI
        include 'THAI.php';
    } else { // ENG =================================================================
         include 'ENG.php';
    }
}
?>
