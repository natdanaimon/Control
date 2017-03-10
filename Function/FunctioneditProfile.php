<?php

session_start();
include '../ConnectDB/DB.php';

$strSQL = "SELECT * FROM user WHERE id =" . $_SESSION["pic_user_id"];

$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

//$conn = mysqli_connect($hostname, $username, $password, $database);
$image_ = false;


if ($_FILES["fileToUpload"]["name"] != "") {
    $target_dir = "../assets/img/user/";
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = $target_dir . $_SESSION["pic_user_id"] . '.' . end($temp);
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
    $pic = $_SESSION["pic_user_id"] . "." . end($temp);
} else {
    $pic = $_SESSION["tmpPicture"];
}

$sql = "update $database.user "
        . " set picture = '" . $pic . "' ,"
        . " fname='" . $_POST[fname_add] . "' ,"
        . " lname='" . $_POST[lname_add] . "' ,"
        . " phone='" . $_POST[phone_add] . "' ,"
        . " email='" . $_POST[mail_add] . "' ,"
        . " address = '" . $_POST[address1_add] . "', "
        . " zipcode = " . $_POST[address2_add] . ", "
        . " line = '" . $_POST[line_add] . "', "
        . " facebook = '" . $_POST[facebok_add] . "' "
        . " where id = " . $_SESSION["pic_user_id"];




if (mysql_query($sql)) {
    $_SESSION["useradmin"] = $_POST[fname_add] . " " . $_POST[lname_add];
    $_SESSION["pic_show"] = $pic;
    $_SESSION["err_editProfile"] = "FALSE";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_editProfile"] = "TRUE";
}

header("location:../editProfile.php");
