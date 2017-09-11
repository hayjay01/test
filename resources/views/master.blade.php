<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMCITY</title>
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap/css/bootstrap.min.css') }}">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
	


	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-fc">

	@yield('content')

	<script type="text/javascript" src="{{ asset('libraries/bootstrap/js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('libraries/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/registrationformvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/signup.js') }}"></script>
</body>
</html>