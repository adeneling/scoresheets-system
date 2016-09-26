<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('frontend-new/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('frontend-new/css/style.css') }}"> <!-- Resource style -->
	<script src="{{ asset('frontend-new/js/modernizr.js') }}"></script> <!-- Modernizr -->

	
	<title>Best Customer Service Awards 2016 | Telkomsel</title>
</head>
<body>
	{{-- main --}}
	<main>
		<h1>@yield('title')</h1>
		@yield('content')
	</main>	
	{{-- includes --}}
	@include('participant.layouts.includes.navigation')

<script src="{{ asset('frontend-new/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('frontend-new/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>
