<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | Form Stuff - Form Wizard</title>
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
        <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->   
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="index.php">
                        <img src="assets/img/logo.png" alt="logo" />
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <img src="assets/img/menu-toggler.png" alt="" />
                    </a>          
                    <!-- END RESPONSIVE MENU TOGGLER -->            
                    <!-- BEGIN TOP NAVIGATION MENU -->              
                    <ul class="nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->   
                        <li class="dropdown" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-warning-sign"></i>
                                <span class="badge">6</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>You have 14 new notifications</p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height:250px">
                                        <li>
                                            <a href="#">
                                                <span class="label label-success"><i class="icon-plus"></i></span>
                                                New user registered. 
                                                <span class="time">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                                Server #12 overloaded. 
                                                <span class="time">15 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                                Server #2 not responding.
                                                <span class="time">22 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                                Application error.
                                                <span class="time">40 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                                Database overloaded 68%. 
                                                <span class="time">2 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                                2 user IP blocked.
                                                <span class="time">5 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                                Storage Server #4 not responding.
                                                <span class="time">45 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                                System Error.
                                                <span class="time">55 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                                Database overloaded 68%. 
                                                <span class="time">2 hrs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope"></i>
                                <span class="badge">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 12 new messages</p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height:250px">
                                        <li>
                                            <a href="inbox.php?a=view">
                                                <span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
                                                <span class="subject">
                                                    <span class="from">Lisa Wong</span>
                                                    <span class="time">Just Now</span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh. auctor nibh
                                                    auctor nibh...
                                                </span>  
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.php?a=view">
                                                <span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
                                                <span class="subject">
                                                    <span class="from">Richard Doe</span>
                                                    <span class="time">16 mins</span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                                    auctor nibh...
                                                </span>  
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.php?a=view">
                                                <span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
                                                <span class="subject">
                                                    <span class="from">Bob Nilson</span>
                                                    <span class="time">2 hrs</span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                                                    auctor nibh...
                                                </span>  
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.php?a=view">
                                                <span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
                                                <span class="subject">
                                                    <span class="from">Lisa Wong</span>
                                                    <span class="time">40 mins</span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor 40% nibh congue nibh...
                                                </span>  
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.php?a=view">
                                                <span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
                                                <span class="subject">
                                                    <span class="from">Richard Doe</span>
                                                    <span class="time">46 mins</span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                                    auctor nibh...
                                                </span>  
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="inbox.php">See all messages <i class="m-icon-swapright"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-tasks"></i>
                                <span class="badge">5</span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li>
                                    <p>You have 12 pending tasks</p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height:250px">
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">New release v1.2</span>
                                                    <span class="percent">30%</span>
                                                </span>
                                                <span class="progress progress-success ">
                                                    <span style="width: 30%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">Application deployment</span>
                                                    <span class="percent">65%</span>
                                                </span>
                                                <span class="progress progress-danger progress-striped active">
                                                    <span style="width: 65%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">Mobile app release</span>
                                                    <span class="percent">98%</span>
                                                </span>
                                                <span class="progress progress-success">
                                                    <span style="width: 98%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">Database migration</span>
                                                    <span class="percent">10%</span>
                                                </span>
                                                <span class="progress progress-warning progress-striped">
                                                    <span style="width: 10%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">Web server upgrade</span>
                                                    <span class="percent">58%</span>
                                                </span>
                                                <span class="progress progress-info">
                                                    <span style="width: 58%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">Mobile development</span>
                                                    <span class="percent">85%</span>
                                                </span>
                                                <span class="progress progress-success">
                                                    <span style="width: 85%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">New UI release</span>
                                                    <span class="percent">18%</span>
                                                </span>
                                                <span class="progress progress-important">
                                                    <span style="width: 18%;" class="bar"></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->               
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" src="assets/img/avatar1_small.jpg" />
                                <span class="username">Bob Nilson</span>
                                <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="extra_profile.php"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="page_calendar.php"><i class="icon-calendar"></i> My Calendar</a></li>
                                <li><a href="inbox.php"><i class="icon-envelope"></i> My Inbox <span class="badge badge-important">3</span></a></li>
                                <li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">8</span></a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
                                <li><a href="extra_lock.php"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
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
        <!-- BEGIN CONTAINER -->
        <div class="page-container row-fluid">
            <!-- BEGIN SIDEBAR -->
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
                        <form class="sidebar-search">
                            <div class="input-box">
                                <a href="javascript:;" class="remove"></a>
                                <input type="text" placeholder="Search..." />
                                <input type="button" class="submit" value=" " />
                            </div>
                        </form>
                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="start ">
                        <a href="index.php">
                            <i class="icon-home"></i> 
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-cogs"></i> 
                            <span class="title">Layouts</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="layout_language_bar.php">
                                    <span class="badge badge-roundless badge-important">new</span>Language Switch Bar</a>
                            </li>
                            <li >
                                <a href="layout_horizontal_sidebar_menu.php">
                                    Horizontal & Sidebar Menu</a>
                            </li>
                            <li >
                                <a href="layout_horizontal_menu1.php">
                                    Horizontal Menu 1</a>
                            </li>
                            <li >
                                <a href="layout_horizontal_menu2.php">
                                    Horizontal Menu 2</a>
                            </li>
                            <li >
                                <a href="layout_promo.php">
                                    Promo Page</a>
                            </li>
                            <li >
                                <a href="layout_email.php">
                                    Email Templates</a>
                            </li>
                            <li >
                                <a href="layout_ajax.php">
                                    Content Loading via Ajax</a>
                            </li>
                            <li >
                                <a href="layout_sidebar_closed.php">
                                    Sidebar Closed Page</a>
                            </li>
                            <li >
                                <a href="layout_blank_page.php">
                                    Blank Page</a>
                            </li>
                            <li >
                                <a href="layout_boxed_page.php">
                                    Boxed Page</a>
                            </li>
                            <li >
                                <a href="layout_boxed_not_responsive.php">
                                    Non-Responsive Boxed Layout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- BEGIN FRONT DEMO -->
                    <li class="tooltips" data-placement="right" data-original-title="Frontend&nbsp;Theme&nbsp;For&nbsp;Metronic&nbsp;Admin">
                        <a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
                            <i class="icon-gift"></i> 
                            <span class="title">Frontend Theme</span>
                        </a>
                    </li>
                    <!-- END FRONT DEMO -->
                    <li >
                        <a href="javascript:;">
                            <i class="icon-bookmark-empty"></i> 
                            <span class="title">UI Features</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="ui_general.php">
                                    General</a>
                            </li>
                            <li >
                                <a href="ui_buttons.php">
                                    Buttons</a>
                            </li>
                            <li >
                                <a href="ui_modals.php">
                                    Enhanced Modals</a>
                            </li>
                            <li >
                                <a href="ui_tabs_accordions.php">
                                    Tabs & Accordions</a>
                            </li>
                            <li >
                                <a href="ui_jqueryui.php">
                                    jQuery UI Components</a>
                            </li>
                            <li >
                                <a href="ui_sliders.php">
                                    Sliders</a>
                            </li>
                            <li >
                                <a href="ui_tiles.php">
                                    Tiles</a>
                            </li>
                            <li >
                                <a href="ui_typography.php">
                                    Typography</a>
                            </li>
                            <li >
                                <a href="ui_tree.php">
                                    Tree View</a>
                            </li>
                            <li >
                                <a href="ui_nestable.php">
                                    Nestable List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active ">
                        <a href="javascript:;">
                            <i class="icon-table"></i> 
                            <span class="title">Form Stuff</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="form_layout.php">
                                    Form Layouts</a>
                            </li>
                            <li >
                                <a href="form_samples.php">
                                    Advance Form Samples</a>
                            </li>
                            <li >
                                <a href="form_component.php">
                                    Form Components</a>
                            </li>
                            <li >
                                <a href="form_editable.php">
                                    <span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
                            </li>
                            <li class="active">
                                <a href="form_wizard.php">
                                    Form Wizard</a>
                            </li>
                            <li >
                                <a href="form_validation.php">
                                    Form Validation</a>
                            </li>
                            <li >
                                <a href="form_image_crop.php">
                                    <span class="badge badge-roundless badge-important">new</span>Image Cropping</a>
                            </li>
                            <li >
                                <a href="form_fileupload.php">
                                    Multiple File Upload</a>
                            </li>
                            <li >
                                <a href="form_dropzone.php">
                                    Dropzone File Upload</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-briefcase"></i> 
                            <span class="title">Pages</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="page_timeline.php">
                                    <i class="icon-time"></i>
                                    <span class="badge badge-info">4</span>Timeline</a>
                            </li>
                            <li >
                                <a href="page_coming_soon.php">
                                    <i class="icon-cogs"></i>
                                    Coming Soon</a>
                            </li>
                            <li >
                                <a href="page_blog.php">
                                    <i class="icon-comments"></i>
                                    Blog</a>
                            </li>
                            <li >
                                <a href="page_blog_item.php">
                                    <i class="icon-font"></i>
                                    Blog Post</a>
                            </li>
                            <li >
                                <a href="page_news.php">
                                    <i class="icon-coffee"></i>
                                    <span class="badge badge-success">9</span>News</a>
                            </li>
                            <li >
                                <a href="page_news_item.php">
                                    <i class="icon-bell"></i>
                                    News View</a>
                            </li>
                            <li >
                                <a href="page_about.php">
                                    <i class="icon-group"></i>
                                    About Us</a>
                            </li>
                            <li >
                                <a href="page_contact.php">
                                    <i class="icon-envelope-alt"></i>
                                    Contact Us</a>
                            </li>
                            <li >
                                <a href="page_calendar.php">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-important">14</span>Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-gift"></i> 
                            <span class="title">Extra</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="extra_profile.php">
                                    User Profile</a>
                            </li>
                            <li >
                                <a href="extra_lock.php">
                                    Lock Screen</a>
                            </li>
                            <li >
                                <a href="extra_faq.php">
                                    FAQ</a>
                            </li>
                            <li >
                                <a href="inbox.php">
                                    <span class="badge badge-important">4</span>Inbox</a>
                            </li>
                            <li >
                                <a href="extra_search.php">
                                    Search Results</a>
                            </li>
                            <li >
                                <a href="extra_invoice.php">
                                    Invoice</a>
                            </li>
                            <li >
                                <a href="extra_pricing_table.php">
                                    Pricing Tables</a>
                            </li>
                            <li >
                                <a href="extra_image_manager.php">
                                    Image Manager</a>
                            </li>
                            <li >
                                <a href="extra_404_option1.php">
                                    404 Page Option 1</a>
                            </li>
                            <li >
                                <a href="extra_404_option2.php">
                                    404 Page Option 2</a>
                            </li>
                            <li >
                                <a href="extra_404_option3.php">
                                    404 Page Option 3</a>
                            </li>
                            <li >
                                <a href="extra_500_option1.php">
                                    500 Page Option 1</a>
                            </li>
                            <li >
                                <a href="extra_500_option2.php">
                                    500 Page Option 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="active" href="javascript:;">
                            <i class="icon-sitemap"></i> 
                            <span class="title">3 Level Menu</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    Item 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sample Link 1</a></li>
                                    <li><a href="#">Sample Link 2</a></li>
                                    <li><a href="#">Sample Link 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    Item 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sample Link 1</a></li>
                                    <li><a href="#">Sample Link 1</a></li>
                                    <li><a href="#">Sample Link 1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    Item 3
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-folder-open"></i> 
                            <span class="title">4 Level Menu</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-cogs"></i> 
                                    Item 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-user"></i>
                                            Sample Link 1
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
                                            <li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
                                    <li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>
                                    <li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-globe"></i> 
                                    Item 2
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
                                    <li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
                                    <li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-folder-open"></i>
                                    Item 3
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-user"></i> 
                            <span class="title">Login Options</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="login.php">
                                    Login Form 1</a>
                            </li>
                            <li >
                                <a href="login_soft.php">
                                    Login Form 2</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-th"></i> 
                            <span class="title">Data Tables</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="table_basic.php">
                                    Basic Tables</a>
                            </li>
                            <li >
                                <a href="table_responsive.php">
                                    Responsive Tables</a>
                            </li>
                            <li >
                                <a href="table_managed.php">
                                    Managed Tables</a>
                            </li>
                            <li >
                                <a href="table_editable.php">
                                    Editable Tables</a>
                            </li>
                            <li >
                                <a href="table_advanced.php">
                                    Advanced Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-file-text"></i> 
                            <span class="title">Portlets</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="portlet_general.php">
                                    General Portlets</a>
                            </li>
                            <li >
                                <a href="portlet_draggable.php">
                                    Draggable Portlets</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="icon-map-marker"></i> 
                            <span class="title">Maps</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="maps_google.php">
                                    Google Maps</a>
                            </li>
                            <li >
                                <a href="maps_vector.php">
                                    Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="last ">
                        <a href="charts.php">
                            <i class="icon-bar-chart"></i> 
                            <span class="title">Visual Charts</span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->  
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div id="portlet-config" class="modal hide">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button"></button>
                        <h3>portlet Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here will be a configuration form</p>
                    </div>
                </div>
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->   
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN STYLE CUSTOMIZER -->
                            <div class="color-panel hidden-phone">
                                <div class="color-mode-icons icon-color"></div>
                                <div class="color-mode-icons icon-color-close"></div>
                                <div class="color-mode">
                                    <p>THEME COLOR</p>
                                    <ul class="inline">
                                        <li class="color-black "></li>
                                        <li class="color-blue current color-default" data-style="blue"  data-style="default"></li>
                                        <li class="color-brown" data-style="brown"></li>
                                        <li class="color-purple" data-style="purple"></li>
                                        <li class="color-grey" data-style="grey"></li>
                                        <li class="color-white color-light" data-style="light"></li>
                                    </ul>
                                    <label>
                                        <span>Layout</span>
                                        <select class="layout-option m-wrap small">
                                            <option value="fluid" selected>Fluid</option>
                                            <option value="boxed">Boxed</option>
                                        </select>
                                    </label>
                                    <label>
                                        <span>Header</span>
                                        <select class="header-option m-wrap small">
                                            <option value="fixed" selected>Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </label>
                                    <label>
                                        <span>Sidebar</span>
                                        <select class="sidebar-option m-wrap small">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected>Default</option>
                                        </select>
                                    </label>
                                    <label>
                                        <span>Footer</span>
                                        <select class="footer-option m-wrap small">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected>Default</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- END BEGIN STYLE CUSTOMIZER -->   
                            <h3 class="page-title">
                                Form Wizard
                                <small>form wizard sample</small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">Home</a> 
                                    <span class="icon-angle-right"></span>
                                </li>
                                <li>
                                    <a href="#">Form Stuff</a>
                                    <span class="icon-angle-right"></span>
                                </li>
                                <li><a href="#">Form Wizard</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="portlet box blue" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-reorder"></i> Form Wizard - <span class="step-title">Step 1 of 4</span>
                                    </div>
                                    <div class="tools hidden-phone">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="#" class="form-horizontal" id="submit_form">
                                        <div class="form-wizard">
                                            <div class="navbar steps">
                                                <div class="navbar-inner">
                                                    <ul class="row-fluid">
                                                        <li class="span3">
                                                            <a href="#tab1" data-toggle="tab" class="step ">
                                                                <span class="number">1</span>
                                                                <span class="desc"><i class="icon-ok"></i> <b>Account Setup</b></span>   
                                                            </a>
                                                        </li>
                                                        <li class="span3">
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number">2</span>
                                                                <span class="desc"><i class="icon-ok"></i> <b>Profile Setup</b></span>   
                                                            </a>
                                                        </li>
                                                        <li class="span3">
                                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                                <span class="number">3</span>
                                                                <span class="desc"><i class="icon-ok"></i><b> Billing Setup</b></span>   
                                                            </a>
                                                        </li>
                                                        <li class="span3">
                                                            <a href="#tab4" data-toggle="tab" class="step">
                                                                <span class="number">4</span>
                                                                <span class="desc"><i class="icon-ok"></i><b> Confirm</b></span>   
                                                            </a> 
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="bar" class="progress progress-success progress-striped">
                                                <div class="bar"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="alert alert-error hide">
                                                    <button class="close" data-dismiss="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <div class="alert alert-success hide">
                                                    <button class="close" data-dismiss="alert"></button>
                                                    Your form validation is successful!
                                                </div>
                                                <div class="tab-pane active" id="tab1">
                                                    <h3 class="block">Provide your account details</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Username<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="username"/>
                                                            <span class="help-inline">Provide your username</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Password<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="password" class="span6 m-wrap" name="password" id="submit_form_password"/>
                                                            <span class="help-inline">Provide your username</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Confirm Password<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="password" class="span6 m-wrap" name="rpassword"/>
                                                            <span class="help-inline">Confirm your password</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Email<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="email"/>
                                                            <span class="help-inline">Provide your email address</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <h3 class="block">Provide your profile details</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Fullname<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="fullname"/>
                                                            <span class="help-inline">Provide your fullname</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Phone Number<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="phone"/>
                                                            <span class="help-inline">Provide your phone number</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Gender<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <label class="radio">
                                                                <input type="radio" name="gender" value="M" data-title="Male" />
                                                                Male
                                                            </label>
                                                            <div class="clearfix"></div>
                                                            <label class="radio">
                                                                <input type="radio" name="gender" value="F" data-title="Female"/>
                                                                Female
                                                            </label>  
                                                            <div id="form_gender_error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Address<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="address" />
                                                            <span class="help-inline">Provide your street address</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">City/Town<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="city"/>
                                                            <span class="help-inline">Provide your city or town</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Country</label>
                                                        <div class="controls">
                                                            <select name="country" id="country_list" class="span6">
                                                                <option value="">Select</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia and Herzegowina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Cote d'Ivoire</option>
                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macau</option>
                                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint LUCIA</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SH">St. Helena</option>
                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands (British)</option>
                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Remarks</label>
                                                        <div class="controls">
                                                            <textarea class="span6 m-wrap" rows="3" name="remarks"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <h3 class="block">Provide your billing and credit card details</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Card Holder Name<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="card_name" />
                                                            <span class="help-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Card Number<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" class="span6 m-wrap" name="card_number"/>
                                                            <span class="help-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">CVC<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="" class="m-wrap" name="card_cvc"/>
                                                            <span class="help-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Expiration(MM/YYYY)<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="MM" maxlength="2" class="m-wrap small" name="card_expiry_mm"/>
                                                            <input type="text" placeholder="YYYY" maxlength="4" class="m-wrap small" name="card_expiry_yyyy"/>
                                                            <span class="help-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Payment Options<span class="required">*</span></label>
                                                        <div class="controls">
                                                            <label class="checkbox line">
                                                                <input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card." /> Auto-Pay with this Credit Card
                                                            </label>
                                                            <label class="checkbox line">
                                                                <input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."/> Email me monthly billing
                                                            </label>
                                                            <div id="form_payment_error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <h3 class="block">Confirm your account</h3>
                                                    <h4 class="form-section">Account</h4>
                                                    <div class="control-group">
                                                        <label class="control-label">Username:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="username"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Email:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="email"></span>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section">Profile</h4>
                                                    <div class="control-group">
                                                        <label class="control-label">Fullname:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="fullname"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Gender:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="gender"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Phone:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="phone"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Address:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="address"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">City/Town:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="city"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Country:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="country"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Remarks:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="remarks"></span>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section">Billing</h4>
                                                    <div class="control-group">
                                                        <label class="control-label">Card Holder Name:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="card_name"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Card Number:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="card_number"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">CVC:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="card_cvc"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Expiration:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="card_expiry"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Payment Options:</label>
                                                        <div class="controls">
                                                            <span class="text display-value" data-display="payment"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions clearfix">
                                                <a href="javascript:;" class="btn button-previous">
                                                    <i class="m-icon-swapleft"></i> Back 
                                                </a>
                                                <a href="javascript:;" class="btn blue button-next">
                                                    Continue <i class="m-icon-swapright m-icon-white"></i>
                                                </a>
                                                <a href="javascript:;" class="btn green button-submit">
                                                    Submit <i class="m-icon-swapright m-icon-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->         
                </div>
                <!-- END PAGE CONTAINER-->
            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner">
                2013 &copy; Metronic by keenthemes.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                    <i class="icon-angle-up"></i>
                </span>
            </div>
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
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/scripts/form-wizard.js"></script>     
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                // initiate layout and plugins
                App.init();
                FormWizard.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->   
    </body>
    <!-- END BODY -->
</html>