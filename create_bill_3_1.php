<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
include './ConnectDB/DB.php';
ACTIVEPAGES(7);
$_SESSION['form_d_start'] = $_POST[d_start];
$_SESSION['form_d_end'] = $_POST[d_end];

if (empty($_POST[d_start])) {
//    exit("<script>alert('�?รุณาใส่ข้อมูลวันที่เริ่มต้นของบิล !');history.back();</script>");
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "�?รุณาใส่ข้อมูลวันที่เริ่มต้นของบิล";
    header("location:create_bill_2.php");
    exit(0);
}
if (empty($_POST[d_end])) {
//    exit("<script>alert('�?รุณาใส่ข้อมูลวันที่เริ่มต้นของบิล !');history.back();</script>");
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "�?รุณาใส่ข้อมูลวันที่สิ้นสุดของบิล";
    header("location:create_bill_2.php");
    exit(0);
}
$SY = substr($_POST[d_start], 0, 4);
$SM = substr($_POST[d_start], 5, 2);
$SD = substr($_POST[d_start], 8, 2);

$EY = substr($_POST[d_end], 0, 4);
$EM = substr($_POST[d_end], 5, 2);
$ED = substr($_POST[d_end], 8, 2);
$flgDate = false;
if ($SY <= $EY) {
    if ($SM <= $EM) {
        if ($SD <= $ED) {
            $flgDate = true;
        }
        if ($SM < $EM) {
            $flgDate = true;
        }
    }
}
if (!$flgDate) {
// exit("<script>alert('�?รุณาเลือ�? วันที่เริ่มต้น ให้น้อย�?ว่า วันที่สิ้นสุด !');history.back();</script>");
//    echo "<script>alert('�?รุณาเลือ�? วันที่เริ่มต้น ให้น้อย�?ว่า วันที่สิ้นสุด !');history.back();</script>";
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "วันที่เริ่มต้น ต้องน้อย�?ว่าหรือเท่า�?ับ วันที่สิ้นสุด";
    header("location:create_bill_2.php");
    exit(0);
}


//$strSql .= "select * from web";
$strSql = "";
$strSql .= "select w.* from ";
$strSql .= "web2user w2u,  ";
$strSql .= "web w  ";
$strSql .= "where w.i_id = w2u.i_id ";
$strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";




$objQuery = mysql_query($strSql);
$flgEmtry = false;
$flgInt = true;
$totalD = 0;
$totalC = 0;
$flgZero = true;
while ($objResult = mysql_fetch_array($objQuery)) {
    $txtD = "tmpD_" . $objResult["i_id"];

    if ($_POST[$txtD] != NULL) {
        if ($_POST[$txtD] != 0) {
            $flgZero = FALSE;
        }

        if (strlen($_POST[$txtD]) <= 0) {
            $flgEmtry = true;
        }


        if (!is_numeric($_POST[$txtD])) {
            $flgInt = false;
        } else if (strlen($_POST[$txtD]) > 0 && is_numeric($_POST[$txtD])) {
            $totalD = $totalD + $_POST[$txtD];
        }
    }



//    if (!preg_match("/^[0-9][0-9]*$/", $_POST[$txtC])) {
//        $flgInt = false;
//    } else if (strlen($_POST[$txtC]) > 0 && preg_match("/^[0-9][0-9]*$/", $_POST[$txtC])) {
//        $totalC = $totalC + $_POST[$txtC];
//    }
}





if ($flgEmtry) {
//    exit("<script>alert('�?รุณาใส่ข้อมูลให้ครบถ้วน !');history.back();</script>");
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "�?รุณาใส่ข้อมูลให้ครบถ้วน";
    header("location:create_bill_2.php");
    exit(0);
}
if (!$flgInt) {
//    exit("<script>alert('�?รุณาใส่ข้อมูลเฉพาะตัวเลข !');history.back();</script>");
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "�?รุณาใส่ข้อมูลเฉพาะตัวเลข";
    header("location:create_bill_2.php");
    exit(0);
}
if ($flgZero) {
//    exit("<script>alert('�?รุณาใส่ข้อมูลให้ครบถ้วน !');history.back();</script>");
    $_SESSION["VALIDATEION_FORM"] = TRUE;
    $_SESSION["VALIDATEION_MSG"] = "�?ารสร้างบิลจะต้องมียอดเรีย�?เ�?็บเงินของทุ�?เ�?มไม่เท่า�?ับ 0";
    header("location:create_bill_2.php");
    exit(0);
}
$generateBill = date("YmdHis");
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
        <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
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
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
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
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row-fluid">
                        <div class="span12">

                            <h3 class="page-title">
                                <?= $_SESSION["_bill"] ?> <small></small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">   <?= $_SESSION["_home"] ?></a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#">   <?= $_SESSION["_bill"] ?></a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="create_bill_1.php">   <?= $_SESSION["_billcreate"] ?></a>
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
                    <?php ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-reorder"></i> <?= $_SESSION["_billcreate"] ?> - <span class="step-title"><?= $_SESSION["_step"] ?> 3 - 3</span>
                                    </div>
                                    <div class="tools hidden-phone">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                                                <a href="javascript:;" class="reload"></a>
                                                                                <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="Function/Add_Billing.php" class="form-horizontal" method="post" novalidate="novalidate">
                                        <div class="form-wizard">
                                            <div class="navbar steps">
                                                <div class="navbar-inner">
                                                    <ul class="row-fluid nav nav-pills">
                                                        <li class="span3  done">
                                                            <a href="#tab1" data-toggle="tab" class="step ">
                                                                <span class="number">1</span>
                                                                <span class="desc"><i class="icon-ok"></i> <b><?= $_SESSION["_form_account_set"] ?></b></span>   
                                                            </a>
                                                        </li>
                                                        <li class="span3 done">
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number">2</span>
                                                                <span class="desc"><i class="icon-ok"></i><b> <?= $_SESSION["_form_bill_set"] ?></b></span>   
                                                            </a> 
                                                        </li>
                                                        <li class="span3 active">
                                                            <a href="#tab3" data-toggle="tab" class="step">
                                                                <span class="number">3</span>
                                                                <span class="desc"><i class="icon-ok"></i><b> <?= $_SESSION["_confirm"] ?></b></span>   
                                                            </a> 
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="bar" class="progress progress-success progress-striped">
                                                <div class="bar" style="width:33.33%;"></div>
                                            </div>
                                            <div class="tab-content">

                                                <!-- Account -->  
                                                <div class="tab-pane " id="tab1">


                                                </div>
                                                <!-- Bill -->  
                                                <div class="tab-pane " id="tab2">

                                                </div>
                                                <!-- Confirm -->  
                                                <div class="tab-pane active" id="tab3">







                                                    <h3 class="block"><?= $_SESSION["_confirm_info"] ?> <font color="blue"><b>#<?= $generateBill ?> </b></font></h3>
                                                    <h4 class="form-section"><?= $_SESSION["_form_account_pro"] ?></h4>
                                                    <div class="control-group">
                                                        <label class="control-label"><?= $_SESSION["_form_user"] ?>:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="username"><?= $_SESSION['form_user'] ?></span>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section"><?= $_SESSION["_form_bill_pro"] ?></h4>

                                                    <div class="control-group">
                                                        <label class="control-label"><?= $_SESSION['_form_d_start'] ?>:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="country"><?= $_POST[d_start] ?></span>
                                                        </div>

                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label"><?= $_SESSION['_form_d_end'] ?>:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="country"><?= $_POST[d_end] ?></span>
                                                        </div>

                                                    </div>
                                                    <?php
                                                    //$_SESSION['form_user']
                                                    //$generateBill
                                                    $_SESSION['generateBill'] = $generateBill;
                                                    $_SESSION['form_d_start'] = $_POST[d_start];
                                                    $_SESSION['form_d_end'] = $_POST[d_end];


                                                    $strSql = "";
                                                    $strSql .= "select w.* from ";
                                                    $strSql .= "web2user w2u,  ";
                                                    $strSql .= "web w  ";
                                                    $strSql .= "where w.i_id = w2u.i_id ";
                                                    $strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";
//                                                    $strSql = "select * from web";
                                                    $objQuery = mysql_query($strSql);
                                                    $sumtotal = 0;
                                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                                        $txtD = "tmpD_" . $objResult["i_id"];
//                                                        $txtC = "tmpC_" . $objResult["i_id"];
                                                        if (($_POST[$txtD]) != 0) {
                                                            $sumtotal = $sumtotal + ($_POST[$txtD]);
                                                            ?>
                                                            <div class="control-group">
                                                                <label class="control-label"><?= $objResult["s_name"] ?>:</label>
                                                                <div class="controls">
                                                                    <span class="text display-value" data-display="country">
                                                                        <?php if ($_POST[$txtD] > 0) { ?>
                                                                            <font color="green"> <b><u><?= number_format($_POST[$txtD]) ?></u></b></font>     
                                                                        <?php } else if ($_POST[$txtD] < 0) {
                                                                            ?>
                                                                            <font color="red"> <b><u><?= number_format($_POST[$txtD]) ?></u></b></font>     
                                                                        <?php } ?>

                                                                    </span>
                                                                    <input type="hidden" name="<?= $txtD ?>" value="<?= $_POST[$txtD] ?>"/>

                                                                </div>

                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <h4 class="form-section"><?= $_SESSION["_result_pro"] ?></h4>
                                                    <div class="control-group">
                                                        <label class="control-label"><?= $_SESSION["_result"] ?> :</label>
                                                        <div class="controls">
                                                            <span class="badge badge-info" data-display="country"><h4><font color=""><b><?= number_format($sumtotal, 2) ?></b></font></h4></span>
                                                        </div>

                                                    </div>






                                                </div>
                                            </div>


                                            <div class="form-actions clearfix">

                                                <a href="create_bill_2.php"   class="btn alert-info ">  <i class="m-icon-swapleft"></i> <?= $_SESSION["_back"] ?> </a>
                                                <button type="submit"  class="btn green "><?= $_SESSION["_confirm"] ?> <i class="m-icon-swapright m-icon-white"></i></button>


                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>

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
    <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
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
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
    <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
    <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/form-components.js"></script>    
    <script src="assets/scripts/form-wizard.js"></script>     
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
                        jQuery(document).ready(function () {
                            // initiate layout and plugins
                            App.init();
                            FormWizard.init();
                            FormComponents.init();
                        });
    </script>

    <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>