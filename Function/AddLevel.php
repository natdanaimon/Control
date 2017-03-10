<?php
session_start();
include '../ConnectDB/DB.php';
?>
<?php

$strSQL = "SELECT * FROM $database.level "
        . "WHERE type = '" . $_POST['level_add'] . "' "
        . "or " . $_POST['score_start_add'] . " between score_start and score_end "
        . "or " . $_POST['score_end_add'] . " between score_start and score_end";

//echo $strSQL;

$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);


if ($objResult || ($_POST['score_start_add'] >$_POST['score_end_add'])) {
    $_SESSION["err_addlevel"] = "true";
    header("location:/Control/level.php");
    //echo $objResult["type"];
    exit();
}









//$conn = mysqli_connect($hostname, $username, $password, $database);
$image_ = false;


if ($_FILES["fileToUpload"]["name"] != "") {
    $target_dir = "../assets/img_level/";
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = $target_dir . $_POST['score_start_add'] . '.' . end($temp);
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
    $pic = $_POST['score_start_add'] . "." . end($temp);
} else {
    $pic = "Default.png";
}

$sql = "insert into $database.level ( score_start , score_end , type , number , img) VALUES ( "
        . "" . $_POST['score_start_add'] . ", "
        . "" . $_POST['score_end_add'] . ", "
        . "'" . $_POST['level_add'] . "', "
        . "'" . $_POST['icon_add'] . "', "
        . "'" . $pic . "' "
        . ") ";

if (mysql_query($sql)) {
    $_SESSION["err_addlevel"] = "false";
} else {
//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION["err_addlevel"] = "true";
}

header("location:/Control/level.php");
