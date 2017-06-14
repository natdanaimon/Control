

<?php
@session_start();
//

if (isset($_SESSION["err_adduser"]))
    if ($_SESSION["err_adduser"] === "false") {
        if (isset($_SESSION["alert_add"]))
            
            ?>
        <div class="modal fade" id="myModalAddUserSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
if (isset($_SESSION["err_adduser"]))
    if ($_SESSION["err_adduser"] === "true") {
        if (isset($_SESSION["alert_error"]))
            
            ?>
        <div class="modal fade" id="myModalAddUserFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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

$_SESSION["err_adduser"] = "";
?>







<?php
if (isset($_SESSION["TYPE_DELETE"]))
    if ($_SESSION["TYPE_DELETE"] === "Y") {
        if (isset($_SESSION["alert_delete"]))
            
            ?>
        <div class="modal fade" id="myModalDeleteUserSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
    } else if ($_SESSION["TYPE_DELETE"] == "N") {
        ?>
        <div class="modal fade" id="myModalDeleteUserFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
$_SESSION["TYPE_DELETE"] = "";
?>




<?php
if (isset($_SESSION["TYPE_UPDATE"]))
    if ($_SESSION["TYPE_UPDATE"] === "Y") {
        if (isset($_SESSION["alert_edit"]))
            
            ?>
        <div class="modal fade" id="myModalDeleteUserSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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
        <div class="modal fade" id="myModalDeleteUserFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
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









<div id="ShowAddUser_baclup" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="400">
    <form action="/Control/Function/AddUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey ">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b>+ <?= $_SESSION["add_user"] //เพิ่มข้อมูลผู้ใช้งาน                   ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:140px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap  " type="text" placeholder="ชื่อผู้ใช้งาน" name="user_add"   pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อ" name="fname_add"  pattern="[^'\x22]+" required/>    
                        </div>

                        <div class="input-icon left">
                            <i class="icon-picture"></i>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสผ่าน" name="pass_add"   pattern="[A-Za-z0-9]{4,12}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="นามสกุล" name="lname_add"  pattern="[^'\x22]+"  required/>    
                        </div>

                        <div class="control-group">

                            <div class="controls">
                                <select name="status" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="1">Type (User)</option>
                                    <option value="0">Type (Admin)</option>

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



<div id="ShowAddUser" class="modal hide fade" Style="top:140px" tabindex="-1" data-width="760">
    <form action="/Control/Function/AddUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey ">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b>+ <?= $_SESSION["add_user"] //เพิ่มข้อมูลผู้ใช้งาน                   ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:350px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap  " type="text" placeholder="ชื่อผู้ใช้งาน" name="user_add"   pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left" style="display: nones;">
                            <i class="icon-user"></i>
                            <input class="m-wrap  " type="text" placeholder="Map Excel" name="map_excel"   pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อ" name="fname_add"  pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-phone"></i>
                            <input class="m-wrap " type="text" placeholder="เบอร์โทรศัพท์ 000-000-0000" name="phone_add"   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-home"></i>
                            <input class="m-wrap " type="text" placeholder="ที่อยู่" name="address1_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-flickr"></i>
                            <input class="m-wrap " type="text" placeholder="LINE ID" name="line_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select name="type" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: green;font-weight: bold">
                                    <option value="Y">Active</option>
                                    <option value="N">Cancel</option>

                                </select>
                            </div>
                        </div>
                        <div class="input-icon left">
                            <i class="icon-picture"></i>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสผ่าน" name="pass_add"   pattern="[A-Za-z0-9]{4,12}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="นามสกุล" name="lname_add"  pattern="[^'\x22]+"  required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-envelope"></i>
                            <input class="m-wrap " type="text" placeholder="อีเมล์" name="mail_add" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-credit-card"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสไปรษณีย์" name="address2_add"  pattern="[0-9]{5}"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-facebook-sign"></i>
                            <input class="m-wrap " type="text" placeholder="Facebook" name="facebok_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select name="status" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="1">Type (User)</option>
                                    <option value="0">Type (Admin)</option>

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
















<div id="ShowEditUser" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="760">
    <form action="/Control/Function/EditUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b><?= $_SESSION["edit_user"] //แก้ไขข้อมูลผู้ใช้งาน                   ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:320px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อผู้ใช้งาน" name="user_add"  id="user_add"  pattern="[^'\x22]+" readonly="true"/>    
                        </div>
                        <div class="input-icon left" style="display: nones;">
                            <i class="icon-user"></i>
                            <input class="m-wrap  " type="text" placeholder="Map Excel" name="map_excel" id="map_excel"   pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อ" name="fname_add"  id="fname_add"  pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-phone"></i>
                            <input class="m-wrap " type="text" placeholder="เบอร์โทรศัพท์ 000-000-0000" name="phone_add" id="phone_add"   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  />    
                        </div>

                        <div class="input-icon left">
                            <i class="icon-home"></i>
                            <input class="m-wrap " type="text" placeholder="ที่อยู่" name="address1_add" id="address1_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-flickr"></i>
                            <input class="m-wrap " type="text" placeholder="LINE ID" name="line_add" id="line_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select name="type" id="type" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: green;font-weight: bold">
                                    <option value="Y">Active</option>
                                    <option value="N">Cancel</option>

                                </select>
                            </div>
                        </div>







                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสผ่าน" name="pass_add"  id="pass_add" pattern="[A-Za-z0-9]{4,12}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="นามสกุล" name="lname_add" id="lname_add"  pattern="[^'\x22]+"  required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-envelope"></i>
                            <input class="m-wrap " type="text" placeholder="อีมล์" name="mail_add" id="mail_add"       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  />    
                        </div>


                        <div class="input-icon left">
                            <i class="icon-credit-card"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสไปรษณีย์" name="address2_add"  id="address2_add" pattern="[0-9]{5}"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-facebook-sign"></i>
                            <input class="m-wrap " type="text" placeholder="Facebook" name="facebok_add" id="facebok_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select id="status" name="status" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="1">Type (User)</option>
                                    <option value="0">Type (Admin)</option>

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


<div id="ConfirmClearAllMoney" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="760">
    <form action="/Control/Function/ClearMoney.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-usd"></i> <b><?= $_SESSION["clear"] //แก้ไขข้อมูลผู้ใช้งาน                   ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:50px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <input type="hidden" id="idUser1" name="idUser1">
                    <div class="span12">
                        <span class="label-danger" id="txtClear"><?= $_SESSION["txtClearALL"] ?></span>
                    </div>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["clear"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>


<div id="ConfirmClearMoney" class="modal hide fade" Style="top:<?= $_SESSION[top] ?>px" tabindex="-1" data-width="760">
    <form action="/Control/Function/ClearMoney.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-usd"></i> <b><?= $_SESSION["clear"] //แก้ไขข้อมูลผู้ใช้งาน                   ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:50px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <input type="hidden" id="idUser2" name="idUser2">
                    <div class="span12">
                        <span class="label-danger" id="txtClear"><?= $_SESSION["txtClear"] ?></span>
                    </div>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["clear"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>
