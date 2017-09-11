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

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />

</head>
<body class="">
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-default h-60 mh-100p m-b-0 bg-trans twidth-824" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="{{ asset('img/group-29@2x.png') }}">
						
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse p-t-10">
						<ul class="nav navbar-nav navbar-right f-1 ">
							<li class=""><a href="{{ url('/')}}" class="c-dark w-500" >HOME</a></li>
							<li class=""><a href="#" class="c-dark w-500">ABOUT US</a></li>
							<li class=""><a href="#" class="c-dark w-500" >ALL CATEGORIES</a></li>
							<li class=""><a href="{{ url('formcitycard')}}" class="c-dark w-500">GET A <span class="c-darkish-pink">FORM CITY</span> CARD</a></li>
							<li class=""><a href="{{ route('login') }}" class="c-dark w-500" >LOGIN</a></li>
							<li><a href="{{ route('signup') }}" class="w-500">SIGN UP</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
	</header>

	<section>
		<div class="">
			<div class="row m-t-5p ">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-8 col-sm-8">
					<div class="row bs bg-sign p-t-5p p-b-5p">
						<div class="col-md-1 col-sm-1"></div>
						<div class="col-md-11 col-sm-11">
							<div class="col-md-6 col-sm-6 m-t-5p mm-t-0 ">
								<p class="c-white text-center f-30">SIGN UP</p>
								<p class="c-white ">sign up to view our intresting lists of events.<br>You can either sign up using form or with<br>facebook<br><strong>Do not apply to Vendors</strong></p>
								<a href="" type="button" class="bg-blue w-500 no-bd c-white bd-4 width-80p mwidth-100 dis-inline-b  p-t-10 p-b-10">
									<span class="p-l-10">
										<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
									</span>
									<span class="f-16 p-l-20">
										Sign up with facebook
									</span>
								</a>
							</div>
							<div class="col-md-6 col-sm-6">
								<form action="{{ route('signup') }}" method="post">
									{{ csrf_field() }}
									<div class="form-group{{ $errors->has('full_name')? 'has-error':'' }}">
										<label class="c-white">Full name</label>
										<input type="" name="full_name" id="input" class="form-control" placeholder="Full name" value="{{ old('full_name')?old('full_name'): '' }}" required="">

										@if($errors->has('full_name'))
	                                    	<span>
	                                    		<strong>
	                                    			{{ $errors->first('full_name') }}
	                                    		</strong>
	                                    	</span>
	                                    @endif
									</div>

									<div class="form-group{{ $errors->has('password')? 'has-error':'' }}">
										<label class="c-white">Password</label>
										<input type="password" name="password" id="input" class="form-control" required>

										@if($errors->has('password'))
	                                    	<span>
	                                    		<strong>
	                                    			{{ $errors->first('password') }}
	                                    		</strong>
	                                    	</span>
	                                    @endif
									</div>

									<div  class="form-group{{ $errors->has('name')? 'has-error':'' }}">
										<label class="c-white">Confirm Password</label>
										<input type="password" name="password_confirmation" id="input" class="form-control" required>

										@if($errors->has('password_confirmation'))
	                                    	<span>
	                                    		<strong>
	                                    			{{ $errors->first('password_confirmation') }}
	                                    		</strong>
	                                    	</span>
	                                    @endif
									</div>

									<div  class="form-group{{ $errors->has('email')? 'has-error':'' }}">
										<label class="c-white">Email</label>
										<input type="email" name="email" id="input" class="form-control" value="{{ old('email')?old('email'): '' }}" required>

										@if($errors->has('email'))
	                                    	<span>
	                                    		<strong>
	                                    			{{ $errors->first('email') }}
	                                    		</strong>
	                                    	</span>
	                                    @endif
									</div>

									<div class="form-group">
	                                    <label class="c-white">Are you a Vendor?</label>
	                                    <select class="form-control" name="role">
	                                        <option value="User" selected>Select if you are a Vendor</option>
	                                        @forelse( $roles as $role)
	                                        <option value="{{ $role }}">{{ $role }}</option>
	                                        @empty
	                                        <option>Vendor cant apply now</option>
	                                        @endforelse
	                                    </select>
	                                </div>

									<div  class="form-group{{ $errors->has('phone')? 'has-error':'' }}">
										<label class="c-white">Phone number</label>
										<input type="tel" name="phone" id="input" class="form-control"  value="{{ old('phone')?old('phone'): '' }}" required><br>

										@if($errors->has('phone'))
	                                    	<span>
	                                    		<strong>
	                                    			{{ $errors->first('phone') }}
	                                    		</strong>
	                                    	</span>
	                                    @endif
									
										<button type="submit" class="btn bg-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 width-100p">Sign up</button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>
		</div>
	</section>



	<script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>

    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/registrationformvalidation.js"></script>
    <script type="text/javascript" src="assets/js/signup.js"></script>\

    @include('layouts.partials.toaster')

</body>
</html>