<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utility
 *
 * @author nag
 */
class Utility {

    protected $_pathXML = "language.xml";

    function getPathXML() {
        return $this->_pathXML;
    }

    function setPathXML($pathXML) {
        $this->_pathXML = $pathXML;
    }

    
    function LanguageConfig($type) {
        $xml = simplexml_load_file($this->_pathXML) or die("Error: Cannot create object");
        foreach ($xml->children() as $languages) {
            if ($type == "th") {
                $_SESSION["$languages->variable"] = $languages->th;
            } else if ($type == "en") {
                $_SESSION["$languages->variable"] = $languages->en;
            }
        }
    }

}
