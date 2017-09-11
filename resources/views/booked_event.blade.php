@extends('layouts.partials.user_master')

@section('content')

	<div class="container">
		<div class="row m-t-5p">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-10">
						<p>REEKADO BANKS</p>

						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-5">
								<div class="row">
									<div class="col-md-2 col-xs-2">
										<span><i class="fa fa-map-marker c-dark-sky-blue" aria-hidden="true"></i></span>
									</div>
									<div class="col-md-10">
										<p class="f-10">Onikan, Lagos</p>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-7">
								<p class="f-10">Age: 18+</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-5">
								<div class="row">
									<div class="col-md-2 col-xs-2">
										<span><i class="fa fa-calendar c-dark-sky-blue" aria-hidden="true"></i></span>
									</div>
									<div class="col-md-10">
										<p class="f-10">11th july, 2017. 4.30pm</p>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-7">
								<p class="f-10">Last entry: 21:30PM</p>
							</div>
						</div>

						<p class="c-dark-sky-blue">Ticket purchased<span class="p-l-10"><i class="fa fa-star-o" aria-hidden="true"></i></span></p>

						<div class="row m-t-30 mm-l-5">
							<p>EVENT DESCRIPTION</p>
							<p class="f-11">Basketmouths annual Valentines Comedy Tour is back in town for another year!;  Barons World Present Basketmouth Live at onikan muson center</p>
							<p class="p-t-5p f-11">Info: 02089531219 / 07436803502</p>
							<p class="p-t-5p f-11">Basketmouth + many other comedians with a musical act by Olamide!</p>
							<p class="f-11">Basketmouth + many other comedians with a musical act by Olamide! Over the past 9 years, Cokobar.com and Barons World have completely reshaped and revolutionised the way we spend our Valentine’s Day in the United Kingdom with Basketmouth’s seminal annual comedy event proving a massive hit among the afro urban community in Britain and selling out each and every time. As the name suggests, Basketmouth aims to unite and bring together, the very best in African Comedy all under one roof in the United Kingdom, for the first time ever to go along with the milestone is the choice of venue The SSE Arena, Wembley has been chosen to host 10,000 lovers a first for an African entert</p>
						</div>

						<div class="row m-t-20 m-b-20">
							<div class="col-md-2 col-sm-6 col-xs-3">
							<div class="switch">
							    <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round-flat1" type="checkbox">
							    <label for="cmn-toggle-3"></label>
							</div>
							</div>
							<div class="col-md-10">
								<p>Set reminder for this event</p>
							</div>
						</div>
					</div>
					

					<div class="col-md-4 col-sm-4">
						<p>EVENT FLYER</p>
						<img src="{{ asset('img/rectangle-26@2x(2).png') }}">
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

@endsection
			