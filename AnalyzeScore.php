
<!DOCTYPE html>

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>วิเคราะห์ผลฟุตบอล</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />


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
<body Style="background-color: white;">
    <?php
    include './ConnectDB/DB.php';
    //$_date = '2016-01-10';

    $_date = $_GET['_datelink'];
    $thai_day_arr = array("<font color='red'>อาทิตย์</font>", "<font color='yellow'>จันทร์</font>", "<font color='#FF69B4'>อังคาร</font>", "<font color='#00FF00'>พุธ</font>", "<font color='orange'>พฤหัสบดี</font>", "<font color='skyblue'>ศุกร์</font>", "<font color='violet'>เสาร์</font>");
    $thai_month_arr = array(
        "0" => "",
        "1" => "มกราคม",
        "2" => "กุมภาพันธ์",
        "3" => "มีนาคม",
        "4" => "เมษายน",
        "5" => "พฤษภาคม",
        "6" => "มิถุนายน",
        "7" => "กรกฎาคม",
        "8" => "สิงหาคม",
        "9" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม"
    );

    function _dateHeader($time) {
        global $thai_day_arr, $thai_month_arr;
        $thai_date_return = "วัน " . $thai_day_arr[date("w", $time)];
        $thai_date_return.= " ที่ " . date("j", $time);
        $thai_date_return.=" เดือน" . $thai_month_arr[date("n", $time)];
        $thai_date_return.= " พ.ศ." . (date("Yํ", $time) + 543);
        //$thai_date_return.= "  " . date("H:i", $time) . " น.";
        return $thai_date_return;
    }

    $eng_date = strtotime($_date);
    // echo _dateHeader($eng_date);
    ?>


    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box badge-inverse">

        <div class="portlet-title">
            <div class="caption"><i class="icon-th"></i>ตารางวิเคราะห์ผลบอล <?= _dateHeader($eng_date) ?>      <font color="gold"><a href="http://www.expwebdesign.com" target="_blank" style="color: gold;"> <u>(Credit By Website : expwebdesign.com)</u></a></font></div>
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
            <?php
            $sqlLeague = " SELECT  a.id , a.name , a.img , count(*) from Control.league  a  , Control.analyze b ";
            $sqlLeague .= " where a.id = b.league ";
            $sqlLeague .= " and b.date = '" . $_date . "' ";
            $sqlLeague .= " group by a.id, a.name, a.img ";
            $sqlLeague .= " HAVING count(*) > 0 ";
            $sqlLeague .= " order by a.id ";
            $objQueryLeague = mysql_query($sqlLeague);

            while ($objResultLeague = mysql_fetch_array($objQueryLeague)) {
                ?>
                <br>
                <table class="table table-striped table-hover" id="sample_2">
                    <thead class="bg badge-inverse">
                        <tr>
                            <th Style="align-content: center;  "> 
                                <font color="white"><img src="img/league/<?= $objResultLeague["img"] ?>"   width="65px" height="65px">  
                                <?php echo " (" . $objResultLeague["name"] . ")"; ?></font>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                    </thead>
                    <thead>
                        <tr class="table-bordered">
        <!--                                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->

                            <th ><u>เวลา</u></th>
                            <th ></th>
                            <th ><u>ทีมเหย้า</u></th>
                            <th><u>ราคา</u></th>
                            <th><u>ทีมเยือน</u></th>
                            <th><u>ผลบอล</u></th>
                            <th><u>ทรรศนะ</u></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $sql = " SELECT  a.*  , b.name nameteam_1 , c.name nameteam_2 , b.img img_team1 , c.img img_team2 ";
                        $sql .= " FROM $database.analyze  a , $database.team b , $database.team c ";
                        $sql .= "WHERE a.league= '" . $objResultLeague["id"] . "'  ";
                        $sql .= "and a.date = '" . $_date . "' ";
                        $sql .= "and a.team_1 = b.id ";
                        $sql .= "and a.team_2 = c.id  ";

                        //  echo $sql;
                        $objQuery = mysql_query($sql);
                        $rowCount = mysql_num_rows($objQuery);
                        while ($objResult = mysql_fetch_array($objQuery)) {
                            ?>

                            <tr class="odd gradeX table-bordered">
            <!--                                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>-->
                                <td align="center" style="width: 250px"> <b><?php echo substr($objResult["time"], 0, 5); ?></b> </td>
                                <td align="center" style="width: 50px">    <img src="img/league/<?= $objResultLeague["img"] ?>"   width="35px" height="35px"></td>

                                <td align="center" style="width: 200px"><b>
                                        <img src="img/team/<?= $objResult["img_team1"] ?>"   width="40px" height="40px">
                                        <?php echo $objResult["nameteam_1"] . " " . $objResult["team_msg_1"] . "  "; ?>
                                    </b>
                                </td>
                                <td align="center" style="width: 100px" ><b>
                                        <font color="black">
                                        <?php echo $objResult["price"]; ?>
                                        </font>
                                    </b>
                                </td>
                                <td align="center" style="width: 200px">
                                    <b>
                                        <img src="img/team/<?= $objResult["img_team2"] ?>"   width="40px" height="40px">
                                        <?php echo $objResult["nameteam_2"] . " " . $objResult["team_msg_2"] . "  "; ?>
                                    </b>
                                </td>
                                <td align="center"style="width: 100px" > <b> <font color="black"> <?php echo $objResult["score"]; ?></font></b></td>



                                <td align="center"  >  <?php echo $objResult["detail"]; ?> </td>

                            </tr>
                        <?php }
                        ?>
                        <?php
                        if ($rowCount == 0) {


                            echo "<tr>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo " <b><font color='red'>ไม่พบการแข่งขันสำหรับ ลีก นี้ </font></b>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                            echo "<td>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
                <hr>
            <?php } ?>
        </div>
    </div>






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
            App.init();
            FormComponents.init();
            TableManaged.init();
        });
    </script>
    <script type="text/javascript">


    </script>

    <!-- END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->
</html>