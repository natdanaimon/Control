<?php
@session_start();
if ($_SESSION["useradmin"] == null || $_SESSION["useradmin"] == "") {

    header("location:login.php");
}


$_SESSION["lockScreen"] = true;
?>
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
        <link href="assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="login.php">
<!--                    <img src="assets/img/logo-big.png" alt="logo" />-->
                </a>
            </div>
            <div class="page-body">
                <img class="page-lock-img" src="assets/img/user/<?= $_SESSION["pic_show"] ?>" alt="">
                <div class="page-lock-info">
                    <h1><?= $_SESSION["useradmin"] ?></h1>
                    <span><?= $_SESSION["mail"] ?></span>
                    <span><em>Locked</em></span>
                    <form class="form-search" action="Function/verify.php" method="post">
                        <input type="hidden" name="username" value="<?= $_SESSION["user"] ?>">
                        <div class="input-append">

                            <input type="password" class="m-wrap" placeholder="password" name="password">
                            <button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
                        </div>
                    </form>
                    <div  >
                        <p class="text-error" style="color: red;"> <?= $_SESSION["err"] ?> </p> 
                        <?php
                        $_SESSION["lock"] = true;
                        ?>

                    </div>
                    <div class="relogin">

                        <a href="login.php">Not ?  <?= $_SESSION["useradmin"] ?> ?</a>
                    </div>

                </div>
            </div>
            <div class="copyright">
                2016 &copy; expwebdesign.com Templated.
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
        <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->   
        <script src="assets/scripts/app.js"></script>  
        <script src="assets/scripts/lock.js"></script>      
        <script>
            jQuery(document).ready(function () {
                App.init();
                Lock.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>