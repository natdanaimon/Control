<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {

    header("location:login.php");
}
$_SESSION["at1"] = "";
$_SESSION["at2"] = "start active";
$_SESSION["at3"] = "";
$_SESSION["at4"] = "";
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
        <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
        <script src="http://cdn.ckeditor.com/4.5.2/standard-all/ckeditor.js"></script>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <script>
            CKEDITOR.replace('editor1', {
                height: 250
            });
        </script>
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
                                <?= $_SESSION["new"] ?> <small></small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php"><?= $_SESSION["_home"] ?></a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#"><?= $_SESSION["new"] ?></a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#"><?= $_SESSION["post_new"] ?></a>
                                </li>


                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <?php
                    include './ConnectDB/DB.php';

                    $sql = " SELECT id , subject , detail , DATE_FORMAT(date,'%d/%m/%Y')  date   , DATE_FORMAT(date,'%H:%i') time  FROM $database.news order by date ,time  desc  ";
                    $objQuery = mysql_query($sql);
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <form action="/Control/Function/AddNews.php" method="post"  id="new_form">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="input-icon left">
                                    <i class="icon-bullhorn"></i>
                                    <input class="m-wrap large " type="text" name="s_topic" id="s_topic" placeholder="<?= $_SESSION["topic"] ?>"  pattern="[^'\x22]+" required>    
                                </div>
                            </div> </div>
                        <div class="row-fluid">
                            <div class="span12">




                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor m-wrap" name="editor" id="editor1" rows="6" ></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue "><span class="icon-bullhorn"></span> <?= $_SESSION["add_new"] ?></button>

                                    

                                </div>
                                </form>
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="icon-user"></i><?= $_SESSION["post_new"] ?></div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"></a>
                                            <!--                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>-->
                                            <a href="javascript:;" class="reload"></a>
                                            <!--                                        <a href="javascript:;" class="remove"></a>-->
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">


                                        </div>
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
        <!--                                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->
                                                    <th><?= $_SESSION["no"] ?></th>
                                                    <th><?= $_SESSION["topic"] ?></th>
<!--                                                    <th><?= $_SESSION["detail"] ?></th>-->
                                                    <th ><?= $_SESSION["date"] ?></th>
                                                    <th ><?= $_SESSION["time"] ?></th>
        <!--                                                <th >เบอร์โทรศัพท์</th>
                                                    <th >อีเมล์</th>-->
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
                                                    <tr class="odd gradeX">
            <!--                                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>-->
                                                        <td align="center">     <?= $objResult["id"] ?></td>
                                                        <td align="center" >
                                                            <?php
                                                            if (strlen($objResult["subject"]) > 30) {
                                                                echo substr($objResult["subject"], 0, 29);
                                                            } else {
                                                                echo $objResult["subject"];
                                                            }
                                                            ?></td>
    <!--                                                        <td align="center" ><?php
                                                        if (strlen($objResult["detail"]) > 30) {
                                                            // echo substr($objResult["detail"], 0, 29);
                                                        } else {
                                                            // echo $objResult["detail"];
                                                        }
                                                        ?></td>-->
                                                        <td align="center" ><?= $objResult["date"] ?></td>
                                                        <td align="center" ><?= $objResult["time"] ?></td>
                                                        <td align="center" ></td>
    <!--                                                    <td align="center" ><?= $objResult["date"] ?></td>
                           <td align="center" ><?= $objResult["date"] ?></td>-->

                                                        <td align="center" width="80" >
                                                            <div class="btn-toolbar">
                                                                <div class="btn-group">
                                                                    <a class="btn blue" href="#" data-toggle="dropdown">
                                                                        <i class="icon-cog"></i> <?= $_SESSION["m_action"] ?>
                                                                        <i class="icon-angle-down"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">

    <!--                                                                        <li><a  class="btn yellow" data-toggle="modal" data-target="#ShowEditNews" onclick="showHintAAA(<?php echo $objResult["id"]; ?>);"> <i class="icon-pencil"></i> <?= $_SESSION["action_edit"] ?></a></li>-->

                                                                        <li ><a href="/Control/Function/DeleteNews.php?id=<?= $objResult["id"] ?>" class="btn red" ><i class="icon-trash"></i> <?= $_SESSION["action_delete"] ?></a></li>

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

    <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
    <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
    <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>











    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/table-managed.js"></script>     
    <script>
            jQuery(document).ready(function () {
                App.init();
                TableManaged.init();
            });
    </script>
    <script type="text/javascript">

        $('#myModalChangePassSuccess').modal('show');
        $('#myModalAddNewsSuccess').modal('show');
        $('#myModalAddNewsFail').modal('show');
        $('#myModalDeleteNewsSuccess').modal('show');
        $('#myModalDeleteNewsFail').modal('show');



        var textarea = "aaa";

        function showHintAAA(str) {
            //  alert(str);
            if (str.length == 0) {
                //document.getElementById("recipient-name").value = "";

                return;
            } else {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var result = xmlhttp.responseText.split(",");
                        // alert(result);
                        document.getElementById("s_id").value = result[0];
                        document.getElementById("s_topic").value = result[1];


                        document.getElementById("nag_edit_new").value = result[2];
                        textarea = result[2];
                        alert(textarea);

                    }

                }
                xmlhttp.open("GET", "ajax/getDataNews.php?id=" + str, true);
                xmlhttp.send();
            }

        }
        //  document.getElementById("nag_edit_new").value = textarea;

    </script>

</body>
<!-- END BODY -->
</html>