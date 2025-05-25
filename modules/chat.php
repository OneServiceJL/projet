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

		<?php include 'includes_2/navbar.php'; ?>

		<?php include 'includes_2/sidebar.php'; ?>

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