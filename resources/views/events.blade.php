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
			      	<div class="mslide-1 slide-1eve"></div>
			      	<div class="hero">
				        <hgroup>
				            <h1>We are creative</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href="#"><button class="btn btn-hero btn-lg bg-event-linegradent bd-brandeve" role="button">See all features</button></a>
			    	</div>
			    </div>
			    <div class="item mslides slides">
			      	<div class="mslide-2 slide-2eve"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are smart</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
				        <a href=""><button class="btn btn-hero btn-lg bg-event-linegradent bd-brandeve" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-3 slide-3eve"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-event-linegradent bd-brandeve" role="button">See all features</button></a>
			      	</div>
			    </div>
			    <div class="item mslides slides">
			      <div class="mslide-4 slide-4eve"></div>
			      	<div class="hero">        
				        <hgroup>
				            <h1>We are amazing</h1>        
				            <h3>Get start your next awesome project</h3>
				        </hgroup>
			        	<a href=""><button class="btn btn-hero btn-lg bg-event-linegradent bd-brandeve" role="button">See all features</button></a>
			      	</div>
			    </div>
			</div> 
		</div>
		<div class="container pindex mpindex">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-2"></div>
				<div class="col-md-10 col-sm-8 col-xs-8 bs  bg-white ">
					<form>
						<div class="row m-t-2p">
							<div class="col-md-2">
								<input type="Search" name="" id="input" class="form-control" value="" title="" placeholder="Search">
							</div>
							<div class="col-md-3">
								<a class="btn btn-success bg-white c-dark btn-select min-width-150">
					                <input type="hidden" class="btn-select-input" id="" name="" value="" />
					                <span class="btn-select-value">Select an Item</span>
					                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-event-linegradent c-white'></span>
					                <ul>
					                    <li class="selected">All States</li>
					                    <li>Lagos</li>
					                 </ul>
					            </a>
								<!-- <div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">All States</option>
										<option value="">Lagos</option>
										<option value=""></option>
									</select>
								</div> -->
							</div>
							<div class="col-md-3">
								<a class="btn btn-success bg-white c-dark btn-select min-width-150">
					                <input type="hidden" class="btn-select-input" id="" name="" value="" />
					                <span class="btn-select-value">Select an Item</span>
					                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-event-linegradent c-white'></span>
					                <ul>
					                    <li class="selected">Events/Categories</li>
					                    <li></li>
					                </ul>
					            </a>
								<!-- <div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">Events/Categories</option>
										<option value=""></option>
										<option value=""></option>
									</select>
								</div> -->
							</div>
							
							<div class="col-md-2">
								<a class="btn btn-success bg-white c-dark btn-select min-width-150">
					                <input type="hidden" class="btn-select-input" id="" name="" value="" />
					                <span class="btn-select-value">Select an Item</span>
					                <span class='btn-select-arrow glyphicon glyphicon-chevron-down bg-event-linegradent c-white'></span>
					                <ul>
					                    <li class="selected">Latest</li>
					                    <li>A-Z</li>
					                    <li>Price Highest first</li>
					                    <li>Price Lowest first</li>
					                </ul>
					            </a>
								<!-- <div class="form-group">
									<select name="" id="input" class="form-control" required="required">
										<option value="">Sort By</option>
										<option value="">Latest</option>
										<option value="">A-Z</option>
										<option value="">Price Highest first</option>
										<option value="">Price Lowest first</option>
									</select>
								</div> -->
							</div>
							<div class="col-md-2">
								<a href="#"><button type="button" class="btn bg-event-linegradent f-16 w-500 h-32 p-2 c-white bd-brandl bd-4 text-center width-100p">GO</button></a>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-1 col-sm-2 col-xs-2"></div>
			</div>
		</div>
		<div class="container">
			<div class="row m-t-10p">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(5).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(6).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(2).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">MBGN 2017</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">8:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Eko hotel and suits</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(7).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12"> Unilag Finest</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">7:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Multipurpose hall</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(5).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(6).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(2).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">MBGN 2017</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">8:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Eko hotel and suits</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(7).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12"> Unilag Finest</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">7:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Multipurpose hall</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(5).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(6).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">2baba life in concert</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">11:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Muson center, Onikan</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(2).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12">MBGN 2017</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">8:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Eko hotel and suits</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
		                	</div>
		                </div>
			        </div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="thumbnail bs">
						<img src="{{ asset('img/rectangle-20@2x(7).png') }}" class="" alt="ALT NAME">
		                <p class="c-greyish-brown m-t-10 f-12"> Unilag Finest</p>
		                <div class="row">
		                	<div class="col-md-7">
		                		<p><span class="f-10"><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="f-8 p-l-5">7:30pm</span></p>
		                		<p><span class="f-10"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="f-8 p-l-5">Multipurpose hall</span></p>
		                	</div>
		                	<div class="col-md-5">
		                		<a href="{{ route('event_preview') }}" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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