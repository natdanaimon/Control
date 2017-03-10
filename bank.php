<?php
@session_start();
include './Function/FunctionCheckMobile.php';
include './Function/Permission.php';
ACTIVEPAGES(9);
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
                                <li><a href="webpopup.php">   <?= $_SESSION["_bank"] ?></a>
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

                    <form action="/Control/Function/AddBank.php" method="post" enctype="multipart/form-data">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="row-fluid">

                            <div class="span6">

                                <div class="controls">
                                    <select name="bank" id="select2_sample_bank1" class="span6 select2">
                                        <option value="kbank">ธนาคารกสิรไทย (KBANK)</option>
                                        <option value="bbl">ธนาคารกรุงเทพ (BBL)</option>
                                        <option value="scb">ธนาคารไทยพาณิชย์ (SCB)</option>
                                        <option value="ktb">ธนาคารกรุงไทย (KTB)</option>
                                        <option value="bay">ธนาคารกรุงศรีอยุธยา (BAY)</option>
                                        <option value="tmb">ธนาคารทหารไทย (TMB)</option>
                                        <option value="gsb">ธนาคารออมสิน (GSB)</option>
                                        <!--                                        <option value="cimb">ธนาคารซีไอเอ็มบีไทย (CIMB)</option>
                                                                                <option value="nbank">ธนาคารธนชาติ (NBANK)</option>
                                                                                <option value="uob">ธนาคารยูโอบี (UOB)</option>-->




                                    </select>
                                </div>
                            </div>
                        </div> 

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="input-icon left">
                                    <i class=" icon-briefcase"></i>
                                    <input class="m-wrap large " type="text" name="bank_name" id="s_topic" placeholder="<?= $_SESSION["_bank_acc"] ?>"  pattern="[^'\x22]+" required>    
                                </div>
                            </div> 
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="input-icon left">
                                    <i class="icon-list-alt"></i>
                                    <input class="m-wrap large " type="text" name="bank_acc" id="s_topic" placeholder="<?= $_SESSION["_bank_number"] ?>"  pattern="[^'\x22]+" required>    
                                </div>
                            </div> 
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn blue "><span class="icon-hospital"></span> <?= $_SESSION["act_addbank"] ?></button>



                        </div>

                    </form>






                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-hospital"></i><?= $_SESSION["_bank"] ?></div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                                <!--                                <a href="javascript:;" class="reload"></a>-->
                                <!--                                        <a href="javascript:;" class="remove"></a>-->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <?php
                                include './ConnectDB/DB.php';
                                include './Function/Utill.php';
                                $util = new Utill();
//
                                $sql = " select *  from bank  order by bank_name ";
                                $objQuery = mysql_query($sql);
                                ?>

                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                    <tr>
<!--                                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->
                                        <th><?= $_SESSION["_image"] ?></th>
                                        <th><?= $_SESSION["_bankname"] ?></th>
                                        <th><?= $_SESSION["_bank_acc"] ?></th>
                                        <th><?= $_SESSION["_bank_number"] ?></th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                        <tr class="odd gradeX">

                                            <td align="center">       <img src="assets/bank/<?= $objResult["bank_name"] ?>.png" alt="" width="50" height="50" /></td>
                                            <td align="center"><?= $util->getBankName($objResult["bank_name"]) ?></td>
                                            <td align="center" ><?= $objResult["acc_name"] ?></td>
                                            <td align="center" ><?= $objResult["acc_no"] ?></td>
                                            <td align="center" ></td>


                                            <td align="center" width="80" >
                                                <div class="btn-toolbar label-warning ">
                                                    <div class="btn-group">
                                                        <a class="btn blue" href="#" data-toggle="dropdown">
                                                            <i class="icon-cog"></i> <?= $_SESSION["m_action"] ?>
                                                            <i class="icon-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="/Control/Function/DeleteBank.php?id=<?= $objResult["id"] ?>" class="btn red" ><i class="icon-trash"></i> <?= $_SESSION["action_delete"] ?></a></li>

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


        $('#myModalAddBankSuccess').modal('show');
        $('#myModalAddBankFail').modal('show');

        $('#myModalDeleteBankSuccess').modal('show');
        $('#myModalDeleteBankFail').modal('show');

        $('#myModalDeletePOPUPFail').modal('show');
        $('#myModalDeletePOPUPSuccess').modal('show');


        function ShowAddLevel() {
            $('#ShowAddLevel').modal('show');
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
                        document.getElementById("level_add").value = result[0];
                        document.getElementById("score_start_add").value = result[1];
                        document.getElementById("score_end_add").value = result[2];
                        document.getElementById("icon_add").value = result[3];
                    }
                }
                xmlhttp.open("GET", "ajax/getDataLevel.php?id=" + str, true);
                xmlhttp.send();
            }
        }


    </script>
</body>
<!-- END BODY -->
</html>