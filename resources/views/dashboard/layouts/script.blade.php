		<!-- jQuery JS. -->
		<script src="{{asset('assets/dashboard/js/jquery.js')}}"></script>

		<!-- Info: jQuery UI is required for datepicker and date range or any jQuery UI related plugins -->
		<script src="{{asset('assets/dashboard/js/jquery-ui.min.js')}}"></script>

		<!-- Tether Js, then other JS. -->
		<script src="{{asset('assets/dashboard/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/unifyMenu/unifyMenu.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/moment.js')}}"></script>

		<!-- News Ticker JS -->
		<script src="{{asset('assets/dashboard/vendor/newsticker/newsTicker.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/newsticker/custom-newsTicker.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('assets/dashboard/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Daterange JS -->
		<script src="{{asset('assets/dashboard/vendor/daterange/daterange.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/daterange/custom-daterange.js')}}"></script>


		<!--
			**********************
			**********************
			Optional JS files - Plugns
			**********************
			**********************
		-->

		<!-- Morris Graphs -->
		<script src="{{asset('assets/dashboard/vendor/morris/raphael-min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/morris/morris.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/morris/custom/areaChart.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/morris/custom/line-chart.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/morris/custom/multibar.js')}}"></script>

		<!-- Circliful -->
		<script src="{{asset('assets/dashboard/vendor/circliful/circliful.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/circliful/circliful.custom.js')}}"></script>

		<!-- Peity JS -->
		<script src="{{asset('assets/dashboard/vendor/peity/peity.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/peity/custom-peity.js')}}"></script>

		<!-- Tag Manager -->
		<script src="{{asset('assets/dashboard/vendor/tags/tagmanager.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/tags/tagmanager-custom.js')}}"></script>

		<!-- Common JS -->
		<script src="{{asset('assets/dashboard/js/common.js')}}"></script>




                <!---------- Data Tables js--------------------->

		<!-- Data Tables JS -->
		<script src="{{asset('assets/dashboard/vendor/datatables/dataTables.min.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

		<!-- Custom Data tables JS -->

		<script src="{{asset('assets/dashboard/vendor/datatables/custom/custom-datatables.js')}}"></script>
		<script src="{{asset('assets/dashboard/vendor/datatables/custom/fixedHeader.js')}}"></script>

		<!-- Bootstrap Select JS -->
		<script src="{{asset('assets/dashboard/vendor/bs-select/bs-select.min.js')}}"></script>
        <!---------- Data Tables js--------------------->





		<!-- Common JS -->
		<script src="{{asset('assets/dashboard/js/common.js')}}"></script>

		<script>
			//Datepicker
			$(function() {
				$("#datepicker").datepicker();
			});
		</script>



@yield('scripts')
