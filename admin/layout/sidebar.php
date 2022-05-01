	<!-- fixed-top-->
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
					</li>
					<li class="nav-item"> <a class="navbar-brand" href="../dashboard/dashboard.php"> <img class="brand-logo img-fluid" alt="admin logo" src="../../images/logo.png"> </a> </li>
					<li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-bs-toggle="collapse" data-bs-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
				</ul>
			</div>
			<div class="navbar-container content">
				<div class="collapse navbar-collapse" id="navbar-mobile">
					<ul class="nav navbar-nav me-auto float-start">
					</ul>
					<ul class="nav navbar-nav float-end nav-right align-items-center">
						<li class="dropdown dropdown-notification nav-item">
							<a class="nav-link nav-link-label" href="#" data-bs-toggle="dropdown" aria-expanded="true">
								<i class="fas fa-bell"></i> <span class="notif-count">5</span> </a>
							<ul class="dropdown-menu dropdown-menu-right notificationDiv">
								<li class="dropdown-menu-header text-center">
									<h6 class="dropdown-header m-0">Notifications</h6>
								</li>
								<li class="scrollable-container media-list ps-container ps-theme-dark">
									<a href="../profile/notifications.php">
										<div class="media d-flex">
											<div class="media-left flex-shrink-0 align-self-top"><i class="fas fa-bell"></i></div>
											<div class="media-body flex-grow-1">
												<h6 class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean euismod bibendum laoreet.</h6>
												<small>
													<time class="media-meta text-danger" datetime="2015-06-11T18:29:20+08:00">03 min ago</time>
												</small>
											</div>
										</div>
									</a>
									<a href="../profile/notifications.php">
										<div class="media d-flex">
											<div class="media-left flex-shrink-0 align-self-top"><i class="fas fa-bell"></i></div>
											<div class="media-body flex-grow-1">
												<h6 class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean euismod bibendum laoreet.</h6>
												<small>
													<time class="media-meta text-danger" datetime="2015-06-11T18:29:20+08:00">03 min ago</time>
												</small>
											</div>
										</div>
									</a>
									<a href="../profile/notifications.php">
										<div class="media d-flex">
											<div class="media-left flex-shrink-0 align-self-top"><i class="fas fa-bell"></i></div>
											<div class="media-body flex-grow-1">
												<h6 class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean euismod bibendum laoreet.</h6>
												<small>
													<time class="media-meta text-danger" datetime="2015-06-11T18:29:20+08:00">03 min ago</time>
												</small>
											</div>
										</div>
									</a>
									<a href="../profile/notifications.php">
										<div class="media d-flex">
											<div class="media-left flex-shrink-0 align-self-top"><i class="fas fa-bell"></i></div>
											<div class="media-body flex-grow-1">
												<h6 class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean euismod bibendum laoreet.</h6>
												<small>
													<time class="media-meta text-danger" datetime="2015-06-11T18:29:20+08:00">03 min ago</time>
												</small>
											</div>
										</div>
									</a>
								</li>
								<li class="dropdown-menu-footer">
									<a class="dropdown-item text-center text-danger" href="../profile/notifications.php">View All</a>
								</li>
							</ul>
						</li>
						<li class="dropdown dropdown-user nav-item">
							<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-bs-toggle="dropdown">
								<span class="avatar avatar-online"> <img src="../../images/avatar.png" alt="avatar"> </span>
								<div class="user-details">
									<div class="userName">Tom Felix</div>
									<div class="ltGray">Admin</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right profile-menu">
								<a class="dropdown-item" href="../profile/adminProfile.php"><i class="far fa-user-circle"></i>Profile Management </a>
								<a class="dropdown-item" href="#" type="button" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa fa-power-off"></i>Logout</a>
							</div>
						</li>
						<li class="nav-item mobile-menu d-none d-md-block mr-auto"><a class="nav-link nav-menu-main menu-toggle is-active" href="#"><i class="ft-menu font-large-1 text-danger"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!--menu start here-->
	<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item">
					<a class="nav-item-links" href="../dashboard/dashboard.php"><i class="fas fa-th-large"></i><span class="menu-title">Dashboard</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../user/user-management.php"><i class="fas fa-user-cog"></i><span class="menu-title">User Management</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../services/servicesListings.php"><i class="fas fa-percent"></i><span class="menu-title">Subscriptions/Plans/Services</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../onlineSession/onlineSession.php"><i class="fas fa-file-alt"></i><span class="menu-title">Online Sessions</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../inventoryManagement/inventoryManagement.php"><i class="fas fa-th-large"></i><span class="menu-title">Inventory Management</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../orderManagement/orderManagement.php"><i class="fas fa-box-open"></i><span class="menu-title">Order Management</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../mealPlan/mealPlanSubscription.php"><i class="fas fa-shopping-bag"></i><span class="menu-title">Meal Plan-Subscription </span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../payment/paymentLogs.php"><i class="fas fa-wallet"></i><span class="menu-title">Payment Logs</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../subscription/subscriptionListing.php"><i class="fas fa-bullseye"></i><span class="menu-title">Subscription Logs</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-item-links" href="../feedbacks/feedbacks.php"><i class="fas fa-question"></i><span class="menu-title">Feedbacks</span></a>
				</li>
			</ul>
		</div>
	</div>
	<!--menu end here-->