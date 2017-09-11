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
			      	<div class="mslide-1 slide-1sch"></div>
			      	<div class="hero">
				        <hgroup>
				            <h1>We are creative</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href="#"><button class="btn btn-hero btn-lg bg-school-linegradent bd-brandsch" role="button">See all features</button></a>
			    	</div>
			    </div>
			    <div class="item mslides slides">
			      	<div class="mslide-2 slide-2sch"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are smart</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href=""><button class="btn btn-hero btn-lg bg-school-linegradent bd-brandsch" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-3 slide-3sch"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-school-linegradent bd-brandsch" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-4 slide-4sch"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-school-linegradent bd-brandsch" role="button">See all features</button></a>
			      	</div>
			    </div>
			</div> 
		</div>
		<div class="container pindex mpindex mb-_106 b-_126">
			<div class="row">
				<!-- <div class="col-md-1 col-sm-1 col-xs-2"></div> -->
				<div class="col-md-12 col-sm-8 col-xs-8 bs  bg-white ">
					<form>
						<div class="row m-t-2p ">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-3">
										<input type="Search" name="" id="input" class="form-control bd-brandsch" value="" title="" placeholder="Search By School name">
									</div>
									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">All State</li>
							                    @forelse($states as $state)
							                    <li value="{{ $state->name }}">{{ $state->name }}</li>
							                    @empty
							                    <li>No States Yet</li>
							                    @endforelse
							                </ul>
							            </a>
										<!-- <div class="form-group">
											<select name="state" id="input" class="form-control" required>
												<option value="">All State</option>
												@forelse($states as $state)
												
												<option value="{{ $state->name }}">{{ $state->name }}</option>
												@empty
												<option>No States Yet</option>
												@endforelse
											</select>
										</div> -->
									</div>
									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">Local Govt Ares</li>
							                    <li>LAGOS STATE</li>
							                    <li>Option 3</li>
							                    <li>Option 4</li>
							                </ul>
							            </a>
										<!-- <div class="form-group m-b-0">
											<select name="" id="input" class="form-control" required="required">
												<option value="">Local Govt Ares</option>
												<option value="">LAGOS STATE</option>
												<option value=""></option>
											</select>
										</div> -->
									</div>
									
									
									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">School Ownership</li>
							                    <li>ALL</li>
							                    <li>PRIVATE</li>
							                    <li>PUBLIC/GOVT</li>
							                </ul>
							            </a>
										<!-- <div class="form-group">
											<select name="" id="input" class="form-control" required="required">
												<option value="">School Ownership</option>
												<option value="">ALL</option>
												<option value="">PRIVATE</option>
												<option value="">PUBLIC/GOVT</option>
											</select>
										</div> -->
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">Type of School</li>
							                    <li>MIXED</li>
							                    <li>BOYS ONLY</li>
							                    <li>GIRLS ONLY</li>
							                </ul>
							            </a>
										<!-- <div class="form-group m-b-0">
											<select name="" id="input" class="form-control" required="required">
												<option value="">Type of School</option>
												<option value="">MIXED</option>
												<option value="">BOYS ONLY</option>
												<option value="">GIRLS ONLY</option>
											</select>
										</div> -->
									</div>
									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">Day</li>
							                    <li>Boarding</li>
							                    <li>Option 3</li>
							                    <li>Option 4</li>
							                </ul>
							            </a>
										<!-- <div class="form-group">
											<select name="" id="input" class="form-control" required="required">
												<option value="">Day</option>
												<option value="">Boarding</option>
											</select>
										</div> -->
									</div>

									<div class="col-md-3">
										<a class="btn btn-danger bg-white c-dark btn-select h-32 bd-brandsch">
							                <input type="hidden" class="btn-select-input" id="" name="" value="" />
							                <span class="btn-select-value h-32 bd-brandsch">Select an Item</span>
							                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-school-linegradent c-white'></span>
							                <ul>
							                    <li class="selected">Choose</li>
							                    @forelse($school_types as $school_type)
							                    <li value="{{ $state->name }}">{{ $school_type->name }}</li>
							                    @empty
							                    <li>No type yet</li>
							                    @endforelse
							                </ul>
							            </a>
										<!-- <div class="form-group">
											<select name="state" id="input" class="form-control" required>
												<option value="">Choose</option>
												@forelse($school_types as $school_type)
												
												<option value="{{ $state->name }}">{{ $school_type->name }}</option>
												@empty
												<option>No type yet</option>
												@endforelse
											</select>
										</div> -->
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<a href="#"><button type="button" class="btn bg-school-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 text-center width-100p">GO</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="col-md-1 col-sm-2 col-xs-2"></div> -->
			</div>
		</div>
			
		<div class="container">
			<div class="row m-t-10p">
			@forelse($schools as $school)
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<a href="{{ route('school_page', [$school->id]) }}"><img src="{{ route('show_image', [$school->logo]) }}" class="width-320 mwidth-100 h-200 mh-auto" alt="ALT NAME" >
		                <p class="c-greyish-brown m-t-10 f-12">{{ ucfirst($school->name) }}</p>
		                <p class="c-greyish-brown m-t-10 f-12">{{ $school->location }}</p>
		                <p class="c-greyish-brown">
		                	<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
		                	<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
		                	<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
		                	<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
		                	<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
		                </p>
			        </div>
				</div>
			@empty
			<p>No schools yet</p>
			@endforelse
			</div>
			


			<div class="row">
				<div class="col-md-4 col-sm-3"></div>
				<div class="col-md-5 col-sm-7">
					<div class="pagination ">
					  	<a href="#" class="c-dark-sky-blue bg-white">Prev</a>
					  	<a href="#">1</a>
					  	<a href="#" class="active">2</a>
					  	<a href="#">3</a>
					  	<a href="#">4</a>
					  	<a href="#">5</a>
					  	<a href="#">6</a>
					  	<a href="#" class="c-dark-sky-blue bg-white">Next</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-2"></div>
			</div>
		</div>
	</section>

@endsection

