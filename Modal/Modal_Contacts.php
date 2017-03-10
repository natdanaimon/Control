<?php
if ($_SESSION["TYPE_SENDMAIL"] == "Y") {
    ?>
    <div class="modal fade" id="myModalSendMailSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-success">
                    <strong>Notice</strong> <?= $_SESSION["_alert_mail_success"] ?>
                </div>
            </div>

        </div>
    </div>
    <?php
} else if ($_SESSION["TYPE_SENDMAIL"] == "N") {
    ?>
    <div class="modal fade" id="myModalSendMailFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-danger">
                    <strong>Notice</strong>  <?= $_SESSION["_alert_mail_fail"] ?>
                </div>
            </div>

        </div>
    </div>

    <?php
}
$_SESSION["TYPE_SENDMAIL"] = "";
?>