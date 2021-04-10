
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RESTONOVO</title>
	<!-- ================== GOOGLE FONTS ==================-->


	<script src="{{asset("dashboard/js/global/app.js")}}"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/vendor/bootstrap.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/vendor/metismenu/dist/metisMenu.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/vendor/switchery-npm/index.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css")}}">
	<script src="{{asset("dashboard/vendor/jquery/dist/jquery.min.js")}}"></script>

	<!-- ======================= LINE AWESOME ICONS ===========================-->

	<link rel="stylesheet" href="{{asset("dashboard/css/icons/line-awesome.min.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/css/icons/simple-line-icons.css")}}">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/icons/dripicons.min.css")}}">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/icons/material-design-iconic-font.min.css")}}">

	<link rel="stylesheet" href="{{asset('dashboard/vendor/dragula/dragula.min.css')}}">
	<!-- ======================= PAGE VENDOR STYLES ===========================-->
	<link rel="stylesheet" href="{{asset("dashboard/vendor/select2/select2.min.css")}}">

	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/common/main.bundle.css")}}">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/layouts/vertical/core/main.css")}}">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/layouts/vertical/menu-type/content.css")}}">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="{{asset("dashboard/css/layouts/vertical/themes/theme-i.css")}}">
	
	
	@laravelPWA

</head>
<style>
	#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}

}

.text-small {
  font-size: 12px;
  font-weight: bold;
}

a.disabled {
  pointer-events: none;
  cursor: default;
}

</style>

<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="">
		<!-- TOP TOOLBAR WRAPPER -->
		@include('dashboard.partials.navmobile')
		@include('dashboard.partials.nav')

		<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content-wrapper">
				<!-- MENU SIDEBAR WRAPPER -->
				@include('dashboard.partials.sidebar')
				<div class="content container-fluid">
					@include('dashboard.partials.session-flash-status')
				@yield('content')
				</div>
			
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
																		<aside class="sidebar sidebar-right">
																			<div class="sidebar-content">
																				<div class="tab-panel m-b-30" id="sidebar-tabs">
																				
																				</div>
																			</div>
																		</aside>
																		<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
	

															<!-- END CONTENT WRAPPER -->

															<!--<script type="application/javascript" src="{{asset("js/app.js")}}"></script>-->


															<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
															<script src="{{asset("dashboard/vendor/modernizr/modernizr.custom.js")}}/"></script>
															<script src="{{asset("dashboard/vendor/jquery/dist/jquery.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/js-storage/js.storage.js")}}"></script>
															<script src="{{asset("dashboard/vendor/js-cookie/src/js.cookie.js")}}"></script>
															<script src="{{asset("dashboard/vendor/pace/pace.js")}}"></script>
															<script src="{{asset("dashboard/vendor/metismenu/dist/metisMenu.js")}}"></script>
															<script src="{{asset("dashboard/vendor/switchery-npm/index.js")}}"></script>
															<script src="{{asset("dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js")}}"></script>
															<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
															<script src="{{asset("dashboard/vendor/countup.js/dist/countUp.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/chart.js/dist/Chart.bundle.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/flot/jquery.flot.js")}}"></script>
															<script src="{{asset("dashboard/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/flot/jquery.flot.resize.js")}}"></script>
															<script src="{{asset("dashboard/vendor/flot/jquery.flot.time.js")}}"></script>
															<script src="{{asset("dashboard/vendor/flot.curvedlines/curvedLines.js")}}"></script>
															<script src="{{asset("dashboard/vendor/datatables.net/js/jquery.dataTables.js")}}"></script>
															<script src="{{asset("dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js")}}"></script>
															<!-- ================== GLOBAL APP SCRIPTS ==================-->
															<script src="{{asset("dashboard/js/global/app.js")}}"></script>

															<!-- ================== PAGE LEVEL SCRIPTS ==================-->
															<script src="{{asset("dashboard/js/components/countUp-init.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/counter-group.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/recent-transactions.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/monthly-budget.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/users-chart.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/bounce-rate-chart.js")}}"></script>
															<script src="{{asset("dashboard/js/cards/session-duration-chart.js")}}"></script>
															<script src="{{asset("dashboard/vendor/sweetalert2/dist/sweetalert2.min.js")}}"></script>
															<script src="{{asset("dashboard/js/components/sweetalert2.js")}}"></script>
															<script src="{{asset("dashboard/js/components/switchery-init.js")}}"></script>
															<script src="{{asset("dashboard/vendor/dropzone/dropzone.js")}}"></script>
															<script src="{{asset("dashboard/js/components/dropzone-init.js")}}"></script>
															<script src="{{asset("dashboard/js/components/drag-and-drop-init.js")}}"></script>
															<script src="{{asset("dashboard/vendor/dragula/dragula.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/wNumb/wNumb.js")}}"></script>
															<script src="{{asset("dashboard/vendor/noUiSlider/nouislider.min.js")}}"></script>
															<script src="{{asset("dashboard/vendor/rateYo/jquery.rateyo.min.js")}}"></script>
															<script src="{{asset("dashboard/js/components/ecom-dashboard-slider-init.js")}}"></script>
															<script src="{{asset("dashboard/js/components/rateYo-init.js")}}"></script>
															<script src="{{asset("dashboard/vendor/select2/select2.min.js")}}"></script>
															<script src="{{asset("dashboard/js/components/select2-init.js")}}"></script>
														

														</body>

														</html>
