
@extends('layouts.partials.user_master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<p class="m-t-30 m-b-30">“Search for music concerts”</p>
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="thumbnail bs">
							<img src="{{ asset('img/rectangle-20@2x(15).png') }}" class="" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">AY Live</p>
			                <p class="c-greyish-brown m-t-10 f-12">Victoria Island, Lagos</p>
			            </div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="thumbnail bs">
							<img src="{{ asset('img/rectangle-20@2x(10).png') }}" class="" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12"> Basket Mouth Uncencored</p>
			                <p class="c-greyish-brown m-t-10 f-12">Onikan, Lagos</p>
			            </div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="thumbnail bs">
							<img src="{{ asset('img/rectangle-20@2x(8).png') }}" class="" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">It’s tee A again</p>
			                <p class="c-greyish-brown m-t-10 f-12">Ikeja, Lagos</p>
			            </div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="thumbnail bs">
							<img src="{{ asset('img/rectangle-20@2x(10).png') }}" class="" alt="ALT NAME">
			                <p class="c-greyish-brown m-t-10 f-12">Basket Mouth Uncencored</p>
			                <p class="c-greyish-brown m-t-10 f-12">manchester, UK</p>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-sm-4"></div>
					<div class="col-md-6 col-sm-4">
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
					<div class="col-md-3 col-sm-4"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

@endsection