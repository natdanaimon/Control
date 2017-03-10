<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
ACTIVEPAGES(5);
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
        <!--        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
                <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
                 END GLOBAL MANDATORY STYLES 
                 BEGIN PAGE LEVEL STYLES 
                <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
                <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
                 END PAGE LEVEL STYLES 
                <link rel="shortcut icon" href="favicon.ico" />-->

        <link rel="shortcut icon" href="favicon.ico" />



        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/clockface/css/clockface.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
        <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />










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
                                <li><a href="bank2user.php">   <?= $_SESSION["_bank2user"] ?></a>
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

                    $sql = " select * from $database.user where status > 0";
                    $objQuery = mysql_query($sql);
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-credit-card"></i><?= $_SESSION["_bank2user"] ?></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                                        <!--                                        <a href="javascript:;" class="reload"></a>-->
                                        <!--                                        <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">

                                        <form method="post" action="bank2user.php?search=search">
                                            <span class="span3 m-wrap " align="right"></span>
                                            <div class="control-group">
                                                <div class="controls">

                                                    <select  id="select2_sample4" class="span4 select2" name="user_search">
                                                        <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                            <option 
                                                            <?php
                                                            if ($_GET[search] == "search") {
                                                                if ($objResult["user"] == $_POST[user_search]) {
                                                                    echo "selected='selected'";
                                                                }
                                                            }
                                                            ?>
                                                                value="<?= $objResult["user"] ?>"><?= $objResult["user"] ?> (<?= $objResult["fname"] . " - " ?><?= $objResult["lname"] ?>)</option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            &nbsp;	&nbsp;
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" class="btn blue" onclick="ShowAddUser();">
                                                    <?= $_SESSION["_search_user"] ?> <i class="icon-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>




                            </div>
                        </div>


                        <?php if ($_GET[search] == "search") { ?>
                            <div class="span12">
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form method="post" action="Function/Bank2User.php">

                                        <div class="span1">
                                            <div class="input-icon left">
                                                <i class="icon-user"></i>
                                                <input class="m-wrap blue" type="text" placeholder="ชื่อผู้ใช้งาน"    pattern="[^'\x22]+" value="<?= $_POST["user_search"] ?>" required disabled="true"/>    
                                                <input type="hidden" name="user_add" value="<?= $_POST["user_search"] ?>"/> 
                                            </div>
                                        </div>
                                        <div class="span1">
                                            <div class="input-icon left">
                                            </div>
                                        </div>

                                        <?php
                                        $strSqlCheck = "select bank_name from bank group by bank_name";


                                        $objQueryCheckGroup = mysql_query($strSqlCheck);
                                        while ($objResultGroup = mysql_fetch_array($objQueryCheckGroup)) {
                                            if ($objResultGroup["bank_name"] == "kbank") {
                                                $kbank = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "bbl") {
                                                $bbl = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "scb") {
                                                $scb = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "ktb") {
                                                $ktb = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "bay") {
                                                $bay = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "tmb") {
                                                $tmb = TRUE;
                                            }
                                            if ($objResultGroup["bank_name"] == "gsb") {
                                                $gsb = TRUE;
                                            }
                                        }
                                  
                                        ?>


                                        <div class="span8" align="center">
                                            <div class="control-group">

                                                <div class="controls" >
                                                    <select multiple="multiple" id="my_multi_select2" name="my_multi_select2[]" >

                                                        <?php if ($kbank) { ?>
                                                            <optgroup  label="ธนาคารกสิกรไทย (KBANK)">
                                                                <?php
                                                                $strSql = "";
                                                                $strSql .= " SELECT ";
                                                                $strSql .= "  b.*, ";
                                                                $strSql .= "  b2u.i_id ref_id, ";
                                                                $strSql .= "  b2u.s_user ";
                                                                $strSql .= " FROM ";
                                                                $strSql .= "  bank b ";
                                                                $strSql .= " LEFT JOIN ";
                                                                $strSql .= "  bank2user b2u ON b2u.i_id = b.id AND b2u.s_user = '" . $_POST["user_search"] . "' ";
                                                                $strSql .= " LEFT JOIN $database.user ";
                                                                $strSql .= "  u ON u.user = b2u.s_user ";
                                                               

                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'kbank') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>

                                                        <?php if ($bbl) { ?>
                                                            <optgroup   label="ธนาคารกรุงเทพ (BBL)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'bbl') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>

                                                        <?php } ?>
                                                        <?php if ($scb) { ?>
                                                            <optgroup   label="ธนาคารไทยพาณิชย์ (SCB)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'scb') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>
                                                        <?php if ($ktb) { ?>

                                                            <optgroup   label="ธนาคารกรุงไทย (KTB)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'ktb') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>
                                                        <?php if ($bay) { ?>

                                                            <optgroup   label="ธนาคารกรุงศรีอยุธยา (BAY)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'bay') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>
                                                        <?php if ($tmb) { ?>

                                                            <optgroup   label="ธนาคารทหารไทย (TMB)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'tmb') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>
                                                        <?php if ($gsb) { ?>

                                                            <optgroup   label="ธนาคารออมสิน (GSB)">
                                                                <?php
                                                                $objQueryY = mysql_query($strSql);
                                                                ?>
                                                                <?php while ($objResultY = mysql_fetch_array($objQueryY)) { ?>
                                                                    <?php if ($objResultY["bank_name"] == 'gsb') { ?>
                                                                        <option <?= ($objResultY["s_user"] != NULL ? "selected='selected'" : "") ?> value="<?= $objResultY["id"] ?>" ><?= $objResultY["acc_name"] ?> (<?= $objResultY["acc_no"] ?>)</option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </optgroup>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END FORM-->  
                                </div>

                            </div>



                        </div>
                        <div class="row-fluid">

                            <div class="span8" >
                                <div class="modal-footer" Style="align-content: center" >
                                    <button type="submit" class="btn blue"><span class="icon-save" ></span> <span Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_save"] ?> </span> </button>
                                    <a href="web2user.php" ><button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <span Style="font-family: 'Open Sans', sans-serif;"> <?= $_SESSION["action_close"] //ปิด                                              ?> </span></button>    </a>                
                                </div>
                                </form>
                            </div>
                        <?php } ?>







                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->


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
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
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
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
    <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
    <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>




    <script src="assets/scripts/app.js"></script>
<!--    <script src="assets/scripts/table-managed.js"></script>    -->
    <script src="assets/scripts/form-components.js"></script>     
    <script>
                                                    jQuery(document).ready(function () {
                                                        App.init();
                                                        //TableManaged.init();
                                                        FormComponents.init();
                                                    });
    </script>
    <script type="text/javascript">


        $('#myModalAddLevelSuccess').modal('show');
        $('#myModalAddLevelFail').modal('show');

        $('#myModalUpdateW2USuccess').modal('show');
        $('#myModalUpdateW2UFail').modal('show');

        $('#myModalDeleteLevelFail').modal('show');
        $('#myModalDeleteLevelSuccess').modal('show');


        function ShowAddLevel() {
            $('#ShowAddLevel').modal('show');
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
                        document.getElementById("level_add").value = result[0];
                        document.getElementById("score_start_add").value = result[1];
                        document.getElementById("score_end_add").value = result[2];
                        document.getElementById("icon_add").value = result[3];
                    }
                }
                xmlhttp.open("GET", "ajax/getDataLevel.php?id=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</body>
<!-- END BODY -->
</html>