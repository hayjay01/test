@include('layouts.partials.school_header')

	<section>
		<div class="bg-light-burgundy">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 p-b-3p p-t-3p">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6"><img src="{{ asset('img/gsl-logo.png') }}"></div>
						</div>
					</div>
					<div class="col-md-9 m-t-8p">
						<div class="row">
							<div class="col-md-6">
								<p class="c-goldsc f-30 mf-22">GREENSPRINGS SCHOOL</p>
							</div>
							<div class="col-md-6"></div>
						</div>

						<div class="row m-t-2p">
							<div class="col-md-3"></div>
							<div class="col-md-4">
								<p class="schoolfont c-goldsc f-20">“ In love Serve One another “</p>
							</div>
							<div class="col-md-5"></div>
						</div>

						<div class="row m-t-30">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<a href="{{ route('school_page') }}" class="btn bg-dark-blue-green m-b-0 mwidth-100">Information</a>
							<a href="{{ route('school_form') }}" class="btn bg-white c-warm-grey m-b-0 mwidth-100">Get admission form</a>
							<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Write review</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container p-b-100 mp-b-0 mp-t-9">
		                <div class="card wizard-card" id="wizard">
			                <div class="row p-t-5p">
			                	<div class="col-md-1"></div>
			                	<div class="col-md-10">
			                		<div class="alert alert-success bg-dark-pastel-green">
									    <div class="container-fluid">
										    <div class="row">
										  	  	<div class="col-md-1 col-sm-1 col-xs-2">
										  	  	<div class="alert-icon">
													<i class="material-icons">check</i>
												 </div>
										  	  	</div>
										  	  	<div class="col-md-11 col-sm-11 col-xs-10">
										  	  	  <p>Your information has been saved . Good luck with your application </p>
										  	  	</div>
										  	</div>
										</div>
									</div>
			                	</div>
			                	<div class="col-md-1"></div>
							</div>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->
@include('layouts.partials.school_footer')
