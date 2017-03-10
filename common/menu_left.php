<!-- BEGIN SIDEBAR -->
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
    <link rel="shortcut icon" href="favicon.ico" />





</head>

<!-- Nav tabs for Mobile -->
<div class="page-sidebar">

</div>

<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>


            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->



            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <?php if ($_SESSION["status"] == 0) { ?>
            <li class="<?= $_SESSION["m1"] ?>">
                <a href="index.php">
                    <i class="icon-home"></i> 
                    <span class="title"><?= $_SESSION["_home"] ?></span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="<?= $_SESSION["m2"] ?><?= $_SESSION["m3"] ?><?= $_SESSION["m4"] ?><?= $_SESSION["m5"] ?><?= $_SESSION["m6"] ?><?= $_SESSION["m9"] ?>">
                <a href="javascript:;">
                    <i class="icon-cogs"></i> 

                    <span class="title"><?= $_SESSION["_setting"] ?></span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= $_SESSION["m2"] ?>">
                        <a href="user.php">
                            <span class="icon-user"></span> <?= $_SESSION["_user"] ?></a>
                    </li>
                    <li class="<?= $_SESSION["m3"] ?>">
                        <a href="webgame.php">
                            <span class="icon-globe"></span> 
                            <?= $_SESSION["_web"] ?>
                        </a>
                    </li>
                    <li class="<?= $_SESSION["m4"] ?>">
                        <a href="web2user.php">
                            <span class="icon-bar-chart"></span> 
                            <?= $_SESSION["_AddWeb"] ?>
                        </a>
                    </li>

                    <li class="<?= $_SESSION["m9"] ?>">
                        <a href="bank.php">
                            <span class=" icon-hospital"></span> 
                            <?= $_SESSION["_bank"] ?>
                        </a>
                    </li>
                    <li class="<?= $_SESSION["m5"] ?>">
                        <a href="bank2user.php">
                            <span class="icon-credit-card"></span> 
                            <?= $_SESSION["_bank2user"] ?>
                        </a>
                    </li>
                    <li class="<?= $_SESSION["m6"] ?>">
                        <a href="webpopup.php">
                            <span class=" icon-bullhorn"></span> 
                            <?= $_SESSION["_newpopup"] ?>
                        </a>
                    </li>



                </ul>
            </li>
            <li class="<?= $_SESSION["m7"] ?><?= $_SESSION["m8"] ?>">
                <a href="javascript:;">
                    <i class="icon-file-text"></i> 

                    <span class="title"><?= $_SESSION["_bill"] ?></span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= $_SESSION["m7"] ?>">
                        <a href="create_bill_1.php">
                            <span class="icon-edit"></span> <?= $_SESSION["_billcreate"] ?></a>
                    </li>
                    <li class="<?= $_SESSION["m8"] ?>">
                        <a href="create_bill_search.php">
                            <span class="icon-search"></span> 
                            <?= $_SESSION["_billsearch"] ?>
                        </a>
                    </li>




                </ul>
            </li>

        <?php } else { ?>

            <li class="<?= $_SESSION["m1"] ?>">
                <a href="index.php">
                    <i class="icon-home"></i> 
                    <span class="title"><?= $_SESSION["_home"] ?></span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="<?= $_SESSION["m2"] ?>">
                <a href="javascript:;">
                    <i class="icon-file-text"></i> 

                    <span class="title"><?= $_SESSION["_bill"] ?></span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">

                    <li class="<?= $_SESSION["m2"] ?>">
                        <a href="bill_search.php">
                            <span class="icon-search"></span> 
                            <?= $_SESSION["_billsearch"] ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?= $_SESSION["m3"] ?>">
                <a href="editProfile.php">
                    <i class="icon-user"></i> 
                    <span class="title"> <?= $_SESSION["_editProfile"] ?></span>
                    <span class="selected"></span>
                </a>
            </li>
    <!--            <li class="<?= $_SESSION["m6"] ?>">
                <a href="bankAccount.php">
                    <i class="icon-hospital"></i> 
                    <span class="title"><?= $_SESSION["_bank"] ?></span>
                    <span class="selected"></span>
                </a>
            </li>-->
    <!--            <li class="<?= $_SESSION["m3"] ?>">
                <a href="contact.php">
                    <i class="icon-comments-alt"></i> 
                    <span class="title"> <?= $_SESSION["_contract"] ?></span>
                    <span class="selected"></span>
                </a>
            </li>-->

            <li class="<?= $_SESSION["m4"] ?>">
                <a href="javascript:;">
                    <i class="icon-tags"></i> 

                    <span class="title">Casino Online</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <?php
                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) contentCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  webcontent ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $content[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $content[$i] = $objResult["i_id"] . "|" . $objResult["contentCNT"];
                        $i++;
                    }
                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) weburlCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  weburl ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "  AND s_url_type = 'A' ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $weburl[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $weburl[$i] = $objResult["i_id"] . "|" . $objResult["weburlCNT"];
                        $i++;
                    }

                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) weburlCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  weburl ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "  AND s_url_type = 'M' ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $weburlM[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $weburlM[$i] = $objResult["i_id"] . "|" . $objResult["weburlCNT"];
                        $i++;
                    }



                    $strSql = "select w.* from web w where w.s_status = 'Y' order by w.s_name ";
//            $strSql = "";
//            $strSql .= "select w.* from web w , web2user w2u  ";
//            $strSql .= "where w.i_id = w2u.i_id ";
//            $strSql .= "and w2u.s_user = '" . $_SESSION["user"] . "' order by w.s_name ";
                    $objQuery = mysql_query($strSql);
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $tmpC = FALSE;
                        $tmpU = FALSE;
                        $tmpM = FALSE;
                        foreach ($content as $varContent) {
                            $tmpContent = explode("|", $varContent);
                            if (($tmpContent[0] == $objResult["i_id"]) && $tmpContent[1] > 0) {
                                $tmpC = TRUE;
                            }
                        }
                        foreach ($weburl as $varUrl) {
                            $tmpURL = explode("|", $varUrl);
                            if (($tmpURL[0] == $objResult["i_id"]) && $tmpURL[1] > 0) {
                                $tmpU = TRUE;
                            }
                        }
                        foreach ($weburlM as $varUrl) {
                            $tmpURLM = explode("|", $varUrl);
                            if (($tmpURLM[0] == $objResult["i_id"]) && $tmpURLM[1] > 0) {
                                $tmpM = TRUE;
                            }
                        }
                        ?>


                        <li class="">
                            <a href="javascript:;">
                                <i class="icon-tags"></i> 

                                <span class="title"><?= $objResult["s_name"] ?></span>
                                <span class="arrow "></span>
                            </a>
                            <!-- START SUBMENU 1-->

                            <ul class="sub-menu">

                                <li class="">
                                    <a href="webDetail.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=4">
                                        <span class="icon-star"></span> 
                                        <?= $_SESSION["_details"] ?>
                                        <?php if ($tmpC) { ?>
                                            <span class="badge badge-success"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>
                                <!--                        <li class="">
                                                            <a href="webMember.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>">
                                                                <span class="icon-star-empty"></span> 
                                <?= $_SESSION["_page_member"] ?>
                                <?php if ($tmpC) { ?>
                                                                                                                                                <span class="badge badge-warning"> N</span>
                                <?php } ?>
                                                            </a>
                                                        </li>-->
                                <li class="">
                                    <a href="webUserAgent.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=4">
                                        <span class="icon-link"></span> 
                                        <?= $_SESSION["_linkurl"] ?> <?= $_SESSION["_agents"] ?>
                                        <?php if ($tmpU) { ?>
                                            <span class="badge badge-info"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="webUserMember.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=4">
                                        <span class="icon-link"></span> 
                                        <?= $_SESSION["_linkurl"] ?> <?= $_SESSION["_members"] ?>
                                        <?php if ($tmpU) { ?>
                                            <span class="badge badge-important"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>
                            </ul>
                            <!-- END SUBMENU 1-->
                        </li>


                    <?php } ?>
                </ul>
            </li>






            <li class="<?= $_SESSION["m5"] ?>">
                <a href="javascript:;">
                    <i class="icon-tags"></i> 

                    <span class="title">Sport Betting</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <?php
                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) contentCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  webcontent ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $content[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $content[$i] = $objResult["i_id"] . "|" . $objResult["contentCNT"];
                        $i++;
                    }
                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) weburlCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  weburl ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "  AND s_url_type = 'A' ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $weburl[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $weburl[$i] = $objResult["i_id"] . "|" . $objResult["weburlCNT"];
                        $i++;
                    }

                    $strSql = "";
                    $strSql .= "SELECT ";
                    $strSql .= "  i_id, ";
                    $strSql .= "  COUNT(*) weburlCNT ";
                    $strSql .= "FROM ";
                    $strSql .= "  weburl ";
                    $strSql .= "WHERE ";
                    $strSql .= "  d_change BETWEEN DATE_SUB(NOW(), ";
                    $strSql .= "  INTERVAL 7 DAY) AND NOW() ";
                    $strSql .= "  AND s_url_type = 'M' ";
                    $strSql .= "GROUP BY ";
                    $strSql .= "  i_id ";
                    $objQuery = mysql_query($strSql);
                    $weburlM[] = array();
                    $i == 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $weburlM[$i] = $objResult["i_id"] . "|" . $objResult["weburlCNT"];
                        $i++;
                    }



                    $strSql = "select w.* from web w where w.s_status = 'N' order by w.s_name ";
//            $strSql = "";
//            $strSql .= "select w.* from web w , web2user w2u  ";
//            $strSql .= "where w.i_id = w2u.i_id ";
//            $strSql .= "and w2u.s_user = '" . $_SESSION["user"] . "' order by w.s_name ";
                    $objQuery = mysql_query($strSql);
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $tmpC = FALSE;
                        $tmpU = FALSE;
                        $tmpM = FALSE;
                        foreach ($content as $varContent) {
                            $tmpContent = explode("|", $varContent);
                            if (($tmpContent[0] == $objResult["i_id"]) && $tmpContent[1] > 0) {
                                $tmpC = TRUE;
                            }
                        }
                        foreach ($weburl as $varUrl) {
                            $tmpURL = explode("|", $varUrl);
                            if (($tmpURL[0] == $objResult["i_id"]) && $tmpURL[1] > 0) {
                                $tmpU = TRUE;
                            }
                        }
                        foreach ($weburlM as $varUrl) {
                            $tmpURLM = explode("|", $varUrl);
                            if (($tmpURLM[0] == $objResult["i_id"]) && $tmpURLM[1] > 0) {
                                $tmpM = TRUE;
                            }
                        }
                        ?>


                        <li class="">
                            <a href="javascript:;">
                                <i class="icon-tags"></i> 

                                <span class="title"><?= $objResult["s_name"] ?></span>
                                <span class="arrow "></span>
                            </a>
                            <!-- START SUBMENU 1-->

                            <ul class="sub-menu">

                                <li class="">
                                    <a href="webDetail.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=5">
                                        <span class="icon-star"></span> 
                                        <?= $_SESSION["_details"] ?>
                                        <?php if ($tmpC) { ?>
                                            <span class="badge badge-success"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>
                                <!--                        <li class="">
                                                            <a href="webMember.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>">
                                                                <span class="icon-star-empty"></span> 
                                <?= $_SESSION["_page_member"] ?>
                                <?php if ($tmpC) { ?>
                                                                                                                                                <span class="badge badge-warning"> N</span>
                                <?php } ?>
                                                            </a>
                                                        </li>-->
                                <li class="">
                                    <a href="webUserAgent.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=5">
                                        <span class="icon-link"></span> 
                                        <?= $_SESSION["_linkurl"] ?> <?= $_SESSION["_agents"] ?>
                                        <?php if ($tmpU) { ?>
                                            <span class="badge badge-info"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="webUserMember.php?id=<?= $objResult["i_id"] ?>&web=<?= $objResult["s_name"] ?>&active=5">
                                        <span class="icon-link"></span> 
                                        <?= $_SESSION["_linkurl"] ?> <?= $_SESSION["_members"] ?>
                                        <?php if ($tmpU) { ?>
                                            <span class="badge badge-important"> N</span>
                                        <?php } ?>
                                    </a>
                                </li>
                            </ul>
                            <!-- END SUBMENU 1-->
                        </li>


                    <?php } ?>
                </ul>
            </li>


        <?php } ?>




    </ul>
    <!-- END SIDEBAR MENU -->
    <?php if ($_SESSION["status"] > 0) { ?>
        <ul class="page-sidebar-hovering">
            <br/> <br/> <br/>
            <strong><font style=""><label class="badge badge-important">เลขที่ บัญชี ที่จะให้โอนเข้า</label></font></strong><br/><br/>

            <?php
            $strSql = "";
            $strSql .= "SELECT b.* FROM bank2user b2u , bank b  ";
            $strSql .= "WHERE b2u.s_user = '" . $_SESSION["user"] . "' ";
            $strSql .= "AND b2u.i_id = b.id ";





            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'kbank') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</label></font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }

            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'bbl') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }

            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'scb') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }

            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'ktb') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }

            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'bay') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }

            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'tmb') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }


            $objQuery = mysql_query($strSql);
            while ($objResult = mysql_fetch_array($objQuery)) {
                if ($objResult["bank_name"] == 'gsb') {
                    echo "<img src='assets/bank/" . $objResult["bank_name"] . ".png' width='30px' height='30px'/><font style='font-size:12px;'> " . $objResult["acc_name"] . "</font><br/>";
                    echo "<font style='font-size:12px;'>เลขที่ บัญชี : " . $objResult["acc_no"] . "</font><br/>";
                    echo "<hr/>";
                }
            }
            ?>


            <a href="http://line.me/ti/p/~vipoffice" target="_blank"><img src="facebook_right/img/vipoffice.png" width="150px"/>
               
                    <label class="badge badge-inverse">
                        <font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LINE : vipoffice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
                    </label>
               
            </a>
            <br/><br/>
            <a href="http://line.me/ti/p/~vipbkk168" target="_blank"><img src="facebook_right/img/vipbkk168.png" width="150px"/>
               
                    <label class="badge badge-inverse">
                        <font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LINE : vipbkk168&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
                    </label>
              
            </a>


        </ul>
    <?php } ?>
</div>



<!-- END SIDEBAR -->