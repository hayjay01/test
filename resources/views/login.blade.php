@include('layouts.partials.header')

	<section>
		<div class="row m-t-10p">
			<div class="col-md-4 col-sm-1 col-xs-1"></div>
			<div class="col-md-4 col-sm-10 col-xs-10">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<form action="{{ route('login') }}" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Email or Username</label>
								<input type="" name="email" class="form-control" value="" required="required">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password"  class="form-control" required="required" title="">
							</div>
							<div class="row m-t-20">
								<div class="col-md-4 col-xs-6">
									<div class="switch">
									    <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
									    <label for="cmn-toggle-4"></label>
									</div>
								</div>
								<div class="col-md-8 col-xs-6">
									<p>Remember Password?</p>
								</div>
							</div>
							<div class="form-group m-t-15">
								<button type="submit" class="btn bg-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 width-100p">Login</button>
							</div>
						</form>
						<p class="c-greyish-brown text-center f-10">Not registered yet? Please, <span class="c-fcpick"><a href="{{ route('signup') }}">Sign Up</a></span></p>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-1 col-xs-1"></div>
		</div>
	</section>

	<script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>

    <script src="{{ asset('libraries/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/registrationformvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/signup.js"></script>

    @include('layouts.partials.toaster')
</body>
</html>
