<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utill
 *
 * @author nag
 */
class Utill {

    function getBankName($tmp) {

        if ($tmp == "kbank") {
            $strReturn = "ธนาคารกสิกรไทย";
        } else if ($tmp == "bbl") {
            $strReturn = "ธนาคารกรุงเทพ";
        } else if ($tmp == "scb") {
            $strReturn = "ธนาคารไทยพาณิชย์";
        } else if ($tmp == "ktb") {
            $strReturn = "ธนาคารกรุงไทย";
        } else if ($tmp == "bay") {
            $strReturn = "ธนาคารกรุงศรีอยุธยา";
        } else if ($tmp == "tmb") {
            $strReturn = "ธนาคารทหารไทย";
        } else if ($tmp == "gsb") {
            $strReturn = "ธนาคารออมสิน";
        } else if ($tmp == "cimb") {
            $strReturn = "ธนาคารซีไอเอ็มบีไทย";
        } else if ($tmp == "nbank") {
            $strReturn = "ธนาคารธนชาติ";
        } else if ($tmp == "uob") {
            $strReturn = "ธนาคารยูโอบี";
        }




        return $strReturn;
    }

    function getBankAccount($tmp) {
        include '../ConnectDB/ConnectDB.php';
        $call = new ConnectDB();
        $call->conn();
        $sql = "SELECT * from bank where bank_name = '$tmp'"; //";
        $_data = $call->Search_Data_FormatJson($sql);
        $tmpReturn = "";
        foreach ($_data as $key => $value) {
           
          $tmpReturn .=  "Account Name".$_data[$key]['acc_name'] . " (" . $_data[$key]['acc_no'] . ")<br/>";
        }
        $call->close_conn();
        return $tmpReturn;
    }

}
