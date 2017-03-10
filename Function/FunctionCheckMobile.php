<?php

function mobileDetect() {
    $_SESSION['mobile-detect'] = array();
    switch (true) {
        case (preg_match("/ipad/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'iPad';
            $_SESSION['mobile-detect']['manu'] = "Apple";
            return true;
            break;
        case (preg_match("/ipod/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'iPod';
            $_SESSION['mobile-detect']['manu'] = "Apple";
            return true;
            break;
        case (preg_match("/iphone/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'iPhone';
            $_SESSION['mobile-detect']['manu'] = "Apple";
            return true;
            break;
        case (preg_match("/android/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'Android';
            $_SESSION['mobile-detect']['manu'] = "Google";
            return true;
            break;
        case (preg_match("/blackberry/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'Blackberry';
            $_SESSION['mobile-detect']['manu'] = "RIM";
            return true;
            break;
        case (preg_match("/blackberry/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'Blackberry';
            $_SESSION['mobile-detect']['manu'] = "RIM";
            return true;
            break;
        case (preg_match("/windows ce; smartphone;|windows ce; iemobile/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'WindowsCE';
            $_SESSION['mobile-detect']['manu'] = "Microsoft";
            return true;
            break;
        case (preg_match("/touchpad|hpwos/i", $_SERVER['HTTP_USER_AGENT']));
            $_SESSION['mobile-detect']['device'] = 'HP TouchPad';
            $_SESSION['mobile-detect']['manu'] = "HP";
            return true;
            break;
        default:
            return false;
            break;
    }
}

function ACTIVEPAGES($page) {
    if ($page == 1) {
        $_SESSION["m1"] = "active";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 2) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "active";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 3) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "active";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 4) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "active";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 5) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "active";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 6) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "active";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 7) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "active";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "";
    } else if ($page == 8) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "active";
        $_SESSION["m9"] = "";
    } else if ($page == 9) {
        $_SESSION["m1"] = "";
        $_SESSION["m2"] = "";
        $_SESSION["m3"] = "";
        $_SESSION["m4"] = "";
        $_SESSION["m5"] = "";
        $_SESSION["m6"] = "";
        $_SESSION["m7"] = "";
        $_SESSION["m8"] = "";
        $_SESSION["m9"] = "active";
    }
}

?>