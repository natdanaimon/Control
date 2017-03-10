
<?php
if (isset($_SESSION["err_editProfile"]))
if ($_SESSION["err_editProfile"] == "FALSE") {
    ?>
    <div class="modal fade" id="myModalEditProfileClientSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
} else if ($_SESSION["err_editProfile"] == "TRUE") {
    ?>
    <div class="modal fade" id="myModalEditProfileClientFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["err_editProfile"] = "";
?>
