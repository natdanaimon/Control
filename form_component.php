<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Form Stuff - Form Components</title>
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
						<li class="active">
							<a href="form_component.php">
							Form Components</a>
						</li>
						<li >
							<a href="form_editable.php">
							<span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
						</li>
						<li >
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
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
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
							Form Components
							<small>form components and widgets</small>
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
							<li><a href="#">Form Components</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Sample Form</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Input</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" />
											<span class="help-inline">Some hint here</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Disabled Input</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" placeholder="Disabled input here..." disabled />
											<span class="help-inline">Some hint here</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Readonly Input</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" placeholder="Readonly input here..." disabled />
											<span class="help-inline">Some hint here</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Input with Popover</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Input with Tooltip</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here." />                       
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Auto Complete</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot; Support <support@demo.com> &quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
											<p class="help-block">Start typing to auto complete!. E.g: California</p>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email Address Input</label>
										<div class="controls">
											<div class="input-prepend"><span class="add-on">@</span><input class="m-wrap " type="text" placeholder="Email Address" /></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email Address Input</label>
										<div class="controls">
											<div class="input-icon left">
												<i class="icon-envelope"></i>
												<input class="m-wrap " type="text" placeholder="Email Address" />    
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Input With Spinner</label>
										<div class="controls">
											<div class="input-icon left">
												<i class="icon-ok"></i>
												<input class="m-wrap spinner" type="text" placeholder="Process something" />    
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Currency Input</label>
										<div class="controls">
											<div class="input-prepend input-append">
												<span class="add-on">$</span><input class="m-wrap " type="text" /><span class="add-on">.00</span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Default Dropdown</label>
										<div class="controls">
											<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
												<option value="">Select...</option>
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Default Dropdown(Multiple)</label>
										<div class="controls">
											<select class="span6 m-wrap" multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
												<option value="Category 3">Category 6</option>
												<option value="Category 4">Category 7</option>
												<option value="Category 3">Category 8</option>
												<option value="Category 4">Category 9</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Custom Dropdown</label>
										<div class="controls">
											<select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
												<option value="Category 1">Category 1</option>
												<option value="Category 2">Category 2</option>
												<option value="Category 3">Category 5</option>
												<option value="Category 4">Category 4</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Chosen Grouped Dropdown</label>
										<div class="controls">
											<select data-placeholder="Your Favorite Football Team" class="chosen span6" tabindex="-1" id="selS0V">
												<option value="">&nbsp;</option>
												<optgroup label="NFC EAST">
													<option>Dallas Cowboys</option>
													<option>New York Giants</option>
													<option>Philadelphia Eagles</option>
													<option>Washington Redskins</option>
												</optgroup>
												<optgroup label="NFC NORTH">
													<option>Chicago Bears</option>
													<option>Detroit Lions</option>
													<option>Green Bay Packers</option>
													<option>Minnesota Vikings</option>
												</optgroup>
												<optgroup label="NFC SOUTH">
													<option>Atlanta Falcons</option>
													<option>Carolina Panthers</option>
													<option>New Orleans Saints</option>
													<option>Tampa Bay Buccaneers</option>
												</optgroup>
												<optgroup label="NFC WEST">
													<option>Arizona Cardinals</option>
													<option>St. Louis Rams</option>
													<option>San Francisco 49ers</option>
													<option>Seattle Seahawks</option>
												</optgroup>
												<optgroup label="AFC EAST">
													<option>Buffalo Bills</option>
													<option>Miami Dolphins</option>
													<option>New England Patriots</option>
													<option>New York Jets</option>
												</optgroup>
												<optgroup label="AFC NORTH">
													<option>Baltimore Ravens</option>
													<option>Cincinnati Bengals</option>
													<option>Cleveland Browns</option>
													<option>Pittsburgh Steelers</option>
												</optgroup>
												<optgroup label="AFC SOUTH">
													<option>Houston Texans</option>
													<option>Indianapolis Colts</option>
													<option>Jacksonville Jaguars</option>
													<option>Tennessee Titans</option>
												</optgroup>
												<optgroup label="AFC WEST">
													<option>Denver Broncos</option>
													<option>Kansas City Chiefs</option>
													<option>Oakland Raiders</option>
													<option>San Diego Chargers</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Chosen Dropdown Multiple Select</label>
										<div class="controls">
											<select data-placeholder="Your Favorite Football Teams" class="chosen span6" multiple="multiple" tabindex="6">
												<option value="">&nbsp;</option>
												<optgroup label="NFC EAST">
													<option>Dallas Cowboys</option>
													<option>New York Giants</option>
													<option>Philadelphia Eagles</option>
													<option>Washington Redskins</option>
												</optgroup>
												<optgroup label="NFC NORTH">
													<option selected>Chicago Bears</option>
													<option>Detroit Lions</option>
													<option>Green Bay Packers</option>
													<option>Minnesota Vikings</option>
												</optgroup>
												<optgroup label="NFC SOUTH">
													<option>Atlanta Falcons</option>
													<option selected>Carolina Panthers</option>
													<option>New Orleans Saints</option>
													<option>Tampa Bay Buccaneers</option>
												</optgroup>
												<optgroup label="NFC WEST">
													<option>Arizona Cardinals</option>
													<option>St. Louis Rams</option>
													<option>San Francisco 49ers</option>
													<option>Seattle Seahawks</option>
												</optgroup>
												<optgroup label="AFC EAST">
													<option>Buffalo Bills</option>
													<option>Miami Dolphins</option>
													<option>New England Patriots</option>
													<option>New York Jets</option>
												</optgroup>
												<optgroup label="AFC NORTH">
													<option>Baltimore Ravens</option>
													<option>Cincinnati Bengals</option>
													<option>Cleveland Browns</option>
													<option>Pittsburgh Steelers</option>
												</optgroup>
												<optgroup label="AFC SOUTH">
													<option>Houston Texans</option>
													<option>Indianapolis Colts</option>
													<option>Jacksonville Jaguars</option>
													<option>Tennessee Titans</option>
												</optgroup>
												<optgroup label="AFC WEST">
													<option>Denver Broncos</option>
													<option>Kansas City Chiefs</option>
													<option>Oakland Raiders</option>
													<option>San Diego Chargers</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Radio Buttons</label>
										<div class="controls">
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option1" />
											Option 1
											</label>
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option2" checked />
											Option 2
											</label>  
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option2" />
											Option 3
											</label>  
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Radio Buttons</label>
										<div class="controls">
											<label class="radio line">
											<input type="radio" name="optionsRadios2" value="option1" />
											Option 1
											</label>
											<label class="radio line">
											<input type="radio" name="optionsRadios2" value="option2" checked />
											Option 2
											</label>  
											<label class="radio line">
											<input type="radio" name="optionsRadios2" value="option2" />
											Option 3
											</label>  
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Radio Buttons Disabled</label>
										<div class="controls">
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option1" disabled />
											Option 1
											</label>
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option2" disabled checked />
											Option 2
											</label>  
											<label class="radio">
											<input type="radio" name="optionsRadios1" value="option2" disabled />
											Option 3
											</label>  
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkbox</label>
										<div class="controls">
											<label class="checkbox">
											<input type="checkbox" value="" /> Checkbox 1
											</label>
											<label class="checkbox">
											<input type="checkbox" value="" /> Checkbox 2
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkbox</label>
										<div class="controls">
											<label class="checkbox line">
											<input type="checkbox" value="" /> Checkbox 1
											</label>
											<label class="checkbox line">
											<input type="checkbox" value="" /> Checkbox 2
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkbox Group</label>
										<div class="controls">
											<div class="row-fluid">
												<div class="span3">
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 1
													</label>
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 2
													</label>
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 3
													</label>
												</div>
												<div class="span3">
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 4
													</label>
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 5
													</label>
													<label class="checkbox line">
													<input type="checkbox" value="" /> Checkbox 6
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkbox Disabled</label>
										<div class="controls">
											<label class="checkbox">
											<input type="checkbox" value="" disabled checked/> Checkbox 1
											</label>
											<label class="checkbox">
											<input type="checkbox" value="" disabled/> Checkbox 2
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Textarea</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3"></textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn">Cancel</button>     
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Multiple Select</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default</label>
										<div class="controls">
											<select multiple="multiple" id="my_multi_select1" name="my_multi_select1[]">
												<option>Dallas Cowboys</option>
												<option>New York Giants</option>
												<option>Philadelphia Eagles</option>
												<option>Washington Redskins</option>
												<option>Chicago Bears</option>
												<option>Detroit Lions</option>
												<option>Green Bay Packers</option>
												<option>Minnesota Vikings</option>
												<option>Atlanta Falcons</option>
												<option>Carolina Panthers</option>
												<option>New Orleans Saints</option>
												<option>Tampa Bay Buccaneers</option>
												<option>Arizona Cardinals</option>
												<option>St. Louis Rams</option>
												<option>San Francisco 49ers</option>
												<option>Seattle Seahawks</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Grouped Options</label>
										<div class="controls">
											<select multiple="multiple" id="my_multi_select2" name="my_multi_select2[]">
												<optgroup label="NFC EAST">
													<option>Dallas Cowboys</option>
													<option>New York Giants</option>
													<option>Philadelphia Eagles</option>
													<option>Washington Redskins</option>
												</optgroup>
												<optgroup label="NFC NORTH">
													<option>Chicago Bears</option>
													<option>Detroit Lions</option>
													<option>Green Bay Packers</option>
													<option>Minnesota Vikings</option>
												</optgroup>
												<optgroup label="NFC SOUTH">
													<option>Atlanta Falcons</option>
													<option>Carolina Panthers</option>
													<option>New Orleans Saints</option>
													<option>Tampa Bay Buccaneers</option>
												</optgroup>
												<optgroup label="NFC WEST">
													<option>Arizona Cardinals</option>
													<option>St. Louis Rams</option>
													<option>San Francisco 49ers</option>
													<option>Seattle Seahawks</option>
												</optgroup>
											</select>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Radio Buttons as Switches(Bootstrap Switch)</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default</label>
										<div class="controls">
											<div class="switch switch-large">
												<input type="checkbox" checked class="toggle" />
											</div>
											<div class="switch">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch switch-small">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch switch-mini">
												<input type="checkbox" checked class="toggle"/>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Colors</label>
										<div class="controls">
											<div class="switch" data-on="primary" data-off="info">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch" data-on="info" data-off="success">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch" data-on="success" data-off="warning">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch" data-on="warning" data-off="danger">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch" data-on="danger" data-off="default">
												<input type="checkbox" checked class="toggle"/>
											</div>
											<div class="switch" data-on="default" data-off="primary">
												<input type="checkbox" checked class="toggle"/>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Disabled</label>
										<div class="controls">
											<div class="switch">
												<input type="checkbox" checked disabled class="toggle"/>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Text</label>
										<div class="controls">
											<div class="switch" data-on-label="1" data-off-label="0">
												<input type="checkbox" checked class="toggle"/>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Icons</label>
										<div class="controls">
											<div class="switch" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
												<input type="checkbox" checked class="toggle"/>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Modal</label>
										<div class="controls">
											<a href="#myModal" role="button" class="btn" data-toggle="modal">Modal</a>
										</div>
									</div>
								</form>
								<div id="myModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel">Radio Switch in Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Option #1</label>
												<div class="controls">
													<div class="switch" data-on="info" data-off="success">
														<input type="checkbox" checked class="toggle"/>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Option #2</label>
												<div class="controls">
													<div class="switch" data-on="warning" data-off="danger">
														<input type="checkbox" checked class="toggle"/>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Option #3</label>
												<div class="controls">
													<div class="switch" data-on="success" data-off="warning">
														<input type="checkbox" checked class="toggle"/>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Form Tools</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" id="form-username" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Username #1</label>
										<div class="controls">
											<input type="text" class="m-wrap" name="username1" id="username1_input">
											<a href="javascript:;" class="btn" id="username1_checker"><i class="icon-ok"></i> Check Availability</a>
											<div class="help-block">Type a username(E.g: user1, user2) and check its availability.</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Username #2</label>
										<div class="controls">
											<input type="text" class="m-wrap" name="username1" id="username2_input">
											<div class="help-block">Type a username(E.g: user1, user2) and check its availability</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Username #3</label>
										<div class="controls">
											<input type="text" class="m-wrap" name="username1" id="username3_input">
											<div class="help-block">Type a username(E.g: user1, user2) and check its availability(input field highlighted for success and error modes)</div>
										</div>
									</div>
									<div class="control-group password-strength">
										<label class="control-label">Password</label>
										<div class="controls">
											<input type="text" class="m-wrap" name="password" id="password_strength">
											<span class="help-block">Type a password to check its strength</span>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn green">Submit</button>
										<button type="button" class="btn">Cancel</button>     
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="row-fluid">
							<div class="span12">
								<div class="portlet box purple">
									<div class="portlet-title">
										<div class="caption"><i class="icon-reorder"></i>Select 2 Dropdowns</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
											<a href="javascript:;" class="reload"></a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Basic</label>
												<div class="controls">
													<select id="select2_sample1" class="span6 select2">
														<option value="AL">Alabama</option>
														<option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Multi-Value Select</label>
												<div class="controls">
													<select id="select2_sample2" class="span6 select2" multiple>
														<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
														</optgroup>
														<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
														</optgroup>
														<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
														</optgroup>
														<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
														</optgroup>
														<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
														</optgroup>
														<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
														</optgroup>
														<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
														</optgroup>
														<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
														</optgroup>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Loading Data</label>
												<div class="controls">
													<input type="hidden" id="select2_sample3" class="span6 select2">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Country List</label>
												<div class="controls">
													<select name="" id="select2_sample4" class="span6 select2">
														<option value="AF">Afghanistan</option>
														<option value="AL">Albania</option>
														<option value="DZ">Algeria</option>
														<option value="AS">American Samoa</option>
														<option value="AD">Andorra</option>
														<option value="AO">Angola</option>
														<option value="AI">Anguilla</option>
														<option value="AQ">Antarctica</option>
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
												<label class="control-label">Tags Support List</label>
												<div class="controls">
													<input type="hidden" id="select2_sample5" class="span6 select2" value="red, blue">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Loading Remote Data</label>
												<div class="controls">
													<input type="hidden" id="select2_sample6" class="span6 select2">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label"></label>
												<div class="controls">
													<a  class="btn green" href="#form_modal10" data-toggle="modal">
													View Select2 Dropdowns in modal window <i class="icon-share"></i>
													</a>   
												</div>
											</div>
										</form>
										<div id="form_modal10" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h3 id="myModalLabel10">Sample Form in Modal</h3>
											</div>
											<div class="modal-body">
												<div class="row-fluid">
													<form action="#" class="form-horizontal">
														<div class="control-group">
															<label class="control-label">Basic</label>
															<div class="controls">
																<select id="select2_sample_modal_1" class="span12 select2">
																	<option value="">&nbsp;</option>
																	<option value="AL">Alabama</option>
																	<option value="WY">Wyoming</option>
																</select>
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Multi-Value Select</label>
															<div class="controls">
																<select id="select2_sample_modal_2" class="span12 select2" multiple>
																	<option value="">&nbsp;</option>
																	<optgroup label="NFC EAST">
																		<option>Dallas Cowboys</option>
																		<option>New York Giants</option>
																		<option>Philadelphia Eagles</option>
																		<option>Washington Redskins</option>
																	</optgroup>
																	<optgroup label="NFC NORTH">
																		<option>Chicago Bears</option>
																		<option>Detroit Lions</option>
																		<option>Green Bay Packers</option>
																		<option>Minnesota Vikings</option>
																	</optgroup>
																	<optgroup label="NFC SOUTH">
																		<option>Atlanta Falcons</option>
																		<option>Carolina Panthers</option>
																		<option>New Orleans Saints</option>
																		<option>Tampa Bay Buccaneers</option>
																	</optgroup>
																	<optgroup label="NFC WEST">
																		<option>Arizona Cardinals</option>
																		<option>St. Louis Rams</option>
																		<option>San Francisco 49ers</option>
																		<option>Seattle Seahawks</option>
																	</optgroup>
																	<optgroup label="AFC EAST">
																		<option>Buffalo Bills</option>
																		<option>Miami Dolphins</option>
																		<option>New England Patriots</option>
																		<option>New York Jets</option>
																	</optgroup>
																	<optgroup label="AFC NORTH">
																		<option>Baltimore Ravens</option>
																		<option>Cincinnati Bengals</option>
																		<option>Cleveland Browns</option>
																		<option>Pittsburgh Steelers</option>
																	</optgroup>
																	<optgroup label="AFC SOUTH">
																		<option>Houston Texans</option>
																		<option>Indianapolis Colts</option>
																		<option>Jacksonville Jaguars</option>
																		<option>Tennessee Titans</option>
																	</optgroup>
																	<optgroup label="AFC WEST">
																		<option>Denver Broncos</option>
																		<option>Kansas City Chiefs</option>
																		<option>Oakland Raiders</option>
																		<option>San Diego Chargers</option>
																	</optgroup>
																</select>
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Loading Data</label>
															<div class="controls">
																<input type="hidden" id="select2_sample_modal_3" class="span12 select2">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Country List</label>
															<div class="controls">
                                                                                                                            <span id=""></span>
																<select name="" id="select2_sample_modal_4" class="span12 select2">
																	<option value="AF">Afghanistan</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AQ">Antarctica</option>
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
															<label class="control-label">Tags Support List</label>
															<div class="controls">
																<input type="hidden" id="select2_sample_modal_5" class="span12 select2" value="red, blue">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Loading Remote Data</label>
															<div class="controls">
																<input type="hidden" id="select2_sample_modal_6" class="span12 select2">
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
											</div>
										</div>
										<!-- END FORM-->  
									</div>
								</div>
								<!-- END PORTLET-->
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box blue ">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>IP Address Input</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">IPV4</label>
										<div class="controls">
											<input class="span6 m-wrap" id="input_ipv4" type="text"  />
											<span class="help-inline">192.168.120.150</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">IPV6</label>
										<div class="controls">
											<input class="span6 m-wrap" id="input_ipv6" type="text"  />
											<span class="help-inline">3ffe:1900:4545:3:200:f8ff:fe21:67cf</span>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box red">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Input Masks</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Date 1</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_date" type="text"  />
											<span class="help-inline">y/m/d</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Date 2</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_date1" type="text"  />
											<span class="help-inline">change the placeholder</span>                                 
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Date 3</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_date2" type="text"  />
											<span class="help-inline">multi-char placeholder</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Phone</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_phone" type="text"  />
											<span class="help-inline">(999) 999-9999</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Tax ID</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_tin" type="text" />
											<span class="help-inline">99-9999999</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Number</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_number" type="text" />
											<span class="help-inline">mask "9" or mask "99" or ... mask "9999999999"</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Currency</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_currency" type="text" />
											<span class="help-inline">123456  =>  € ___.__1.234,56</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Currency 2</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_currency2" type="text" />
											<span class="help-inline">123456  =>  € ___.__1.234,56(left aligned)</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">SSN</label>
										<div class="controls">
											<input class="span6 m-wrap" id="mask_ssn" type="text" />
											<span class="help-inline">999-99-9999. remove the empty mask on blur or when not empty removes the optional trailing part</span>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Tags Input</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default</label>
										<div class="controls">
											<input id="tags_1" type="text" class="m-wra tags" value="foo,bar,baz,roffle" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Fixed Width</label>
										<div class="controls">
											<input id="tags_2" type="text" class="m-wra tags medium" value="tag1,tag2" />
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>File Upload</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default</label>
										<div class="controls">
											<input type="file" class="default" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Advanced</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" />
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Without input</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<span class="btn btn-file">
												<span class="fileupload-new">Select file</span>
												<span class="fileupload-exists">Change</span>
												<input type="file" class="default" />
												</span>
												<span class="fileupload-preview"></span>
												<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Image Upload</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
													<span class="btn btn-file"><span class="fileupload-new">Select image</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" /></span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
											<span class="label label-important">NOTE!</span>
											<span>
											Attached image thumbnail is
											supported in Latest Firefox, Chrome, Opera, 
											Safari and Internet Explorer 10 only
											</span>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Color Pickers</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default</label>
										<div class="controls">
											<input type="text" class="colorpicker-default m-wrap" value="#8fff00" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">RGBA</label>
										<div class="controls">
											<input type="text" class="colorpicker-rgba m-wrap" value="rgb(0,194,255,0.78)" data-color-format="rgba" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">As Component</label>
										<div class="controls">
											<div class="input-append color colorpicker-default" data-color="#3865a8" data-color-format="rgba">
												<input type="text" class="m-wrap" value="#3865a8" readonly />
												<span class="add-on"><i style="background-color: #3865a8;"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<a  class="btn yellow" href="#form_modal3" data-toggle="modal">
											View colorpicker in modal window <i class="icon-share"></i>
											</a>  
										</div>
									</div>
								</form>
								<div id="form_modal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel3">Colorpicker in Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Default</label>
												<div class="controls">
													<input type="text" class="colorpicker-default m-wrap" value="#8fff00" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">RGBA</label>
												<div class="controls">
													<input type="text" class="colorpicker-rgba m-wrap" value="rgb(0,194,255,0.78)" data-color-format="rgba" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">As Component</label>
												<div class="controls">
													<div class="input-append color colorpicker-default" data-color="#3865a8" data-color-format="rgba">
														<input type="text" class="m-wrap" value="#3865a8" readonly />
														<span class="add-on"><i style="background-color: #3865a8;"></i></span>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
									</div>
								</div>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Datetime Pickers</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default Datetimepicker</label>
										<div class="controls">
											<div class="input-append date form_datetime">
												<input size="16" type="text" value="" readonly class="m-wrap">
												<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Advance Datetimepicker</label>
										<div class="controls">
											<div class="input-append date form_datetime" data-date="2012-12-21T15:25:00Z">
												<input size="16" type="text" value="" readonly class="m-wrap">
												<span class="add-on"><i class="icon-remove"></i></span>
												<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Meridian Format</label>
										<div class="controls">
											<div class="input-append date form_meridian_datetime" data-date="2013-02-21T15:25:00Z">
												<input size="16" type="text" value="" readonly class="m-wrap">
												<span class="add-on"><i class="icon-remove"></i></span>
												<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<a  class="btn yellow" href="#form_modal1" data-toggle="modal">
											View Datetimepicker in modal window <i class="icon-share"></i>
											</a>  
										</div>
									</div>
								</form>
								<div id="form_modal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel1">Datetimepicker in Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Default Datetimepicker</label>
												<div class="controls">
													<div class="input-append date form_datetime">
														<input size="16" type="text" value="" readonly class="m-wrap">
														<span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Advance Datetimepicker</label>
												<div class="controls">
													<div class="input-append date form_datetime" data-date="2012-12-21T15:25:00Z">
														<input size="16" type="text" value="" readonly class="m-wrap">
														<span class="add-on"><i class="icon-remove"></i></span>
														<span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Meridian Format</label>
												<div class="controls">
													<div class="input-append date form_meridian_datetime" data-date="2013-02-21T15:25:00Z">
														<input size="16" type="text" value="" readonly class="m-wrap">
														<span class="add-on"><i class="icon-remove"></i></span>
														<span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
									</div>
								</div>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box grey">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Date Pickers</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default datepicker</label>
										<div class="controls">
											<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Starts with years view</label>
										<div class="controls">
											<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
												<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Limit the view mode to months</label>
										<div class="controls">
											<div class="input-append date date-picker"  data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
												<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<a  class="btn yellow" href="#form_modal2"  data-toggle="modal">
											View Datepicker in modal window <i class="icon-share"></i>
											</a>  
										</div>
									</div>
								</form>
								<div id="form_modal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel2">Datepickers In Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Default datepicker</label>
												<div class="controls">
													<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Starts with years view</label>
												<div class="controls">
													<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
														<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Limit the view mode to months</label>
												<div class="controls">
													<div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
														<input class="m-wrap m-ctrl-medium date-picker" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
									</div>
								</div>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box red">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Time Pickers</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default Timepicker</label>
										<div class="controls">
											<div class="input-append bootstrap-timepicker-component">
												<input class="m-wrap m-ctrl-small timepicker-default" type="text" />
												<span class="add-on"><i class="icon-time"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">24hr Timepicker</label>
										<div class="controls">
											<div class="input-append bootstrap-timepicker-component">
												<input class="m-wrap m-ctrl-small timepicker-24" type="text" />
												<span class="add-on"><i class="icon-time"></i></span>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<a  class="btn yellow" href="#form_modal4" data-toggle="modal">
											View Timepicker in modal window <i class="icon-share"></i>
											</a>  
										</div>
									</div>
								</form>
								<div id="form_modal4" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel4" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel4">Timepickers In Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Default Timepicker</label>
												<div class="controls">
													<div class="input-append bootstrap-timepicker-component">
														<input class="m-wrap m-ctrl-small timepicker-default" type="text" />
														<span class="add-on"><i class="icon-time"></i></span>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">24hr Timepicker</label>
												<div class="controls">
													<div class="input-append bootstrap-timepicker-component">
                                                                                                            <input class="m-wrap m-ctrl-small timepicker-24" type="text" readonly="" />
														<span class="add-on"><i class="icon-time"></i></span>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
									</div>
								</div>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>
									Clockface Time Pickers
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Input</label>
										<div class="controls">
											<input type="text" value="2:30 PM" data-format="hh:mm A" class="m-wrap small clockface_1" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Button</label>
										<div class="controls">
											<div class="input-append">
												<input type="text" id="clockface_2" value="14:30" class="m-wrap small" readonly="" />
												<button class="btn" type="button" id="clockface_2_toggle">
												<i class="icon-time"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Inline</label>
										<div class="controls">
											<div class="well clockface_3 pull-left" style="padding: 0;"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"></label>
										<div class="controls">
											<a  class="btn yellow" href="#form_modal5" data-toggle="modal">
											View Clockface Time Pickers in modal window <i class="icon-share"></i>
											</a>  
										</div>
									</div>
								</form>
								<div id="form_modal5" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel5" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel5">Timepickers In Modal</h3>
									</div>
									<div class="modal-body">
										<form action="#" class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Input</label>
												<div class="controls">
													<input type="text"  value="2:30 PM" data-format="hh:mm A" class="m-wrap small clockface_1" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Button</label>
												<div class="controls">
													<div class="input-append">
														<input type="text" id="clockface_2_modal" value="14:30" class="m-wrap small" readonly="" />
														<button class="btn" type="button" id="clockface_2_modal_toggle">
														<i class="icon-time"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Inline</label>
												<div class="controls">
													<div class="well clockface_3" style="padding: 0; float: left"></div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn green btn-primary" data-dismiss="modal">Save changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PORTLET-->   
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Date Range Pickers</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Default Date Ranges</label>
										<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span><input type="text" class="m-wrap date-range" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Advance Date Ranges</label>
										<div class="controls">
											<div id="form-date-range" class="btn">
												<i class="icon-calendar"></i>
												&nbsp;<span></span> 
												<b class="caret"></b>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXTRAS PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Extras</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Right Action Input</label>
										<div class="controls">
											<div class="input-append">
												<input class="m-wrap medium" type="text" />
												<div class="btn-group">
													<button class="btn dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Left Action Input</label>
										<div class="controls">
											<div class="input-prepend">
												<div class="btn-group">
													<button class="btn dropdown-toggle" data-toggle="dropdown">
													Action 
													<span class="caret"></span></button>
													<ul class="dropdown-menu">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<input class="m-wrap medium" type="text" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Basic Toggle Button</label>
										<div class="controls">
											<div class="basic-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Toggle Buttons with Text</label>
										<div class="controls">
											<div class="text-toggle-button">
												<input type="checkbox" class="toggle" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Styled Toggle Button</label>
										<div class="controls">
											<div class="danger-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
											<div class="info-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
											<div class="success-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
											<div class="warning-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Height Toggle Button</label>
										<div class="controls">
											<div class="height-toggle-button">
												<input type="checkbox" class="toggle" checked="checked" />
											</div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">WYSIHTML5 Editor 1</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">WYSIHTML5 Editor 2</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">CKEditor</label>
										<div class="controls">
											<textarea class="span12 ckeditor m-wrap" name="editor1" rows="6"></textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END EXTRAS PORTLET-->
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
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>