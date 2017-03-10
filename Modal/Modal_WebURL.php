<?php
if ($_SESSION["TYPE_DELETE_URL"] == "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteWEBURLSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
} else if ($_SESSION["TYPE_DELETE_URL"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteWEBURLFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
$_SESSION["TYPE_DELETE_URL"] = "";
?>




<div id="ShowAddURL" class="modal hide fade" Style="top:400px" tabindex="-1" data-width="760">
    <form action="/Control/Function/AddWebURL.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-road"></i> <b>+ <?= $_SESSION["_add_weburl"] //เพิ่มข้อมูลผู้ใช้งาน                                                    ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:105px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="control-group">
                            <div class="controls">

                                <select  id="select2_sample44" class="span6" name="user_search" Style="width: 350px" required>
                                    <?php
                                    $sql = " select * from web ";
                                    $objQuery = mysql_query($sql);

                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                        ?>
                                        <option value="<?= $objResult["i_id"] ?>"><?= $objResult["s_name"] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="control-group">
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-link"></i>
                                    <input class="m-wrap " type="text" placeholder="ลิงค์เว็บไซต์" name="weburl_add"   pattern="[^'\x22]+" required Style="width: 300px"/>    
                                </div>
                            </div>

                        </div>


                        <div class="control-group">

                            <div class="controls">
                                <select name="url_type" class="span6 "  tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="A">Agent</option>
                                    <option value="M">Member</option>

                                </select>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>

<?php
if (isset($_SESSION["err_addWebURL"]))
    if ($_SESSION["err_addWebURL"] === "false") {
        ?>
        <div class="modal fade" id="myModalAddWebURLSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
if (isset($_SESSION["err_addWebURL"]))
    if ($_SESSION["err_addWebURL"] === "true") {
        ?>
        <div class="modal fade" id="myModalAddWebURLFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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

$_SESSION["err_addWebURL"] = "";
?>




<div id="ShowEditURL" class="modal hide fade"  Style="top:400px" tabindex="-1" data-width="760">
    <form action="/Control/Function/EditWebURL.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-road"></i> <b>+ <?= $_SESSION["_edit_weburl"] //เพิ่มข้อมูลผู้ใช้งาน                                                    ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:105px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <input class="m-wrap " type="hidden"  name="url_id"  id="url_id"/>    
                        <div class="control-group">
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-globe"></i>
                                    <input class="m-wrap " type="text" placeholder="ชื่อเว็บไซต์" name="url_edit"  id="url_edit" pattern="[^'\x22]+" required disabled="disabled"/>    
                                </div>
                            </div>

                        </div>
                        <!--                        <div class="control-group">
                                                    <div class="controls">
                                                      
                                                        <select  id="select2_sample4" class="span6" name="user_search" Style="width: 350px" required>
                        <?php
                        $sql = " select * from web ";
                        $objQuery = mysql_query($sql);

                        while ($objResult = mysql_fetch_array($objQuery)) {
                            ?>
                                                                                        <option value="<?= $objResult["i_id"] ?>"><?= $objResult["s_name"] ?></option>
                                                
                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>-->




                    </div>
                    <div class="span6">
                        <div class="control-group">
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-link"></i>
                                    <input class="m-wrap " type="text" placeholder="ลิงค์เว็บไซต์" name="weburl_add"  id="weburl_add" pattern="[^'\x22]+" required Style="width: 300px"/>    
                                </div>
                            </div>

                        </div>


                        <div class="control-group">

                            <div class="controls">
                                <select name="url_type" class="span6 " id="url_type" tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="A">Agent</option>
                                    <option value="M">Member</option>

                                </select>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>



<?php
if (isset($_SESSION["TYPE_UPDATEWEBURL"]))
    if ($_SESSION["TYPE_UPDATEWEBURL"] === "Y") {
        ?>
        <div class="modal fade" id="myModalUpdateWebURLSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
    } else if ($_SESSION["TYPE_UPDATEWEBURL"] == "N") {
        ?>
        <div class="modal fade" id="myModalUpdateWebURLFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
$_SESSION["TYPE_UPDATEWEBURL"] = "";
?>
