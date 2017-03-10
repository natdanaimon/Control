<?php @session_start(); ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
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
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body >

        <div class="page-container">
            <div class="page-sidebar nav-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->        
                <ul class="page-sidebar-menu">

                    <li>
                    </li>
                    <li class="">

                        <a class="btn red" href="javascript:closeWindow();" >
                            <font color="white">Close Page</font>

                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>


            <script>
                function closeWindow() {
                    window.open('', '_parent', '');
                    window.close();
                }
            </script> 
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row-fluid">
                        <div class="span12">



                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <?php
                    include './ConnectDB/DB.php';
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="tabbable tabbable-custom tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1_1" data-toggle="tab"><?= $_SESSION["_form_account_pro"] ?></a></li>
                        </ul>
                        <br/>






                        <?php
                        $sql = " SELECT  * FROM user a where  a.user='" . $_GET["user"] . "' ";

                        $objQuery = mysql_query($sql);
                        while ($objResult = mysql_fetch_array($objQuery)) {
                            $pic = $objResult["picture"];
                            $fname = $objResult["fname"];
                            $lname = $objResult["lname"];
                            $zip = $objResult["zipcode"];
                            $address = $objResult["address"];
                        }


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
                        $strSql .= "    b.s_bill_no = d.s_bill_no AND b.s_user = '$_GET[user]' ";
                        $strSql .= "  and b.s_clear = 'N' ";
                        $strSql .= "  GROUP BY ";
                        $strSql .= "    b.s_user, ";
                        $strSql .= "    b.s_bill_no, ";
                        $strSql .= "    b.f_accu, ";
                        $strSql .= "    b.f_accu_pay ";
                        $strSql .= ") a ";
                        $strSql .= "GROUP BY ";
                        $strSql .= "  a.s_user ";

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

                        <div class="tab-pane row-fluid active" id="tab_1_1">
                            <ul class="unstyled profile-nav span3">
                                <li><img src="assets/img/user/<?= $pic ?>" alt="" width="100%" height="100%"  ></li>

                            </ul>
                            <div class="span9">
                                <div class="row-fluid">
                                    <div class="span8 profile-info">
                                        <h1><?= $fname . " " ?><?= $lname ?></h1>
                                        <p><?= $_SESSION["_address"] ?> : <?= $address . " " ?><?= ($zip == 0 ? "" : $zip) ?></p>
<!--                                            <p><a href="#">www.mywebsite.com</a></p>-->
                                        <ul class="unstyled inline">
                                            <li><i class="icon-map-marker"></i> Thailand</li>

                                            <li><i class="icon-briefcase"></i> Design</li>
                                            <li><i class="icon-star"></i> Top Seller</li>
                                            <li><i class="icon-heart"></i> BASE Jumping</li>
                                        </ul>
                                    </div>
                                    <!--end span8-->
                                    <div class="span4">
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
                                                            <span class="sale-num" ><?= number_format($_debit - $_credit + $_overdue, 2) ?></span>
                                                        </li>
                                                        <li>
                                                            <span class="sale-info" Style="color: #000"><?= $_SESSION["_outstanding"] ?></span> 
                                                            <span class="sale-num" ><?= number_format($_overdue, 2) ?></span>
                                                        </li>
                                                        <li>
                                                            <span class="sale-info" Style="color: #000"><?= $_SESSION["_total"] ?></span> 
                                                            <span class="sale-num" ><?= number_format($_debit - $_credit, 2) ?></span>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div></b>
                                    </div>
                                    <!--end span4-->
                                </div>
                                <!--end row-fluid-->
                                <div class="tabbable tabbable-custom tabbable-custom-profile">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1_11" data-toggle="tab"><?= $_SESSION["_latest"] ?></a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_11">
                                            <div class="portlet-body" style="display: block;">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th><i class="icon-briefcase"></i> <?= $_SESSION["_bill_no"] ?></th>
                                                            <th class="hidden-phone"><i class="icon-question-sign"></i> <?= $_SESSION["_daterange"] ?></th>
                                                            <th><i class="icon-bookmark"></i>  <?= $_SESSION["_total"] ?></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $cnt = FALSE;
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
                                                        $strSql .= "  sum(d.f_debit)d_total, sum(d.f_credit) c_total, ";
                                                        $strSql .= "  sum(d.f_debit) - sum(d.f_credit) as total ";
                                                        $strSql .= "FROM ";
                                                        $strSql .= "  bill h, ";
                                                        $strSql .= "  bill_detail d ";
                                                        $strSql .= "WHERE ";
                                                        $strSql .= "  h.s_bill_no = d.s_bill_no ";
                                                        $strSql .= "  and h.s_user = '$_GET[user]' ";
                                                        $strSql .= "  and h.s_clear = 'N' ";
                                                        $strSql .= "GROUP BY ";
                                                        $strSql .= "  h.s_user, ";
                                                        $strSql .= "  h.s_bill_no ";
                                                        $strSql .= "ORDER by h.s_bill_no desc LIMIT 10   ";
//                                                        $strSql .= "  h.s_bill_no , ";
//                                                        $strSql .= "   h.s_user ";
                                                        $objQuery = mysql_query($strSql);

                                                        while ($objResult = mysql_fetch_array($objQuery)) {
                                                            $cnt = TRUE;
                                                            ?>
                                                            <tr>
                                                                <td><b>#<?= $objResult["s_bill_no"] ?></b></td>
                                                                <td class="hidden-phone"><?= $objResult["d_start"] ?> - <?= $objResult["d_end"] ?></td>
                                                                <td><?= number_format($objResult["total"], 2) ?> 

                                                                    <?php
                                                                    if ($objResult["s_status"] == "Y") {
                                                                        ?>
                                                                        <?= ((($objResult["f_accu"] - $objResult["f_accu_pay"]) <= 0) ? "<label class='badge badge-success'>" . $_SESSION["_msg_success"] . "</label>" : "<label class='badge badge-important'>" . $_SESSION["_msg_accu"] . "</label><label class='badge badge-info'>" . number_format($objResult["f_accu"] - $objResult["f_accu_pay"], 2) . "</label>") ?>   
                                                                        <?php
                                                                    } else {

                                                                        echo "<label class='badge badge-warning'>" . $_SESSION["_msg_wait"] . "</label>";
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><a class="btn mini green-stripe" target="_bank" href="create_bill_detail.php?billno=<?= $objResult["s_bill_no"] ?>&status=<?= $objResult["s_status"] ?>&user=<?= $objResult["s_user"] ?>&d_start=<?= $objResult["d_start2"] ?>&d_end=<?= $objResult["d_end2"] ?>&accu=<?= $objResult["f_accu"] - $objResult["f_accu_pay"] ?>"><?= $_SESSION["_view"] ?></a></td>
                                                            </tr>
                                                            <?php
                                                        }

                                                        if (!$cnt) {
                                                            ?>
                                                            <tr>
                                                                <td></td>
                                                                <td align="right"><span class="label label-important label-mini">ไม่มีข้อมูล</span></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--tab-pane-->

                                        <!--tab-pane-->
                                    </div>
                                </div>
                            </div>
                            <div align="right">
                                <span class="span12">
                                    <a href="create_bill_search.php" class="btn green"><span class="icon-search" > <?= $_SESSION["_searchall"] ?>  </a>
                                </span>
                            </div>
                            <!--end span9-->
                        </div>

                    </div>

                </div>

            </div>
            <!-- END PAGE CONTAINER-->    
        </div>



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
        <script type="text/javascript" src="assets/plugins/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.pulsate.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.bootpag.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/scripts/ui-general.js"></script>     
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
                jQuery(document).ready(function () {
// initiate layout and plugins
                    App.init();
                    UIGeneral.init();

                });

                $('#testhide').prop("hidden", false);
                $('#testhide').hide(3000);



//                                $('#testhide').attr('Visible',false);


        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>