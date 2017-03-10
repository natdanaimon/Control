<?php

session_start();
include '../ConnectDB/DB.php';

$strSQL = "SELECT * FROM user WHERE user = '" . $_POST['user_add'] . "'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);


if ($objResult) {
    $_SESSION["err_adduser"] = "true";
    header("location:../user.php");
    echo $objResult["user"];
    exit();
}









//$conn = mysqli_connect($hostname, $username, $password, $database);
$image_ = false;


if ($_FILES["fileToUpload"]["name"] != "") {
    $target_dir = "../assets/img/user/";
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = $target_dir . $_POST['user_add'] . '.' . end($temp);
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newfilename)) {
            $image_ = true;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


if ($image_) {
    $pic = $_POST['user_add'] . "." . end($temp);
} else {
    $pic = "Default.png";
}

$sql = "insert into user ( user, pass, fname, lname, phone, email, picture, status,gold ,silver , win , lose ,nickname ,address ,line,facebook,type,zipcode, msg) VALUES ( "
        . "'" . $_POST['user_add'] . "', "
        . "'" . $_POST['pass_add'] . "', "
        . "'" . $_POST['fname_add'] . "', "
        . "'" . $_POST['lname_add'] . "', "
        . "'" . $_POST['phone_add'] . "', "
        . "'" . $_POST['mail_add'] . "', "
        . "'" . $pic . "', "
        . "'" . $_POST['status'] . "', "
        . " '0' ,"
        . " '0' ,"
        . " '0' ,"
        . " '0' ,"
        . " 'เด็กมือใหม่' ,"
        . "'" . $_POST['address1_add'] . "', "
        . "'" . $_POST['line_add'] . "', "
        . "'" . $_POST['facebok_add'] . "', "
        . "'" . $_POST['type'] . "', "
        . "'" . $_POST['address2_add'] . "', "
        . " 'ยังไม่ได้ระบุประกาศแนะนำตัว' "
        . ") ";
//$sql = "insert into user ( user, pass, fname, lname,picture,zipcode, status,type) VALUES ( "
//        . "'" . $_POST['user_add'] . "', "
//        . "'" . $_POST['pass_add'] . "', "
//        . "'" . $_POST['fname_add'] . "', "
//        . "'" . $_POST['lname_add'] . "', "
//        . "'" . $pic . "', "
//        . " 99999, "
//        . "'" . $_POST['status'] . "', "
//        . "'Y' "
//        . ") ";
if (mysql_query($sql)) {
    $_SESSION["err_adduser"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_adduser"] = "true";
}

header("location:../user.php");
