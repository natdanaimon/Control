<?php
session_start();
include './Function/FunctionCheckMobile.php';
include './Function/PermissionForUser.php';

ACTIVEPAGES(1);
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
        <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
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
        <link href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/chosen-bootstrap/chosen/chosen.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages/profile.css" rel="stylesheet" type="text/css" />

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






            <?php include './ConnectDB/DB.php'; ?>
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div id="portlet-config" class="modal hide">
                    <div class="modal-header">
                        <!--                        <button data-dismiss="modal" class="close" type="button"></button>
                                                <h3>Widget Settings</h3>-->
                    </div>
                    <div class="modal-body">


                        <!--                        Widget settings form goes here-->
                    </div>
                </div>
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row-fluid">
                        <div class="span12">
                            <h3 class="page-title">
                                <?= $_SESSION["_home"] ?> <small></small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php"><?= $_SESSION["_home"] ?></a> 
<!--                                    <i class="icon-angle-right"></i>-->
                                </li>
                                <!--                                <li><a href="#">สถานะ</a></li>-->
                                <li class="pull-right no-text-shadow">
                                    <!--                                    <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                                                            <i class="icon-calendar"></i>
                                                                            <span></span>
                                                                            <i class="icon-angle-down"></i>
                                                                        </div>-->
                                </li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->


                    <ul class="page-sidebar-hovering"></ul>









                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="tab-pane row-fluid active" id="tab_1_1">
                        <ul class="unstyled profile-nav span7">
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-bar-chart"></i><label class="badge badge-info"><?= $_SESSION["_tb_game_all"] ?></label></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>-->

                                        <!--                                            <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th><i class="icon-globe"></i> <?= $_SESSION["_webname"] ?></th>
                                                <th><i class="icon-bookmark"></i> <?= $_SESSION["_winlose"] ?></th>

                                                <th><i class="icon-signal"></i>  <?= $_SESSION["_trends"] ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($_SESSION["status"] == 0) {
                                                $strSql = "";
                                                $strSql .= " ";
                                                $strSql .= "  SELECT ";
                                                $strSql .= "    d.i_reference, ";
                                                $strSql .= "    w.s_name , ";
                                                $strSql .= "    SUM(d.f_debit)  credit, ";
                                                $strSql .= "    SUM(d.f_credit) debit , ";
                                                $strSql .= "    SUM(d.f_credit)-SUM(d.f_debit) nettotal  ";
                                                $strSql .= "  FROM ";
                                                $strSql .= "    bill b, ";
                                                $strSql .= "    bill_detail d , web w  ";
                                                $strSql .= "  WHERE ";
                                                $strSql .= "    b.s_bill_no = d.s_bill_no ";
                                                $strSql .= "    and d.i_reference = w.i_id ";
                                                $strSql .= "    and b.s_clear = 'N' ";
                                                $strSql .= "  GROUP BY ";
                                                $strSql .= "    d.i_reference ";
                                            } else {
                                                $strSql = "";
                                                $strSql .= " ";
                                                $strSql .= "  SELECT ";
                                                $strSql .= "    d.i_reference, ";
                                                $strSql .= "    w.s_name , ";
                                                $strSql .= "    SUM(d.f_debit) debit , ";
                                                $strSql .= "    SUM(d.f_credit) credit , ";
                                                $strSql .= "    SUM(d.f_debit) - SUM(d.f_credit) nettotal  ";
                                                $strSql .= "  FROM ";
                                                $strSql .= "    bill b, ";
                                                $strSql .= "    bill_detail d , web w  ";
                                                $strSql .= "  WHERE ";
                                                $strSql .= "    b.s_bill_no = d.s_bill_no ";
                                                $strSql .= "    and d.i_reference = w.i_id and b.s_user = '$_SESSION[user]'";
                                                $strSql .= "    and b.s_clear = 'N' ";
                                                $strSql .= "  GROUP BY ";
                                                $strSql .= "    d.i_reference ";
                                            }


                                            $objQuery = mysql_query($strSql);
                                            $_tb_debit = 0;
                                            $_tb_credit = 0;
                                            $_tb_nettotal = 0;

                                            while ($objResult = mysql_fetch_array($objQuery)) {
                                                ?>
                                                <tr>
                                                    <td><?= $objResult["s_name"] ?></td>


                                                                                    <!--                                                        <td><b><font class="badge badge-success"><?= number_format($objResult["debit"]) ?></font> / 
                                                                                                                                                    <font class="badge badge-important"> <?= number_format($objResult["credit"]) ?></font>
                                                                                                                                                </b>
                                                                                                                                            </td>-->



                                                    <td><b><label class="<?= ($objResult["nettotal"] > 0 ? "badge badge-success" : "badge badge-important" ) ?> " ><?= number_format($objResult["nettotal"], 2) ?> </label></b></td>



                                                    <td><img src="img/<?= ($objResult["nettotal"] > 0 ? "icon-up.png" : "icon-down.png" ) ?>" width="25" height="25"/> </td>
                                                </tr>
                                            <?php } ?>  

                                        </tbody>
                                    </table>
                                </div>
                            </div>




                            <?php
                            if ($_SESSION["TYPE_UPDATEBILLSTATUS_ADM"] == "Y") {
                                ?>
                                <div class="alert alert-success">
                                    <button class="close" data-dismiss="alert"></button>
                                    <strong>Notice!</strong> <?= $_SESSION["alert_edit"] ?>
                                </div>
                                <?php
                            } else if ($_SESSION["TYPE_UPDATEBILLSTATUS_ADM"] == "N") {
                                ?>
                                <div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"></button>
                                    <strong>Notice!</strong> <?= $_SESSION["alert_error"] ?>
                                </div>
                                <?php
                            }
                            $_SESSION["TYPE_UPDATEBILLSTATUS_ADM"] = "";
                            ?>
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption"><i class=" icon-bookmark" ></i><label class="badge badge-warning"><?= $_SESSION["_tbbill"] ?> (<?= $_SESSION["_msg_wait"] ?>)</label></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>-->

                                        <!--                                            <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th><i class="icon-tags"></i> <?= $_SESSION["_bill_no"] ?></th>
                                                <th><i class="icon-user"></i> <?= $_SESSION["tb_u_user"] ?></th>

                                                <th><i class="icon-bookmark"></i> <?= $_SESSION["_winlose"] ?> </th>
                                                <th><i ></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($_SESSION["status"] == 0) {

                                                $strSql = "";
                                                $strSql .= "SELECT ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no, ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                $strSql .= "  h.f_accu ,  ";
                                                $strSql .= "  h.f_accu_pay ,  ";
                                                $strSql .= "  h.s_status ,  ";
                                                $strSql .= "   h.d_change ,  ";
                                                $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                $strSql .= "FROM ";
                                                $strSql .= "  bill h, ";
                                                $strSql .= "  bill_detail d ";
                                                $strSql .= "WHERE ";
                                                $strSql .= "  h.s_bill_no = d.s_bill_no and h.s_status = 'N' ";
                                                $strSql .= "  and h.s_clear = 'N' ";
                                                $strSql .= "GROUP BY ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no ";

                                                $strSql .= "ORDER by h.d_change desc , h.s_status  , ";
                                                $strSql .= "  h.s_bill_no , ";
                                                $strSql .= "   h.s_user ";
                                            } else {
                                                $strSql = "";
                                                $strSql .= "SELECT ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no, ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                $strSql .= "  h.f_accu ,  ";
                                                $strSql .= "  h.f_accu_pay ,  ";
                                                $strSql .= "  h.s_status ,  ";
                                                $strSql .= "   h.d_change ,  ";
                                                $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                $strSql .= "FROM ";
                                                $strSql .= "  bill h, ";
                                                $strSql .= "  bill_detail d ";
                                                $strSql .= "WHERE ";
                                                $strSql .= "  h.s_bill_no = d.s_bill_no and h.s_user = '$_SESSION[user]' and h.s_status = 'N' ";
                                                $strSql .= "  and h.s_clear = 'N' ";
                                                $strSql .= "GROUP BY ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no ";

                                                $strSql .= "ORDER by ";
                                                $strSql .= "  h.d_change desc, ";
                                                $strSql .= "  h.s_bill_no desc ";
                                            }


                                            $objQuery = mysql_query($strSql);
                                            $_tb_debit = 0;
                                            $_tb_credit = 0;
                                            $_tb_nettotal = 0;

                                            while ($objResult = mysql_fetch_array($objQuery)) {
                                                ?>
                                                <tr>
                                                    <td>#<?= $objResult["s_bill_no"] ?> <label class='badge badge-warning'> <?= $_SESSION["_msg_wait"] ?> </label></td>
                                                    <td><?= $objResult["s_user"] ?> </td>


                                                                                    <!--                                                        <td><b><font class="badge badge-success"><?= number_format($objResult["debit"]) ?></font> / 
                                                                                                                                                    <font class="badge badge-important"> <?= number_format($objResult["credit"]) ?></font>
                                                                                                                                                </b>
                                                                                                                                            </td>-->



                                                    <td><b><label class="<?= ($objResult["nettotal"] > 0 ? "badge badge-success" : "badge badge-important" ) ?> " ><?= number_format($objResult["nettotal"], 2) ?> </label></b></td>


                                                    <?php if ($_SESSION["status"] > 0) { ?>
                                                        <td><a class="btn mini yellow-stripe" target="_bank" href="create_bill_detail_member.php?billno=<?= $objResult["s_bill_no"] ?>&d_start=<?= $objResult["d_start2"] ?>&d_end=<?= $objResult["d_end2"] ?>&accu=<?= $objResult["f_accu"] - $objResult["f_accu_pay"] ?>&status=<?= $objResult["s_status"] ?>"> <?= $_SESSION["_view"] ?></a></td>
                                                    <?php } else { ?>
                                                        <td>
                                                <li><a  class="btn mini yellow-stripe" data-toggle="modal" data-target="#ShowEditBillADM" onclick="showHintADM(<?php echo $objResult["s_bill_no"]; ?>);">   <?= $_SESSION["_payment"] ?></a></li>

                                                </td>
                                            <?php } ?>
                                            </tr>
                                        <?php } ?>  

                                        </tbody>
                                    </table>
                                </div>
                            </div>




                            <?php
                            if ($_SESSION["TYPE_UPDATEBILLSTATUS_ADM2"] == "Y") {
                                ?>
                                <div class="alert alert-success">
                                    <button class="close" data-dismiss="alert"></button>
                                    <strong>Notice!</strong> <?= $_SESSION["alert_edit"] ?>
                                </div>
                                <?php
                            } else if ($_SESSION["TYPE_UPDATEBILLSTATUS_ADM2"] == "N") {
                                ?>
                                <div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert"></button>
                                    <strong>Notice!</strong> <?= $_SESSION["alert_error"] ?>
                                </div>
                                <?php
                            }
                            $_SESSION["TYPE_UPDATEBILLSTATUS_ADM2"] = "";
                            ?>
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption"><i class="  icon-bell" ></i><label class="badge badge-important"><?= $_SESSION["_tbbill"] ?> (<?= $_SESSION["_msg_overdue"] ?>)</label></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>-->

                                        <!--                                            <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th><i class="icon-tags"></i> <?= $_SESSION["_bill_no"] ?></th>
                                                <th><i class="icon-user"></i> <?= $_SESSION["tb_u_user"] ?></th>

                                                <th><i class="icon-bookmark"></i> <?= $_SESSION["_winlose"] ?> </th>
                                                <th><i ></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($_SESSION["status"] == 0) {

                                                $strSql = "";
                                                $strSql .= "SELECT ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no, ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                $strSql .= "  h.f_accu ,  ";
                                                $strSql .= "  h.f_accu_pay ,  ";
                                                $strSql .= "  h.s_status ,  ";
                                                $strSql .= "   h.d_change ,  ";
                                                $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                $strSql .= "FROM ";
                                                $strSql .= "  bill h, ";
                                                $strSql .= "  bill_detail d ";
                                                $strSql .= "WHERE ";
                                                $strSql .= "  h.s_bill_no = d.s_bill_no and h.s_status = 'Y' and h.f_accu <> 0  and h.f_accu <> h.f_accu_pay ";
                                                $strSql .= "  and h.s_clear = 'N' ";
                                                $strSql .= "GROUP BY ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no ";

                                                $strSql .= "ORDER by h.d_change desc , h.s_status  , ";
                                                $strSql .= "  h.s_bill_no , ";
                                                $strSql .= "   h.s_user ";
                                            } else {
                                                $strSql = "";
                                                $strSql .= "SELECT ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no, ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                $strSql .= "  h.f_accu ,  ";
                                                $strSql .= "  h.f_accu_pay ,  ";
                                                $strSql .= "  h.s_status ,  ";
                                                $strSql .= "   h.d_change ,  ";
                                                $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                $strSql .= "FROM ";
                                                $strSql .= "  bill h, ";
                                                $strSql .= "  bill_detail d ";
                                                $strSql .= "WHERE ";
                                                $strSql .= "  h.s_bill_no = d.s_bill_no and h.s_user = '$_SESSION[user]' and h.s_status = 'Y' and h.f_accu <> 0  and h.f_accu <> h.f_accu_pay ";
                                                $strSql .= "  and h.s_clear = 'N' ";
                                                $strSql .= "GROUP BY ";
                                                $strSql .= "  h.s_user, ";
                                                $strSql .= "  h.s_bill_no ";

                                                $strSql .= "ORDER by h.d_change desc , ";
                                                $strSql .= "  h.s_bill_no desc  ";
                                            }


                                            $objQuery = mysql_query($strSql);
                                            $_tb_debit = 0;
                                            $_tb_credit = 0;
                                            $_tb_nettotal = 0;

                                            while ($objResult = mysql_fetch_array($objQuery)) {
                                                ?>
                                                <tr>
                                                    <td>#<?= $objResult["s_bill_no"] ?> <label class='badge badge-important'> <?= $_SESSION["_msg_accu"] ?></label> <label class='badge badge-info'><?= number_format($objResult["f_accu"] - $objResult["f_accu_pay"], 2) ?></label></td>
                                                    <td><?= $objResult["s_user"] ?> </td>

                                                                                    <!--                                                        <td><b><font class="badge badge-success"><?= number_format($objResult["debit"]) ?></font> / 
                                                                                                                                                    <font class="badge badge-important"> <?= number_format($objResult["credit"]) ?></font>
                                                                                                                                                </b>
                                                                                                                                            </td>-->



                                                    <td><b><label class="<?= ($objResult["nettotal"] > 0 ? "badge badge-success" : "badge badge-important" ) ?> " ><?= number_format($objResult["nettotal"], 2) ?> </label></b></td>


                                                    <?php if ($_SESSION["status"] > 0) { ?>
                                                        <td><a class="btn mini red-stripe" target="_bank" href="create_bill_detail_member.php?billno=<?= $objResult["s_bill_no"] ?>&d_start=<?= $objResult["d_start2"] ?>&d_end=<?= $objResult["d_end2"] ?>&accu=<?= $objResult["f_accu"] - $objResult["f_accu_pay"] ?>&status=<?= $objResult["s_status"] ?>"><?= $_SESSION["_view"] ?></a></td>
                                                    <?php } else { ?>
                                                        <td>
                                                <li><a  class="btn mini red-stripe" data-toggle="modal" data-target="#ShowEditBillADM2" onclick="showHintADM2(<?php echo $objResult["s_bill_no"]; ?>);">  <?= $_SESSION["_pay_accu"] ?></a></li>

                                                </td>
                                            <?php } ?>
                                            </tr>
                                        <?php } ?>  

                                        </tbody>
                                    </table>
                                </div>
                            </div>








                        </ul>

                        <div class="span5" >
                            <div class="row-fluid">

                                <!--end span8-->
                                <?php
                                if ($_SESSION["status"] == 0) {
                                    $strSql = "";
                                    $strSql .= "SELECT ";
                                    $strSql .= "  SUM(a.debit) debit, ";
                                    $strSql .= "  SUM(a.credit) credit, ";
                                    $strSql .= "  SUM(a.overdue) overdue, ";
                                    $strSql .= "  SUM(a.debit) - SUM(a.credit) nettotal_user , ";
                                    $strSql .= "  SUM(a.credit) - SUM(a.debit) nettotal ";
                                    $strSql .= "FROM ";
                                    $strSql .= "  ( ";
                                    $strSql .= "  SELECT ";
                                    $strSql .= "    b.s_user, ";
                                    $strSql .= "    b.s_bill_no, ";
                                    $strSql .= "    b.f_accu, ";
                                    $strSql .= "    b.f_accu_pay, ";
                                    $strSql .= "      'TOTAL' ref ,  ";
                                    $strSql .= "    (b.f_accu - b.f_accu_pay) overdue, ";
                                    $strSql .= "    SUM(d.f_debit) debit, ";
                                    $strSql .= "    SUM(d.f_credit) credit ";
                                    $strSql .= "  FROM ";
                                    $strSql .= "    bill b, ";
                                    $strSql .= "    bill_detail d ";
                                    $strSql .= "  WHERE ";
                                    $strSql .= "    b.s_bill_no = d.s_bill_no  ";
                                    $strSql .= "  and b.s_clear = 'N' ";
                                    $strSql .= "  GROUP BY ";
                                    $strSql .= "    b.s_user, ";
                                    $strSql .= "    b.s_bill_no, ";
                                    $strSql .= "    b.f_accu, ";
                                    $strSql .= "    b.f_accu_pay ";
                                    $strSql .= ") a ";
                                } else {
                                    $strSql = "";
                                    $strSql = "";
                                    $strSql .= "SELECT ";
                                    $strSql .= "  a.s_user, ";
                                    $strSql .= "  SUM(a.debit) debit, ";
                                    $strSql .= "  SUM(a.credit) credit, ";
                                    $strSql .= "  SUM(a.overdue) overdue, ";
                                    $strSql .= "  SUM(a.debit) - SUM(a.credit) nettotal ";
                                    $strSql .= "FROM ";
                                    $strSql .= "  ( ";
                                    $strSql .= "  SELECT ";
                                    $strSql .= "    b.s_user, ";
                                    $strSql .= "    b.s_bill_no, ";
                                    $strSql .= "    b.f_accu, ";
                                    $strSql .= "    b.f_accu_pay, ";
                                    $strSql .= "    (b.f_accu - b.f_accu_pay) overdue, ";
                                    $strSql .= "    SUM(d.f_debit) debit, ";
                                    $strSql .= "    SUM(d.f_credit) credit ";
                                    $strSql .= "  FROM ";
                                    $strSql .= "    bill b, ";
                                    $strSql .= "    bill_detail d ";
                                    $strSql .= "  WHERE ";
                                    $strSql .= "    b.s_bill_no = d.s_bill_no AND b.s_user = '$_SESSION[user]' ";
                                    $strSql .= "  and b.s_clear = 'N' ";
                                    $strSql .= "  GROUP BY ";
                                    $strSql .= "    b.s_user, ";
                                    $strSql .= "    b.s_bill_no, ";
                                    $strSql .= "    b.f_accu, ";
                                    $strSql .= "    b.f_accu_pay ";
                                    $strSql .= ") a ";
                                    $strSql .= "GROUP BY ";
                                    $strSql .= "  a.s_user ";
                                }


                                $objQuery = mysql_query($strSql);
                                $_debit = 0;
                                $_credit = 0;
                                $_overdue = 0;
                                $_nettotal = 0;
                                while ($objResult = mysql_fetch_array($objQuery)) {

                                    $_debit = $objResult["debit"];
                                    $_credit = $objResult["credit"];
                                    $_overdue = $objResult["overdue"];
                                    $_nettotal = $objResult["nettotal"];
                                }
                                ?>
                                <div class="span9">
                                    <b><div class="portlet sale-summary" >
                                            <div class="portlet-title">
                                                <div class="caption"><i class="icon-briefcase"></i><label class="badge badge-success"><?= $_SESSION["_result_total"] ?></label></div>
                                                <div class="tools">

                                                </div>
                                            </div>
                                            <div class="portlet-body" Style="">
                                                <!--                                                <ul class="unstyled">
                                                                                                    <li>
                                                                                                        <span class="sale-info" Style="color: #000">จำนวนเงินที่ได้รับ <i class="icon-img-up"></i></span> 
                                                                                                        <span class="sale-num" ><?= ($_SESSION["status"] == 0 ? number_format($_credit, 2) : number_format($_debit, 2)) ?></span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="sale-info" Style="color: #000">จำนวนเงินที่จ่าย <i class="icon-img-down"></i></span> 
                                                                                                        <span class="sale-num" >-<?= ($_SESSION["status"] == 0 ? number_format($_debit, 2) : number_format($_credit, 2)) ?></span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="sale-info" Style="color: #000">จำนวนเงินค้างชำระ</span> 
                                                                                                        <span class="sale-num" "><?= number_format($_overdue, 2) ?></span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <span class="sale-info" Style="color: #000">จำนวนเงินสุทธิ</span> 
                                                                                                        <span class="sale-num" ><?= number_format($_nettotal, 2) ?></span>
                                                                                                    </li>
                                                                                                </ul>-->
                                                <ul class="unstyled">
                                                    <li>
                                                        <span class="sale-info" Style="color: #000"><?= $_SESSION["_cash_balance"] ?> </span> 
                                                        <span class="sale-num" ><?= ($_SESSION["status"] == 0 ? number_format($_credit - $_debit - $_overdue, 2) : number_format($_debit - $_credit + $_overdue, 2)) ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info" Style="color: #000"><?= $_SESSION["_outstanding"] ?></span> 
                                                        <span class="sale-num" ><?= number_format($_overdue, 2) ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info" Style="color: #000"><?= $_SESSION["_total"] ?></span> 
                                                        <span class="sale-num" ><?= ($_SESSION["status"] == 0 ? number_format($_credit - $_debit, 2) : number_format($_debit - $_credit, 2)) ?></span>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div></b>















                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="  icon-star" ></i><label class="badge badge-info"><?= $_SESSION["_latest"] ?></label></div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"></a>
                                                <!--                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>-->

                                                <!--                                            <a href="javascript:;" class="remove"></a>-->
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><i class=" icon-tags"></i> <?= $_SESSION["_bill_no"] ?></th>

                                                        <th class="hidden-phone"><i class="icon-question-sign"></i> <?= $_SESSION["_status"] ?></th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($_SESSION["status"] == 0) {

                                                        $strSql = "";
                                                        $strSql .= "SELECT ";
                                                        $strSql .= "  h.s_user, ";
                                                        $strSql .= "  h.s_bill_no, ";
                                                        $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                        $strSql .= "  h.f_accu ,  ";
                                                        $strSql .= "  h.f_accu_pay ,  ";
                                                        $strSql .= "  h.s_status ,  ";
                                                        $strSql .= "   h.d_change ,  ";
                                                        $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                        $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                        $strSql .= "FROM ";
                                                        $strSql .= "  bill h, ";
                                                        $strSql .= "  bill_detail d ";
                                                        $strSql .= "WHERE ";
                                                        $strSql .= "  h.s_bill_no = d.s_bill_no  ";
                                                        $strSql .= "  and h.s_clear = 'N' ";
                                                        $strSql .= "GROUP BY ";
                                                        $strSql .= "  h.s_user, ";
                                                        $strSql .= "  h.s_bill_no ";

                                                        $strSql .= "ORDER by ";
                                                        $strSql .= "  h.d_change desc,  h.s_bill_no desc ";
                                                        $strSql .= "  LIMIT 10";
                                                    } else {
                                                        $strSql = "";
                                                        $strSql .= "SELECT ";
                                                        $strSql .= "  h.s_user, ";
                                                        $strSql .= "  h.s_bill_no, ";
                                                        $strSql .= "  DATE_FORMAT(h.d_start,'%d-%m-%Y') d_start , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_end,'%d-%m-%Y') d_end , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_start,'%Y-%m-%d') d_start2 , ";
                                                        $strSql .= "  DATE_FORMAT(h.d_end,'%Y-%m-%d') d_end2 , ";
                                                        $strSql .= "  h.f_accu ,  ";
                                                        $strSql .= "  h.f_accu_pay ,  ";
                                                        $strSql .= "  h.s_status ,  ";
                                                        $strSql .= "   h.d_change ,  ";
                                                        $strSql .= "  sum(d.f_debit) debit, sum(d.f_credit) credit, ";
                                                        $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as nettotal ";
                                                        $strSql .= "FROM ";
                                                        $strSql .= "  bill h, ";
                                                        $strSql .= "  bill_detail d ";
                                                        $strSql .= "WHERE ";
                                                        $strSql .= "  h.s_bill_no = d.s_bill_no and h.s_user = '$_SESSION[user]'  ";
                                                        $strSql .= "  and h.s_clear = 'N' ";
                                                        $strSql .= "GROUP BY ";
                                                        $strSql .= "  h.s_user, ";
                                                        $strSql .= "  h.s_bill_no ";

                                                        $strSql .= "ORDER by ";
                                                        $strSql .= "  h.d_change desc, h.s_bill_no desc ";
                                                        $strSql .= "  LIMIT 10";
                                                    }


                                                    $objQuery = mysql_query($strSql);
                                                    $_tb_debit = 0;
                                                    $_tb_credit = 0;
                                                    $_tb_nettotal = 0;

                                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                                        ?>
                                                        <tr>
                                                            <td>#<?= $objResult["s_bill_no"] ?> </td>






                                                            <td>
                                                                <?php if ($objResult["s_status"] == "Y") { ?>
                                                                    <?php if ($objResult["f_accu"] != 0) { ?>
                                                                        <?php if ($objResult["f_accu"] == $objResult["f_accu_pay"]) { ?>
                                                                            <label class='badge badge-success'> <?= $_SESSION["_msg_success"] ?></label>
                                                                        <?php } else { ?>
                                                                            <label class='badge badge-important'> <?= $_SESSION["_msg_accu"] ?></label>
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <label class='badge badge-success'> <?= $_SESSION["_msg_success"] ?></label>
                                                                    <?php } ?>




                                                                <?php } else if ($objResult["s_status"] == "N") { ?>
                                                                    <label class='badge badge-warning'> <?= $_SESSION["_msg_wait"] ?></label>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($_SESSION["status"] == 0) { ?>
                                                                    <a href="create_bill_detail.php?billno=<?= $objResult["s_bill_no"] ?>&user=<?= $objResult["s_user"] ?>&d_start=<?= $objResult["d_start2"] ?>&d_end=<?= $objResult["d_end2"] ?>&accu=<?= $objResult["f_accu"] - $objResult["f_accu_pay"] ?>&status=<?= $objResult["s_status"] ?>"class="btn mini blue-stripe">   <?= $_SESSION["_view"] ?></a>
                                                                <?php } else { ?>
                                                                    <a href="create_bill_detail_member.php?billno=<?= $objResult["s_bill_no"] ?>&d_start=<?= $objResult["d_start2"] ?>&d_end=<?= $objResult["d_end2"] ?>&accu=<?= $objResult["f_accu"] - $objResult["f_accu_pay"] ?>&status=<?= $objResult["s_status"] ?>" class="btn mini blue-stripe">  <?= $_SESSION["_view"] ?></a>
                                                                <?php } ?>
                                                            </td>


                                                        </tr>
                                                    <?php } ?>  

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                </div>




                                <!--end span4-->
                            </div>
                        </div>
                    </div>
                    <!-- END DASHBOARD STATS -->
















                </div>

            </div>



            <!-- END PORTLET-->
        </div>
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
<!-- BEGIN CORE PLUGINS -->   

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
<script src="assets/scripts/ui-general.js"></script>     
<script src="assets/scripts/table-managed.js"></script>    
<script src="assets/scripts/form-components.js"></script>   
<script>
                                            jQuery(document).ready(function () {
                                                App.init();
                                                TableManaged.init();
                                                FormComponents.init();

                                            });
</script>
<script type="text/javascript">


    $('#myModalAddWebURLSuccess').modal('show');
    $('#myModalAddWebURLFail').modal('show');

    $('#myModalUpdateWebURLSuccess').modal('show');
    $('#myModalUpdateWebURLFail').modal('show');

    $('#myModalDeleteWEBURLFail').modal('show');
    $('#myModalDeleteWEBURLSuccess').modal('show');

    $('#myModalEditPassSuccess').modal('show');
    $('#myModalEditPassFail').modal('show');
//    $('#myModalPictureSuccess').modal('show');
//    $('#myModalPictureFail').modal('show');




    function ShowAddURL() {
        $('#ShowAddURL').modal('show');
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
                    //alert(result[1]);
                    //alert(result[4]);
                    document.getElementById("url_id").value = result[0];
                    document.getElementById("url_edit").value = result[1];
                    document.getElementById("weburl_add").value = result[2];
                    document.getElementById("url_type").value = result[3];
                }
            }
            xmlhttp.open("GET", "ajax/getDataURL.php?id=" + str, true);
            xmlhttp.send();
        }
    }

    function showHintADM(str) {
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
                    document.getElementById("ADMid_bill").value = result[0];
                    document.getElementById("ADMid_sum").value = result[1];
                    document.getElementById("acc_userADM").value = result[2];
//                    if (result[1] > 0) {
//                        document.getElementById("ADMid_pay").readOnly = true;
//                    }else{
//                         document.getElementById("ADMid_pay").readOnly = false;
//                    }

                }
            }
            xmlhttp.open("GET", "ajax/getDataBill.php?bill=" + str, true);
            xmlhttp.send();
        }
    }


    function showHintADM2(str) {
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
                    document.getElementById("ADMid_bill2").value = result[0];
                    document.getElementById("ADMid_sum2").value = result[1];
                    document.getElementById("acc_user2ADM").value = result[2];

                }
            }
            xmlhttp.open("GET", "ajax/getDataBill2.php?bill=" + str, true);
            xmlhttp.send();
        }
    }

</script>



<!-- Fancybox  Popup -->
<!--<script src="fancybox/jquery-1.4.3.min.js"></script> -->
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
    function gohome() {
        //window.close(); 
        //location.href = "/"; 
    }
    $(document).ready(function () {
        $("#hidden_link").fancybox({
            'scrolling': 'no',
            'hideOnContentClick': true,
            'autoScale': false,
            'width': '874px',
            'height': '362px',
            'onCleanup': gohome//,
                    //            onComplete: function () {
                    //                jQuery("#fancybox-img").wrap(jQuery("<a />", {
                    //                    href: "OpenHouse.php", // the URL to open after clicking the image
                    //                    // href:"images_popup/Open House Day poster-01.jpg",
                    //                    target: "_blank"
                    //                }))
                    //            }
        }).trigger('click');

        /* $(document).ready(function() {         
         $("#hidden_link").fancybox({ 
         'scrolling' : 'no', 
         'hideOnContentClick' : true, 
         'onCleanup' : gohome 
         }).trigger('click'); 
         */
    });




</script> 
<?php
if ($_SESSION["popup"]) {
    $strSql = "select * from new_popup where s_status = 'Y' LIMIT 1;";
    $objQuery = mysql_query($strSql);
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <a id="hidden_link" href="assets/img/popup/<?= $objResult["s_Image"] ?>" ></a>
        <?php
    }
    $_SESSION["popup"] = FALSE;
}
?>
</body>
<!-- END BODY -->
</html>