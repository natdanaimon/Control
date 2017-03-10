<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Form Stuff - Advance Form Samples</title>
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
	<!-- END PAGE LEVEL SCRIPTS -->
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
						<li class="active">
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
							Advance Form Samples
							<small>advance form layout samples</small>
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
							<li><a href="#">Form Layouts</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<div class="tabbable tabbable-custom boxless">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_1" data-toggle="tab">2 Columns</a></li>
								<li><a  href="#tab_2" data-toggle="tab">2 Columns Horizontal</a></li>
								<li><a href="#tab_3" data-toggle="tab">2 Columns View Only</a></li>
								<li><a  href="#tab_4" data-toggle="tab">Row Seperated</a></li>
								<li><a  href="#tab_5" data-toggle="tab">Bordered</a></li>
								<li><a  href="#tab_6" data-toggle="tab">Bordered & Row Stripped</a></li>
								<li><a  href="#tab_7" data-toggle="tab">Bordered & Label Stripped</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="horizontal-form">
												<h3 class="form-section">Person Info</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="firstName">First Name</label>
															<div class="controls">
																<input type="text" id="firstName" class="m-wrap span12" placeholder="Chee Kin">
																<span class="help-block">This is inline help</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group error">
															<label class="control-label" for="lastName">Last Name</label>
															<div class="controls">
																<input type="text" id="lastName" class="m-wrap span12" placeholder="Lim">
																<span class="help-block">This field has error.</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Gender</label>
															<div class="controls">
																<select  class="m-wrap span12">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">Select your gender.</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Date of Birth</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->        
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Category</label>
															<div class="controls">
																<select class="span12 select2_category" data-placeholder="Choose a Category" tabindex="1">
																	<option value="">&nbsp;</option>
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Membership</label>
															<div class="controls">                                                
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option1" />
																Free
																</label>
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option2" checked />
																Professional
																</label>  
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row--> 
												<h3 class="form-section">Address</h3>
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label" >Street</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" >
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >City</label>
															<div class="controls">
																<input type="text"  class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >State</label>
															<div class="controls">
																<input type="text"  class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Post Code</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Country</label>
															<div class="controls">
																<select  class="m-wrap span12"></select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM--> 
										</div>
									</div>
								</div>
								<div class="tab-pane " id="tab_2">
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
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
												<h3 class="form-section">Person Info</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">First Name</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="Chee Kin">
																<span class="help-block">This is inline help</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group error">
															<label class="control-label">Last Name</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="Lim">
																<span class="help-block">This field has error.</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Gender</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">Select your gender.</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Date of Birth</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->        
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Category</label>
															<div class="controls">
																<select class="span12 select2_category"  data-placeholder="Choose a Category" tabindex="1">
																	<option value="">&nbsp;</option>
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Membership</label>
															<div class="controls">                                                
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option1" />
																Free
																</label>
																<label class="radio">
																<input type="radio" name="optionsRadios2" value="option2" checked />
																Professional
																</label>  
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Address</h3>
												<!--/row-->                   
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label">Street</label>
															<div class="controls">
																<input type="text" class="m-wrap span12" >
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">City</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >State</label>
															<div class="controls">
																<input type="text"  class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Post Code</label>
															<div class="controls">
																<input type="text" class="m-wrap span12"> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Country</label>
															<div class="controls">
																<select class="m-wrap span12">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->                
										</div>
									</div>
								</div>
								<div class="tab-pane " id="tab_3">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<div class="form-horizontal form-view">
												<h3> View User Info - Bob Nilson </h3>
												<h3 class="form-section">Person Info</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="firstName">First Name:</label>
															<div class="controls">
																<span class="text">Bob</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="lastName">Last Name:</label>
															<div class="controls">
																<span class="text">Nilson</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Gender:</label>
															<div class="controls">
																<span class="text">Male</span> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Date of Birth:</label>
															<div class="controls">
																<span class="text bold">20.01.1984</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->        
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Category:</label>
															<div class="controls">
																<span class="text bold">Category1</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Membership:</label>
															<div class="controls">                                                
																<span class="text bold">Free</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->                
												<h3 class="form-section">Address</h3>
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label" >Street:</label>
															<div class="controls">
																<span class="text">#24 Sun Park Avenue, Rolton Str</span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >City:</label>
															<div class="controls">
																<span class="text">New York</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6">
														<div class="control-group">
															<label class="control-label" >State:</label>
															<div class="controls">
																<span class="text">New York</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Post Code:</label>
															<div class="controls">
																<span class="text">457890</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" >Country:</label>
															<div class="controls">
																<span class="text">USA</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
													<button type="button" class="btn">Back</button>
												</div>
											</div>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
								<div class="tab-pane"  id="tab_4">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal form-row-seperated">
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="small" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="medium" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Gender</label>
													<div class="controls">
														<select  class="m-wrap span12">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">Select your gender.</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Date of Birth</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Category</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_category">
																<option value="">&nbsp;</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Multi-Value Select</label>
													<div class="controls">
														<select class="span12 select2_sample1" multiple>
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
														<input type="hidden" class="span12 select2_sample2">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Tags Support List</label>
													<div class="controls">
														<input type="hidden" class="span12 select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Membership</label>
													<div class="controls">                                                
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option1" />
														Free
														</label>
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option2" checked />
														Professional
														</label>  
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Street</label>
													<div class="controls">
														<input type="text" class="m-wrap span12" >
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >City</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >State</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Post Code</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group last">
													<label class="control-label" >Country</label>
													<div class="controls">
														<select  class="m-wrap span12"></select>
													</div>
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
								<div class="tab-pane"  id="tab_5">
									<div class="portlet box blue ">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal form-bordered">
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="small" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="medium" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Gender</label>
													<div class="controls">
														<select  class="m-wrap span12">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">Select your gender.</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Date of Birth</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Category</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_category">
																<option value="">&nbsp;</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Multi-Value Select</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_sample1" multiple>
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
												</div>
												<div class="control-group">
													<label class="control-label">Loading Data</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample2">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Tags Support List</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample3" value="red, blue">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Membership</label>
													<div class="controls">                                                
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option1" />
														Free
														</label>
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option2" checked />
														Professional
														</label>  
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Street</label>
													<div class="controls">
														<input type="text" class="m-wrap span12" >
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >City</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >State</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Post Code</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group last">
													<label class="control-label" >Country</label>
													<div class="controls">
														<select  class="m-wrap span12"></select>
													</div>
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
								<div class="tab-pane"  id="tab_6">
									<div class="portlet box blue ">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal form-bordered form-row-stripped">
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="small" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="medium" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Gender</label>
													<div class="controls">
														<select  class="m-wrap span12">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">Select your gender.</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Date of Birth</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Category</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_category">
																<option value="">&nbsp;</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Multi-Value Select</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_sample1" multiple>
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
												</div>
												<div class="control-group">
													<label class="control-label">Loading Data</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample2">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Tags Support List</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample3" value="red, blue">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Membership</label>
													<div class="controls">                                                
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option1" />
														Free
														</label>
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option2" checked />
														Professional
														</label>  
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Street</label>
													<div class="controls">
														<input type="text" class="m-wrap span12" >
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >City</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >State</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Post Code</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group last">
													<label class="control-label" >Country</label>
													<div class="controls">
														<select  class="m-wrap span12"></select>
													</div>
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
								<div class="tab-pane"  id="tab_7">
									<div class="portlet box blue ">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Form Sample</div>
											<div class="tools">
												<a href="javascript:;" class="collapse"></a>
												<a href="#portlet-config" data-toggle="modal" class="config"></a>
												<a href="javascript:;" class="reload"></a>
												<a href="javascript:;" class="remove"></a>
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<form action="#" class="form-horizontal form-bordered form-label-stripped">
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="small" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="medium" class="m-wrap span12" />
														<span class="help-inline">This is inline help</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Gender</label>
													<div class="controls">
														<select  class="m-wrap span12">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">Select your gender.</span>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Date of Birth</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Category</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_category">
																<option value="">&nbsp;</option>
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Multi-Value Select</label>
													<div class="controls">
														<div class="select2-wrapper">
															<select class="span12 select2_sample1" multiple>
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
												</div>
												<div class="control-group">
													<label class="control-label">Loading Data</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample2">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Tags Support List</label>
													<div class="controls">
														<div class="select2-wrapper">
															<input type="hidden" class="span12 select2_sample3" value="red, blue">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Membership</label>
													<div class="controls">                                                
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option1" />
														Free
														</label>
														<label class="radio">
														<input type="radio" name="optionsRadios2" value="option2" checked />
														Professional
														</label>  
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Street</label>
													<div class="controls">
														<input type="text" class="m-wrap span12" >
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >City</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >State</label>
													<div class="controls">
														<input type="text"  class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" >Post Code</label>
													<div class="controls">
														<input type="text" class="m-wrap span12"> 
													</div>
												</div>
												<div class="control-group last">
													<label class="control-label" >Country</label>
													<div class="controls">
														<select  class="m-wrap span12"></select>
													</div>
												</div>
												<div class="form-actions">
													<button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
													<button type="button" class="btn">Cancel</button>
												</div>
											</form>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
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
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-samples.js"></script>   
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {    
		   // initiate layout and plugins
		   App.init();
		   FormSamples.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>