<?php

include './ConnectDB/DB.php';
$thai_day_arra = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
$thai_month_arra = array(
    "0" => "",
    "1" => "มกราคม",
    "2" => "กุมภาพันธ์",
    "3" => "มีนาคม",
    "4" => "เมษายน",
    "5" => "พฤษภาคม",
    "6" => "มิถุนายน",
    "7" => "กรกฎาคม",
    "8" => "สิงหาคม",
    "9" => "กันยายน",
    "10" => "ตุลาคม",
    "11" => "พฤศจิกายน",
    "12" => "ธันวาคม"
);

function _dateHeaders($time) {
    global $thai_day_arra, $thai_month_arra;
    $thai_date_return = "วัน" . $thai_day_arra[date("w", $time)];
    $thai_date_return.= "ที่ " . date("j", $time);
    $thai_date_return.=" เดือน" . $thai_month_arra[date("n", $time)];
    $thai_date_return.= " พ.ศ." . (date("Yํ", $time) + 543);
    //$thai_date_return.= "  " . date("H:i", $time) . " น.";
    return $thai_date_return;
}

$sql = " SELECT a.date as _date from $database.analyze a group by a.date  order by a.date ";
$objQuery = mysql_query($sql);

//$eng_dateS = strtotime("2016-01-10");
while ($objResult = mysql_fetch_array($objQuery)) {


    $eng_dateS = strtotime($objResult["_date"]);
    echo "<li><a href='AnalyzeScore.php?_datelink=" . $objResult["_date"] . "'> ตารางวิเคราะห์ผลบอลประจำ" . _dateHeaders($eng_dateS) . "</a><li?";
    echo " <br>";
}
?>