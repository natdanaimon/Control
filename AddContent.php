<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
ACTIVEPAGES(3);
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.2
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?= $_SESSION["title"]; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
        <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">

        <?php include './common/menu_header.php'; ?>



        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php include './common/menu_left.php'; ?>
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE CONTAINER-->

                <div class="container-fluid">
                    <form action="Function/ContentHTML.php" method="post"  enctype="multipart/form-data">
                        <!-- BEGIN PAGE HEADER-->
                        <div class="row-fluid">
                            <div class="span12">

                                <h3 class="page-title">
                                    <?= $_SESSION["_setting"] ?> <small></small>
                                </h3>
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="index.php">   <?= $_SESSION["_home"] ?></a> 
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li><a href="#">   <?= $_SESSION["_setting"] ?></a>
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li><a href="webgame.php">   <?= $_SESSION["_web"] ?></a>
                                    </li>

                                    <!--                                <li class="pull-right no-text-shadow">
                                                                        <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                                                            <i class="icon-calendar"></i>
                                                                            <span></span>
                                                                            <i class="icon-angle-down"></i>
                                                                        </div>
                                                                    </li>-->
                                </ul>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <?php
                        include './ConnectDB/DB.php';

                        $sql = " select * from webcontent where i_id = $_GET[id] LIMIT 1";
                        $_SESSION["GetData"] = FALSE;
                        $Agent = "";
                        $Member = "";
                        $KeyID = $_GET[id];
                        $objQuery = mysql_query($sql);
                        while ($objResult = mysql_fetch_array($objQuery)) {

                            $Agent = $objResult["s_detail_agent"];
                            $Member = $objResult["s_detail_member"];
                            $_SESSION["file_no"] = $objResult["s_detail_member"];
                            $_SESSION["GetData"] = TRUE;
                        }
                        ?>
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="row-fluid">
                            <div class="span12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="input-icon left">

                                            <input class="m-wrap large " type="hidden" name="serial" value="<?= $KeyID ?>" >    
<!--                                            <input class="m-wrap large " type="text" name="s_topic" id="s_topic" value="Content"  pattern="[^'\x22]+" disabled="disabled">    -->
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">


                                                    <?php if ($Member == "") { ?>
                                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                        </div>                                                       
                                                    <?php } else { ?>
                                                        <div class="fileupload-new thumbnail" >
                                                            <img src="assets/img/con/<?= $Member ?>" />
                                                        </div>
                                                    <?php } ?>


                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                                            <span class="fileupload-exists">Change</span>
                                                      
                                                                <input type="file" class="default" name="fileToUpload" id="fileToUpload"/>
                                                            
                                                        </span>
                                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">




                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <textarea class="span12 ckeditor m-wrap" name="editorAgent" id="editor1" rows="6" ><?= $Agent ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                        <div class="row-fluid">
                            <div class="span12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <!--                                <div class="row-fluid">
                                                                    <div class="span12">
                                                                        <div class="input-icon left">
                                                                            <i class="icon-trello"></i>
                                                                            <input class="m-wrap large " type="text" name="s_topic" id="s_topic" value="Member"  pattern="[^'\x22]+"  disabled="disabled">    
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                                <div class="row-fluid">
                                    <div class="span12">




                                        <!--                                        <div class="control-group">
                                                                                    <label class="control-label"></label>
                                                                                    <div class="controls">
                                                                                        <textarea class="span12 ckeditor m-wrap" name="editorMember" id="editor1" rows="6" ><?= $Member ?></textarea>
                                                                                    </div>
                                                                                </div>-->
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue "><span class="icon-bullhorn"></span> <?= $_SESSION["_btn_content"] ?></button>



                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- END PAGE CONTAINER-->    
        </div>
        <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->







    <?php include './common/menu_footer.php'; ?>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/excanvas.min.js"></script>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->   
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->








    <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
    <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   

    <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
    <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>











    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/table-managed.js"></script>     
    <script>
        jQuery(document).ready(function () {
            App.init();
            TableManaged.init();
        });
    </script>
    <?php
    ?>
    <script type="text/javascript">
        $('#myModalDeleteWebSuccess').modal('show');
        $('#myModalDeleteWebFail').modal('show');

        $('#myModalAddWebSuccess').modal('show');
        $('#myModalAddWebFail').modal('show');

        $('#myModalUpdateWebSuccess').modal('show');
        $('#myModalUpdateWebFail').modal('show');




        function ShowAddWeb() {
            $('#ShowAddWeb').modal('show');
        }


        function showHint(str) {
            //  alert(str);
            if (str.length == 0) {
                //document.getElementById("recipient-name").value = "";

                return;
            } else {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var result = xmlhttp.responseText.split(",");
                        //alert(result[4]);
                        document.getElementById("id_add").value = result[0];
                        document.getElementById("webname_add").value = result[1];
                        document.getElementById("web_type").value = result[2];

                    }
                }
                xmlhttp.open("GET", "ajax/getDataWeb.php?id=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</body>
<!-- END BODY -->
</html>