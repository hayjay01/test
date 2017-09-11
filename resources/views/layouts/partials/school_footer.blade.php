    <footer class="nb-footer bg-light-burgundy1 ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-6"></div>
				<div class="col-md-2">
					<p class="">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<a href=""><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color: #3B5999"></i></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true" style=" color: #1DA1F3"></i></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<i class="fa fa-google fa-2x" aria-hidden="true" style="color: #E0483A"></i>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<a href=""><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: #d10869;"></i></a>
						</div>
					</div>
						
					</p>
				</div>
			</div>
		</div>
	</footer>
</body>
	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery.bootstrap.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ asset('js/material-bootstrap-wizard.js') }}"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

	<script type="text/javascript">
	 $('.datepicker').datepicker({
    	 weekStart:1,
    	 color: 'red'
	 });
	</script>

	<script type="text/javascript">
		var school= $('.school');
			for (var i = 0; i < schools.length; i++) {
			  // Using $() to re-wrap the element.
			  $(schools[i]).text('a');
			}
			
	</script>

	@include('layouts.partials.toaster')
</html>