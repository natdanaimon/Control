<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {

    header("location:login.php");
}
$_SESSION["at1"] = "";
$_SESSION["at2"] = "";
$_SESSION["at3"] = "";
$_SESSION["at4"] = "start active";
$_SESSION["at5"] = "";
$_SESSION["at6"] = "";
$_SESSION["at7"] = "";
$_SESSION["at8"] = "";
$_SESSION["at9"] = "";
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
                                ใบสั่งซื้อ <small> <?php echo $_SESSION["err_order"] . "-"; ?></small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">หน้าหลัก</a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#">ใบสั่งซื้อ</a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#">สั่งรายการอาหาร</a>
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








                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue " >
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-glass "></i>สั่งรายการอาหาร</div>
                                    <div class="tools hidden-phone">
                                        <a href="javascript:;" class="collapse"></a>

                                        <a href="javascript:;" class="reload"></a>

                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!--                                    <form action="#" class="form-horizontal" id="submit_form">-->

                                    <form method="post" action="/Control/Function/order_confirm.php">
                                        <div class="span1">

                                        </div>


                                        <div class="span5">
                                            <div class="control-group">
                                                <label class="control-label"> <h3 class="block"><i class=" icon-group"></i> โต๊ะที่สั่ง</h3></label>
                                            </div>
                                            <div class="input-icon left">
                                                <i class="icon-book"></i>
                                                <input class="m-wrap " type="text" placeholder="โต๊ะนั่ง" name="table" id="table"   />    
                                            </div>
                                            <div class="input-icon left">
                                                <i class="icon-file-text"></i>
                                                <input class="m-wrap span10" type="text" placeholder="รายละเอียด" name="desc"  id="desc"   pattern="[^'\x22]+"/>    
                                            </div>

                                        </div>
                                        <div class="span2">

                                            <div class="control-group">

                                            </div>

                                            <div class="control-group">

                                            </div>



                                        </div>


                                        <div class="row-fluid">
                                            <div class="span12 ">

                                                <div class="span1"></div>
                                                <div class="span5">
                                                    <div class="control-group">
                                                        <label class="control-label"> <h3 class="block"><i class="  icon-book"></i> รายการอาหาร</h3></label>
                                                    </div>


                                                    <?php
                                                    include './ConnectDB/DB.php';




                                                    $sql = " select * from foods  where type ='รายการอาหาร' order by  promotion  desc ";
                                                    $objQuery = mysql_query($sql);
                                                    $i = 1;
                                                    ?>
                                                    <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                        <div class="control-group inline">
                                                            <label class="control-group"><?= $objResult["name"] ?> </label>
                                                            <div class="input-icon left">
                                                                <i class="icon-book"></i>

                                                                <input class="m-wrap " type="number" name="order_foods_<?= $objResult["id"] ?>" min="0"   max="100" placeholder="จำนวน <?= $objResult["name"] ?>" pattern="[0-9]{1,3}" />    
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                    <div class="control-group">
                                                        <label class="control-label"> <h3 class="block"><i class="  icon-book"></i> อื่นๆ </h3></label>
                                                    </div>

                                                    <?php
                                                    $sql = " select * from foods  where type ='อื่นๆ' order by  promotion  desc ";
                                                    $objQuery = mysql_query($sql);
                                                    $i = 1;
                                                    ?>
                                                    <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                        <div class="control-group inline">
                                                            <label class="control-group"><?= $objResult["name"] ?> </label>
                                                            <div class="input-icon left">
                                                                <i class="icon-book"></i>

                                                                <input class="m-wrap " type="number" name="order_other_<?= $objResult["id"] ?>" min="0"   max="100" placeholder="จำนวน <?= $objResult["name"] ?>" pattern="[0-9]{1,3}"/>    
                                                            </div>
                                                        </div>
                                                    <?php } ?>




                                                </div>




                                                <div class="span5">
                                                    <div class="control-group">
                                                        <label class="control-label"> <h3 class="block"><i class=" icon-glass"></i> เครื่องดื่ม</h3></label>
                                                    </div>

                                                    <?php
                                                    $sql = " select * from foods WHERE type ='เครื่องดื่ม' order by  promotion  desc ";
                                                    $objQuery = mysql_query($sql);

                                                    $i = 1;
                                                    ?>
                                                    <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>

                                                        <div class="control-group inline">
                                                            <label class="control-group"><?= $objResult["name"] ?> </label>
                                                            <div class="input-icon left">
                                                                <i class="icon-glass"></i>

                                                                <input class="m-wrap " type="number" name="order_drink_<?= $objResult["id"] ?>" min="0"   max="100" placeholder="จำนวน <?= $objResult["name"] ?>" pattern="[0-9]{1,3}"/>    
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span4"></div>
                                            <div class="span5">
                                                <div class="control-group">
                                                    <button type="submit" class="btn green"><span class="icon-save" > สั่งรายการอาหาร</button>
                                                </div>
                                            </div>
                                        </div>


















                                </div>
                            </div>
                        </div>
                        </form>






































                    </div>



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
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/form-wizard.js"></script>     
    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">

        $('#myModalOrderSuccess').modal('show');
        $('#myModalOrderFail').modal('show');

    </script>
    <script>
        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            FormWizard.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>