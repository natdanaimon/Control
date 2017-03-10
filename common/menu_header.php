<?php
@session_start();
include './Modal/Modal.php';
?>

<!-- BEGIN HEADER -->   
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner"  Style="height: 61px">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.php" style="margin-left: 0px;margin-top:0px; height: 50px">
                <img src="assets/img/logo_new.jpg" alt="logo" />
<!--                <img src="assets/img/logo.png" alt="logo" />-->
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">

                <li  id="header_notification_bar">

                    <a href="/Control/Function/changeLanguage.php?lan=2" class="dropdown-toggle"  data-close-others="true" Style="height: 40px">
                        <div Style="height: 8px">&nbsp</div>
                        <img alt="" width="30" height="30" src="assets/img/lan/ENG.png" />
                    </a>
                </li>
                <li  id="header_notification_bar" >

                    <a href="/Control/Function/changeLanguage.php?lan=1" class="dropdown-toggle"  data-close-others="true" Style="height: 40px">
                        <div Style="height: 8px">&nbsp</div>
                        <img alt="" width="25" height="25" src="assets/img/lan/TH.png" />
                    </a>
                </li>    
                <li class="dropdown user">
                    <br>
                    <font color="white"><span ><?= date("l d F Y") ?></span></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                </li>

                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<!--                        <font color="white"><span ><?= date("l d F Y") ?></span></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                        <img alt="" width="50" height="50" src="assets/img/user/<?= $_SESSION["pic_show"] ?>" Style="width: 50px;height: 50px"/>
                        <span class="username"><?= $_SESSION["useradmin"] ?></span>
                        <i class="icon-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="javascript:;" data-toggle="modal" data-target="#PicProfile"  ><i class="icon-picture"></i> <?= $_SESSION["_changepic"] ?></a></li>
                        <li><a href="javascript:;" data-toggle="modal" data-target="#ShowEditPass"  ><i class="icon-key"></i> <?= $_SESSION["_changepass"] ?></a></li>
                        <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> <?= $_SESSION["full_screen"] ?></a></li>
                        <li><a href="extra_lock.php"><i class="icon-lock"></i><?= $_SESSION["lock_screen"] ?> </a></li>
                        <li><a href="logout.php"><i class=" icon-off"></i> <?= $_SESSION["logout"] ?></a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- LINE -->
<link href="facebook_right/css/main.css" rel="stylesheet" type="text/css" media="screen" />

<script src="facebook_right/js/main.js" type="text/javascript"></script>



<script src="facebook_right/js/jquery-1.4.4.min.js" type="text/javascript"></script>


<div class="show_hide" onclick='toggle_float_menu()'>
    <img src="facebook_right/img/p1.png" id="show_float" style="display:none;" alt=""/>                   
    <img src="facebook_right/img/p2.png" id="hide_float" style="" alt=""/>               
</div>
<div class="social_share" >
    <div align="center"><br>
        <br>
        <a href="https://online.kasikornbankgroup.com/K-Online/login.jsp?lang=th&type=" target="_blank"><img src="assets/bank/kbank.png" width="68"/>กสิกรไทย</a>
        <br/>
        <a href="https://www.scbeasy.com/" target="_blank"><img src="assets/bank/scb.png" width="68"/>ไทยพาณิชย์</a>
<!--        <br/>
        <a href="https://www.ktbnetbank.com/consumer/" target="_blank"><img src="<?=$_SESSION[pathWeb]?>/assets/bank/ktb.png" width="68"/>à¸?à¸£à¸¸à¸‡à¹„à¸—à¸¢</a>-->
        <br/>
        <a href="https://ibanking.bangkokbank.com/SignOn.aspx" target="_blank"><img src="assets/bank/bbl.png" width="68"/>กรุงเทพ</a>
<!--        <br/>
        <a href="https://www.krungsrionline.com/BAY.KOL.WebSite/Common/Login.aspx" target="_blank"><img src="<?=$_SESSION[pathWeb]?>/assets/bank/bay.png" width="68"/>à¸?à¸£à¸¸à¸‡à¸¨à¸£à¸µà¸¯</a>
        <br/>
        <a href="https://www.tmbdirect.com/tmb/" target="_blank"><img src="<?=$_SESSION[pathWeb]?>/assets/bank/tmb.png" width="68"/>à¸—à¸«à¸²à¸£à¹„à¸—à¸¢</a>
        <br/>
        <a href="https://ib.gsb.or.th/retail/security/commonLogin.jsp" target="_blank"><img src="<?=$_SESSION[pathWeb]?>/assets/bank/gsb.png" width="68"/>à¸­à¸­à¸¡à¸ªà¸´à¸™</a>
        <br/>-->

    </div>
    


</div>

<!--<div class="show_hide2" onclick='toggle_float_menu2()'>
    <img src="facebook_right/img/p1.png" id="show_float2" style="display:none;" alt=""/>                   
    <img src="facebook_right/img/p2.png" id="hide_float2" style="" alt=""/>               
</div>
<div class="social_share2" >
    <div align="center"><br>
        <br>
        <a href="#" target="_blank"><img src="facebook_right/img/callcenter.jpg" width="150px"/>
            <label class="badge-inverse">
                <font color="white">PHONE : 099-999-9999</font>
            </label>
        </a>

        <a href="http://line.me/ti/p/~vipoffice" target="_blank"><img src="facebook_right/img/vipoffice.png" width="150px"/>
            <label class="badge-inverse">
                <font color="white"> LINE : vipoffice </font>
            </label>
        </a>
    
        <a href="http://line.me/ti/p/~vipbkk168" target="_blank"><img src="facebook_right/img/vipbkk168.png" width="150px"/>
            <label class="badge-inverse">
                <font color="white">LINE : vipbkk168</font>
            </label>
        </a>
        <br/>

    </div>


</div>-->
<!---  LINE -->

<?php if ($_SESSION["status"] > 0) { ?>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) {
                z._.push(c)
            }, $ = z.s =
                    d.createElement(s), e = d.getElementsByTagName(s)[0];
            z.set = function (o) {
                z.set.
                        _.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "//v2.zopim.com/?3siBV6PUnq8cRxluxrpGld2PO6oeqg1S";
            z.t = +new Date;
            $.
                    type = "text/javascript";
            e.parentNode.insertBefore($, e)
        })(document, "script");
    </script>
    <!--End of Zopim Live Chat Script-->
<?php } ?>



<script type="text/javascript">
    function ShowDialogChangePass() {
        $('#ModalChangePass').modal('show');

    }




</script>

