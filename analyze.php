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
        <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
        <script src="http://cdn.ckeditor.com/4.5.2/standard-all/ckeditor.js"></script>
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
                                <?= $_SESSION["analyze"] ?> <small></small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php"><?= $_SESSION["_home"] ?></a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#"><?= $_SESSION["football"] ?></a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#"><?= $_SESSION["analyze"] ?></a>
                                </li>


                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <?php
                    include './ConnectDB/DB.php';
                    ?>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <form action="/Control/Function/addAnalyze.php" method="post" onsubmit="return check();"  id="frm">
                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["date_analyze"] ?></label>
                            </div>
                            <div class="span4" style="width: 250px">
                                <div class="input-append date date-picker"  data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" readonly  name="date" id="dates" size="16" type="text" value="<?= date("Y-m-d"); ?>" required="true"/>
                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div> 
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 90px">
                                <label class="control-label"><?= $_SESSION["time_analyze"] ?></label>
                            </div>
                            <div class="span4" style="width: 100px">

                                <div class="input-append bootstrap-timepicker-component">
                                    <input class="m-wrap m-ctrl-small timepicker-24" type="text"  name="time" id="time" value="<?= date("H:i"); ?>" readonly  style="width: 80px" required="true"/>
                                    <span class="add-on"><i class="icon-time"></i></span>
                                </div>
                            </div>
                        </div>




                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["league"] ?></label>
                            </div>


                            <div class="span4" >
                                <select id="league" name="league" class="league" Style="width: 250px">
                                    <option value="-1"selected="selected"><?= $_SESSION["select_league"] ?></option>
                                    <?php
                                    $sql = " SELECT  *  FROM $database.league  order by id     ";
                                    $objQuery = mysql_query($sql);

                                    while ($objResult = mysql_fetch_array($objQuery)) {
                                        ?>
                                        <option value="<?= $objResult["id"] ?>"><?= $objResult["name"] ?></option>

                                    <?php } ?>
                                </select>

                            </div>

                        </div>
                        <div Style="height:8px">

                        </div>






                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["home_team"] ?></label>
                            </div>
                            <div class="span4" style="width: 510px">
                                <select id="state" name="state" class="state"  Style="width: 250px">
                                    <option value="-1" selected="selected"><?= $_SESSION["select_team"] ?></option>
                                </select>
                                <div class="input-icon left" > 
                                    <i class="icon-edit"></i>
                                    <input class="m-wrap  " Style="width:210px" type="text" name="state_msg" id="state_msg" placeholder="<?= $_SESSION["last_home"] ?>"  pattern="[^'\x22]+" >    
                                </div>
                            </div>

                        </div>







                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["away_team"] ?></label>
                            </div>
                            <div class="span4" style="width: 510px">
                                <select name="state1" class="state1"  Style="width: 250px">
                                    <option  value="-1"selected="selected"><?= $_SESSION["select_team"] ?></option>
                                </select>
                                <div class="input-icon left" > 
                                    <i class="icon-edit"></i>
                                    <input class="m-wrap  " Style="width:210px" type="text" name="state1_msg" id="state1_msg" placeholder="<?= $_SESSION["last_away"] ?>"  pattern="[^'\x22]+" >    
                                </div>
                            </div>
                        </div>






                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["price"] ?></label>
                            </div>
                            <div class="span4" style="width: 510px">

                                <div class="input-icon left" > 
                                    <i class="icon-money"></i>
                                    <input class="m-wrap  " Style="width:210px" type="text" name="price" id="price" placeholder="<?= $_SESSION["price"] ?>"  pattern="[^'\x22]+" >    
                                </div>
                            </div>

                        </div>

                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["score"] ?></label>
                            </div>
                            <div class="span4" style="width: 510px">

                                <div class="input-icon left" > 
                                    <i class=" icon-globe"></i>
                                    <input class="m-wrap  " Style="width:210px" type="text" name="score" id="score" pattern="[^'\x22]+" placeholder="<?= $_SESSION["score"] ?>"  pattern="[^'\x22]+" >    
                                </div>
                            </div>

                        </div>




                        <div class="row-fluid">
                            <div Style="width: 80px">
                            </div>
                            <div class="span2" style="width: 130px">
                                <label class="control-label"><?= $_SESSION["attitude"] ?></label>
                            </div>
                            <div class="span6" style="width: 600px">
                                <textarea class="medium m-wrap" rows="4" pattern="[^'\x22]+" placeholder="<?= $_SESSION["attitude"] ?>" Style="width: 600px" name="detail"></textarea>

                            </div>

                        </div>












                        <div class="form-actions">
                            <button type="submit" class="btn blue " ><span class="icon-plus"></span> <?= $_SESSION["analyze_add"] ?></button>

                    </form>

                </div>
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-bar-chart"></i><?= $_SESSION["analyze"] ?></div>
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


                                    <th ><?= $_SESSION["league"] ?> : <?= $_SESSION["team"] ?> </th>
                                    <th><?= $_SESSION["date_analyze"] ?></th>


<!--                                                <th >เบอร์โทรศัพท์</th>
  <th >อีเมล์</th>-->
                                    <th><?= $_SESSION["price"] ?></th>
                                    <th><?= $_SESSION["score"] ?></th>
                                    <th><?= $_SESSION["attitude"] ?></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = " select b.* , a.name  as name1 , a.img as img1 ";
                                $sql .= "   , c.name as name2, c.img as img2 , d.name as leaguename , d.img as imgleague";
                                $sql .= "   from $database.analyze b, $database.team a, $database.team c  ,$database.league d ";
                                $sql .= "   where b.team_1 = a.id";
                                $sql .= "   and b.team_2 = c.id";
                                $sql .= "    and b.league = d.id";
                                $sql .= " order by b.time, b.date, d.id desc ";

                                $objQuery = mysql_query($sql);

                                while ($objResult = mysql_fetch_array($objQuery)) {
                                    ?>
                                    <tr class="odd gradeX">
    <!--                                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>-->
                                        <td align="center">    
                                            <?php echo "(<b>" . $objResult["leaguename"] . "</b>)   : "; ?>
                                            <img src="img/team/<?= $objResult["img1"] ?>"   width="45px" height="45px">
                                            <?php echo "<b>" . $objResult["name1"] . "</b>"; ?>
                                            <?php echo "    <b><font color='blue'>   VS   </font></b>    "; ?>

                                            <?php echo "<b>" . $objResult["name2"] . "</b>"; ?>
                                            <img src="img/team/<?= $objResult["img2"] ?>"   width="45px" height="45px">
                                        </td>

                                        <td align="center" >
                                            <?php echo $objResult["date"] . " " . substr($objResult["time"], 0, 5); ?>
                                        </td>
                                        <td align="center" ><?php echo $objResult["price"]; ?></td>
                                        <td align="center" ><?php echo $objResult["score"]; ?></td>
                                        <td align="center" ><?php echo $objResult["detail"]; ?></td>



                                        <td align="center" width="80" >

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <a class="btn blue" href="#" data-toggle="dropdown">
                                                        <i class="icon-cog"></i> <?= $_SESSION["m_action"] ?>
                                                        <i class="icon-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">

                                                        <li><a  class="btn yellow" data-toggle="modal" data-target="#ShowEditAnalyze" onclick="showHint(<?php echo $objResult["id"]; ?>);"> <i class="icon-pencil"></i> <?= $_SESSION["action_edit"] ?></a></li>

                                                        <li ><a href="/Control/Function/DeleteAnalyze.php?id=<?= $objResult["id"] ?>" class="btn red" ><i class="icon-trash"></i> <?= $_SESSION["action_delete"] ?></a></li>

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



























<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/table-managed.js"></script>     
<script src="assets/scripts/form-components.js"></script>     
<script>
                                                            jQuery(document).ready(function () {
                                                                $("#league").change(function ()
                                                                {
                                                                    var id = $(this).val();
                                                                    var dataString = 'id=' + id;
                                                                    // alert(id)
                                                                    $.ajax
                                                                            ({
                                                                                type: "POST",
                                                                                url: "ajax/getTeam.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function (html)
                                                                                {
                                                                                    $(".state").html(html);
                                                                                }
                                                                            });
                                                                    $.ajax
                                                                            ({
                                                                                type: "POST",
                                                                                url: "ajax/getTeam.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function (html)
                                                                                {
                                                                                    $(".state1").html(html);
                                                                                }
                                                                            });
                                                                });


                                                                $("#_league").change(function ()
                                                                {
                                                                    var id = $(this).val();
                                                                    var dataString = 'id=' + id;
                                                                    // alert(id)
                                                                    $.ajax
                                                                            ({
                                                                                type: "POST",
                                                                                url: "ajax/getTeam.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function (html)
                                                                                {
                                                                                    $("._state").html(html);
                                                                                }
                                                                            });
                                                                    $.ajax
                                                                            ({
                                                                                type: "POST",
                                                                                url: "ajax/getTeam.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function (html)
                                                                                {
                                                                                    $("._state1").html(html);
                                                                                }
                                                                            });
                                                                });





                                                                App.init();
                                                                FormComponents.init();
                                                                TableManaged.init();


                                                            });








</script>
<script type="text/javascript">
    $('#myModalAddAnalyzeSuccess').modal('show');
    $('#myModalAddAnalyzeFail').modal('show');
    $('#myModalDeleteAnalyzeSuccess').modal('show');
    $('#myModalDeleteAnalyzeFail').modal('show');

    $('#myModalEditAnalyzeSucc').modal('show');
    $('#myModalEditAnalyzeFail').modal('show');



    function showHint(str) {
        //  alert(str);
        if (str.length == 0) {
            //document.getElementById("recipient-name").value = "";

            return;
        } else {
            // alert(str)

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var result = xmlhttp.responseText.split(",");
                    // alert(result);
                    document.getElementById("_dates").value = result[0];
                    document.getElementById("_time").value = result[1].substring(0, 5);
                    document.getElementById("_league").value = result[2];
                    //document.getElementById("_state").value = result[3];
                    document.getElementById("_state_msg").value = result[4];





                    var select = document.getElementById("_state");
                    var length = select.options.length;
                    for (i = 0; i < length; i++) {
                        select.options[i] = null;
                    }



                    var x = document.getElementById("_state");
                    var option = document.createElement("option");
                    option.value = result[3];
                    option.text = result[10];
                    x.add(option, result[3]);
                    document.getElementById("_state").value = result[3];



                    var select = document.getElementById("_state1");
                    var length = select.options.length;
                    for (i = 0; i < length; i++) {
                        select.options[i] = null;
                    }
                    var x = document.getElementById("_state1");
                    var option = document.createElement("option");
                    option.value = result[5];
                    option.text = result[11];
                    x.add(option, result[5]);
                    document.getElementById("_state1").value = result[5];

                    document.getElementById("_state1_msg").value = result[6];

                    document.getElementById("_price").value = result[7];
                    document.getElementById("_score").value = result[8];
                    document.getElementById("_detail").value = result[9];
                    document.getElementById("_id").value = result[12];


                    //   document.getElementById("_state1").value = result[5];
                    //   document.getElementById("_state1_msg").value = result[6];
                    // document.getElementById("fname_add").value = result[2];
                    //  document.getElementById("lname_add").value = result[3];
//                    document.getElementById("phone_add").value = result[4];
//                    document.getElementById("mail_add").value = result[5];
//                    document.getElementById("gold_add").value = result[6];
//                    document.getElementById("silver_add").value = result[7];
//                    document.getElementById("mySelect").value = "banana";
                }
            }
            xmlhttp.open("GET", "ajax/getDataAnalyze.php?id=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<!-- END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->
</html>