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
$_SESSION["at6"] = "start active";
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
        <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
        <link href="assets/plugins/glyphicons/css/glyphicons.css" rel="stylesheet" />
        <link href="assets/plugins/glyphicons_halflings/css/halflings.css" rel="stylesheet" />


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
                                <li><a href="#">ชำระเงิน</a>
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
                    <div class="row-fluid">
                        <div class="span12">

                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box  green">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-money"></i>ชำระเงิน</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                                        <a href="javascript:;" class="reload"></a>
                                        <!--                                        <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table class="table-bordered table-striped table-condensed flip-content" id="myTable">
                                        <thead class="flip-content">
                                            <tr>
                                                <th >เลขการสั่งซื้อ</th>
                                                <th>โต๊ะที่สั่ง</th>
                                                <th>รายละเอียด</th>
                                                <th>จำนวนเงินมูลค่ารวมเมนูที่ทำเสร็จ</th>
                                                <th>จำนวนเงินมูลค่ารวมเมนูทั้งหมดของโต๊ะ</th>
                                                <th width="170" ></th>
                                            </tr>
                                        </thead>
                                        <tbody  id="myBodyPay">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                            <!-- BEGIN SAMPLE TABLE PORTLET-->

                            <!-- END SAMPLE TABLE PORTLET-->
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




    <?php ?>


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
<!--    <script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script>
        jQuery(document).ready(function () {
            App.init();
            TableManaged.init();
        });</script>
    <script type="text/javascript">

 


        $('#myModalPaySuccess').modal('show');
        $('#myModalPayFail').modal('show');

    </script>

    <script>
        function getColor(abc) {
            //alert(value);
            var value = abc;
            //alert(value.substring(1,2));

            if (value.length == 1) {
                if (value == '0') {

                    return "<span class='badge badge-nag_red_bgreen'> สั่งกลับบ้าน";
                }
                else if (value == '1') {

                    return "<span class='badge badge-nag_brow'>" + value;
                } else if (value == '2') {
                    return "<span class='badge badge-nag_yellow'>" + value;
                }
                else if (value == '3') {
                    return "<span class='badge badge-nag_green'>" + value;
                }
                else if (value == '4') {
                    return "<span class='badge badge-nag_blue'>" + value;
                }
                else if (value == '5') {
                    return "<span class='badge badge-nag_vio'>" + value;
                }
                else if (value == '6') {
                    return "<span class='badge badge-nag_yellow'>" + value;
                }
                else if (value == '7') {
                    return "<span class='badge badge-nag_sky'>" + value;
                } else {
                    return "<span class='badge badge-nag_all'>" + value;
                }
            } else if (abc.length == 2) {

                if (value.substring(1, 2) == '1') {

                    return "<span class='badge badge-nag_yellow'>" + value;
                } else if (value.substring(1, 2) == '2') {
                    return "<span class='badge badge-nag_brow'>" + value;
                }
                else if (value.substring(1, 2) == '3') {
                    return "<span class='badge badge-nag_blue'>" + value;
                }
                else if (value.substring(1, 2) == '4') {
                    return "<span class='badge badge-nag_green'>" + value;
                }
                else if (value.substring(1, 2) == '5') {
                    return "<span class='badge badge-nag_yellow'>" + value;
                }
                else if (value.substring(1, 2) == '6') {
                    return "<span class='badge badge-nag_vio'>" + value;
                }
                else if (value.substring(1, 2) == '7') {
                    return "<span class='badge badge-nag_all'>" + value;
                } else {

                    return "<span class='badge badge-nag_sky'>" + value;
                }

            }
        }
    </script>



    <script>

        function getDataFromDb()
        {
            $.ajax({
                url: "ajax/getDataRealTimePayment.php",
                type: "POST",
                data: ''
            })
                    .success(function (result) {
                        var obj = jQuery.parseJSON(result);
                        if (obj != '')
                        {
                            //$("#myTable tbody tr:not(:first-child)").remove();
                            $("#myBodyPay").empty();
                            $.each(obj, function (key, val) {
                                var tr = "<tr>";
                                tr = tr + "<td align='center'>" + val["reference"] + "</td>";
                                tr = tr + "<td align='center'>" + getColor(val["table_order"]) + "</span></td>";
                                tr = tr + "<td>" + val["topic"] + "</td>";
                                tr = tr + "<td align='center'>";
                                if (val["totalcomplete"] == val["totalall"]) {
                                    tr = tr + "<b><font color='green'>" + val["totalcomplete"] + "</font></b>";
                                } else {
                                    tr = tr + "<b><font color='red'>" + val["totalcomplete"] + "</font></b>";
                                }
                                tr = tr + "</td>";
                                tr = tr + "<td align='center'><b><u><font color='green'>" + val["totalall"] + "</font> </u>&nbsp;&nbsp;&nbsp;บาท</b></td>";
                                tr = tr + "<td align='left'>";
                                tr = tr + "<div class='btn-toolbar'>";
                                if (val["totalcomplete"] == val["totalall"]) {
                                    tr = tr + "<div class='btn-group'><a class = 'btn blue' href= '#' data-toggle='dropdown'><i class='icon-cog'> </i> การกระทำ<i class='icon-angle-down'> </i></a>";
                                    tr = tr + "           <ul class = 'dropdown-menu' >";
                                    tr = tr + "           <li> <a href = '/Control/Function/paymentCompleted.php?reference="+val["reference"]+"&table="+val["table_order"]+"' class ='btn green'> <i class = 'icon-check'> </i> เรียกเก็บเงินแล้ว</a > </li>";
                                    tr = tr + "            </ul>  </div> ";
                                }
                                tr = tr + "</td > ";
                                tr = tr + "</tr>";
                                $('#myTable > tbody:last').append(tr);
                            });
                        }

                    });
        }

        setInterval(getDataFromDb, 3000); // 1000 = 1 second
    </script>

</body>
<!-- END BODY -->
</html>