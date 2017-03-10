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
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
        <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES --> 
        <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PAGE LEVEL STYLES -->
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
        <link href="assets/css/pages/timeline.css" rel="stylesheet" type="text/css"/>


        
        
        
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
                    <div id="dashboard">

                        <!-- BEGIN DASHBOARD STATS -->

                        <!-- END DASHBOARD STATS -->
                        <div class="clearfix"></div>


                    </div>
                    <div align="center">
                        <div id="piechart" style="width: 900px; height: 500px;">



                        </div>
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





<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
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
<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
<script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<script src="assets/scripts/tasks.js" type="text/javascript"></script>        
<!-- END PAGE LEVEL SCRIPTS -->  

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
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
        Tasks.initDashboardWidget();
    });
</script>

<script type="text/javascript">

    $('#myModalChangePassSuccess').modal('show');
    $('#myModalChangePassFail').modal('show');
    $('#myModalPopupShow').modal('show');
</script>
<div id="myModalPopupShow" class="modal " tabindex="-1" data-width="760">
    <form action="/Control/Function/EditUser.php" method="post" enctype="multipart/form-data">
        <div class="modal-header bg-blue">

            <h4 class="modal-title" id="exampleModalLabel"><i class="icon-group"></i> <b><?= $_SESSION["edit_user"] //แก้ไขข้อมูลผู้ใช้งาน                 ?> </b> </h4>
        </div>
        <div class="modal-body">
            <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อผู้ใช้งาน" name="user_add"  id="user_add"  pattern="[^'\x22]+" readonly="true"/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="ชื่อ" name="fname_add"  id="fname_add"  pattern="[^'\x22]+" required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-phone"></i>
                            <input class="m-wrap " type="text" placeholder="เบอร์โทรศัพท์ 000-000-0000" name="phone_add" id="phone_add"   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  />    
                        </div>
                        
                        <div class="input-icon left">
                            <i class="icon-home"></i>
                            <input class="m-wrap " type="text" placeholder="ที่อยู่" name="address1_add" id="address1_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-flickr"></i>
                            <input class="m-wrap " type="text" placeholder="LINE ID" name="line_add" id="line_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select name="type" id="type" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: green;font-weight: bold">
                                    <option value="Y">Active</option>
                                    <option value="N">Cancel</option>

                                </select>
                            </div>
                        </div>







                    </div>
                    <div class="span6">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสผ่าน" name="pass_add"  id="pass_add" pattern="[A-Za-z0-9]{4,12}" required />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap " type="text" placeholder="นามสกุล" name="lname_add" id="lname_add"  pattern="[^'\x22]+"  required/>    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-envelope"></i>
                            <input class="m-wrap " type="text" placeholder="อีมล์" name="mail_add" id="mail_add"       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required/>    
                        </div>


                        <div class="input-icon left">
                            <i class="icon-credit-card"></i>
                            <input class="m-wrap " type="text" placeholder="รหัสไปรษณีย์" name="address2_add"  id="address2_add" pattern="[0-9]{5}"  />    
                        </div>
                        <div class="input-icon left">
                            <i class="icon-facebook-sign"></i>
                            <input class="m-wrap " type="text" placeholder="Facebook" name="facebok_add" id="facebok_add"  pattern="[^'\x22]+"  />    
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <select id="status" name="status" class="span6 chosen " data-placeholder="Choose a Category" tabindex="1" Style="color: red;font-weight: bold">
                                    <option value="1">Type (User)</option>
                                    <option value="0">Type (Admin)</option>

                                </select>
                            </div>
                        </div>




                    </div>

                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn blue"><span class="icon-save" > <?= $_SESSION["action_save"] //บันทึก                 ?>  </button>
            <button type="button" class="btn red" data-dismiss="modal"> <span class=" icon-off"></span> <?= $_SESSION["action_close"] //ปิด                 ?> </button>
        </div>
    </form>


</div>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>