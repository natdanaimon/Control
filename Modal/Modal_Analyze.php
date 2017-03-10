

<?php
include './ConnectDB/DB.php';
if (isset($_SESSION["err_addAnalyze"]))
    if ($_SESSION["err_addAnalyze"] === "false") {
        ?>
        <div class="modal fade" id="myModalAddAnalyzeSuccess" role="dialog">
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
if (isset($_SESSION["err_addAnalyze"]))
    if ($_SESSION["err_addAnalyze"] === "true") {
        ?>
        <div class="modal fade" id="myModalAddAnalyzeFail" role="dialog">
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

$_SESSION["err_addAnalyze"] = "";
?>








<?php
if (isset($_SESSION["ANALYZE_DELETE"]))
    if ($_SESSION["ANALYZE_DELETE"] === "Y") {
        ?>
        <div class="modal fade" id="myModalDeleteAnalyzeSuccess" role="dialog">
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
    } else if ($_SESSION["ANALYZE_DELETE"] == "N") {
        ?>
        <div class="modal fade" id="myModalDeleteAnalyzeFail" role="dialog">
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
$_SESSION["ANALYZE_DELETE"] = "";
?>







<br>
<div id="ShowEditAnalyze" class="modal hide fade"  data-width="760" data-hegiht="500px" Style="position: fixed; top:50%; left:50%;" >


    <form action="/Control/Function/EditAnalyze.php" method="post" enctype="multipart/form-data" id="modal_edit_ng">
        <div class="modal-header bg-blue">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b><?= $_SESSION["edit_analyze"] //แก้ไขข้อมูลผู้ใช้งาน                ?> </b> </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:600px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <input type="hidden" id="_id" name="_id">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["date_analyze"] ?></label>
                    </div>
                    <div class="span4" style="width: 250px">
                        <div class="input-append date date-picker"  data-date-viewmode="years">
                            <input class="m-wrap m-ctrl-medium date-picker" readonly  name="_date" id="_dates" size="16" type="text"  required="true"/>
                            <span class="add-on"><i class="icon-calendar"></i></span>
                        </div>
                    </div> 
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 90px">
                        <label class="control-label"><?= $_SESSION["time_analyze"] ?></label>
                    </div>
                    <div class="span4" style="width: 100px">

                        <div class="input-append bootstrap-timepicker-component">
                            <input class="m-wrap m-ctrl-small timepicker-24" type="text"  name="_time" id="_time"  readonly  style="width: 80px" required="true"/>
                            <span class="add-on"><i class="icon-time"></i></span>
                        </div>
                    </div>
                </div>




                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["league"] ?></label>
                    </div>


                    <div class="span4" >
                        <select id="_league" name="_league" class="_league" Style="width: 250px">
                            <option value="-1"selected="selected"><?= $_SESSION["select_league"] ?></option>
                            <?php
                            $sql = " SELECT  *  FROM $database.league  order by id     ";
                            $objQuery = mysql_query($sql);

                            while ($objResult = mysql_fetch_array($objQuery)) {
                                ?>
                                <option value="<?= $objResult["id"] ?>"><?= $objResult["name"] ?></option>

                            <?php } ?>
                        </select>

                    </div>

                </div>
                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["home_team"] ?></label>
                    </div>
                    <div class="span4" style="width: 510px">
                        <select id="_state" name="_state" class="_state"  Style="width: 250px">
                            <option value="-1" selected="selected"><?= $_SESSION["select_team"] ?></option>
                        </select>
                        <div class="input-icon left" > 
                            <i class="icon-edit"></i>
                            <input class="m-wrap  " Style="width:210px" type="text" name="_state_msg" id="_state_msg" placeholder="<?= $_SESSION["last_home"] ?>"  pattern="[^'\x22]+" >    
                        </div>
                    </div>

                </div>







                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["away_team"] ?></label>
                    </div>
                    <div class="span4" style="width: 510px">
                        <select id="_state1" name="_state1" class="_state1"  Style="width: 250px">
                            <option  value="-1"selected="selected"><?= $_SESSION["select_team"] ?></option>
                        </select>
                        <div class="input-icon left" > 
                            <i class="icon-edit"></i>
                            <input class="m-wrap  " Style="width:210px" type="text" name="_state1_msg" id="_state1_msg" placeholder="<?= $_SESSION["last_away"] ?>"  pattern="[^'\x22]+" >    
                        </div>
                    </div>
                </div>






                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["price"] ?></label>
                    </div>
                    <div class="span4" style="width: 510px">

                        <div class="input-icon left" > 
                            <i class="icon-money"></i>
                            <input class="m-wrap  " Style="width:210px" type="text" name="_price" id="_price" placeholder="<?= $_SESSION["price"] ?>"  pattern="[^'\x22]+" >    
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["score"] ?></label>
                    </div>
                    <div class="span4" style="width: 510px">

                        <div class="input-icon left" > 
                            <i class=" icon-globe"></i>
                            <input class="m-wrap  " Style="width:210px" type="text" name="_score" id="_score" pattern="[^'\x22]+" placeholder="<?= $_SESSION["score"] ?>"  pattern="[^'\x22]+" >    
                        </div>
                    </div>

                </div>




                <div class="row-fluid">
                    <div Style="width: 80px">
                    </div>
                    <div class="span2" style="width: 130px">
                        <label class="control-label"><?= $_SESSION["attitude"] ?></label>
                    </div>
                    <div class="span6" style="width: 600px">
                        <textarea class="medium m-wrap" rows="4" pattern="[^'\x22]+" placeholder="<?= $_SESSION["attitude"] ?>" Style="width: 600px" name="_detail" id="_detail"></textarea>

                    </div>

                </div>


            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue"><span class="icon-save" > <?= $_SESSION["action_save"] //บันทึก                ?>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <?= $_SESSION["action_close"] //ปิด                ?> </button>
        </div>
    </form>


</div>





<?php
if (isset($_SESSION["ANALYZE_UPDATE"]))
    if ($_SESSION["ANALYZE_UPDATE"] === "Y") {
        if (isset($_SESSION["alert_edit"]))
            
            ?>
        <div class="modal fade" id="myModalEditAnalyzeSucc" role="dialog">
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
    } else if ($_SESSION["ANALYZE_UPDATE"] == "N") {
        ?>
        <div class="modal fade" id="myModalEditAnalyzeFail" role="dialog">
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
$_SESSION["ANALYZE_UPDATE"] = "";
?>
