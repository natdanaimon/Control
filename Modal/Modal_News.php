

<?php
if (isset($_SESSION["err_addNews"]))


if ($_SESSION["err_addNews"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddNewsSuccess" role="dialog">
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
if (isset($_SESSION["err_addNews"]))
if ($_SESSION["err_addNews"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddNewsFail" role="dialog">
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

$_SESSION["err_addNews"] = "";
?>







<?php
if (isset($_SESSION["NEWS_DELETE"]))
if ($_SESSION["NEWS_DELETE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteNewsSuccess" role="dialog">
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
} else if ($_SESSION["NEWS_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteNewsSuccess" role="dialog">
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
$_SESSION["NEWS_DELETE"] = "";
?>




<?php
if ($_SESSION["TYPE_UPDATE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteUserSuccess" role="dialog">
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
} else if ($_SESSION["TYPE_UPDATE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteUserFail" role="dialog">
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
$_SESSION["TYPE_UPDATE"] = "";
?>

























<div id="ShowEditNews" class="modal hide fade" Style="top:<?=$_SESSION[top]?>px" tabindex="-1" data-width="840">
    <form action="/Control/Function/EditUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey" >

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b><?= $_SESSION["edit_news"] //แก้ไขข้อมูลผู้ใช้งาน        ?> </b> </h4>
        </div>
        <div class="modal-body" >

            <div class="input-icon left">
                <i class="icon-bullhorn"></i>
                <input class="m-wrap small" type="text" name="s_id" id="s_id"  pattern="[^'\x22]+" readonly="readonly">    
            </div>
            <div class="input-icon left">
                <i class="icon-bullhorn"></i>
                <input class="m-wrap large " type="text" name="s_topic" id="s_topic" placeholder="<?= $_SESSION["topic"] ?>"  pattern="[^'\x22]+" required>    
            </div>
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <textarea class="span12 ckeditor m-wrap" name="nag_edit_new" id="nag_edit_new" rows="6" ></textarea>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue"><span class="icon-bullhorn" > <?= $_SESSION["edit_news"] //บันทึก        ?>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <?= $_SESSION["action_close"] //ปิด        ?> </button>
        </div>
    </form>


</div>



