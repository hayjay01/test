@extends('layouts.master')

@section('content')
	<section>
		<div class="carousel mfade-carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		  	<!-- Overlay -->
		    <!-- <div class="overlay"></div> -->

		    <!-- Indicators -->
		    <ol class="carousel-indicators mb-214">
		    	<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#bs-carousel" data-slide-to="1"></li>
		    	<li data-target="#bs-carousel" data-slide-to="2"></li>
		    	<li data-target="#bs-carousel" data-slide-to="3"></li>
		    </ol>
		  
		  	<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item mslides slides active">
			      	<div class="mslide-1 slide-1"></div>
			      	<div class="hero">
				        <hgroup>
				            <h1>We are creative</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href="#"><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
			    	</div>
			    </div>
			    <div class="item mslides slides">
			      	<div class="mslide-2 slide-2"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are smart</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href=""><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-3 slide-3"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-4 slide-4"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
			      	</div>
			    </div>
			</div> 
		</div>
		<div class="container pindex mpindex">
			<div class="row">
				<div class="col-md-2 col-sm-1 col-xs-2"></div>
				<div class="col-md-8 col-sm-8 col-xs-8 bs  bg-white ">
					<form>
						<div class="row m-t-2p ">
							<div class="col-md-3 col-sm-4">
								<div class="form-group m-b-0">
									<input type="search" name="" id="input" class="form-control" value="" placeholder="Search from our categories">
								</div>
							</div>
							<div class="col-md-3 col-sm-2 mm-t-10">
								<div class="form-group">
									<select name="state" id="input" class="form-control" required>
										<option value="">All State</option>
										@forelse($states as $state)
										
										<option value="{{ $state->name }}">{{ $state->name }}</option>
										@empty
										<option>No States Yet</option>
										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">August</option>
										<option value="">September</option>
										<option value="">October</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<a href="#" type="button" class="bg-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 text-center width-100p dis-inline-b" name="">SEARCH</a>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
			</div>
		</div>
		
	</section>

	<section>
		<div class="m-t-5p">
			<p class="text-center c-charcoal-grey"> CATEGORIES</p>
		</div>

		<div class="container m-t-3p">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<a href="{{ route('schools') }}"><img src="{{ asset('img/rectangle-20@2x.png') }}" class="width-320 mwidth-100 h-200 mh-auto" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">SCHOOL ADMISSIONS</p>
			            </a>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<a href="{{ route('seminars') }}"><img src="{{ asset('img/rectangle-20@2x(17).png') }}" class="width-320 mwidth-100 h-200 mh-auto" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">SEMINARS  AND CONFERENCES</p>
			            </a>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<a href="{{ route('reality_shows') }}"><img src="{{ asset('img/rectangle-20@2x(15).png') }}" class="width-320 mwidth-100 h-200 mh-auto" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">EVENTS </p>
			            </a>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<a href="{{ route('events') }}"><img src="{{ asset('img/rectangle-20@2x(2).png') }}" class="width-320 mwidth-100 h-200 mh-auto" alt="ALT NAME">
							<p class="c-greyish-brown m-t-10 f-12">REALITY SHOWS & BEAUTY-PAGEANTS</p>
			            </a>
		            </div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="m-t-5p">
			<p class="text-center c-charcoal-grey">HOW IT WORKS</p>
		</div>

		<div class="bg-fc m-t-5p">
			<div class="row mm-l-10">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-8 col-sm-8 ">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/group-5@2x.png') }}">
									<div class="bd-brand2 h-107 width-1 m-l-24 m-t-5">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/select-event@2x.png') }}">
								</div>
								<div class="col-md-8 col-sm-8">
									<p class="c-charcoal-grey f-14">SELECT  CATEGORY</p>
									<p class="c-charcoal-grey f-12">Select from any of our unique event CATEGORIES; School admissions, Events, Seminars & Beauty Pageants</p>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>

			<div class="row mm-l-10 m-t-10">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-8 col-sm-8 ">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/group-5-copy@2x.png') }}">
									<div class="bd-brand2 h-107 width-1 m-l-24 m-t-5">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/event-icon@2x.png') }}">
								</div>
								<div class="col-md-8 col-sm-8">
									<p class="c-charcoal-grey f-14">VIEW AND SELECT EVENT</p>
									<p class="c-charcoal-grey f-12">View and select from the amazing options under your selected CATEGORY. You can also streamline your options with our interactive filter tool. With this, you can go through our exciting list of events as quickly as possible.</p>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>

			<div class="row mm-l-10 m-t-10">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-8 col-sm-8 ">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/group-5-copy-2@2x.png') }}">
									<div class="bd-brand2 h-107 width-1 m-l-24 m-t-5">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/group-11@2x.png') }}">
								</div>
								<div class="col-md-8 col-sm-8">
									<p class="c-charcoal-grey f-14">FILL AND SUBMIT FORM</p>
									<p class="c-charcoal-grey f-12">Fill the short form with accurate details and submit once done. Also, you can either choose to "save and continue later" or proceed to "Submit"</p>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>

			<div class="row mm-l-10 m-t-10">
				<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-8 col-sm-8 ">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/group-5-copy-3@2x.png') }}">
									<div class="mbd-brand2 mh-107 mwidth-1 m-l-24 m-t-5">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<img src="{{ asset('img/card-payment@2x.png') }}">
								</div>
								<div class="col-md-8 col-sm-8">
									<p class="c-charcoal-grey f-14">MAKE PAYMENT</p>
									<p class="c-charcoal-grey f-12">PAY with a DEBITCARD/CREDITCARD/BANK DEPOSIT/BANKTRANSFER or with your FORMCITY CARD</p>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2"></div>
			</div>
		</div>
	</section>

@endsection
	
	