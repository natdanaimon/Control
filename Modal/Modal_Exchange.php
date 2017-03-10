<?php
if (isset($_SESSION["EXCHANGE_UPDATE"]))
if ($_SESSION["EXCHANGE_UPDATE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalUpdateExchangeSuccess" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-success">
                    <strong>Notice</strong> <?= $_SESSION["alert_edit"] ?>
                </div>
            </div>

        </div>
    </div>
    <?php
    
} else if ($_SESSION["EXCHANGE_UPDATE"] == "N") {
    ?>
    <div class="modal fade" id="myModalUpdateExchangeFail" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-danger">
                    <strong>Notice</strong> <?= $_SESSION["alert_error"] ?>
                </div>
            </div>

        </div>
    </div>

    <?php
}
$_SESSION["EXCHANGE_UPDATE"] = "";
?>