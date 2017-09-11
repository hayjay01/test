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

	    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />
    
</head>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-default h-60 mh-100p m-b-0 bg-white twidth-824" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle bg-black" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="{{ asset('img/group-29@2x.png') }}">
						
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse p-t-10">
						<ul class="nav navbar-nav navbar-right f-1 bg-white">
							<li><a href="{{ route('index') }}" class="w-500" >HOME</a></li>
							<li><a href="#" class="w-500">ABOUT US</a></li>
							<li><a href="#" class="w-500" >ALL CATEGORIES</a></li>
							<li><a href="#" class="w-500">GET A <span class="c-darkish-pink">FORM CITY</span> CARD</a></li>
							@if(!Auth::check())
							<li><a href="{{ route('login') }}" class="w-500">LOGIN</a></li>
							@else
							<li><a href="{{ route('logout') }}" class="w-500">LOGOUT</a></li>
							<li><a href="{{ route('signup') }}" class="w-500">SIGN UP</a></li>
							@endif
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
	</header>