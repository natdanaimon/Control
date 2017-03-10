<?php
if (isset($_SESSION["err_addlevel"]))
if ($_SESSION["err_addlevel"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddLevelSuccess" role="dialog">
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
if (isset($_SESSION["err_addlevel"]))
if ($_SESSION["err_addlevel"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddLevelFail" role="dialog">
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

$_SESSION["err_addlevel"] = "";
?>







<?php
if (isset($_SESSION["LEVEL_DELETE"]))
if ($_SESSION["LEVEL_DELETE"] == "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteLevelSuccess" role="dialog">
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
} else if ($_SESSION["LEVEL_DELETE"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteLevelFail" role="dialog">
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
$_SESSION["LEVEL_DELETE"] = "";
?>








<?php
if (isset($_SESSION["LEVEL_UPDATE"]))
if ($_SESSION["LEVEL_UPDATE"] === "Y") {
    ?>
    <div class="modal fade" id="myModalUpdateLevelSuccess" role="dialog">
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
} else if ($_SESSION["LEVEL_UPDATE"] == "N") {
    ?>
    <div class="modal fade" id="myModalUpdateLevelFail" role="dialog">
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
$_SESSION["LEVEL_UPDATE"] = "";
?>













<div id="ShowAddLevel" class="modal hide fade" tabindex="-1" data-width="760">
    <form action="/Control/Function/AddLevel.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-green">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-bar-chart"></i> <b>+ <?= $_SESSION["add_level"] ?> </b> </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:160px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class=" icon-flag"></i>
                            <input class="m-wrap " type="text" placeholder="ตำแหน่ง" name="level_add"   pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-trophy"></i>
                            <input class="m-wrap " type="text" placeholder="คะแนนเริ่มต้น" name="score_start_add"  pattern="[0-9]{1,7}" required/>    
                        </div>


                        <div class="input-icon left">
                            <i class="icon-picture"></i>
                            <input type="file" name="fileToUpload" id="fileToUpload" required />
                        </div>
                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-list-ol"></i>
                            <input class="m-wrap " type="text"  placeholder="จำนวณไอคอน" name="icon_add"   pattern="[0-9]{1,5}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-trophy"></i>
                            <input class="m-wrap " type="text" placeholder="คะแนนสิ้นสุด" name="score_end_add"  pattern="[0-9]{1,7}"  required/>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue"><span class="icon-save" > <?= $_SESSION["action_save"] //บันทึก       ?>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <?= $_SESSION["action_close"] //ปิด       ?> </button>
        </div>
    </form>


</div>






<div id="ShowEditLevel" class="modal hide fade" tabindex="-1" data-width="760">
    <form action="/Control/Function/EditLevel.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-green">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-bar-chart"></i> <b> <?= $_SESSION["edit_level"] ?> </b> </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:100px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class=" icon-flag"></i>
                            <input class="m-wrap " type="text" placeholder="ตำแหน่ง" name="level_add" id="level_add"  pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-trophy"></i>
                            <input class="m-wrap " type="text" placeholder="คะแนนเริ่มต้น" name="score_start_add" id="score_start_add" pattern="[0-9]{1,7}"  readonly="true"/>    
                        </div>


                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-list-ol"></i>
                            <input class="m-wrap " type="text"  placeholder="จำนวณไอคอน" name="icon_add"  id="icon_add" pattern="[0-9]{1,5}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-trophy"></i>
                            <input class="m-wrap " type="text" placeholder="คะแนนสิ้นสุด" name="score_end_add"  id="score_end_add" pattern="[0-9]{1,7}"  required/>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue"><span class="icon-save" > <?= $_SESSION["action_save"] //บันทึก       ?>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <?= $_SESSION["action_close"] //ปิด       ?> </button>
        </div>
    </form>


</div>


