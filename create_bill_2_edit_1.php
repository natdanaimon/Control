<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
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
                    <?php
                    include './ConnectDB/DB.php';

                    $strSql = " select ";
                    $strSql .= "    DATE_FORMAT(d_create, ";
                    $strSql .= "    '%Y-%m-%d') d_create, ";
                    $strSql .= "    DATE_FORMAT(d_start, ";
                    $strSql .= "    '%Y-%m-%d') d_start, ";
                    $strSql .= "    DATE_FORMAT(d_end, ";
                    $strSql .= "    '%Y-%m-%d') d_end ";
                    $strSql .= "   from bill where s_bill_no = '$_GET[billno]' LIMIT 1 ";
                    $_SESSION['generateBill'] = $_GET[billno];
                    $objQuery = mysql_query($strSql);
                    $d_start = "";
                    $d_end = "";
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $_SESSION['form_d_create'] = $objResult["d_create"];
                        $_SESSION['form_d_start'] = $objResult["d_start"];

                        $_SESSION['form_d_end'] = $objResult["d_end"];
                    }
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-reorder"></i> <?= $_SESSION["_edit_bill_head"] ?> - <span class="step-title"><?= $_SESSION["_step"] ?> 2 - 3</span>
                                    </div>
                                    <div class="tools hidden-phone">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                                                <a href="javascript:;" class="reload"></a>
                                                                                <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="create_bill_3_edit.php" id="frm_" class="form-horizontal" method="post" novalidate="novalidate" onsubmit="checkform();">
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
                                                        <li class="span3 active">
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number">2</span>
                                                                <span class="desc"><i class="icon-ok"></i><b> <?= $_SESSION["_form_bill_set"] ?></b></span>   
                                                            </a> 
                                                        </li>
                                                        <li class="span3">
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
                                                <div class="tab-pane active" id="tab2">
                                                    <h3 class="block"> <?= $_SESSION["_form_bill_pro"] ?></h3>
                                                    <div class="control-group ">
                                                        <label class="control-label"><?= $_SESSION["_form_d_start"] ?></label>
                                                        <div class="control-group">

                                                            <div class="controls">
                                                                <div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                                    <input class="m-wrap m-ctrl-medium date-picker" readonly="" size="16" type="text" value="<?= (strlen($_SESSION['form_d_start']) > 0 ? $_SESSION['form_d_start'] : "") ?>" name="d_start" id="d_start" required><span class="add-on"><i class="icon-calendar"></i></span>
                                                                </div>
                                                                <span for="d_start" class="validate-inline valid ok"></span>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class="control-group ">
                                                        <label class="control-label"><?= $_SESSION["_form_d_end"] ?></label>
                                                        <div class="control-group">

                                                            <div class="controls">
                                                                <div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                                    <input class="m-wrap m-ctrl-medium date-picker" readonly="" size="16" type="text" value="<?= (strlen($_SESSION['form_d_end']) > 0 ? $_SESSION['form_d_end'] : "") ?>" name="d_end" id="d_end" required><span class="add-on"><i class="icon-calendar"></i></span>
                                                                </div>
                                                                <span for="d_end" class="validate-inline valid ok"></span>
                                                            </div>

                                                        </div>
                                                    </div>










                                                    <?php
                                                    if (!empty($_GET[user]) && $_GET[user] != null) {
                                                        $_SESSION['form_user'] = $_GET[user];
                                                    }
                                                    $strSql = "";
                                                    $strSql .= "SELECT ";
                                                    $strSql .= "  * ";
                                                    $strSql .= "FROM ";
                                                    $strSql .= "  ( ";
                                                    $strSql .= "  SELECT ";
                                                    $strSql .= "    w.*, ";
                                                    $strSql .= "    w2u.s_user us ";
                                                    $strSql .= "  FROM ";
                                                    $strSql .= "    web2user w2u, ";
                                                    $strSql .= "    web w ";
                                                    $strSql .= "  WHERE ";
                                                    $strSql .= "    w.i_id = w2u.i_id AND w2u.s_user = '$_GET[user]' ";
                                                    $strSql .= ") w ";
                                                    $strSql .= "LEFT JOIN ";
                                                    $strSql .= "  ( ";
                                                    $strSql .= "  SELECT ";
                                                    $strSql .= "    h.s_user, ";
                                                    $strSql .= "    h.s_bill_no, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_start, ";
                                                    $strSql .= "    '%Y-%m-%d') d_start, ";
                                                    $strSql .= "    DATE_FORMAT(h.d_end, ";
                                                    $strSql .= "    '%Y-%m-%d') d_end, ";
                                                    $strSql .= "    h.s_status, ";
                                                    $strSql .= "    d.f_debit, ";
                                                    $strSql .= "    d.f_credit, ";
                                                    $strSql .= "    d.i_reference ";
                                                    $strSql .= "  FROM ";
                                                    $strSql .= "    bill h, ";
                                                    $strSql .= "    bill_detail d ";
                                                    $strSql .= "  WHERE ";
                                                    $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no = '$_GET[billno]' ";
                                                    $strSql .= ") b ON w.i_id = b.i_reference AND b.s_user = w.us ";
                                                    $objQuery = mysql_query($strSql);
                                                    $i = 0;
                                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                                        $game[$i] = $objResult["i_id"];
                                                        ?>

                                                        <div class="control-group ">
                                                            <label class="control-label"><?= $objResult["s_name"] ?></label>

                                                            <div class="controls">
                                                                <div class="input-append">   


                                                                    <?php
                                                                    
                                                                    if ($objResult["f_debit"] == null || $objResult["f_debit"] == "") {
                                                                        $debit = 0;
                                                                    } else {
                                                                        $debit = $objResult["f_debit"];
                                                                    }
                                                                    if ($objResult["f_credit"] == null || $objResult["f_credit"] == "") {
                                                                        $credit = 0;
                                                                    } else {
                                                                        $credit = $objResult["f_credit"] * -1;
                                                                    }
                                                                    if (($debit + $credit) > 0) {
                                                                        $tmpValue = $debit;
                                                                    } else if (($debit + $credit) < 0) {
                                                                        $tmpValue = $credit;
                                                                    } else {
                                                                        $tmpValue = 0;
                                                                    }
                                                                    ?>
                                                                    <input class="m-wrap"  type="text"  name="tmpD_<?= $objResult["i_id"] ?>" 
                                                                           id="tmpD_<?= $objResult["i_id"] ?>"  
                                                                           onchange="formatCells(this.value, 'tmpD',<?= $i ?>)"
                                                                           value="<?=$tmpValue?>" required style="text-align:right;padding-right:2px;"/>
                                                                    <font color="green"><span class="add-on"><i class="icon-usd"></i></span></font>
                                                                </div>
                  
                                                            </div>

                                                        </div>


                                                        <?php
                                                        $i++;
                                                    }
                                                    $arrJS = json_encode($game);
                                                    ?>
                                                    <script type="text/javascript">
                                                        function formatCells(xls, group, initial) {

                                                            var arrGroup = xls.split(" ");

                                                            var arrJS = <?= $arrJS ?>;
//                                                              document.getElementById(group + "_" + arrJS[1]).value = arrGroup[1];
                                                            var j = 0;

                                                            for (var i = initial; i < arrJS.length; i++) {
                                                                var tmpData = arrGroup[j];

                                                                if (tmpData == null) {
                                                                    return false;

                                                                }
                                                                document.getElementById(group + "_" + arrJS[i]).value = tmpData;
                                                                j++;
                                                            }


                                                        }
                                                    </script>























                                                </div>
                                                <!-- Confirm -->  
                                                <div class="tab-pane" id="tab3">


                                                </div>
                                            </div>


                                            <div class="form-actions clearfix">
                                                <span class="badge badge-important">NOTE!</span> <span > สามารถกรอกยอดเงินได้เฉพาะจำนวนเต็มบวกไม่สามารถใช้จุดทศนิยมได้ Exam. 9999 </span>
                                                <br/>
                                                <br/>
                                                <a href="create_bill_search.php"  onclick="goBack();" class="btn alert-info ">  <i class="m-icon-swapleft"></i> <?= $_SESSION["_back"] ?> </a>
                                                <button type="submit"  class="btn blue "><?= $_SESSION["_continue"] ?> <i class="m-icon-swapright m-icon-white"></i></button>

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




    <?php
    if ($_SESSION["VALIDATEION_FORM"]) {
        ?>
        <div class="modal fade" id="VALIDATEION_FORM" role="dialog" Style="top:<?= $_SESSION[top] ?>px">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="notice notice-danger">
                        <strong>Notice</strong> <?= $_SESSION["VALIDATEION_MSG"] ?>
                    </div>
                </div>

            </div>
        </div>

        <?php
    }
    $_SESSION["VALIDATEION_FORM"] = FALSE;
    $_SESSION["VALIDATEION_MSG"] = "";
    ?>

    <script type="text/javascript">


                        $('#VALIDATEION_FORM').modal('show');
    </script>


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