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
<body class="">
	

	<section>
		<div class="row">
			<div class="col-md-1 m-l-0 border-right">
				<div class="m-t-100">
					<span class=""></span><span class="p-l-38"><i class="fa fa-home  f-20" aria-hidden="true"></i></span>
				</div>

				<div class="m-t-100">
					<span class="rand"></span><span class="p-l-30"><i class="fa fa-calendar c-dark-sky-blue f-20" aria-hidden="true"></i></span>
				</div>

				<div class="m-t-100">
					<span class=""></span><span class="p-l-38"><i class="fa fa-cog  f-20" aria-hidden="true"></i></span>
				</div>
				<br><br><br><br><br><br><br><br>
			</div>
			<div class="col-md-11">
				<nav class="navbar navbar-default h-60 mh-100p bg-white border-bottom m-t-10" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" name="search" class="f-14" placeholder="Search for an event">
								</div>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="m-t-10 m-r-30">
									<a href="#" type="button" class="bg-white f-14 w-500 p-t-5 p-b-5  c-dark-sky-blue bd-blue bd-4 text-center dis-inline-b" name="">Get a FORM CITY card</a>
								</li>
								<li class="m-t-10 m-r-40">
									<a href="#" type="button" class="bg-white f-14 w-500 p-t-5 p-b-5  c-dark-sky-blue bd-blue bd-4 text-center dis-inline-b" name="">Load your FORM CITY card</a>
								</li>
								<li>
									<a href="#"><span class="bg-bluef p-7 bd-4 c-white"><i class="fa fa-bell-o" aria-hidden="true"></i></span><sup class="t-_19e f-60p m-l_5"><span class="bg-red p-3 bd-50p c-white">3</span></sup></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle p-t-0 bg-trans" data-toggle="dropdown"><img src="{{ asset('img/tim_80x80.png') }}" class="img-circle h-40 width-40"><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">66                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			@yield('content')
			</div>
		</div>
	</section>

	<script type="text/javascript" src="{{ asset('libraries/bootstrap/js/jquery-3.1.1.min.js') }}"></script>

    <script src="libraries/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/registrationformvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/signup.js') }}"></script>

    @include('layouts.partials.toaster');
</body>
</html>