<?php

session_start();
include '../ConnectDB/DB.php';

$image_ = false;


if ($_FILES["fileToUpload"]["name"] != "") {
    $target_dir = "../assets/img/con/";
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = $target_dir . $_POST[serial] . '.' . end($temp);
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
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
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
    $pic = $_POST[serial] . "." . end($temp);
} else {
    if (!$_SESSION["GetData"]) {
        $_SESSION["err_addWeb"] = "true";
        header("location:../webgame.php");
        exit(0);
    }
    $pic = $_SESSION["file_no"];
}







if (!$_SESSION["GetData"]) {
    $strSQL = "insert into webcontent (  i_id , s_detail_agent , s_detail_member ,d_create ,d_change) VALUES ( "
            . "" . $_POST['serial'] . ", "
            . "'" . $_POST['editorAgent'] . "', "
            . "'" . $pic . "', "
            . " now() , now() "
            . ") ";
    if (mysql_query($strSQL)) {
        $_SESSION["err_addWeb"] = "false";
    } else {
        $_SESSION["err_addWeb"] = "true";
    }
    header("location:../webgame.php");
} else {



    $strSQL = " update  webcontent "
            . " set s_detail_agent = '" . $_POST['editorAgent'] . "' , "
            . " s_detail_member = '" . $pic . "' ,  "
            . " d_change =  now()  "
            . " where i_id= " . $_POST['serial'] . "";
    if (mysql_query($strSQL)) {
        $_SESSION["err_addWeb"] = "false";
    } else {
        $_SESSION["err_addWeb"] = "true";
    }
    header("location:../webgame.php");
}