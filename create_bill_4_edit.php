<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
include './ConnectDB/DB.php';
ACTIVEPAGES(8);
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
                                <li><a href="create_bill_search.php">   <?= $_SESSION["_edit_bill_head"] ?></a>
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
                                        <i class="icon-reorder"></i> <?= $_SESSION["_edit_bill_head"] ?> - <span class="step-title"><?= $_SESSION["_step"] ?> 3 - 3</span>
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
                                                        <li class="span3 done active">
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







                                                    <h3 class="block"><?= $_SESSION["_billno"] ?> <font color="blue"><b>#<?= $_SESSION['generateBill'] ?> </b></font></h3>
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
                                                            <span class="text display-value" data-display="country"><?= $_SESSION['form_d_start'] ?></span>
                                                        </div>

                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label"><?= $_SESSION['_form_d_end'] ?>:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="country"><?= $_SESSION['form_d_end'] ?></span>
                                                        </div>

                                                    </div>
                                                    <?php
                                                    //$_SESSION['form_user']
                                                    //$generateBill
//                                                    $_SESSION['generateBill'] = $generateBill;


                                                    $strSql = "";
                                                    $strSql .= "select d.*,w.s_name from bill h , bill_detail d ,web w ";
                                                    $strSql .= "where h.s_bill_no = d.s_bill_no ";
                                                    $strSql .= "and h.s_bill_no = '$_SESSION[generateBill]' ";
                                                    $strSql .= "and h.s_user = '$_SESSION[form_user]' ";
                                                    $strSql .= "and d.i_reference = w.i_id ";


//                                                    $strSql = "";
//                                                    $strSql .= "select w.* from ";
//                                                    $strSql .= "web2user w2u,  ";
//                                                    $strSql .= "web w  ";
//                                                    $strSql .= "where w.i_id = w2u.i_id ";
//                                                    $strSql .= "and w2u.s_user = '" . $_SESSION["form_user"] . "' ";
//                                                    $strSql = "select * from web";

$strSql = "";  
 $strSql .= "  SELECT ";
                                                    $strSql .= "    h.s_user, ";
                                                    $strSql .= "    h.s_bill_no, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_start, ";
                                                    $strSql .= "    '%Y-%m-%d') d_start, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_end, ";
                                                    $strSql .= "    '%Y-%m-%d') d_end, ";
                                                    $strSql .= "    h.s_status, ";
                                                    $strSql .= "    d.i_id, ";
                                                    $strSql .= "    d.f_debit, ";
                                                    $strSql .= "    d.f_credit, ";
                                                    $strSql .= "    d.i_reference, ";
                                                    $strSql .= "    d.s_reference ";
                                                    $strSql .= "  FROM ";
                                                    $strSql .= "    bill h, ";
                                                    $strSql .= "    bill_detail d ";
                                                    $strSql .= "  WHERE ";
                                                    $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no = '".$_SESSION[generateBill]."' ";
                                                    $objQuery = mysql_query($strSql);
                                                    $sumtotal = 0;
                                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                                        $txtD = "tmpD_" . $objResult["i_id"];
                                                        $txtC = "tmpC_" . $objResult["i_id"];
                                                        $txtD2 = $objResult["s_reference"];
                                                        if (($objResult["f_debit"] + $objResult["f_credit"]) != 0) {
                                                            $sumtotal = $sumtotal + ($objResult["f_debit"] - $objResult["f_credit"]);
                                                            ?>
                                                            <div class="control-group">
                                                                <label class="control-label"><?= $objResult["s_reference"] ?> :</label>
                                                                <div class="controls">
                                                                    <?php if ($objResult["f_debit"] - $objResult["f_credit"] > 0) { ?>
                                                                        <font color="green"> <b><u><?= number_format($objResult["f_debit"] - $objResult["f_credit"]) ?></u></b></font>     
                                                                    <?php } else if ($objResult["f_debit"] - $objResult["f_credit"] < 0) {
                                                                        ?>
                                                                        <font color="red"> <b><u><?= number_format($objResult["f_debit"] - $objResult["f_credit"]) ?></u></b></font>     
                                                                    <?php } ?>
                                                                    <!--<span class="badge badge-important"><?= $txtD2 ?></span>-->
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
                                                <!--
                                                                                                <a href="create_bill_2.php"   class="btn alert-info ">  <i class="m-icon-swapleft"></i> <?= $_SESSION["_back"] ?> </a>
                                                                                                <button type="submit"  class="btn green "><?= $_SESSION["_confirm"] ?> <i class="m-icon-swapright m-icon-white"></i></button>-->


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
    <script type="text/javascript">


        $('#myModalAddBillSuccess').modal('show');
        $('#myModalAddBillFail').modal('show');
    </script>
    <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>