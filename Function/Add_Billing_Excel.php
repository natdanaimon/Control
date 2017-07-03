<?php

session_start();
include '../ConnectDB/DB.php';
include '../ConnectDB/ConnectDB.php';
$_SESSION["err_addBilling"] = "true";

$db = new ConnectDB();
$db->conn();

/*$strSql = "";
$strSql .= "select w.* from ";
$strSql .= "web2user w2u,  ";
$strSql .= "web w  ";
$strSql .= "where w.i_id = w2u.i_id ";
$strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";
//     
$objQuery = mysql_query($strSql);
$sumtotal = 0;
while ($objResult = mysql_fetch_array($objQuery)) {
    for ($i = 0; $i < 99; $i++) {
        $txtD = "tmpD_" . $objResult["i_id"] . "_" . $i;
        $txtD2 = "tmpD2_" . $objResult["i_id"] . "_" . $i;
        if ($_POST[$txtD] != NULL) {
            if (($_POST[$txtD]) != 0) {
//        echo "GAME : " . $objResult["s_name"] . "<br/>";
//        echo "User : " . $_SESSION['form_user'] . "<br/>";
//        echo "D => " . $_POST[$txtD] . "<br/>";
//        echo "C => " . $_POST[$txtC] . "<br/>";
                $strSql = "";
                $strSql .= "INSERT ";
                $strSql .= "INTO ";
                $strSql .= "  bill_detail( ";
                $strSql .= "    s_bill_no, ";
                $strSql .= "    i_reference, ";
                $strSql .= "    s_dname, ";
                $strSql .= "    f_debit, ";
                $strSql .= "    f_credit, ";
                $strSql .= "    f_debit_pay, ";
                $strSql .= "    f_credit_pay, ";

                $strSql .= "    s_status ";
                $strSql .= "  ) ";
                $strSql .= "VALUES( ";
                $strSql .= "  '$_SESSION[generateBill]', ";
                $strSql .= "  $objResult[i_id], ";
                $strSql .= "  '$_POST[$txtD2]', ";
                if ($_POST[$txtD] > 0) {
                    $strSql .= "  $_POST[$txtD], ";
                    $strSql .= "  0, ";
                } else if ($_POST[$txtD] < 0) {
                    $strSql .= "  0, ";
                    $strSql .= "  $_POST[$txtD]*-1, ";
                }
                $strSql .= "  0, ";
                $strSql .= "  0, ";
                $strSql .= "  'N' ";
                $strSql .= ") ";
                $sql = array(
                    array("query" => "$strSql")
                );
                $db->insert_for_upadte($sql);

                $sumtotal = $sumtotal + ($_POST[$txtD]);
            }
        }
    }
}
$strSql = "";
$strSql .= "INSERT ";
$strSql .= "INTO ";
$strSql .= "  bill( ";
$strSql .= "    s_user, ";
$strSql .= "    s_bill_no, ";
$strSql .= "    d_start, ";
$strSql .= "    d_end, ";
$strSql .= "    s_status, ";
$strSql .= "    s_clear, ";
$strSql .= "    d_create, ";
$strSql .= "    d_change ";
$strSql .= "  ) ";
$strSql .= "VALUES( ";
$strSql .= "  '$_SESSION[form_user]', ";
$strSql .= "  '$_SESSION[generateBill]', ";
$strSql .= "  '$_SESSION[form_d_start]', ";
$strSql .= "  '$_SESSION[form_d_end]', ";
$strSql .= "  'N', ";
$strSql .= "  'N', ";
$strSql .= "  now(), ";
$strSql .= "  now() ";
$strSql .= ") ";
$sql = array(
    array("query" => "$strSql")
);
$db->insert_for_upadte($sql);
$db->commit();

$_SESSION["err_addBilling"] = "false";
header("location:../create_bill_4.php");*/
 



if (isset($_FILES['file'])) {
require_once './simplexlsx.class.php';
    //require_once "simplexlsx.class.php";

//$xlsx = new SimpleXLSX("testImport.xlsx");

    $xlsx = new SimpleXLSX($_FILES['file']['tmp_name']);

    $explode_type = explode(".",$_FILES['file']['name']);
    $explode_s_e = explode("to",$explode_type[0]);
    "Start : ".$explode_s_e[0]." To : ".$explode_s_e[1];
    
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$explode_s_e[0]))
    {
        $date_start = 1;
    }else{
        $date_start = 0;
    }
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$explode_s_e[1]))
    {
        $date_end = 1;
    }else{
        $date_end = 0;
    }
    
     $chk_date = $date_start+$date_end;
    
    if($chk_date > 1){
$_SESSION["err_addBilling"] = "false";
    
    list($cols, ) = $xlsx->dimension();
    $web = "Web";
    $winlose = "Win/Lose";
    $User = "User";
    $total = "Total";



    $i = 1;
    $generateBillGroup = date('YmdHis').rand(10,99);
    foreach ($xlsx->rows() as $k => $r) {
        if ($k != 0) {
            continue;
        }
        for ($c = 0; $c < $cols - 1; $c++) {


            $name = ( (isset($r[$c])) ? $r[$c] : NULL );

            $keyWeb = $c;
            $keyWinLose = $c + 1;
           // $keyUser = $c + 1;



            if ($name != NULL) {
$res[user] = mysql_query("select id,user from user where map_excel = '".$name."' ");
$arr[user] = mysql_fetch_array($res[user]);
////////////// If Find User
if($arr[user][id] > 0){
	$in_user = $arr[user][user];
	$in_id = $arr[user][id];
	$generateBill = date('YmdHis').$arr[user][id];
	
                foreach ($xlsx->rows() as $k2 => $r2) {
                    if ($k2 < 2) {
                        continue;
                    }

                    $col_web = ( (isset($r2[$keyWeb])) ? $r2[$keyWeb] : NULL );
                    //$col_us = ( (isset($r2[$keyUser])) ? $r2[$keyUser] : NULL );
                    $col_wl = ( (isset($r2[$keyWinLose])) ? $r2[$keyWinLose] : NULL );
                   

                    if ($col_web != NULL and $col_web != 'Total') {
/*$res[web] = mysql_query("select i_id from web where s_name = '".$col_web."' ");
$arr[web] = mysql_fetch_array($res[web]); */                   	
                $strSql = "";
                $strSql .= "INSERT ";
                $strSql .= "INTO ";
                $strSql .= "  bill_detail( ";
                $strSql .= "    s_bill_no, ";
                $strSql .= "    s_bill_group, ";
                $strSql .= "    s_reference, ";
                $strSql .= "    s_dname, ";
                $strSql .= "    f_debit, ";
                $strSql .= "    f_credit, ";
                $strSql .= "    f_debit_pay, ";
                $strSql .= "    f_credit_pay, ";

                $strSql .= "    s_status ";
                $strSql .= "  ) ";
                $strSql .= "VALUES( ";
                $strSql .= "  '$generateBill', ";
                $strSql .= "  '$generateBillGroup', ";
                $strSql .= "  '".$col_web."', ";
                $strSql .= "  '$col_us', ";
                if ($col_wl > 0) {
                    $strSql .= "  $col_wl, ";
                    $strSql .= "  0, ";
                } else if ($col_wl < 0) {
                    $strSql .= "  0, ";
                    $strSql .= "  $col_wl*-1, ";
                }
                $strSql .= "  0, ";
                $strSql .= "  0, ";
                $strSql .= "  'N' ";
                $strSql .= ") ";
                $sql = array(
                    array("query" => "$strSql")
                );
                $db->insert_for_upadte($sql);

                $sumtotal = $sumtotal + ($col_wl);
                    }
                }
                
$strSql = "";
$strSql .= "INSERT ";
$strSql .= "INTO ";
$strSql .= "  bill( ";
$strSql .= "    s_user, ";
$strSql .= "    s_bill_no, ";
$strSql .= "    s_bill_group, ";
$strSql .= "    d_start, ";
$strSql .= "    d_end, ";
$strSql .= "    s_status, ";
$strSql .= "    s_clear, ";
$strSql .= "    d_create, ";
$strSql .= "    d_change ";
$strSql .= "  ) ";
$strSql .= "VALUES( ";
$strSql .= "  '$in_user', ";
$strSql .= "  '$generateBill', ";
$strSql .= "  '$generateBillGroup', ";
$strSql .= "  '".$explode_s_e[0]."', ";
$strSql .= "  '".$explode_s_e[1]."', ";
$strSql .= "  'N', ";
$strSql .= "  'N', ";
$strSql .= "  now(), ";
$strSql .= "  now() ";
$strSql .= ") ";
$sql = array(
    array("query" => "$strSql")
);
$db->insert_for_upadte($sql);
$db->commit();                
} 
////////////// If Find User          
            
            }
        }
    }

	header("location:../create_bill_search.php");	
	}
	else{
		$_SESSION["err_addBilling"] = "true";
		header("location:../create_bill_0excel.php");
	}
}





