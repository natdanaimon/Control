<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body Style='background-color: #f0f8ff'>
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