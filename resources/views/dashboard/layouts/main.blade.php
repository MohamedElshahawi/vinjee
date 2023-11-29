





<title>@yield('title')</title>


<!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/css/bootstrap.min.css')}}" />

		<!-- Icomoon Icons CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/fonts/icomoon/icomoon.css')}}" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/css/main.css')}}" />

		<!-- Daterange CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/daterange/daterange.css')}}" />


		<!--
			**********************
			**********************
			Optional CSS files
			**********************
			**********************
		-->

		<!-- jQueryUI CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/css/jquery-ui.css')}}" />

		<!-- Datepickers CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/css/datepicker.css')}}" />

		<!-- Morris CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/morris/morris.css')}}" />

		<!-- Circliful CSS -->
		<link rel="stylesheet" href="{{asset('assets/dashboard/vendor/circliful/circliful.css')}}" />

		<!-- Tags CSS -->
		<link href="{{asset('assets/dashboard/vendor/tags/tagmanager.css')}}" rel="stylesheet" />





        <!---------- Data Tables CSS--------------------->



        <!-- Data Tables CSS -->
        <link rel="stylesheet" href="{{asset('assets/dashboard/vendor/datatables/dataTables.bs4.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/dashboard/vendor/datatables/dataTables.bs4-custom.css')}}" />


		<!-- Bootstrap Select CSS -->
        <link rel="stylesheet" href="{{asset('assets/dashboard/vendor/bs-select/bs-select.css')}}" />


        @yield('css')
