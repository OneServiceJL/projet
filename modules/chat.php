<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="POS - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Chat Pages</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="../assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">

	<!-- Mobile CSS-->
	<link rel="stylesheet" href="../assets/plugins/intltelinput/css/intlTelInput.css">
	<link rel="stylesheet" href="../assets/plugins/intltelinput/css/demo.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

	<!-- Boxicons CSS -->
	<link rel="stylesheet" href="../assets/plugins/boxicons/css/boxicons.min.css">

	<!-- Fancybox -->
	<link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.min.css">

	<!-- Swiper CSS -->
	<link rel="stylesheet" href="../assets/plugins/swiper/swiper.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="main-chat-blk">

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
					<img src="../assets/img/Fevicon_2_top5_sai.png" alt="">
				</a>
				<a href="index.html" class="logo logo-white">
					<img src="../assets/img/Fevicon_2_top5_sai.png" alt="">
				</a>
				<a href="index.html" class="logo-small">
					<img src="../assets/img/Fevicon_2_top5_sai.png" alt="">
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
						<!-- Search Content-->
						<form action="#" class="dropdown">
							<div class="searchinputs dropdown-toggle" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false">
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
										<li><a href="javascript:void(0);">Aron Varu<img src="../assets/img/profiles/avator1.jpg" alt="" class="img-fluid"></a></li>
										<li><a href="javascript:void(0);">Jonita<img src="../assets/img/profiles/avatar-01.jpg" alt="" class="img-fluid"></a></li>
										<li><a href="javascript:void(0);">Aaron<img src="../assets/img/profiles/avatar-10.jpg" alt="" class="img-fluid"></a></li>
									</ul>
								</div>
							</div>
						</form>
						<!-- End Search Content-->
					</div>
				</li>
				<!-- /Search -->


				<!-- Flag change language -->
				<li class="nav-item dropdown has-arrow flag-nav nav-item-box">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
						role="button">
						<img src="../assets/img/flags/us.png" alt="Language" class="img-fluid">
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item active">
							<img src="../assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="../assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="../assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="../assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>
				<!-- End Flag change language -->

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
												<img alt="" src="../assets/img/profiles/avatar-02.jpg">
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
												<img alt="" src="../assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
													changed the task name <span class="noti-title">Appointment booking
														with payment gateway</span></p>
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
												<img alt="" src="../assets/img/profiles/avatar-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Misty Tison</span>
													added <span class="noti-title">Domenic Houston</span> and <span
														class="noti-title">Claire Mapes</span> to project <span
														class="noti-title">Doctor available module</span></p>
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
												<img alt="" src="../assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span>
													completed task <span class="noti-title">Patient and Doctor video
														conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="../assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
													added new task <span class="noti-title">Private chat module</span>
												</p>
												<p class="noti-time"><span class="notification-time">2 days ago</span>
												</p>
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

				<!-- User Profile -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
						<span class="user-info">
							<span class="user-letter">
								<img src="../assets/img/profiles/avator1.jpg" alt="" class="img-fluid">
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
								<span class="user-img"><img src="../assets/img/profiles/avator1.jpg" alt="">
									<span class="status online"></span></span>
								<div class="profilesets">
									<h6>John Smilga</h6>
									<h5>Super Admin</h5>
								</div>
							</div>
							<hr class="m-0">
							<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
								Profile</a>
							<a class="dropdown-item" href="general-settings.html"><i class="me-2"
									data-feather="settings"></i>Settings</a>
							<hr class="m-0">
							<a class="dropdown-item logout pb-0" href="signin.html"><img
									src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
						</div>
					</div>
				</li>
				<!-- End User Profile -->
			</ul>
			<!-- /Header Menu -->
		</div>
		<!-- /Header -->


		<?php include_once('../includes/sidebar.php'); ?>


		<!-- Chat Page Wrapper -->
		<div class="page-wrapper chat-page-wrapper">
			<div class="content">

				<!-- sidebar group -->
				<div class="sidebar-group left-sidebar chat_sidebar">

					<!-- Chats sidebar -->
					<div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

						<div class="slimscroll-active-sidebar">

							<!-- Left Chat Title -->
							<div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
								<div class="setting-title-head">
									<h4> All Chats</h4>
								</div>
								<div class="add-section">
									<ul>
										<li><a href="javascript:void(0);" class="user-chat-search-btn"><i class="bx bx-search"></i></a></li>
										<li>
											<div class="chat-action-btns">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="bx bx-dots-vertical-rounded"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-end">
														<a href="javascript:void(0);" class="dropdown-item " data-bs-toggle="modal" data-bs-target="#new-chat"><span><i class="bx bx-message-rounded-add"></i></span>New Chat </a>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new-group"><span><i class="bx bx-user-circle"></i></span>Create Group</a>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#invite-other"><span><i class="bx bx-user-plus"></i></span>Invite Others</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<!-- Chat Search -->
									<div class="user-chat-search">
										<form>
											<span class="form-control-feedback"><i class="bx bx-search"></i></span>
											<input type="text" name="chat-search" placeholder="Search" class="form-control">
											<div class="user-close-btn-chat"><span class="material-icons">close</span></div>
										</form>
									</div>
									<!-- /Chat Search -->
								</div>
							</div>
							<!-- /Left Chat Title -->

							<!-- Top Online Contacts -->
							<div class="top-online-contacts">
								<div class="fav-title">
									<h6>Online Now</h6>
									<a href="javascript:void(0);">View All</a>
								</div>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-2.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-1.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-7.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-5.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-3.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="top-contacts-box">
												<div class="profile-img online">
													<img src="../assets/img/avatar/avatar-2.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Top Online Contacts -->

							<div class="sidebar-body chat-body" id="chatsidebar">

								<!-- Left Chat Title -->
								<div class="d-flex justify-content-between align-items-center ps-0 pe-0">
									<div class="fav-title pin-chat">
										<h6>Pinned Chat</h6>
									</div>
								</div>
								<!-- /Left Chat Title -->

								<ul class="user-list">
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div class="avatar avatar-online">
												<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-pin me-2"></i>
														<i class="bx bx-check-double"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar ">
													<img src="../assets/img/avatar/avatar-1.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p><span class="animate-typing-col">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</span>
													</p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-pin"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div class="avatar avatar-online">
												<img src="../assets/img/avatar/avatar-5.jpg" class="rounded-circle" alt="image">
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-pin me-2"></i>
														<i class="bx bx-check-double green-check"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
								<!-- Left Chat Title -->
								<div class="d-flex justify-content-between align-items-center ps-0 pe-0">
									<div class="fav-title pin-chat">
										<h6>Recent Chat</h6>
									</div>
								</div>
								<!-- /Left Chat Title -->
								<ul class="user-list">
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div class="avatar avatar-online">
												<img src="../assets/img/avatar/avatar-3.jpg" class="rounded-circle" alt="image">
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="new-message-count"></div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar avatar-online">
													<img src="../assets/img/avatar/avatar-3.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p><i class="bx bx-video me-1"></i></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-check"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div class="avatar">
												<img src="../assets/img/avatar/avatar-4.jpg" class="rounded-circle" alt="image">
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p><i class="bx bx-file me-1"></i></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>

												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar avatar-online">
													<img src="../assets/img/avatar/avatar-9.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p><i class="bx bx-microphone me-1"></i></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-check-double green-check"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar ">
													<img src="../assets/img/avatar/avatar-7.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-microphone-off"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar avatar-online">
													<img src="../assets/img/avatar/avatar-8.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p class="missed-call-col"><i class="bx bx-phone-incoming me-1"></i></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
												</div>
											</div>
										</a>
									</li>
									<li class="user-list-item">
										<a href="javascript:void(0);">
											<div>
												<div class="avatar">
													<img src="../assets/img/avatar/avatar-6.jpg" class="rounded-circle" alt="image">
												</div>
											</div>
											<div class="users-list-body">
												<div>
													<h5></h5>
													<p><i class="bx bx-image-alt me-1"></i></p>
												</div>
												<div class="last-chat-time">
													<small class="text-muted"></small>
													<div class="chat-pin">
														<i class="bx bx-check-double"></i>
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>

						</div>

					</div>
					<!-- / Chats sidebar -->
				</div>
				<!-- /Sidebar group -->

				<!-- Chat -->
				<div class="chat chat-messages" id="middle">
					<div class="slimscroll">
						<div class="chat-header">
							<div class="user-details">
								<div class="d-lg-none">
									<ul class="list-inline mt-2 me-2">
										<li class="list-inline-item">
											<a class="text-muted px-0 left_sides" href="#" data-chat="open">
												<i class="fas fa-arrow-left"></i>
											</a>
										</li>
									</ul>
								</div>
								<figure class="avatar ms-1">
									<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
								</figure>
								<div class="mt-1">
									<h5></h5>
									<small class="last-seen">
										
									</small>
								</div>
							</div>
							<div class="chat-options ">
								<ul class="list-inline">
									<li class="list-inline-item">
										<a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
											<i class="bx bx-search"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="video-call.html" class="btn btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
											<i class="bx bx-video"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="audio-call.html" class="btn btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
											<i class="bx bx-phone"></i>
										</a>
									</li>
									<li class="list-inline-item dream_profile_menu">
										<a href="javascript:void(0)" class="btn btn-outline-light not-chat-user">
											<i class="bx bx-info-circle"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="#" class="dropdown-item "><span><i class="bx bx-x"></i></span>Close Chat </a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mute-notification"><span><i class="bx bx-volume-mute"></i></span>Mute Notification</a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#disappearing-messages"><span><i class="bx bx-time-five"></i></span>Disappearing Message</a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#clear-chat"><span><i class="bx bx-brush-alt"></i></span>Clear Message</a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#change-chat"><span><i class="bx bx-trash-alt"></i></span>Delete Chat</a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
											<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#block-user"><span><i class="bx bx-block"></i></span>Block</a>
										</div>
									</li>
								</ul>
							</div>
							<!-- Chat Search -->
							<div class="chat-search">
								<form>
									<span class="form-control-feedback"><i class="bx bx-search"></i></span>
									<input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
									<div class="close-btn-chat"><span class="material-icons">close</span></div>
								</form>
							</div>
							<!-- /Chat Search -->
						</div>
						<div class="chat-body">
							<div class="messages">
								<div class="chats">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content">
										<div class="chat-profile-name">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content">
											 <a href="javascript:void(0);"></a> 
											<div class="emoj-group">
												<ul>
													<li class="emoj-action"><a href="javascript:void(0);"><i class="bx bx-smile"></i></a>
														<div class="emoj-group-list">
															<ul>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-01.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-02.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-03.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-04.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-05.svg" alt="Icon"></a></li>
																<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a></li>
															</ul>
														</div>
													</li>
													<li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-line">
									<span class="chat-date"></span>
								</div>
								<div class="chats chats-right">
									<div class="chat-content">
										<div class="chat-profile-name text-end">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content ">
											<div class="emoj-group rig-emoji-group">
												<ul>
													<li class="emoj-action"><a href="javascript:void(0);"><i class="bx bx-smile"></i></a>
														<div class="emoj-group-list">
															<ul>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-01.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-02.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-03.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-04.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-05.svg" alt="Icon"></a></li>
																<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a></li>
															</ul>
														</div>
													</li>
													<li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
												</ul>
											</div>
											<div class="chat-voice-group">
												<ul>
													
												</ul>
											</div>
										</div>
									</div>
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
								</div>
								<div class="chats">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content">
										<div class="chat-profile-name">
											<h6><span></span><span class="check-star"><i class="bx bxs-star"></i></span></h6>
											<div class="chat-action-btns ms-2">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bxs-star"></i></span>Unstar Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content award-link chat-award-link">
											<a href="javascript:void(0);" class="mb-1"></a>
											
											<div class="emoj-group">
												<ul>
													<li class="emoj-action"><a href="javascript:void(0);"><i class="bx bx-smile"></i></a>
														<div class="emoj-group-list">
															<ul>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-01.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-02.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-03.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-04.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-05.svg" alt="Icon"></a></li>
																<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a></li>
															</ul>
														</div>
													</li>
													<li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="chats chats-right">
									<div class="chat-content">
										<div class="chat-profile-name justify-content-end">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content fancy-msg-box">
											<div class="emoj-group wrap-emoji-group ">
												<ul>
													<li class="emoj-action"><a href="javascript:void(0);"><i class="bx bx-smile"></i></a>
														<div class="emoj-group-list">
															<ul>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-01.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-02.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-03.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-04.svg" alt="Icon"></a></li>
																<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-05.svg" alt="Icon"></a></li>
																<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a></li>
															</ul>
														</div>
													</li>
													<li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
												</ul>
											</div>
											<div class="download-col">
												<ul class="nav mb-0">
													
													<li>
														<div class="image-download-col">
															<a href="../assets/img/media/media-02.jpg" data-fancybox="gallery" class="fancybox">
																<img src="../assets/img/media/media-02.jpg" alt="">
															</a>

														</div>
													</li>
													<li>
														<div class="image-download-col ">
															<a href="../assets/img/media/media-03.jpg" data-fancybox="gallery" class="fancybox">
																<img src="../assets/img/media/media-03.jpg" alt="">
															</a>
														</div>
													</li>
													<li>
														<div class="image-download-col image-not-download">
															<a href="../assets/img/media/media-01.jpg" data-fancybox="gallery" class="fancybox">
																<img src="../assets/img/media/media-01.jpg" alt="">
																<span>10+</span>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-10.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
								</div>

								<div class="chats">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content">
										<div class="chat-profile-name">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
									
										<div class="like-chat-grp">
											<ul>
												
											</ul>
										</div>
									</div>
								</div>
								<div class="chats">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content">
										<div class="chat-profile-name">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content">
											
											<div class="emoj-group">
												<ul>
													<li class="emoj-action"><a href="javascript:void(0);"><i class="bx bx-smile"></i></a>
														<div class="emoj-group-list">
															<ul>
																
														</div>
													</li>
													<li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="bx bx-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="chats">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content chat-cont-type">
										<div class="chat-profile-name chat-type-wrapper">
											<p></p>
										</div>
									</div>
								</div>




								<div class="chats forward-chat-msg">
									<div class="chat-avatar">
										<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dreams_chat" alt="image">
									</div>
									<div class="chat-content">
										<div class="chat-profile-name">
											<h6><span></span></h6>
											<div class="chat-action-btns ms-3">
												<div class="chat-action-col">
													<a class="#" href="#" data-bs-toggle="dropdown">
														<i class="bx bx-dots-horizontal-rounded"></i>
													</a>
													<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
														<a href="#" class="dropdown-item message-info-left"><span><i class="bx bx-info-circle"></i></span>Message Info </a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-share"></i></span>Reply</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-smile"></i></span>React</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#forward-message"><span><i class="bx bx-reply"></i></span>Forward</a>
														<a href="#" class="dropdown-item"><span><i class="bx bx-star"></i></span>Star Message</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><span><i class="bx bx-dislike"></i></span>Report</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-message"><span><i class="bx bx-trash"></i></span>Delete</a>
													</div>
												</div>
											</div>
										</div>
										<div class="message-content">
											Thank you for your support
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="chat-footer">
						<form>
							<div class="smile-foot">
								<div class="chat-action-btns">
									<div class="chat-action-col">
										<a class="action-circle" href="#" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="#" class="dropdown-item "><span><i class="bx bx-file"></i></span>Document</a>
											<a href="#" class="dropdown-item"><span><i class="bx bx-camera"></i></span>Camera</a>
											<a href="#" class="dropdown-item"><span><i class="bx bx-image"></i></span>Gallery</a>
											<a href="#" class="dropdown-item"><span><i class="bx bx-volume-full"></i></span>Audio</a>
											<a href="#" class="dropdown-item"><span><i class="bx bx-map"></i></span>Location</a>
											<a href="#" class="dropdown-item"><span><i class="bx bx-user-pin"></i></span>Contact</a>
										</div>
									</div>
								</div>
							</div>
							<div class="smile-foot emoj-action-foot">
								<a href="#" class="action-circle"><i class="bx bx-smile"></i></a>
								<div class="emoj-group-list-foot down-emoji-circle">
									<ul>
										<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-01.svg" alt="Icon"></a></li>
										<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-02.svg" alt="Icon"></a></li>
										<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-03.svg" alt="Icon"></a></li>
										<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-04.svg" alt="Icon"></a></li>
										<li><a href="javascript:void(0);"><img src="../assets/img/icons/emoj-icon-05.svg" alt="Icon"></a></li>
										<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="smile-foot">
								<a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
							</div>
							<input type="text" class="form-control chat_form" placeholder="Type your message here...">
							<div class="form-buttons">
								<button class="btn send-btn" type="submit">
									<i class="bx bx-paper-plane"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /Chat -->

				<!-- Right sidebar -->
				<div class="right-sidebar right_sidebar_profile right-side-contact hide-right-sidebar" id="middle1">
					<div class="right-sidebar-wrap active">
						<div class="slimscroll">
							<div class="left-chat-title d-flex justify-content-between align-items-center border-bottom-0">
								<div class="fav-title mb-0">
									<h6>Contact Info</h6>
								</div>
								<div class="contact-close_call text-end">
									<a href="#" class="close_profile close-star">
										<i class="bx bxs-star"></i>
									</a>
									<a href="#" class="close_profile close-trash">
										<i class="bx bx-trash"></i>
									</a>
								</div>
							</div>
							<div class="sidebar-body">
								<div class="mt-0 right_sidebar_logo">
									<div class="text-center right-sidebar-profile">
										<figure class="avatar avatar-xl mb-3">
											<img src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
										</figure>
										<h5 class="profile-name"></h5>
										<div class="last-seen-profile">
											<span></span>
										</div>
										<div class="chat-options chat-option-profile">
											<ul class="list-inline">
												<li class="list-inline-item">
													<a href="audio-call.html" class="btn btn-outline-light " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
														<i class="bx bx-phone"></i>
													</a>
												</li>
												<li class="list-inline-item ">
													<a href="video-call.html" class="btn btn-outline-light profile-open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
														<i class="bx bx-video"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat">
														<i class="bx bx-message-square-dots"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="chat-member-details">
										<div class="member-details">
											<ul>
												<li>
													<h5>Bio</h5>
												</li>
												<li>
													<h6>Phone</h6>
													<span>555-555-21541</span>
												</li>
												<li>
													<h6>Email Address</h6>
													<span>info@example.com</span>
												</li>
											</ul>
										</div>
									</div>

								</div>
							</div>
							<div class="right-sidebar-head share-media">
								<div class="share-media-blk">
									<h5>Shared Media</h5>
									<a href="javascript:void(0);">View All</a>
								</div>
								<div class="about-media-tabs">
									<nav>
										<div class="nav nav-tabs " id="nav-tab">
											<a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#info">Photos</a>
											<a class="nav-item nav-link" id="nav-profile-tab1" data-bs-toggle="tab" href="#Participants">Videos</a>
											<a class="nav-item nav-link" id="nav-profile-tab2" data-bs-toggle="tab" href="#media">File</a>
											<a class="nav-item nav-link" id="nav-profile-tab3" data-bs-toggle="tab" href="#link">Link</a>
										</div>
									</nav>
									<div class="tab-content pt-0" id="nav-tabContent">
										<div class="tab-pane fade show active" id="info">
											<ul class="nav share-media-img mb-0">
												<li>
													<a href="../assets/img/media/media-01.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-01.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="../assets/img/media/media-02.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-02.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="../assets/img/media/media-03.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-03.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="../assets/img/media/media-04.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-04.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="../assets/img/media/media-05.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-05.jpg" alt="">
													</a>
												</li>
												<li class="blur-media">
													<a href="../assets/img/media/media-02.jpg" data-fancybox="gallery" class="fancybox">
														<img src="../assets/img/media/media-02.jpg" alt="">
													</a>
													<span>+10</span>
												</li>
											</ul>
										</div>
										<div class="tab-pane fade" id="Participants">
											<ul class="nav share-media-img mb-0">
												<li>
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-01.jpg" alt="img">
														<span><i class="bx bx-play-circle"></i></span>
													</a>
												</li>
												<li>
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-02.jpg" alt="img">
														<span><i class="bx bx-play-circle"></i></span>
													</a>
												</li>
												<li>
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-03.jpg" alt="img">
														<span><i class="bx bx-play-circle"></i></span>
													</a>
												</li>
												<li>
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-04.jpg" alt="img">
														<span><i class="bx bx-play-circle"></i></span>
													</a>
												</li>
												<li>
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-05.jpg" alt="img">
														<span><i class="bx bx-play-circle"></i></span>
													</a>
												</li>
												<li class="blur-media">
													<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox class="fancybox">
														<img src="../assets/img/media/media-03.jpg" alt="img">
													</a>
													<span>+10</span>
												</li>
											</ul>
										</div>
										<div class="tab-pane fade" id="media">
											<div class="media-file">
												<div class="media-doc-blk">
													<span><i class="bx bxs-file-doc"></i></span>
													<div class="document-detail">
														<h6>Landing_page_V1.doc</h6>
														<ul>
															<li>12 Mar 2023</li>
															<li>246.3 KB</li>
														</ul>
													</div>
												</div>
												<div class="media-download">
													<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
												</div>
											</div>
											<div class="media-file">
												<div class="media-doc-blk">
													<span><i class="bx bxs-file-pdf"></i></span>
													<div class="document-detail">
														<h6>Design Guideless.pdf</h6>
														<ul>
															<li>12 Mar 2023</li>
															<li>246.3 KB</li>
														</ul>
													</div>
												</div>
												<div class="media-download">
													<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
												</div>
											</div>
											<div class="media-file">
												<div class="media-doc-blk">
													<span><i class="bx bxs-file"></i></span>
													<div class="document-detail">
														<h6>sample site.txt</h6>
														<ul>
															<li>12 Mar 2023</li>
															<li>246.3 KB</li>
														</ul>
													</div>
												</div>
												<div class="media-download">
													<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="link">
											<div class="media-link-grp">
												<div class="link-img">
													<a href="javascript:void(0);"><img src="../assets/img/media/media-link-01.jpg" alt="Img"></a>
												</div>
												<div class="media-link-detail">
													<h6><a href="javascript:void(0);">Digital Marketing Guide</a></h6>
													<span><a href="javascript:void(0);">https://elements.envato.com/all-items/blog</a></span>
												</div>
											</div>
											<div class="media-link-grp mb-0">
												<div class="link-img">
													<a href="javascript:void(0);"><img src="../assets/img/media/media-link-02.jpg" alt="Img"></a>
												</div>
												<div class="media-link-detail">
													<h6><a href="javascript:void(0);">Blog Post</a></h6>
													<span><a href="javascript:void(0);">https://elements.envato.com/blog-post-TXQ5FB8</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="chat-message-grp">
								<ul>
									<li>
										<a href="javascript:void(0);" class="star-message-left">
											<div class="stared-group">
												<span class="star-message"> <i class="bx bx-star"></i></span>
												<h6>Starred Messages</h6>
											</div>
											<div class="count-group">
												<span>10</span>
												<i class="bx bx-chevron-right"></i>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mute-notification">
											<div class="stared-group">
												<span class="mute-message"> <i class="bx bx-microphone-off"></i></span>
												<h6>Mute Notifications</h6>
											</div>
											<div class="count-group">
												<i class="bx bx-chevron-right"></i>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#block-user">
											<div class="stared-group">
												<span class="block-message"> <i class="bx bx-x-circle"></i></span>
												<h6>Block User</h6>
											</div>
											<div class="count-group">
												<i class="bx bx-chevron-right"></i>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#report-user">
											<div class="stared-group">
												<span class="report-message"> <i class="bx bx-user-x"></i></span>
												<h6>Report User</h6>
											</div>
											<div class="count-group">
												<i class="bx bx-chevron-right"></i>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-user">
											<div class="stared-group">
												<span class="delete-message"> <i class="bx bx-trash-alt"></i></span>
												<h6>Delete Chat</h6>
											</div>
											<div class="count-group">
												<i class="bx bx-chevron-right"></i>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Right sidebar -->

			</div>
		</div>
		<!-- /Chat Page Wrapper -->
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
	<script src="../assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="../assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Datatable JS -->
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap5.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Summernote JS -->
	<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>

	<!-- Mobile Input -->
	<script src="../assets/plugins/intltelinput/js/intlTelInput.js"></script>

	<!-- Select2 JS -->
	<script src="../assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Swiper JS -->
	<script src="../assets/plugins/swiper/swiper.min.js"></script>

	<!-- FancyBox JS -->
	<script src="../assets/plugins/fancybox/jquery.fancybox.min.js"></script>

	<!-- Custom JS -->
	<script src="../assets/js/theme-script.js"></script>
	<script src="../assets/js/script.js"></script>


</body>

</html>