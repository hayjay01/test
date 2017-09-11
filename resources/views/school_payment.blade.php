@include('layouts.partials.school_header')

	<section>
		<div class="bg-light-burgundy">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-5">
						<a href="{{ route('school_page', [$reg_info->first()->school->id]) }}" class="btn bg-dark-blue-green m-b-0 mwidth-100">Information</a>
						<a href="{{ route('school_form', [$reg_info->first()->school->logo]) }}" class="btn bg-white c-warm-grey m-b-0 mwidth-100">Get admission form</a>
						<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Write review</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="">
	    <!--   Big container   -->
	    <div class="container-fluid">
	        <div class="row m-t-5p m-b-5p">
		        <div class="col-md-4"></div>
		        <div class="col-md-4">
		        	<div class="row bs p-b-10p">
		        		<div class="col-md-1"></div>
		        		<div class="col-md-10">
		        			<div class="row m-t-20p m-b-15p">
		        				<div class="col-md-2">
		        					<img src="{{ route('show_image', [$reg_info->first()->school->logo]) }}" class="width-60">
		        					
		        				</div>
		        				<div class="col-md-10">
		        					<p class="c-goldsc text-center f-18 mf-22 p-t-15">{{ strtoupper($reg_info->first()->school->name) }}</p>
		        					<p class="schoolfont c-goldsc text-center f-18 p-t-10">“ {{ $reg_info->first()->school->motto }} “</p>
		        					<div class="row p-t-10">
		                				<div class="col-md-6">
		                					<p>Name:</p>
		                				</div>
		                				<div class="col-md-6">
		                					<p>{{ $reg_info->first()->fullname() }}</p>
		                				</div>
		                			</div>
		                			<div class="row">
		                				<div class="col-md-6">
		                					<p>Guardian:</p>
		                				</div>
		                				<div class="col-md-6">
		                					<p>{{ $reg_info->first()->guardian_name }}</p>
		                				</div>
		                			</div>

		                			<div class="row">
		                				<div class="col-md-6">
		                					<p>Class:</p>
		                				</div>
		                				<div class="col-md-6">
		                					<p>{{ $reg_info->first()->grade->name }}</p>
		                				</div>
		                			</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-2">
		        					<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes">
										</label>
									</div>
		        				</div>
		        				<div class="col-md-10">
		        					<p class="f-11">
		        						Do you want to recieve sms on this application?<span class="c-darkish-pink"><a href="">NOTE:</a></span> this fee will be deducted  from your wallet with respect to existing balance and be charge <del>N</del>50 for sms
		        					</p>
		        				</div>
		        			</div>

		        			<div class="row">
		        				<div class="col-md-3"></div>
		        				<div class="col-md-4">
		        					<p>Amount:</p>
		        				</div>
		        				<div class="col-md-4">
		        					<p>{{ number_format($reg_info->first()->grade->school->first()->pivot->amount, 2) }}</p>
		        				</div>
		        				<div class="col-md-"></div>
		        			</div>

		        			<div class="row">
		                		<div class="col-md-4 col-xs1"></div>
		                		<div class="col-md-4 col-xs-2 text-center">
		                			<a href="{{ route('payment_type') }}" class="btn btn-primary bg-light-burgundy1" >Proceed</a>
		                		</div>
		                		<div class="col-md-4"></div>
		                	</div>
		        		</div>
		        		<div class="col-md-1"></div>
		        	</div>
		        </div>
		        <div class="col-md-4"></div>
	        </div> <!-- row -->
	    </div> <!--  big container -->
@include('layouts.partials.school_footer')