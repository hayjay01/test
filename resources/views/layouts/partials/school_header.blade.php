<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>FORMCITY</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" /> -->
	<link rel="icon" type="image/png" href="{{ asset('img/gsl-logo.png') }}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/material-bootstrap-wizard.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" />

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">


	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

	    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />
    
</head>

<body class="bg-white">

	<header>
		<nav class="navbar bg-white m-b-0" role="navigation">
			<div class="container-fluid">
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle bg-dark-blue-green" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		    		</button>
		    		<img src="{{ asset('img/group-29@2x.png') }}">
		    	</div>

		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    		<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="{{ route('index') }}" class="w-500 c-dark" >HOME</a></li>
						<li><a href="#" class="w-500 c-dark">ABOUT US</a></li>
						<li><a href="#" class="w-500 c-dark" >ALL CATEGORIES</a></li>
						<li><a href="#" class="w-500 c-dark">GET A <span class="c-darkish-pink">FORM CITY</span> CARD</a></li>
						@if(auth()->check())
						<li><a href="{{ route('logout') }}" class="w-500 c-dark">LOGOUT</a></li>
						@else
						<li><a href="{{ route('login') }}" class="w-500 c-dark">LOGIN</a></li>
						@endif
		        	</ul>
		    	</div>
			</div>
		</nav>
	</header>