<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Extra - Search Results</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
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
				<li >
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
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
				<li class="active ">
					<a href="javascript:;">
					<i class="icon-gift"></i> 
					<span class="title">Extra</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
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
						<li class="active">
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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Search Results <small>search results</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Extra</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Search Results</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#tab_2_2">Booking Search 1</a></li>
							<li><a data-toggle="tab" href="#tab_2_3">Booking Search 2</a></li>
							<li><a data-toggle="tab" href="#tab_2_5">Image Search</a></li>
							<li ><a data-toggle="tab" href="#tab_1_2">Project Search</a></li>
							<li><a data-toggle="tab" href="#tab_1_3">Classic Search</a></li>
							<li><a data-toggle="tab" href="#tab_1_4">Company Search</a></li>
							<li><a data-toggle="tab" href="#tab_1_5">User Search </a></li>
						</ul>
						<div class="tab-content">
							<div id="tab_2_2" class="tab-pane active">
								<div class="row-fluid">
									<div class="span8 booking-search">
										<form action="#">
											<div class="clearfix margin-bottom-10">
												<label>Distanation</label>
												<div class="input-icon left">
													<i class="icon-map-marker"></i>
													<input class="m-wrap span12" type="text" placeholder="Canada, Malaysia, Russia ...">
												</div>
											</div>
											<div class="clearfix margin-bottom-20">
												<div class="control-group pull-left margin-right-20">
													<label class="control-label">Check-in:</label>
													<div class="controls">
														<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
															<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
														</div>
													</div>
												</div>
												<div class="control-group pull-left">
													<label class="control-label">Check-out:</label>
													<div class="controls">
														<div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
															<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="02/2012" /><span class="add-on"><i class="icon-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="clearfix margin-bottom-10">
												<div class="pull-left margin-right-20">
													<label>How Many</label>
													<div class="input-icon left">
														<i class="icon-user"></i>
														<input class="m-wrap" type="text" placeholder="1 Room, 2 Adults, 0 Children">
													</div>
												</div>
												<div class="pull-left">
													<div class="control-group booking-option">
														<label class="control-label">Choose Option</label>
														<div class="controls controls-uniform">
															<label class="radio">
															<input type="radio" name="optionsRadios2" value="option1" />
															Option1
															</label>
															<label class="radio">
															<input type="radio" name="optionsRadios2" value="option2" checked />
															Option2
															</label>  
														</div>
													</div>
												</div>
											</div>
											<button class="btn blue btn-block">SEARCH <i class="m-icon-swapright m-icon-white"></i></button>
										</form>
									</div>
									<!--end booking-search-->
									<div class="span4">
										<div class="booking-app">
											<a href="#">
											<i class="icon-mobile-phone pull-left"></i> 
											<span class="pull-left">Get our mobile app!</span>
											</a>                             
										</div>
										<div class="booking-offer">
											<img src="assets/img/search/1.jpg" alt="">
											<div class="booking-offer-in">
												<span>London, UK</span>
												<em>Sign Up Today and Get 30% Discount!</em>
											</div>
										</div>
									</div>
									<!--end span4-->
								</div>
								<!--end row-fluid-->
								<div class="space40"></div>
								<div class="row-fluid">
									<div class="row-fluid margin-bottom-20">
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image4.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $126</li>
													<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star-empty"></i></li>
												</ul>
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. <a href="#">read more</a></p>
											</div>
										</div>
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image5.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $157</li>
													<li><i class="icon-map-marker"></i> London, UK</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
												</ul>
												<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. Pellentesque dolores et quas molestias viverra vehicula sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
											</div>
										</div>
									</div>
									<div class="row-fluid margin-bottom-20">
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image2.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $126</li>
													<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star-empty"></i></li>
												</ul>
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. <a href="#">read more</a></p>
											</div>
										</div>
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image3.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $157</li>
													<li><i class="icon-map-marker"></i> London, UK</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
												</ul>
												<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. Pellentesque dolores et quas molestias viverra vehicula sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
											</div>
										</div>
									</div>
									<div class="row-fluid margin-bottom-20">
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image5.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $126</li>
													<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star-empty"></i></li>
												</ul>
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. <a href="#">read more</a></p>
											</div>
										</div>
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image4.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $157</li>
													<li><i class="icon-map-marker"></i> London, UK</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
												</ul>
												<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. Pellentesque dolores et quas molestias viverra vehicula sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
											</div>
										</div>
									</div>
									<div class="row-fluid margin-bottom-20">
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image4.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $126</li>
													<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star-empty"></i></li>
												</ul>
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. <a href="#">read more</a></p>
											</div>
										</div>
										<div class="span6 booking-blocks">
											<div class="pull-left booking-img">
												<img src="assets/img/gallery/image5.jpg" alt="">
												<ul class="unstyled">
													<li><i class="icon-money"></i> From $157</li>
													<li><i class="icon-map-marker"></i> London, UK</li>
												</ul>
											</div>
											<div style="overflow:hidden;">
												<h2><a href="#">Here Any Title</a></h2>
												<ul class="unstyled inline">
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
													<li><i class="icon-star"></i></li>
												</ul>
												<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. Pellentesque dolores et quas molestias viverra vehicula sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
											</div>
										</div>
									</div>
								</div>
								<div class="spac40"></div>
								<div class="pagination pagination-centered">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_2_3" class="tab-pane">
								<div class="row-fluid">
									<div class="span8 booking-search">
										<form action="#">
											<div class="clearfix margin-bottom-10">
												<label>Distanation</label>
												<div class="input-icon left">
													<i class="icon-map-marker"></i>
													<input class="m-wrap span12" type="text" placeholder="Canada, Malaysia, Russia ...">
												</div>
											</div>
											<div class="clearfix margin-bottom-20">
												<div class="control-group pull-left margin-right-20">
													<label class="control-label">Check-in:</label>
													<div class="controls">
														<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
															<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
														</div>
													</div>
												</div>
												<div class="control-group pull-left">
													<label class="control-label">Check-out:</label>
													<div class="controls">
														<div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
															<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="02/2012" /><span class="add-on"><i class="icon-calendar"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="clearfix margin-bottom-10">
												<div class="pull-left margin-right-20">
													<label>How Many</label>
													<div class="input-icon left">
														<i class="icon-user"></i>
														<input class="m-wrap" type="text" placeholder="1 Room, 2 Adults, 0 Children">
													</div>
												</div>
												<div class="pull-left">
													<div class="control-group booking-option">
														<label class="control-label">Choose Option</label>
														<div class="controls controls-uniform">
															<label class="radio">
															<input type="radio" name="optionsRadios2" value="option1" />
															Option1
															</label>
															<label class="radio">
															<input type="radio" name="optionsRadios2" value="option2" checked />
															Option2
															</label>  
														</div>
													</div>
												</div>
											</div>
											<button class="btn blue btn-block">SEARCH <i class="m-icon-swapright m-icon-white"></i></button>
										</form>
									</div>
									<!--end booking-search-->
									<div class="span4">
										<div class="booking-app">
											<a href="#">
											<i class="icon-mobile-phone pull-left"></i> 
											<span class="pull-left">Get our mobile app!</span>
											</a>                             
										</div>
										<div class="booking-offer">
											<img src="assets/img/search/1.jpg" alt="">
											<div class="booking-offer-in">
												<span>London, UK</span>
												<em>Sign Up Today and Get 30% Discount!</em>
											</div>
										</div>
									</div>
									<!--end span4-->
								</div>
								<!--end row-fluid-->
								<div class="space40"></div>
								<div class="row-fluid">
									<div class="booking-blocks">
										<div class="pull-left booking-img">
											<img src="assets/img/gallery/image4.jpg" alt="">
											<ul class="unstyled">
												<li><i class="icon-money"></i> From $126</li>
												<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
											</ul>
										</div>
										<div style="overflow:hidden;">
											<h2><a href="#">Here Any Title</a></h2>
											<ul class="unstyled inline">
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star-empty"></i></li>
											</ul>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">read more</a></p>
										</div>
									</div>
								</div>
								<hr>
								<div class="row-fluid">
									<div class="booking-blocks">
										<div class="pull-left booking-img">
											<img src="assets/img/gallery/image5.jpg" alt="">
											<ul class="unstyled">
												<li><i class="icon-money"></i> From $157</li>
												<li><i class="icon-map-marker"></i> London, UK</li>
											</ul>
										</div>
										<div style="overflow:hidden;">
											<h2><a href="#">Here Any Title</a></h2>
											<ul class="unstyled inline">
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
											</ul>
											<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. Sed et quam lacus a sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
										</div>
									</div>
								</div>
								<hr>
								<div class="row-fluid">
									<div class="booking-blocks">
										<div class="pull-left booking-img">
											<img src="assets/img/gallery/image4.jpg" alt="">
											<ul class="unstyled">
												<li><i class="icon-money"></i> From $126</li>
												<li><i class="icon-map-marker"></i> Tioman, Malaysia</li>
											</ul>
										</div>
										<div style="overflow:hidden;">
											<h2><a href="#">Here Any Title</a></h2>
											<ul class="unstyled inline">
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star-empty"></i></li>
											</ul>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">read more</a></p>
										</div>
									</div>
								</div>
								<hr>
								<div class="row-fluid">
									<div class="booking-blocks">
										<div class="pull-left booking-img">
											<img src="assets/img/gallery/image5.jpg" alt="">
											<ul class="unstyled">
												<li><i class="icon-money"></i> From $157</li>
												<li><i class="icon-map-marker"></i> London, UK</li>
											</ul>
										</div>
										<div style="overflow:hidden;">
											<h2><a href="#">Here Any Title</a></h2>
											<ul class="unstyled inline">
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
												<li><i class="icon-star"></i></li>
											</ul>
											<p>Lorem ipsum dolor sit eos et accusamus et iusto odio amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a sunt in culpa qui officia feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. Sed et quam lacus a sem ut volutpat. Integer sed arcu. <a href="#">read more</a></p>
										</div>
									</div>
								</div>
								<div class="spac40"></div>
								<div class="pagination pagination-centered">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_2_5" class="tab-pane">
								<div class="row-fluid search-forms search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap" />
											</div>
											<button type="button" class="btn green">
											Search &nbsp; 
											<i class="m-icon-swapright m-icon-white"></i>
											</button>
										</div>
									</form>
								</div>
								<div class="row-fluid search-images">
									<ul class="thumbnails">
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image1.jpg">
											<img src="assets/img/gallery/image1.jpg" alt="">
											<span><em>600 x 400 - keenthemes.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/image2.jpg">
											<img src="assets/img/gallery/image2.jpg" alt="">
											<span><em>220 x 340 - example.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image1.jpg">
											<img src="assets/img/gallery/image1.jpg" alt="">
											<span><em>800 x 540 - demo.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image5.jpg">
											<img src="assets/img/gallery/image5.jpg" alt="">
											<span><em>390 x 220 - keenthemes.com</em></span>
											</a>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image2.jpg">
											<img src="assets/img/gallery/image2.jpg" alt="">
											<span><em>600 x 400 - keenthemes.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image5.jpg">
											<img src="assets/img/gallery/image5.jpg" alt="">
											<span><em>220 x 340 - example.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image2.jpg">
											<img src="assets/img/gallery/image2.jpg" alt="">
											<span><em>800 x 540 - demo.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image1.jpg">
											<img src="assets/img/gallery/image1.jpg" alt="">
											<span><em>390 x 220 - keenthemes.com</em></span>
											</a>
										</li>
									</ul>
									<ul class="thumbnails">
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image3.jpg">
											<img src="assets/img/gallery/image3.jpg" alt="">
											<span><em>600 x 400 - keenthemes.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image5.jpg">
											<img src="assets/img/gallery/image5.jpg" alt="">
											<span><em>220 x 340 - example.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image2.jpg">
											<img src="assets/img/gallery/image2.jpg" alt="">
											<span><em>800 x 540 - demo.com</em></span>
											</a>
										</li>
										<li class="span3">
											<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/gallery/image1.jpg">
											<img src="assets/img/gallery/image1.jpg" alt="">
											<span><em>390 x 220 - keenthemes.com</em></span>
											</a>
										</li>
									</ul>
								</div>
								<div class="spac40"></div>
								<div class="pagination pagination-right">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_2" class="tab-pane">
								<div class="row-fluid search-forms search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap" />
											</div>
											<button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>187</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>1789</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$37.240</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>660</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$7.060</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>975</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$21.700</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>975</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$21.700</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit .</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>975</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$21.700</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="row-fluid portfolio-block">
									<div class="span5 portfolio-text">
										<img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="span5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>975</span>
										</div>
										<div class="portfolio-info">
											Earnings
											<span>$21.700</span>
										</div>
									</div>
									<div class="span2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>View</span></a>                        
									</div>
								</div>
								<div class="space5"></div>
								<div class="pagination pagination-right">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_3" class="tab-pane">
								<div class="row-fluid search-forms search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap" />
											</div>
											<button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="search-classic">
									<h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
								</div>
								<div class="search-classic">
									<h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
									<a href="#">http://www.keenthemes.com</a>
									<p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
								</div>
								<div class="space5"></div>
								<div class="pagination pagination-centered">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_4" class="tab-pane">
								<div class="row-fluid search-forms search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap" />
											</div>
											<button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="portlet-body" style="display: block;">
									<table class="table table-striped table-bordered table-advance table-hover">
										<thead>
											<tr>
												<th><i class="icon-briefcase"></i> Company</th>
												<th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
												<th><i class="icon-bookmark"></i> Amount</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#">Pixel Ltd</a></td>
												<td class="hidden-phone">Server hardware purchase</td>
												<td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Smart House
													</a>  
												</td>
												<td class="hidden-phone">Office furniture purchase</td>
												<td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													FoodMaster Ltd
													</a>
												</td>
												<td class="hidden-phone">Company Anual Dinner Catering</td>
												<td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													WaterPure Ltd
													</a>
												</td>
												<td class="hidden-phone">Payment for Jan 2013</td>
												<td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Smart House
													</a>  
												</td>
												<td class="hidden-phone">Office furniture purchase</td>
												<td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													FoodMaster Ltd
													</a>
												</td>
												<td class="hidden-phone">Company Anual Dinner Catering</td>
												<td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													WaterPure Ltd
													</a>
												</td>
												<td class="hidden-phone">Payment for Jan 2013</td>
												<td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><a href="#">Pixel Ltd</a></td>
												<td class="hidden-phone">Server hardware purchase</td>
												<td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Smart House
													</a>  
												</td>
												<td class="hidden-phone">Office furniture purchase</td>
												<td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													FoodMaster Ltd
													</a>
												</td>
												<td class="hidden-phone">Company Anual Dinner Catering</td>
												<td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><a href="#">Pixel Ltd</a></td>
												<td class="hidden-phone">Server hardware purchase</td>
												<td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Smart House
													</a>  
												</td>
												<td class="hidden-phone">Office furniture purchase</td>
												<td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td>
													<a href="#">
													FoodMaster Ltd
													</a>
												</td>
												<td class="hidden-phone">Company Anual Dinner Catering</td>
												<td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="space5"></div>
								<div class="pagination pagination-right">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_5" class="tab-pane">
								<div class="row-fluid search-forms search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap" />
											</div>
											<button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="portlet-body">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Photo</th>
												<th class="hidden-phone">Fullname</th>
												<th>Username</th>
												<th class="hidden-phone">Joined</th>
												<th class="hidden-phone">Points</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Mark Nilson</td>
												<td>makr124</td>
												<td class="hidden-phone">19 Jan 2012</td>
												<td class="hidden-phone">1245</td>
												<td><span class="label label-success">Approved</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar2.jpg" alt="" /></td>
												<td class="hidden-phone">Filip Rolton</td>
												<td>jac123</td>
												<td class="hidden-phone">09 Feb 2012</td>
												<td class="hidden-phone">15</td>
												<td><span class="label label-info">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar3.jpg" alt="" /></td>
												<td class="hidden-phone">Colin Fox</td>
												<td>col</td>
												<td class="hidden-phone">19 Jan 2012</td>
												<td class="hidden-phone">245</td>
												<td><span class="label label-warning">Suspended</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Nick Stone</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">565</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Edward Cook</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">45245</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Nick Stone</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">24512</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Elis Lim</td>
												<td>makr124</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">145</td>
												<td><span class="label label-success">Approved</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar2.jpg" alt="" /></td>
												<td class="hidden-phone">King Paul</td>
												<td>king123</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">456</td>
												<td><span class="label label-info">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar3.jpg" alt="" /></td>
												<td class="hidden-phone">Filip Larson</td>
												<td>fil</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">12453</td>
												<td><span class="label label-warning">Suspended</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Martin Larson</td>
												<td>larson12</td>
												<td class="hidden-phone">01 Apr 2011</td>
												<td class="hidden-phone">2453</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">King Paul</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">905</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="space5"></div>
								<div class="pagination pagination-right">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--end tabbable-->           
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
	<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/search.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   Search.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>