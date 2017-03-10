

<?php
if (isset($_SESSION["err_addteam"]))


if ($_SESSION["err_addteam"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddTeamSuccess" role="dialog">
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
if (isset($_SESSION["err_addteam"]))
if ($_SESSION["err_addteam"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddTeamFail" role="dialog">
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

$_SESSION["err_addteam"] = "";
?>








<?php
if (isset($_SESSION["TEAM_DELETE"]))
if ($_SESSION["TEAM_DELETE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteTeamSuccess" role="dialog">
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
} else if ($_SESSION["TEAM_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteTeamFail" role="dialog">
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
$_SESSION["TEAM_DELETE"] = "";
?>