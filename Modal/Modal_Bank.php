

<?php
if (isset($_SESSION["err_addBank"]))


if ($_SESSION["err_addBank"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddBankSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
if (isset($_SESSION["err_addBank"]))
if ($_SESSION["err_addBank"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddBankFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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

$_SESSION["err_addBank"] = "";
?>







<?php
if (isset($_SESSION["BANK_DELETE"]))
if ($_SESSION["BANK_DELETE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteBankSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
} else if ($_SESSION["BANK_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteBankSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["BANK_DELETE"] = "";
?>













