<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/elite-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 21:11:46 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Elite Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap 4 Admin Dashboard, Bootstrap 4 Admin Template, Bootstrap 4 Admin Template, Sales, Admin Dashboard, Traffic, Tasks, Revenue, Orders, Invoices, Projects, Invoices, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />


        @include('dashboard.layouts.main')

	</head>
	<body>

		<!-- Loading start -->
		<div id="loading-wrapper">
			<div id="loader"></div>
		</div>
		<!-- Loading end -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">

			<!-- BEGIN .app-heading -->
            @include('dashboard/layouts/main-header')
			<!-- END: .app-heading -->

			<!-- BEGIN .app-container -->
			<div class="app-container">

				<!-- BEGIN .app-side -->
                @include('dashboard/layouts/main-sidebar')
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">

					<!-- BEGIN .main-heading -->

					<!-- END: .main-heading -->
                    @include('dashboard/layouts/sec-header')

					<!-- BEGIN .main-content -->
					<div class="main-content">
                    @yield('content')
						<!-- Row start -->
						{{-- <div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="plain-widget">
									<div class="growth bg-info">12%</div>
									<h3>$9,527</h3>
									<p>Sales</p>
									<div class="progress sm no-shadow">
										<div class="progress-bar bg-info" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="plain-widget">
									<div class="growth bg-orange">15%</div>
									<h3>$4,365</h3>
									<p>Expenses</p>
									<div class="progress sm no-shadow">
										<div class="progress-bar bg-orange" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								<div class="plain-widget">
									<div class="growth bg-orange">21%</div>
									<h3>$5,579</h3>
									<p>Profits</p>
									<div class="progress sm no-shadow">
										<div class="progress-bar bg-orange" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div> --}}
						<!-- Row end -->


						<!-- Row end -->

					</div>
					<!-- END: .main-content -->

					<!-- BEGIN .main-footer -->
                    @include('dashboard/layouts/footer')
					<!-- END: .main-footer -->

				</div>
				<!-- END: .app-main -->

			</div>
			<!-- END: .app-container -->

		</div>
		<!-- END: .app-wrap -->

        @include('dashboard.layouts.script')

		<!--
			**********************
			**********************
			Common JS files
			**********************
			**********************
		-->


	</body>

<!-- Mirrored from bootstrap.gallery/elite-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 21:13:38 GMT -->
</html>
