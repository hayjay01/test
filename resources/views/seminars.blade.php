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
			      	<div class="mslide-1 slide-1sem"></div>
			      	<div class="hero">
				        <hgroup>
				            <h1>We are creative</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href="#"><button class="btn btn-hero btn-lg bg-seminal-linegradent bd-brandsem" role="button">See all features</button></a>
			    	</div>
			    </div>
			    <div class="item mslides slides">
			      	<div class="mslide-2 slide-2sem"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are smart</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href=""><button class="btn btn-hero btn-lg bg-seminal-linegradent bd-brandsem" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-3 slide-3sem"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-seminal-linegradent bd-brandsem" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-4 slide-4sem"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-seminal-linegradent bd-brandsem" role="button">See all features</button></a>
			      	</div>
			    </div>
			</div> 
		</div>
		<div class="container pindex mpindex">
			<div class="row">
				<div class="col-md-2 col-sm-1 col-xs-2"></div>
				<div class="col-md-8 col-sm-8 col-xs-8 bs  bg-white ">
					<form>
						<div class="row m-t-2p">
							<div class="col-md-3">
								<a class="btn btn-primary bg-white c-dark btn-select ">
					                <input type="hidden" class="btn-select-input bd-4" id="" name="" value="" />
					                <span class="btn-select-value ">Select an Item</span>
					                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-seminal-linegradent c-white'></span>
					                <ul>
					                    <li class="selected ">ALL STATES</li>
					                    <li>Lagos State</li>
					                </ul>
					            </a>
								<!-- <div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">ALL STATES</option>
										<option value="">Lagos State</option>
										<option value=""></option>
									</select>
								</div> -->
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="Search" name="" id="input" class="form-control" value="" title="" placeholder="Search By Name">
								</div>
							</div>
							<div class="col-md-3">

								<a class="btn btn-primary bg-white c-dark btn-select ">
					                <input type="hidden" class="btn-select-input bd-4" id="" name="" value="" />
					                <span class="btn-select-value ">Select an Item</span>
					                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-seminal-linegradent c-white'></span>
					                <ul>
					                    <li class="selected ">LATEST</li>
					                    <li>Price (Highest to Lowest)</li>
					                    <li>Price (Lowest to Highest)</li>
					                    <li>A-Z</li>
					                </ul>
					            </a>
								<!-- <div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">SORT BY</option>
										<option value="">LATEST</option>
										<option value="">Price (Highest to Lowest)</option>
										<option value="">Price (Lowest to Highest)</option>
										<option value="">A-Z</option>
									</select>
								</div> -->
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<a href="#"><button type="button" class="btn bg-seminal-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 text-center width-100p">GO</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-2"></div>
			</div>
		</div>
		<div class="container">	
			<div class="row m-t-10p">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Techpoint Inspired</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(17).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba for Tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Young people in tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Lekki</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(18).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Andela meetup</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Ilupeju, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Techpoint Inspired</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(17).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba for Tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Young people in tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Lekki</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(18).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Andela meetup</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Ilupeju, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Techpoint Inspired</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(17).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba for Tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Yaba, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(16).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Young people in tech</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Lekki</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(18).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Andela meetup</p>
		                <p class="c-greyish-brown m-t-10 f-12 p-l-10">Ilupeju, Lagos</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p class="p-l-10">₦ 12,000</p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-seminal-linegradent f-12  p-5  c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Apply</a>
		                	</div>
		                </div>
		            </div>
				</div>
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