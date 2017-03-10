<?php
@session_start();
//

if (isset($_SESSION["err_addusersub"]))
    if ($_SESSION["err_addusersub"] === "false") {
        if (isset($_SESSION["alert_add"]))
            
            ?>
        <div class="modal fade" id="myModalAddUserSubSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
if (isset($_SESSION["err_addusersub"]))
    if ($_SESSION["err_addusersub"] === "true") {
        if (isset($_SESSION["alert_error"]))
            
            ?>
        <div class="modal fade" id="myModalAddUserSubFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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

$_SESSION["err_addusersub"] = "";
?>

<?php
if (isset($_SESSION["USERSUB_DELETE"]))
    if ($_SESSION["USERSUB_DELETE"] === "Y") {
        if (isset($_SESSION["alert_delete"]))
            
            ?>
        <div class="modal fade" id="myModalDeleteUserSubSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
    } else if ($_SESSION["USERSUB_DELETE"] == "N") {
        ?>
        <div class="modal fade" id="myModalDeleteUserSubFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
$_SESSION["USERSUB_DELETE"] = "";
?>