
<?php
if (isset($_SESSION["TYPE_UPDATE_W2U"]))
if ($_SESSION["TYPE_UPDATE_W2U"] === "Y") {
    ?>
    <div class="modal fade" id="myModalUpdateW2USuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
} else if ($_SESSION["TYPE_UPDATE_W2U"] == "N") {
    ?>
    <div class="modal fade" id="myModalUpdateW2UFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["TYPE_UPDATE_W2U"] = "";
?>
