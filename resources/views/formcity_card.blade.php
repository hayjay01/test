@extends('layouts.master')

@section('content')

	<section>
		<div class="container m-t-10p">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col-md-10 col-sm-10 col-xs-10">
					<div class="row">
						<div class="col-md-5 bd-brandb">
							<div class="row p-t-10p">
								<div class="col-md-6 col-sm-10 col-xs-9">
									<p>Formcity Card</p>
								</div>
								<div class="col-md-4"></div>
								<div class="col-md-2 col-sm-2 col-xs-1">
									<p><a href=""><span><i class="fa fa-plus" aria-hidden="true"></i></span></a></p>
								</div>
								<div class="p-t-30p p-b-30p">
									<img src="{{ asset('img/group-6@2x.png') }}" class="width-88p m-l-4p m-t-10p m-b-5p">
								</div>
							</div>
						</div>
						<div class="col-md-7 bd-brandb">
							<div class="row p-t-10p">
								<div class="col-md-4">
									<p class=" f-18">Current Balance </p>
								</div>
								<div class="col-md-5"></div>
								<div class="col-md-3">
									<p class="c-puple f-18">₦ 120,000</p>
								</div>
							</div>
							<hr>
							<div class="m-t-10p m-b-94">
								<p class="c-charcoal-grey m-b-0 f-16 m-t-5p">Reekado Banks</p>
								<div class="row">
									<div class="col-md-4">
										<p class=" f-11 m-b-0"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5">Onikan, Lagos</span></p>
										<p class=" f-11 m-b-0"><span><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="p-l-5">11th july, 2017. 4.30pm</span></p>
									</div>
									<div class="col-md-6"></div>
									<div class="col-md-2">
										<p class="c-puple f-11">₦ 5,000</p>
									</div>
								</div>


								<p class="c-charcoal-grey m-b-0 f-16 m-t-5p">Lord of the Ribs</p>
								<div class="row">
									<div class="col-md-4">
										<p class=" f-11 m-b-0"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5">Onikan, Lagos</span></p>
										<p class=" f-11 m-b-0"><span><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="p-l-5">11th july, 2017. 4.30pm</span></p>
									</div>
									<div class="col-md-6"></div>
									<div class="col-md-2">
										<p class="c-puple f-11">₦ 12,000</p>
									</div>
								</div>


								<p class="c-charcoal-grey m-b-0 f-16 m-t-5p">Andela meetup</p>
								<div class="row">
									<div class="col-md-4">
										<p class=" f-11 m-b-0"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5">Onikan, Lagos</span></p>
										<p class=" f-11 m-b-0"><span><i class="fa fa-calendar" aria-hidden="true"></i></span><span class="p-l-5">11th july, 2017. 4.30pm</span></p>
									</div>
									<div class="col-md-6"></div>
									<div class="col-md-2">
										<p class="c-puple f-11">₦ 0.00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>
	</section>

@endsection