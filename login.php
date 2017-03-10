<?php
    session_start();
//ini_set('display_errors', -1);
$_SESSION["lockScreen"] = false;
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->


    <head>
        <meta charset="utf-8" />


        <title>ACCSYSTEM</title>
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
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
<!--		<img src="assets/img/logo-big.png" alt="" /> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="form-vertical login-form" action="Function/verify.php" method="post">
                <h3 class="form-title"><img src="assets/img/logo02.png" /></h3>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <span>Enter any username and password.</span>
                </div>
                <div class="control-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-lock"></i>
                            <input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"/> Remember
                    </label>
                    <button type="submit" class="btn blue pull-right">
                        Sign In <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
                <?php if ($_SESSION["lock"]) { ?>
                    <p class="text-error" style="color: red;"> <?= $_SESSION["err"] ?> </p> 
                    <?php
                } else {
                    $_SESSION["lock"] = false;
                }
                ?>
                <div class="forget-password">
                    <h4>Forgot your password</h4>
                    <p>
                        Click <a href="javascript:;"  id="forget-password"> Here</a>
                        Send password to email.
                    </p>
                </div>

            </form>
            <!-- END LOGIN FORM -->        
            <!-- BEGIN FORGOT PASSWORD FORM -->



            <form class="form-vertical forget-form" >
                <h3 >Forgot your password</h3>
                <p>Enter your email below send password to the email.</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-envelope"></i>
                            <input class="m-wrap placeholder-no-fix" type="text" id="emailNaja" placeholder="Email Address" autocomplete="off" name="email" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn">
                        <i class="m-icon-swapleft"></i> Back
                    </button>
                    <button type="button" id="btnSubmitNaja" class="btn blue pull-right"  
                            onclick="showHint(document.getElementById('emailNaja').value)"
                            >
                        Send <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->


            <?php include '/Modal/Modal.php'; ?>



        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2016 &copy; expwebdesign.com Templated.
        </div>
        <br/> 
        <div align="center">
            <img src="loginBanner.jpg" Style="width: 400px;height: 200px"/>
        </div>
        <!-- END COPYRIGHT -->
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
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/login-soft.js" type="text/javascript"></script>      
        <!-- END PAGE LEVEL SCRIPTS --> 
        <script>
                                jQuery(document).ready(function () {
                                    App.init();
                                    Login.init();
                                });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>
<script type="text/javascript">
    function ShowSuccess() {
        $('#myModalSuccess').modal('show');
    }
    function ShowErr() {
        $('#myModalFail').modal('show');
    }
    function showHint(str) {
        // alert(str);
        if (str.length == 0) {
            //document.getElementById("recipient-name").value = "";
            // return;

        } else {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var result = xmlhttp.responseText;

                    if (result == "true") {

                        alert("ทำการส่งรหัสผ่านสำหรับการใช้งานไปยัง Email เรียบร้อยแล้ว. !!!");
                        //  document.getElementById("email").value = "";
                        $('#myModalSuccess').modal('show');

                    } else {
                        alert("เกิดข้อผิดพลาดในการส่ง Email แจ้งรหัสผ่าน. !!!");
                        $('#myModalFail').modal('show');
                        // $('#myModal').modal('show')
                    }

                    //  document.getElementById("mySelect").value = "banana";
                }
            }
            xmlhttp.open("GET", "ajax/getPassword.php?email=" + str, true);
            xmlhttp.send();
        }
    }

//    $("#btnSubmitNaja").submit(function () {
//        var text = $("#emailNaja").val();
//        alert(text);
//    });

</script>
