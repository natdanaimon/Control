<?php

session_start();
include '../ConnectDB/DB.php';
$strSQL = "SELECT 
    *
FROM
    $database.`order`
WHERE
    payment = 'N' AND cancel = 'N'
        AND status = 'Y'
        AND cook_name IS NULL
        AND order_name IS NOT NULL
ORDER BY order_time ";


$objQuery = mysql_query($strSQL) or die(mysql_error());
$intNumField = mysql_num_fields($objQuery);
$resultArray = array();
while ($obResult = mysql_fetch_array($objQuery)) {
    $arrCol = array();
    for ($i = 0; $i < $intNumField; $i++) {
        $arrCol[mysql_field_name($objQuery, $i)] = $obResult[$i];
    }
    array_push($resultArray, $arrCol);
}



echo json_encode($resultArray);
?>