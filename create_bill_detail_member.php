<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/PermissionForUser.php';
ACTIVEPAGES(2);
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
                                <li><a href="#">   <?= $_SESSION["_billsearch"] ?></a>
                                </li>

                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <?php
                    include './ConnectDB/DB.php';
                    $strSql = "select * from $database.user u where u.user = '$_SESSION[user]'";
                    $objQuery = mysql_query($strSql);
                    $name = "";
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $name = $objResult["fname"] . " " . $objResult["lname"];
                    }
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i> <?= $_SESSION["_form_bill_pro"] ?></div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                                                <a href="javascript:;" class="reload"></a>
                                                                                <a href="javascript:;" class="remove"></a>-->
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <div class="form-horizontal form-view ">
                                        <h3><b> #<?= $_GET[billno] ?></b> </h3>
                                        <h3 class="form-section"> <?= $_SESSION["_form_account_pro"] ?> 
                                            <small>
                                                <?php
                                                if ($_GET[status] == "Y") {
                                                    ?>
                                                    <?= (($_GET[accu] == 0) ? "<label class='badge badge-success'>" . $_SESSION["_msg_success"] . "</label>" : "<label class='badge badge-important'>" . $_SESSION["_msg_accu"] . "</label><label class='badge badge-info'>" . number_format($_GET[accu], 2) . "</label>") ?>   
                                                    <?php
                                                } else {

                                                    echo "<label class='badge badge-warning'>" . $_SESSION["_msg_wait"] . "</label> ";
                                                }
                                                ?>
                                            </small></h3>
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label" for="firstName"><?= $_SESSION["tb_u_fname"] ?> - <?= $_SESSION["tb_u_lname"] ?>:</label>
                                                    <div class="controls">
                                                        <span class="text"><?= $name ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"><?= $_SESSION["_form_user"] ?>:</label>
                                                    <div class="controls">
                                                        <span class="text"><?= $_SESSION[user] ?></span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <!--/row-->        

                                        <!--/row-->                
                                        <h3 class="form-section"><?= $_SESSION["_form_bill_pro"] ?></h3>
                                        <div class="row-fluid">
                                            <div class="span12 ">
                                                <div class="control-group">
                                                    <label class="control-label"><?= $_SESSION['_form_d_start'] ?>:</label>
                                                    <div class="controls">
                                                        <span class="text"><?= $_GET[d_start] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span6 ">
                                                <div class="control-group">
                                                    <label class="control-label"><?= $_SESSION['_form_d_end'] ?>:</label>
                                                    <div class="controls">
                                                        <span class="text"><?= $_GET[d_end] ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/row-->      


                                        <?php
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
                                        $strSql .= "    w.i_id = w2u.i_id AND w2u.s_user = '$_SESSION[user]' ";
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
                                        $strSql .= "    d.i_reference, ";
                                        $strSql .= "    d.s_dname, ";
                                        $strSql .= "    h.s_clear ";
                                        $strSql .= "  FROM ";
                                        $strSql .= "    bill h, ";
                                        $strSql .= "    bill_detail d ";
                                        $strSql .= "  WHERE ";
                                        $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no = '$_GET[billno]' ";
                                        $strSql .= ") b ON w.i_id = b.i_reference AND b.s_user = w.us ";
                                        $objQuery = mysql_query($strSql);
                                        $ck_loop = FALSE;
                                        $sumtotal = 0;
                                        while ($objResult = mysql_fetch_array($objQuery)) {
                                            if (($objResult["f_debit"] + $objResult["f_credit"]) != 0) {
                                                $sumtotal = $sumtotal + ($objResult["f_debit"] - $objResult["f_credit"]);
                                                $ck_loop = FALSE;
                                                if (!$ck_loop) {
                                                    if ($objResult["s_clear"] != null) {
                                                        if ($objResult["s_clear"] == "Y") {
                                                            $_SESSION[clearbill] = "<label class='badge badge-success'>" . $_SESSION["clearShow"] . "</label>";
                                                            $ck_loop = TRUE;
                                                        } else {
                                                            $_SESSION[clearbill] = "";
                                                            $ck_loop = TRUE;
                                                        }
                                                    }
                                                }
                                                ?>



                                                <div class="row-fluid">
                                                    <div class="span6 ">
                                                        <div class="control-group">
                                                            <label class="control-label"><?= $objResult["s_name"] ?>:</label>
                                                            <div class="controls">
                                                                <span class="text display-value" data-display="country">
                                                                    <label class="<?= (($objResult["f_debit"] - $objResult["f_credit"]) > 0 ? "badge badge-success" : "badge badge-important" ) ?> " ><?= number_format($objResult["f_debit"] - $objResult["f_credit"]) ?> </label></b>
                                                                    <span class="badge badge-important"><?= $objResult["s_dname"] ?></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <?php
                                            }
                                        }
                                        ?>
                                        <h3 class="form-section"><?= $_SESSION["_result_pro_total"] ?> <?= $_SESSION[clearbill] ?></h3> 
                                        <?php
                                        $strSql = "";
                                        $strSql .= "select d.s_dname , d.debit , c.credit from  ";
                                        $strSql .= "(SELECT ";
                                        $strSql .= "  tmp.s_dname , sum(tmp.f_debit) debit ";
                                        $strSql .= "FROM ";
                                        $strSql .= "  ( ";
                                        $strSql .= "  SELECT ";
                                        $strSql .= "    b.s_dname , b.f_debit , b.f_credit ";
                                        $strSql .= "  FROM ";
                                        $strSql .= "    ( ";
                                        $strSql .= "    SELECT ";
                                        $strSql .= "      w.*, ";
                                        $strSql .= "      w2u.s_user us ";
                                        $strSql .= "    FROM ";
                                        $strSql .= "      web2user w2u, ";
                                        $strSql .= "      web w ";
                                        $strSql .= "    WHERE ";
                                        $strSql .= "      w.i_id = w2u.i_id AND w2u.s_user ='$_SESSION[user]' ";
                                        $strSql .= "  ) w ";
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
                                        $strSql .= "    d.i_reference, ";
                                        $strSql .= "    d.s_dname, ";
                                        $strSql .= "    h.s_clear ";
                                        $strSql .= "  FROM ";
                                        $strSql .= "    bill h, ";
                                        $strSql .= "    bill_detail d ";
                                        $strSql .= "  WHERE ";
                                        $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no = '$_GET[billno]' ";
                                        $strSql .= ") b ON w.i_id = b.i_reference AND b.s_user = w.us ";
                                        $strSql .= "WHERE ";
                                        $strSql .= "  b.s_bill_no IS NOT NULL ";
                                        $strSql .= ") tmp ";
                                        $strSql .= "group by   tmp.s_dname ) d , ";
                                        $strSql .= "(SELECT ";
                                        $strSql .= "  tmp.s_dname , sum(tmp.f_credit) credit ";
                                        $strSql .= "FROM ";
                                        $strSql .= "  ( ";
                                        $strSql .= "  SELECT ";
                                        $strSql .= "    b.s_dname , b.f_debit , b.f_credit ";
                                        $strSql .= "  FROM ";
                                        $strSql .= "    ( ";
                                        $strSql .= "    SELECT ";
                                        $strSql .= "      w.*, ";
                                        $strSql .= "      w2u.s_user us ";
                                        $strSql .= "    FROM ";
                                        $strSql .= "      web2user w2u, ";
                                        $strSql .= "      web w ";
                                        $strSql .= "    WHERE ";
                                        $strSql .= "      w.i_id = w2u.i_id AND w2u.s_user ='$_SESSION[user]' ";
                                        $strSql .= "  ) w ";
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
                                        $strSql .= "    d.i_reference, ";
                                        $strSql .= "    d.s_dname, ";
                                        $strSql .= "    h.s_clear ";
                                        $strSql .= "  FROM ";
                                        $strSql .= "    bill h, ";
                                        $strSql .= "    bill_detail d ";
                                        $strSql .= "  WHERE ";
                                        $strSql .= "    h.s_bill_no = d.s_bill_no AND h.s_bill_no ='$_GET[billno]' ";
                                        $strSql .= ") b ON w.i_id = b.i_reference AND b.s_user = w.us ";
                                        $strSql .= "WHERE ";
                                        $strSql .= "  b.s_bill_no IS NOT NULL ";
                                        $strSql .= ") tmp ";
                                        $strSql .= "group by   tmp.s_dname ) c ";
                                        $strSql .= "WHERE d.s_dname = c.s_dname ";
                                        $strSql .= "order by d.s_dname ";
                                        $objQuery = mysql_query($strSql);
                                        while ($objResult = mysql_fetch_array($objQuery)) {
                                            ?>


                                            <div class="row-fluid">
                                                <div class="span6 ">
                                                    <div class="control-group">
                                                        <label class="control-label"><?= $objResult["s_dname"] ?>:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="country">
                                                                 <label class="<?= (($objResult["debit"] - $objResult["credit"]) > 0 ? "badge badge-success" : "badge badge-important" ) ?> " ><?= number_format($objResult["debit"] - $objResult["credit"]) ?> </label></b>
                                                                  

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php } ?>








                                        <h3 class="form-section"><?= $_SESSION["_result_pro"] ?> <?= $_SESSION[clearbill] ?></h3> 


                                        <?php if ($_GET[accu] > 0) { ?>
                                            <div class="control-group">
                                                <label class="control-label"><?= $_SESSION["_overdue"] ?> :</label>
                                                <div class="controls">
                                                    <span class="badge badge-warning" data-display="country"><h4><font color=""><b><?= number_format($_GET[accu], 2) ?></b></font></h4></span>
                                                </div>

                                            </div>
                                        <?php } ?>
                                        <div class="control-group">
                                            <label class="control-label"><?= $_SESSION["_result"] ?> :</label>
                                            <div class="controls">
                                                <span class="badge badge-info" data-display="country"><h4><font color=""><b><?= number_format($sumtotal, 2) ?></b></font></h4></span>
                                            </div>

                                        </div>


                                        <div class="form-actions">
<!--                                            <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                            <button type="button" class="btn">Back</button>-->
                                        </div>
                                    </div>
                                    <!-- END FORM-->  
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
    <?php ?>
    <script type="text/javascript">
        $('#myModalDeleteBillSuccess').modal('show');
        $('#myModalDeleteBillFail').modal('show');

        $('#myModalAddWebSuccess').modal('show');
        $('#myModalAddWebFail').modal('show');

        $('#myModalUpdateBillStatusSuccess').modal('show');
        $('#myModalUpdateBillStatusFail').modal('show');




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
                        document.getElementById("id_bill").value = result[0];
                        document.getElementById("id_sum").value = result[1];


                    }
                }
                xmlhttp.open("GET", "ajax/getDataBill.php?bill=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</body>
<!-- END BODY -->
</html>