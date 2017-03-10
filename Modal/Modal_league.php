

<?php
if (isset($_SESSION["err_addleague"]))


if ($_SESSION["err_addleague"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddLeagueSuccess" role="dialog">
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
if (isset($_SESSION["err_addleague"]))
if ($_SESSION["err_addleague"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddLeagueFail" role="dialog">
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

$_SESSION["err_addleague"] = "";
?>








<?php
if (isset($_SESSION["LEAGUE_DELETE"]))
if ($_SESSION["LEAGUE_DELETE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteLeagueSuccess" role="dialog">
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
} else if ($_SESSION["LEAGUE_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteLeagueFail" role="dialog">
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
$_SESSION["LEAGUE_DELETE"] = "";
?>