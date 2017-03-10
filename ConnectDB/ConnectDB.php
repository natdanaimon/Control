<?php

class ConnectDB {

//    protected $_host = "127.0.0.1";
//    protected $_user = "root";
//    protected $_pass = "";
//    protected $_dbname = "Control";
    protected $_host = "localhost";
    protected $_user = "admin_root";
    protected $_pass = "tXOvOfTT1O";
    protected $_dbname = "admin_control";
    protected $_conn;
    protected $_email_host = "0.0.0.0";
    protected $_email_port = "25";
    protected $_email_charset = "utf-8";
    protected $_web = "host@mail.com";

    function Sysdate($sysdate) {
        if ($sysdate) {
            return "now()";
        } else {
            return date('Y-m-d');
        }
    }

    function web_server() {
        return $this->_web;
    }

    function email_host() {
        return $this->_email_host;
    }

    function email_port() {
        return $this->_email_port;
    }

    function email_charset() {
        return $this->_email_charset;
    }

    function host() {
        return $this->_host;
    }

    function user() {
        return $this->_user;
    }

    function pass() {
        return $this->_pass;
    }

    function dbname() {
        return $this->_dbname;
    }

    function conn() {
        $this->_conn = @mysql_connect($this->_host, $this->_user, $this->_pass) or die("Cannot Connect DB");
        mysql_select_db($this->_dbname) or die("Cannot Select DB");
        mysql_query("set names utf8");
    }

    function begin() {
        $null = mysql_query("START TRANSACTION", $this->_conn);
        return mysql_query("BEGIN", $this->_conn);
    }

    function Search_Data_FormatJson($strSQL) {
        $this->conn();
        $rs = mysql_query($strSQL);
        $temp = array();
        while ($objResultLeague = mysql_fetch_array($rs)) {
            $temp[] = $objResultLeague;
        }
        $result = json_encode($temp);
        return json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $result), true);

        // Example Search_Data_FormatJson($strSQL);
        //        $call = new ConnectDB();
        //        $sql = "SELECT * from config_email"; //";
        //        $_data = $call->Search_Data_FormatJson($sql);
        //        foreach ($_data as $key => $value) {
        //            echo $key . "=>";
        //            echo $_data[$key]['conf_mail_id'] . " " . $_data[$key]['email_address'] . "<br>";
        //        }
        //        $call->close_conn();
    }

    function insert_for_upadte($sql) {
        $retval = 1;
        $this->begin();

        foreach ($sql as $qa) {
            $result = mysql_query($qa['query'], $this->_conn);
            if (mysql_affected_rows() == 0) {
                $retval = 0;
            }
        }


        return ($retval == 0 ? FALSE : TRUE);
        // return mysql_query($sql) or die(mysql_error());
    }

    function close_conn() {
        mysql_close($this->_conn);
    }

    function commit() {
        return mysql_query("COMMIT", $this->_conn);
    }

    function rollback() {
        return mysql_query("ROLLBACK", $this->_conn);
    }

}

?>