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
							<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Information</button>
							<button class="btn bg-white c-warm-grey m-b-0 mwidth-100">Get admission form</button>
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
			                <div class="container-fluid">
			                	<div class="row">
			                		<div class="col-md-2"></div>
			                		<div class="col-md-4">
			                			<div class="radio p-t-25 p-b-10">
											<label p-l-10>
												<input type="radio" name="optionsRadios">
												Save and pay later
											</label>
										</div>
										<div class="radio p-t-10 p-b-10">
											<label p-l-10>
												<input type="radio" name="optionsRadios">
												Pay with debit card
											</label>
										</div>
										<div class="radio p-t-10 p-b-10">
											<label p-l-10>
												<input type="radio" name="optionsRadios">
												pay with FORM CITY card
											</label>
										</div>
										<div class="radio p-t-10 p-b-10">
											<label p-l-10>
												<input type="radio" name="optionsRadios">
												Pay at the bank
											</label>
										</div>
										<div class="radio p-t-10 p-b-25">
											<label p-l-10>
												<input type="radio" name="optionsRadios">
												Bank transfer
											</label>
										</div>
									</div>
			                		<div class="col-md-6"></div>

			                		<div class="row">
				                		<div class="col-md-8 col-xs-3"></div>
				                		<div class="col-md-4 col-xs-8">
				                			<button class="btn btn-primary bg-light-burgundy1" >Next</button>
				                		</div>
			                		</div>
			                	</div>
			                </div>
			            </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

@include('layouts.partials.school_footer')
