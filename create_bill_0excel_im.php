<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';

 
ACTIVEPAGES(7);
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
                    <?php
                    include './ConnectDB/DB.php';
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <script>
                        function checkform() {
                            if (document.frm_.d_start.value == '') {
                                alert('Validation');
                                document.frm_.d_start.focus();
                                return false;
                            }
                            if (document.frm_.d_end.value == '') {
                                alert('Validation');
                                document.frm_.d_end.focus();
                                return false;
                            }

                        }
                    </script>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-reorder"></i> <?= $_SESSION["_billcreate"] ?> - <span class="step-title"><?= $_SESSION["_step"] ?> 2 - 3</span>
                                    </div>
                                    <div class="tools hidden-phone">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                                                <a href="javascript:;" class="reload"></a>
                                                                                <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                   
                                   <?php
if (isset($_FILES['file'])) {
require_once './Function/simplexlsx.class.php';
    //require_once "simplexlsx.class.php";

//$xlsx = new SimpleXLSX("testImport.xlsx");

    $xlsx = new SimpleXLSX($_FILES['file']['tmp_name']);

    $explode_type = explode(".",$_FILES['file']['name']);
    $explode_s_e = explode("to",$explode_type[0]);
    echo "Start : ".$explode_s_e[0]." To : ".$explode_s_e[1];
    
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$explode_s_e[0]))
    {
        $date_start = 1;
    }else{
        $date_start = 0;
    }
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$explode_s_e[1]))
    {
        $date_end = 1;
    }else{
        $date_end = 0;
    }
    
    $chk_date = $date_start+$date_end;
    
    if($chk_date > 0){
$_SESSION["err_addBilling"] = "false";
    echo '<h1>Parsing Result</h1>';
//  echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

    list($cols, ) = $xlsx->dimension();
    $web = "Web";
    $winlose = "Win/Lose";
    $User = "User";
    $total = "Total";



    $i = 1;
    foreach ($xlsx->rows() as $k => $r) {
        if ($k != 0) {
            continue;
        }
        for ($c = 0; $c < $cols - 1; $c++) {


            $name = ( (isset($r[$c])) ? $r[$c] : NULL );

            $keyWeb = $c;
            $keyWinLose = $c + 2;
            $keyUser = $c + 1;



            if ($name != NULL) {
                echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
                echo '<tr>';
                echo '<td>' . $name . '</td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $web . '</td>';
                echo '<td>' . $User . '</td>';
                echo '<td>' . $winlose . '</td>';
                echo '</tr>';

                foreach ($xlsx->rows() as $k2 => $r2) {
                    if ($k2 < 4) {
                        continue;
                    }

                    $col_web = ( (isset($r2[$keyWeb])) ? $r2[$keyWeb] : NULL );
                     $col_us = ( (isset($r2[$keyUser])) ? $r2[$keyUser] : NULL );
                    $col_wl = ( (isset($r2[$keyWinLose])) ? $r2[$keyWinLose] : NULL );
                   

                    if ($col_web != NULL) {
                        echo '<tr>';
                        echo '<td>' . ( $col_web != NULL ? $col_web : '&nbsp;' ) . '</td>';
                        echo '<td>' . ( $col_us != NULL ? $col_us : '&nbsp;' ) . '</td>';
                        echo '<td>' . ( $col_wl != NULL ? $col_wl : '&nbsp;' ) . '</td>';
                        echo '</tr>';
                    }
                }
                echo '</table> <br/>';
            }
        }
    }

		
	}
	else{
		$_SESSION["err_addBilling"] = "true";
	}
}
?>
                                   
                                   
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
        $('#myModalAddBillSuccess').modal('show');
        $('#myModalAddBillFail').modal('show');
    </script>
    <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>