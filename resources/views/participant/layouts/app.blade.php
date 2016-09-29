<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend-new/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('frontend-new/css/style.css') }}"> <!-- Resource style -->
	<script src="{{ asset('frontend-new/js/modernizr.js') }}"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="{{ asset('frontend-new/css/component.css') }}"> <!-- CSS reset -->

	<link rel="shortcut icon" href="{{ asset('favicon/favicon.png') }}">
	<title>Best Customer Service Awards 2016 | Telkomsel</title>
</head>
<body>
	{{-- main --}}
	<main>
		{{-- notification --}}
		@if (session()->has('flash_notification.message'))
		<div class="container">
			<div class="alert alert-{{ session()->get('flash_notification.level') }}">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ session()->get('flash_notification.message') }}
			</div>
		</div>
		@endif
		@yield('content')
	</main>	
	{{-- includes --}}
	@include('participant.layouts.includes.navigation')
<!-- jQuery -->
<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend-new/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('frontend-new/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>
