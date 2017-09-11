<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/mdb/css/bootstrap.min.css') }}">

		<!-- font awesome right here -->
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/font-awesome/css/font-awesome.min.css') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

		<!-- main css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />

	<style type="text/css">
		
		#img{
			position: absolute;
			left: 45%;
		}
	</style>
		
	</head>
	<body data="dev">
		<main>
			<section id="forms">
				<div class="container">
                    <div class="logo text-center">
                        <img src="{{ asset('img/logo/logo.svg') }}">

                    </div>

                    
                    
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
                            <h3 class="form_intro text-center" style="padding-bottom: 20px;">Administrator Login</h3>

                            <div style="position: relative; height: 80px;">
                    	<img src="{{ asset('admin/img/padlock.jpg')}}" id="img" width="50px">
                    </div>
                            
							<form method="post" id="bookingForm" action="{{ route('admin_login') }}">	

								{{ csrf_field() }}

                                <div class = "form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                	<label for="last_name">Email :</label>
	                                <div class="md-form">
	                                    <input type="email" class="input-alternate form-control" id="name" name="email" required>

	                                    @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
                                		@endif
	                                </div>
                                </div>

                                <div class = "form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                                <label for="email">Password :</label>
	                                <div class="md-form">
	                                    <input type="password" class="input-alternate form-control" id="email" name="password" required>

	                                    @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
                                		@endif
	                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		
		<script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
		<script src="{{ asset('js/toastr.min.js') }}"></script> 


		<script type="text/javascript">
        toastr.options.preventDuplicates = true;
        // toastr.success("ola");
        @if (session('middleware'))
          toastr.error("{{session('middleware')}}");
        @endif

        @if (session('welcome_back'))
          toastr.success("{{session('welcome_back')}}");
        @endif

        @if (session('welcome'))
          toastr.success("{{session('welcome')}}");
        @endif

        @if (session('delete_message'))
          toastr.error("{{session('delete_message')}}");
        @endif

        @if (session('success'))
          toastr.success("{{session('success')}}");
        @endif

        @if (session('info'))
          toastr.info("{{session('info')}}");
        @endif

        @if (session('success_image'))
          toastr.success("{{session('success_image')}}");
        @endif

        @if (session('delete'))
          toastr.error("{{session('error_image')}}");
        @endif

        @if ($errors->has('image_reference')) 
          toastr.error("{{$errors->first('image_reference')}}");
        @endif
      </script>


	</body>
</html>