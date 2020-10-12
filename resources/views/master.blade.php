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
			<router-view></router-view>
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
