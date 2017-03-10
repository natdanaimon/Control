<?php
@session_start();
?>
<div id="PicProfile" class="modal hide fade" Style="top:300px" tabindex="-1" data-width="300">
    <form action="/Control/Function/UpdateUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-grey ">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-picture"></i> <b> <?= $_SESSION["_changepic"] ?> </b> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="controls">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" name="fileToUpload" id="fileToUpload"/></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
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
if (isset($_SESSION["err_addP"]))
    if ($_SESSION["err_addP"] === "false") {
        ?>
        <div class="modal fade" id="myModalPictureSuccess" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-success">
                        <strong>Notice</strong> <?= $_SESSION["alert_add"] ?>
                    </div>
                </div>

            </div>
        </div>
        <script>alert("Update Picture Completed");</script>
        <META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.php">
        <?php
    }
?>
<?php
if (isset($_SESSION["err_addP"]))
    if ($_SESSION["err_addP"] === "true") {
        ?>
        <div class="modal fade" id="myModalPictureFail" Style="top:<?= $_SESSION[top] ?>px" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-danger">
                        <strong>Notice</strong> <?= $_SESSION["alert_error"] ?>
                    </div>
                </div>

            </div>
        </div>
        <script>alert("Update Picture Failed");</script>

        <?php
    }

$_SESSION["err_addP"] = "";
?>