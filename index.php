<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="POS - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>TOP 5 SAI TIMS</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fevicon.png">

	<!-- Bootstrap CSS -->


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left active">
				<a href="index.html" class="logo logo-normal">
					<img src="assets/images/fevicon.png" alt="">
				</a>
				<a href="index.html" class="logo logo-white">
					<img src="assets/images/fevicon.png" alt="">
				</a>
				<a href="index.html" class="logo-small">
					<img src="assets/images/fevicon.png" alt="">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
					<i data-feather="chevrons-left" class="feather-16"></i>
				</a>
			</div>
			<!-- /Logo -->

			<a id="mobile_btn" class="mobile_btn" href="#sidebar">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<!-- Header Menu -->
			<ul class="nav user-menu">

				<!-- Search -->
				<li class="nav-item nav-searchinputs">
					<div class="top-nav-search">
						<a href="javascript:void(0);" class="responsive-search">
							<i class="fa fa-search"></i>
						</a>
						<form action="#" class="dropdown">
							<div class="searchinputs dropdown-toggle" id="dropdownMenuClickable"
								data-bs-toggle="dropdown" data-bs-auto-close="false">
								<input type="text" placeholder="Search">
								<div class="search-addon">
									<span><i data-feather="x-circle" class="feather-14"></i></span>
								</div>
							</div>
							<div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
								<div class="search-info">
									<h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
									</h6>
									<ul class="search-tags">
										<li><a href="javascript:void(0);">Products</a></li>
										<li><a href="javascript:void(0);">Sales</a></li>
										<li><a href="javascript:void(0);">Applications</a></li>
									</ul>
								</div>
								<div class="search-info">
									<h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
									<p>How to Change Product Volume from 0 to 200 on Inventory management</p>
									<p>Change Product Name</p>
								</div>
								<div class="search-info">
									<h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
									<ul class="customers">
										<li>
											<a href="javascript:void(0);">Aron Varu<img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid"></a>
										</li>
										<li>
											<a href="javascript:void(0);">Jonita<img src="assets/img/profiles/avatar-01.jpg" alt="" class="img-fluid"></a>
										</li>
										<li>
											<a href="javascript:void(0);">Aaron<img src="assets/img/profiles/avatar-10.jpg" alt="" class="img-fluid"></a>
										</li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</li>
				<!-- /Search -->


				

				<!-- Flag -->
				<li class="nav-item dropdown has-arrow flag-nav nav-item-box">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
						role="button">
						<img src="assets/img/flags/us.png" alt="Language" class="img-fluid">
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item active">
							<img src="assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>
				<!-- /Flag -->

				
				<li class="nav-item nav-item-box">
					<a href="email.html">
						<i data-feather="mail"></i>
						<span class="badge rounded-pill">1</span>
					</a>
				</li>
				<!-- Notifications -->
				<li class="nav-item dropdown nav-item-box">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">John Doe</span> added
													new task <span class="noti-title">Patient appointment booking</span>
												</p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
													changed the task name <span class="noti-title">Appointment booking
														with payment gateway</span>
												</p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Misty Tison</span>
													added <span class="noti-title">Domenic Houston</span> and <span
														class="noti-title">Claire Mapes</span> to project <span
														class="noti-title">Doctor available module</span>
												</p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span>
													completed task <span class="noti-title">Patient and Doctor video conferencing</span>
												</p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
													added new task <span class="noti-title">Private chat module</span>
												</p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="activities.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<li class="nav-item nav-item-box">
					<a href="general-settings.html"><i data-feather="settings"></i></a>
				</li>
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
						<span class="user-info">
							<span class="user-letter">
								<img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid">
							</span>
							<span class="user-detail">
								<span class="user-name">John Smilga</span>
								<span class="user-role">Super Admin</span>
							</span>
						</span>
					</a>
					<div class="dropdown-menu menu-drop-user">
						<div class="profilename">
							<div class="profileset">
								<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
									<span class="status online"></span></span>
								<div class="profilesets">
									<h6>John Smilga</h6>
									<h5>Super Admin</h5>
								</div>
							</div>
							<hr class="m-0">
							<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
							<a class="dropdown-item" href="general-settings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
							<hr class="m-0">
							<a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- /Header Menu -->

			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="profile.html">My Profile</a>
					<a class="dropdown-item" href="general-settings.html">Settings</a>
					<a class="dropdown-item" href="signin.html">Logout</a>
				</div>
			</div>
			<!-- /Mobile Menu -->
		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Main</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop active"><i data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="admin-dashboard.html" class="active">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>My Workspace</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat-group.html">Chat Group</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Tasks<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="review-calendar.html">Review calendar</a></li>
												<li><a href="report.html">Report</a></li>
												<li><a href="performance-self-review.html">Performance self-review</a></li>
												<li><a href="goal-progress.html">Goal progress</a></li>
												<li><a href="team-feedback.html">Team feedback</a></li>
												<li><a href="personal-development-plan.html">Personal development plan</a></li>
												<li><a href="prioritize-tasks.html">Prioritize tasks</a></li>
											</ul>
										</li>
										<li><a href="email.html">Email</a></li>
										<li><a href="to-do.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">MANAGEMENT</h6>
							<ul>
								<li><a href="administration-finance.html"><i data-feather="box"></i><span>Administration & Finance</span></a></li>
								<li><a href="operations.html"><i data-feather="plus-square"></i><span>Operations</span></a></li>
								<li><a href="sale-marketing.html"><i data-feather="codesandbox"></i><span>Business Development </br> sale & marketing</span></a></li>
								<li><a href="human-resources.html"><i data-feather="trending-down"></i><span>Human Resources</span></a></li>
								<li><a href="engineering.html"><i data-feather="codepen"></i><span>Engineering</span></a></li>
								<li><a href="sub-category.html"><i data-feather="speaker"></i><span>Sub Category</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">SALES</h6>
							<ul>
								<li><a href="energy-radio.html"><i data-feather="package"></i><span>Energy Radio</span></a></li>
								<li><a href="top-5-music.html"><i data-feather="clipboard"></i><span>Top 5 Music</span></a></li>
								<li><a href="5-start-ivent.html"><i data-feather="truck"></i><span>5 Start ivent</span></a></li>
								<li><a href="top-5-films.html"><i data-feather="shopping-cart"></i><span>Top 5 Films</span></a></li>
								<li><a href="top-5-images.html"><i data-feather="file-text"></i><span>Top 5 Images</span></a></li>
								<li><a href="top-5-coms.html"><i data-feather="copy"></i><span>Top 5 Coms</span></a></li>
								<li><a href="top-5-technologies.html"><i data-feather="save"></i><span>Top 5 Technologies</span></a></li>
								<li><a href="online-broadcasting.html"><i data-feather="hard-drive"></i><span>Online Broadcasting</span></a></li>
								<li><a href="general-services.html"><i data-feather="hard-drive"></i><span>General Services</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">BRANCHES</h6>
							<ul>
								<li><a href="kigali.html"><i data-feather="package"></i><span>KIGALI</span></a></li>
								<li><a href="musanze-isonga.html"><i data-feather="truck"></i><span>MUSANZE (ISONGA)</span></a></li>
								<li><a href="musanze-energy-radio.html"><i data-feather="shopping-cart"></i><span>MUSANZE (ENERGY RADIO)</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->


		<div class="page-wrapper">
			<div class="content">
				<!--<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash1.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
								<h6>Total Purchase Due</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash1 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
								<h6>Total Sales Due</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash2 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash3.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>$<span class="counters" data-count="385656.50">$385,656.50</span></h5>
								<h6>Total Sale Amount</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-widget dash3 w-100">
							<div class="dash-widgetimg">
								<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
							</div>
							<div class="dash-widgetcontent">
								<h5>$<span class="counters" data-count="40000.00">$400.00</span></h5>
								<h6>Total Expense Amount</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count">
							<div class="dash-counts">
								<h4>100</h4>
								<h5>Customers</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="user"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das1">
							<div class="dash-counts">
								<h4>110</h4>
								<h5>Suppliers</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="user-check"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das2">
							<div class="dash-counts">
								<h4>150</h4>
								<h5>Purchase Invoice</h5>
							</div>
							<div class="dash-imgs">
								<img src="assets/img/icons/file-text-icon-01.svg" class="img-fluid" alt="icon">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das3">
							<div class="dash-counts">
								<h4>170</h4>
								<h5>Sales Invoice</h5>
							</div>
							<div class="dash-imgs">
								<i data-feather="file"></i>
							</div>
						</div>
					</div>
				</div> -->

				<div class="row">
					<!-- Operations Dropdown -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
						<div class="dropdown w-100">
							<button class="btn btn-primary w-100 dropdown-toggle" type="button" id="operationsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-broadcast-tower mr-2"></i> Operations
							</button>
							<div class="dropdown-menu w-100" aria-labelledby="operationsDropdown">
								<a class="dropdown-item" href="operations-energy.php">
									<i class="fas fa-bolt mr-2"></i> Energy Radio
								</a>
								<a class="dropdown-item" href="operations-music.php">
									<i class="fas fa-music mr-2"></i> Top 5 Music
								</a>
								<a class="dropdown-item" href="operations-images.php">
									<i class="fas fa-image mr-2"></i> Top 5 Images
								</a>
								<a class="dropdown-item" href="operations-events.php">
									<i class="fas fa-star mr-2"></i> 5-Star Events
								</a>
								<a class="dropdown-item" href="operations-tech.php">
									<i class="fas fa-microchip mr-2"></i> Top 5 Tech
								</a>
							</div>
						</div>
					</div>

					<!-- Stock Management Dropdown -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
						<div class="dropdown w-100">
							<button class="btn btn-success w-100 dropdown-toggle" type="button" id="stockDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-boxes mr-2"></i> Stock Management
							</button>
							<div class="dropdown-menu w-100" aria-labelledby="stockDropdown">
								<a class="dropdown-item" href="stock-inventory.php">
									<i class="fas fa-clipboard-list mr-2"></i> Inventory
								</a>
								<a class="dropdown-item" href="stock-orders.php">
									<i class="fas fa-truck mr-2"></i> Orders
								</a>
								<a class="dropdown-item" href="stock-suppliers.php">
									<i class="fas fa-address-book mr-2"></i> Suppliers
								</a>
							</div>
						</div>
					</div>

					<!-- Business Development Dropdown -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
						<div class="dropdown w-100">
							<button class="btn btn-info w-100 dropdown-toggle" type="button" id="businessDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-chart-line mr-2"></i> Business Development
							</button>
							<div class="dropdown-menu w-100" aria-labelledby="businessDropdown">
								<a class="dropdown-item" href="business-sales.php">
									<i class="fas fa-handshake mr-2"></i> Sales
								</a>
								<a class="dropdown-item" href="business-marketing.php">
									<i class="fas fa-bullhorn mr-2"></i> Marketing
								</a>
								<a class="dropdown-item" href="business-clients.php">
									<i class="fas fa-users mr-2"></i> Clients
								</a>
							</div>
						</div>
					</div>

					<!-- Dashboard Dropdown -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
						<div class="dropdown w-100">
							<button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dashboardDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-tachometer-alt mr-2"></i> My Dashboard
							</button>
							<div class="dropdown-menu w-100" aria-labelledby="dashboardDropdown">
								<a class="dropdown-item" href="dashboard-main.php">
									<i class="fas fa-home mr-2"></i> Overview
								</a>
								<a class="dropdown-item" href="dashboard-reports.php">
									<i class="fas fa-file-alt mr-2"></i> Reports
								</a>
								<a class="dropdown-item" href="dashboard-settings.php">
									<i class="fas fa-cog mr-2"></i> Settings
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Transaction Table 
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Last Transactions</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive dataview">
							<table class="table dashboard-transactions">
								<thead>
									<tr>
										<th class="no-sort">
											<label class="checkboxs">
												<input type="checkbox" id="select-all">
												<span class="checkmarks"></span>
											</label>
										</th>
										<th>Transaction ID</th>
										<th>Customer</th>
										<th>Date</th>
										<th>Amount</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>#001</td>
										<td>John Doe</td>
										<td>22/02/2023</td>
										<td>$1200</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>#002</td>
										<td>Jane Doe</td>
										<td>19/02/2023</td>
										<td>$1000</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>#003</td>
										<td>John Smith</td>
										<td>18/02/2023</td>
										<td>$1500</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class=" confirm-text p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>-->
			</div>
		</div>

		<div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div>

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/chartjs/chart.min.js"></script>
	<script src="assets/plugins/chartjs/chart-data.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

	<!-- Bootstrap 5 JS Bundle (only once, after all other JS) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>