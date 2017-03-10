<?php
//$abc = "12|30";
//$pieces = explode("|", $abc);
//
//echo $pieces[0]."-";
//echo $pieces[1];
//echo date("YmdHis");

//$a = "2015-01-03";
//echo substr($a, 0,4);
//echo substr($a, 5,2);
//echo substr($a, 8,2);
//echo date("l d F Y");

//unlink('../content/aaa.php');
$dir = "../content/";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
   echo $filename;
}
