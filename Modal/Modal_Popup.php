

<?php
if (isset($_SESSION["err_addpopup"]))


if ($_SESSION["err_addpopup"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddPOPUPSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-success">
                    <strong>Notice</strong> <?= $_SESSION["alert_add"] ?>
                </div>
            </div>

        </div>
    </div>
    <?php
}
?>
<?php
if (isset($_SESSION["err_addpopup"]))
if ($_SESSION["err_addpopup"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddPOPUPFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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

$_SESSION["err_addpopup"] = "";
?>







<?php
if (isset($_SESSION["POPUP_DELETE"]))
if ($_SESSION["POPUP_DELETE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeletePOPUPSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="notice notice-success">
                    <strong>Notice</strong> <?= $_SESSION["alert_delete"] ?>
                </div>
            </div>

        </div>
    </div>
    <?php
} else if ($_SESSION["POPUP_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeletePOPUPSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["POPUP_DELETE"] = "";
?>













