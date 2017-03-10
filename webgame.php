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

                    $sql = " select i_id , s_name , s_status ,   DATE_FORMAT(d_create,'%d-%m-%Y') as d_create , d_change from web  order by i_id desc  ";
                    $objQuery = mysql_query($sql);
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-globe"></i><?= $_SESSION["_web"] ?></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
<!--                                        <a href="javascript:;" class="reload"></a>-->
                                        <!--                                        <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="btn-group">
                                            <button id="sample_editable_1_new" class="btn blue" onclick="ShowAddWeb();">
                                                <?= $_SESSION["_webadd"] ?> <i class="icon-plus"></i>
                                            </button>
                                        </div>

                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
<!--                                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->
<!--                                                <th><?= $_SESSION["_webno"] ?></th>-->
                                                <th><?= $_SESSION["_webname"] ?></th>
                                                <th><?= $_SESSION["_type"] ?></th>
                                                <th ><?= $_SESSION["_datecreate"] ?></th>
                                                <th ><?= $_SESSION["_datechange"] ?></th>
<!--                                                <th >เบอร์โทรศัพท์</th>
                                                <th >อีเมล์</th>-->
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                <tr class="odd gradeX">
    <!--                                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>-->
<!--                                                    <td align="center"><?= $objResult["i_id"] ?>  </td>-->
                                                    <td align="center"><?= $objResult["s_name"] ?></td>
                                                    <td align="center" ><?= ($objResult["s_status"] == "Y" ? "Casino Online" : "Sport Betting") ?> </td>
                                                    <td align="center" ><?= $objResult["d_create"] ?></td>
                                                    <td align="center" ><?= $objResult["d_change"] ?></td>
                                                    

                                                    <td align="center" width="80" >
                                                        <div class="btn-toolbar">
                                                            <div class="btn-group">
                                                                <a class="btn blue" href="#" data-toggle="dropdown">
                                                                    <i class="icon-cog"></i> <?= $_SESSION["m_action"] ?>
                                                                    <i class="icon-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="AddContent.php?id=<?= $objResult["i_id"] ?>" class="btn green" ><i class="icon-trello"></i> <?= $_SESSION["_btn_content"] ?></a></li>
                                                                    <li ><a href="AddURL.php?id=<?= $objResult["i_id"] ?>" class="btn purple" ><i class="icon-link"></i> <?= $_SESSION["_add_weburl"] ?></a></li>
                                                                    <li><a  class="btn yellow" data-toggle="modal" data-target="#ShowEditWeb" onclick="showHint(<?php echo $objResult["i_id"]; ?>);"> <i class="icon-pencil"></i> <?= $_SESSION["action_edit"] ?></a></li>
                                                                    <li ><a href="/Control/Function/DeleteWeb.php?id=<?= $objResult["i_id"] ?>" class="btn red" ><i class="icon-trash"></i> <?= $_SESSION["action_delete"] ?></a></li>

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