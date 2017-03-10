<?php
if (isset($_SESSION["err_editPass"]))
    if ($_SESSION["err_editPass"] == "FALSE") {
        ?>
        <div class="modal hide fade" id="myModalEditPassSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">

            <div class="notice notice-success">
                <strong>Notice</strong> <?= $_SESSION["alert_edit_pass"] ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>


        </div>
        <?php
    } else if ($_SESSION["err_editPass"] == "TRUE") {
        ?>
        <div class="modal hide fade" id="myModalEditPassFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <div class="notice notice-danger">
                    <strong>Notice</strong> <?= $_SESSION["alert_edit_pass"] ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>


        </div>

        <?php
    }
$_SESSION["err_editPass"] = "";
?>


<div id="ShowEditPass" class="modal hide fade" Style="top:280px" tabindex="-1" data-width="290" style="position: fixed; top:20%; left:50%;">
    <form action="/Control/Function/ChangePassword.php" method="post" >
        <div class="modal-header bg-grey">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-key"></i> <b><?= $_SESSION["_changepass"] ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:150px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span3">
                        <div class="input-icon left">
                            <i class=" icon-key"></i>
                            <input class="m-wrap " type="password" placeholder="Old Password" name="txt_old" id="txt_old" pattern="[^'\x22]+" required />    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-key"></i>
                            <input class="m-wrap " type="password" placeholder="New Password" name="txt_new1" id="txt_new1" pattern="[^'\x22]+" required />    
                        </div>
                        <div class="input-icon left">
                            <i class=" icon-key"></i>
                            <input class="m-wrap " type="password" placeholder="Confirm Pasword" name="txt_new2" id="txt_new2" pattern="[^'\x22]+" required />    
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue" ><span class="icon-save"></span> <spna Style="font-family: 'Open Sans', sans-serif;"><?= $_SESSION["_changepass"] ?></spna>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span><spna Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] ?></spna> </button> 
        </div>
    </form>


</div>

