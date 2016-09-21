<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | Badan Pengawasan Obat dan Makanan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Multipurpose Bootstrap Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/css/my-custom-styles.css') }}" rel="stylesheet" type="text/css">

	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/ico/repute144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/ico/repute114x114.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/ico/repute72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/ico/repute57x57.png') }}">
	<link rel="shortcut icon" href="{{ asset('frontend/ico/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		{{-- NAVIGATION --}}
		@include('frontend.layouts.includes.navigation')
		
		{{-- CONTENT --}}
		@yield('content')

		<!-- FOOTER -->
		@include('frontend.layouts.includes.footer')
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="{{ asset('frontend/js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins/slick/slick.min.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins/stellar/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js') }}"></script>
	<script src="{{ asset('frontend/js/repute-scripts.js') }}"></script>
	@yield('js')
</html>
