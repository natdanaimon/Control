<?php
include '../ConnectDB/DB.php';
session_start();
$to = $mail_to;
$subject = $_POST[subject];

$message = "
<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
        <h1 Style='color: goldenrod'>VIPSBO888.com</h1>

        <h4><strong>เรื่องที่ติดต่อ :</strong> $_POST[subject]</h4>
        <h4><strong>รายละเอียด </strong> </h4>
        <p>$_POST[msg]</p>
        <hr>
        <h4><strong>ข้อมูลผู้ติดต่อ </strong> </h4>
        <table>

            <tr>
                <td>Username</td>
                <td>: $_SESSION[user]</td>
            </tr>
            <tr>
                <td>ชื่อ - นามสกุล</td>
                <td>: $_SESSION[useradmin]</td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>: $_SESSION[mail]</td>
            </tr>
            <tr>
                <td>เบอร์โทรศัพท์</td>
                <td>: $_SESSION[phone]</td>
            </tr>
        </table>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <VIPSBO888.com>' . "\r\n";



$status = mail($to, $subject, $message, $headers);

if ($status) {
    $_SESSION["TYPE_SENDMAIL"] = "Y";
} else {
    $_SESSION["TYPE_SENDMAIL"] = "N";
}
header("location: ../contact.php");
