<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Laravel Vue SPA Starter Kit</title>
		<meta name="keywords" content="Laravel Vue SPA Starter Kit" />
		<meta name="description" content="Laravel Vue SPA Starter Kit">
		<meta name="author" content="Iqbal Rasel">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />

		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/morris.js/morris.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

	</head>
	<body>
		<div id="app">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="{{ asset('assets/images/logo.png') }}" height="35" alt="logo" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q1" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>

					<span class="separator"></span>

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>

								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('assets/images/!sample-user.jpg') }}" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('assets/images/!sample-user.jpg') }}" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('assets/images/!sample-user.jpg') }}" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('assets/images/!sample-user.jpg') }}" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2016</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{ asset('assets/images/!logged-user.jpg') }}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{ asset('assets/images/!logged-user.jpg') }}" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<sidebar-component></sidebar-component>
				<!-- end: sidebar -->
				<router-view></router-view>

			</div>


		</section>
		</div>
		<script type="text/javascript"  src="{{ asset('js/app.js') }}"></script>
		<!-- Vendor -->
		<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-placeholder/jquery-placeholder.js') }} "></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js') }} "></script>
		<script src="{{ asset('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-appear/jquery-appear.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot.tooltip/flot.tooltip.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-sparkline/jquery-sparkline.js') }}"></script>
		<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
		<script src="{{ asset('assets/vendor/morris.js/morris.js') }}"></script>
		<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
		<script src="{{ asset('assets/vendor/snap.svg/snap.svg.js') }}"></script>
		<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>

		<!-- Examples -->
		<script src="{{ asset('assets/javascripts/dashboard/examples.dashboard.js') }}"></script>



	</body>
</html>