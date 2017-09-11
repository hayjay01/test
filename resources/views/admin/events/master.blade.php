<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('materia/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('materia/assets/css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    	    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="{{ asset('materia/assets/materia/ssets/img/sidebar-1.jpg') }}">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<!-- <a href="http://www.creative-tim.com" class="simple-text">
					Creative Tim
				</a> -->
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li >
	                    <a href="{{ route('event_beauty_profile') }}">
	                        <i class="material-icons">person</i>
	                        <p>Update Details</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="{{ route('event_beauty') }}">
	                        <i class="material-icons">content_paste</i>
	                        <p> Event & Beauty Pagent</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="{{ route('add_event') }}">
	                        <i class="material-icons">note_add</i>
	                        <p>Add Event</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="addpg.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Add Pagent</p>
	                    </a>
	                </li>
	                <!-- <li>
	                    <a href="maps.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
					<li class="active-pro">
                        <a href="upgrade.html">
	                        <i class="material-icons">unarchive</i>
	                        <p>Upgrade to PRO</p>
	                    </a>
                    </li> -->
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Event</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
                            <form action="{{ route('logout') }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" style="border: 0px; margin-top: 10px">
                                        
                                       <i class="material-icons">person</i>
                                       
                                       <p class="hidden-lg hidden-md">Profile</p>
                                </button>
                            </form>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>
@yield('content')
</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{ asset('materia/assets/js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('materia/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('materia/assets/js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('materia/assets/js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('materia/assets/js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js') }}"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('materia/assets/js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('materia/assets/js/demo.js') }}"></script>

	@include('layouts.partials.toaster')

</html>
