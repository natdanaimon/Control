<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {

    header("location:login.php");
}
$_SESSION["at1"] = "";
$_SESSION["at2"] = "";
$_SESSION["at3"] = "";
$_SESSION["at4"] = "";
$_SESSION["at5"] = "";
$_SESSION["at6"] = "";
$_SESSION["at7"] = "start active";
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
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row-fluid">
                        <div class="span12">

                            <h3 class="page-title">
                                ใบสั่งซื้อ <small></small>
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
                                <li><a href="#">รายการที่ชำระเงินแล้ว</a>
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

                    $sql = " SELECT reference , table_order , topic,sum(sumprice) price FROM $database.`order`
                                where payment_name is not null group by reference , table_order , topic     ";
                    $objQuery = mysql_query($sql);
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-glass "></i>ข้อมูลผู้ใช้งาน</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                                        <a href="javascript:;" class="reload"></a>
                                        <!--                                        <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <!--                                        <div class="btn-group">
                                                                                    <button id="sample_editable_1_new" class="btn blue" onclick="ShowAddUser();">
                                                                                        เพิ่มผู้ใช้งาน <i class="icon-plus"></i>
                                                                                    </button>
                                                                                </div>-->

                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
<!--                                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->
                                                <th>วันที่</th>
                                                <th>เลขที่การสั่งซื้อ</th>
                                                <th>โต๊ะที่สั่ง</th>
                                                <th>รายละเอียด</th>
                                                <th >ราคา</th>

<!--                                                <th >เบอร์โทรศัพท์</th>
           <th >อีเมล์</th>-->
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                <tr class="odd gradeX">
                                                    <td align="center"> <b>     <?php echo substr($objResult["reference"], 6, 2) . "-" . substr($objResult["reference"], 4, 2) . "-" . substr($objResult["reference"], 0, 4); ?></b></td>
                                                    <td align="center"> <b>     <?= $objResult["reference"] ?></b></td>
                                                    <?php if ($objResult["table_order"] != "0") { ?>
                                                        <td align="center"><b><?= $objResult["table_order"] ?></b></td>
                                                    <?php } else { ?>
                                                        <td align="center"><b>สั่งกลับบ้าน</b></td>
                                                    <?php } ?>
                                                    <td align="center" ><b><?= $objResult["topic"] ?></b></td>
                                                    <td align="center" ><b><?= $objResult["price"] ?></b></td>

                                                    <td align="center" width="80" >
                                                        <div class="btn-toolbar">
                                                            <div class="btn-group">
                                                                <a class="btn blue" href="#" data-toggle="dropdown">
                                                                    <i class="icon-cog"></i> การกระทำ
                                                                    <i class="icon-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">

                                                                    <li><a href="/Control/DetailOrder.php?reference=<?php echo $objResult["reference"] . "&" . "table=" . $objResult["table_order"]; ?>" class="btn green" target="_blank"><i class="icon-paste"></i> รายละเอียด</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
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
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/table-managed.js"></script>     
    <script>
        jQuery(document).ready(function () {
            App.init();
            TableManaged.init();
        });
    </script>

</body>
<!-- END BODY -->
</html>