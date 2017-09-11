@extends('layouts.master')

@section('content')
	<section>
		<div class="container">
			<div class="row m-t-5p">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-10">
							<p>REEKADO BANKS</p>

							<div class="row">
								<div class="col-md-8 col-sm-5 col-xs-5">
									<div class="row">
										<div class="col-md-2 col-xs-2">
											<span><i class="fa fa-map-marker c-puple" aria-hidden="true"></i></span>
										</div>
										<div class="col-md-10">
											<p class="f-10">Onikan, Lagos</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-7 col-xs-7">
									<p class="f-10">Age: 18+</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8 col-sm-5 col-xs-5">
									<div class="row">
										<div class="col-md-2 col-xs-2">
											<span><i class="fa fa-calendar c-puple" aria-hidden="true"></i></span>
										</div>
										<div class="col-md-10">
											<p class="f-10">11th july, 2017. 4.30pm</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-7 col-xs-7">
									<p class="f-10">Last entry: 21:30PM</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-11 col-sm-8 col-xs-10">
									<div class="row p-l-2p mp-l-0 m-t-30 mm-l-5">
										<p>EVENT DESCRIPTION</p>
										<p class="f-11">Basketmouths annual Valentines Comedy Tour is back in town for another year!;  Barons World Present Basketmouth Live at onikan muson center</p>
										<p class="p-t-5p f-11">Info: 02089531219 / 07436803502</p>
										<p class="p-t-5p f-11">Basketmouth + many other comedians with a musical act by Olamide!</p>
										<p class="f-11">Basketmouth + many other comedians with a musical act by Olamide! Over the past 9 years, Cokobar.com and Barons World have completely reshaped and revolutionised the way we spend our Valentine’s Day in the United Kingdom with Basketmouth’s seminal annual comedy event proving a massive hit among the afro urban community in Britain and selling out each and every time. As the name suggests, Basketmouth aims to unite and bring together, the very best in African Comedy all under one roof in the United Kingdom, for the first time ever to go along with the milestone is the choice of venue The SSE Arena, Wembley has been chosen to host 10,000 lovers a first for an African entert</p>
									</div>
								</div>
						</div>


							<div class="row">
								<div class="col-md-3 m-t-30">
									<p class="p-l-2p"> Amount: 2000</p>
								</div>
								<div class="col-md-9"></div>
							</div>

							<div class="row">
								<div class="col-md-3 p-l-0 m-t-30">
									<a type="button" class="bg-linegradent1 f-10  p-2 c-white bd-brandl bd-4 text-center width-100p m-l-13p dis-inline-b" href="{{ route('event_confirm') }}">Buy Ticket</a>
								</div>
								<div class="col-md-9"></div>
							</div>	

						</div>
						<div class="col-md-4 col-sm-4">
							<!-- <p>EVENT FLYER</p> -->
							<img src="{{ asset('img/rectangle-26@2x.png') }}">
						</div>
					</div>

					

					<div class="row m-t-30">
						<p class="mm-l-10 p-l-2p mp-l-0">SIMILAR EVENTS</p>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
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
				                		<a href="#" type="button" class="bg-linegradent1 f-10  p-5 m-t-30 c-white bd-brandl bd-4 text-center width-100p  dis-inline-b" name="">Buy Ticket</a>
				                	</div>
				                </div>
					        </div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</section>

	@endsection