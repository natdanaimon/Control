<?php

session_start();
include '../ConnectDB/DB.php';
$strSQL = "select main.reference , main.table_order , main.topic , main.total as totalcomplete
, tmp.total as totalall
 from (SELECT 
    reference , table_order,topic , sum(sumprice) as total
FROM
    $database.`order`
WHERE
    payment = 'N' AND cancel = 'N'
        AND status = 'Y'
        AND cook_name IS NOT NULL
GROUP BY reference , table_order,topic ) main ,
(
SELECT 
    reference , table_order,topic , sum(sumprice) as total
FROM
    $database.`order`
WHERE
    payment = 'N' AND cancel = 'N'
        AND status = 'Y'
GROUP BY reference , table_order ,topic) tmp
where tmp.reference = main.reference
and tmp.table_order = main.table_order
and tmp.topic = main.topic ";


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