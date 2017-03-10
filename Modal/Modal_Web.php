<?php
if ($_SESSION["TYPE_DELETEWEB"] == "Y") {
    ?>
    <div class="modal fade" id="myModalDeleteWebSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
} else if ($_SESSION["TYPE_DELETEWEB"] == "N") {
    ?>
    <div class="modal fade" id="myModalDeleteWebFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["TYPE_DELETEWEB"] = "";
?>




<div id="ShowAddWeb" class="modal hide fade" Style="top:<?=$_SESSION[top]?>px" data-width="760">
    <form action="/Control/Function/AddWeb.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-globe"></i> <b>+ <?= $_SESSION["_webadd"] //เพิ่มข้อมูลผู้ใช้งาน                   ?> </b> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:50px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-globe"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อเว็บไซต์" name="webname_add"   pattern="[^'\x22]+" required/>    
                        </div>




                    </div>
                    <div class="span6">
                        <div class="control-group">

                            <div class="controls">
                                <select name="web_type" class="span8 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: green;font-weight: bold">
                                    <option value="Y">Casino Online</option>
                                    <option value="N">Sport Betting</option>

                                </select>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"]?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"]?></spna> </button>
        </div>
    </form>


</div>

<?php
if (isset($_SESSION["err_addWeb"]))


if ($_SESSION["err_addWeb"] === "false") {
    ?>
    <div class="modal fade" id="myModalAddWebSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
if (isset($_SESSION["err_addWeb"]))
if ($_SESSION["err_addWeb"] === "true") {
    ?>
    <div class="modal fade" id="myModalAddWebFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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

$_SESSION["err_addWeb"] = "";
?>




<div id="ShowEditWeb" class="modal hide fade" Style="top:<?=$_SESSION[top]?>px" data-width="760">
    <form action="/Control/Function/EditWeb.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-globe"></i> <b>+ <?= $_SESSION["_webedit"] //เพิ่มข้อมูลผู้ใช้งาน                   ?> </b>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:50px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-globe"></i>
                            <input class="m-wrap " type="hidden" placeholder="รหัสเว็บไซต์" name="id_add" id="id_add" pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-globe"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อเว็บไซต์" name="webname_add" id="webname_add"   pattern="[^'\x22]+" required/>    
                        </div>




                    </div>
                    <div class="span6">
                        <div class="control-group">

                            <div class="controls">
                                <select name="web_type" id="web_type" class="span8 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: green;font-weight: bold">
                                    <option value="Y">Casino Online</option>
                                    <option value="N">Sport Betting</option>

                                </select>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
                     <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["action_save"]?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"]?></spna> </button>
        </div>
    </form>


</div>



<?php
if (isset($_SESSION["TYPE_UPDATEWEB"]))
if ($_SESSION["TYPE_UPDATEWEB"] === "Y") {
    ?>
    <div class="modal fade" id="myModalUpdateWebSuccess" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
} else if ($_SESSION["TYPE_UPDATEWEB"] == "N") {
    ?>
    <div class="modal fade" id="myModalUpdateWebFail" Style="top:<?=$_SESSION[top]?>px" role="dialog">
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
$_SESSION["TYPE_UPDATEWEB"] = "";
?>
