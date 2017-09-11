@extends('layouts.partials.user_master')

@section('content')

				<div class="container">
					<div class="row m-t-5p">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-3 bs p-10">
									<div class="row">
										<div class="col-md-4 col-sm-9 col-xs-6">
											<img src="{{ asset('img/rectangle-20@2x(10).png') }}" class="img-circle h-50 width-50">
										</div>
										<div class="col-md-8 col-sm-3 col-xs-6">
											<p>Basket Uncensored</p>
											<p class="c-dark-sky-blue"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5 f-12
											">Onikan, Lagos</span></p>
											<p class="f-12">Comedy</p>
										</div>
									</div>
									<div class="row m-l-5 m-r-5 bd-brandb">
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Date</p>
											<p class="f-12 c-greyish-brown">03 | 06 | 17</p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Fee</p>
											<p class="f-12 c-greyish-brown">₦ 5,000</p>
										</div>

										<div class="row">
											<div class="col-md-8 col-sm-10 col-xs-9 p-b-10">
												<p class="p-l-15 f-10 p-t-10">Set reminder</p>
												<div class=" p-l-10">
													<div class="switch">
													    <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round-flat1" type="checkbox">
													    <label for="cmn-toggle-1"></label>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-2 col-xs-3 p-t-40">
												<img src="{{ asset('img/ic-notifications-active@2x.png') }}">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1" style="width: 3.333333%;"></div>
								<div class="col-md-3 bs p-10">
									<div class="row">
										<div class="col-md-4 col-sm-9 col-xs-6">
											<img src="{{ asset('img/rectangle-20@2x(15).png') }}" class="img-circle h-50 width-50">
										</div>
										<div class="col-md-8 col-sm-3 col-xs-6">
											<p>Basket Uncensored</p>
											<p class="c-dark-sky-blue"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5 f-12
											">Onikan, Lagos</span></p>
											<p class="f-12">Comedy</p>
										</div>
									</div>
									<div class="row m-l-5 m-r-5 bd-brandb">
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Date</p>
											<p class="f-12 c-greyish-brown">03 | 06 | 17</p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Fee</p>
											<p class="f-12 c-greyish-brown">₦ 7,000</p>
										</div>

										<div class="row">
											<div class="col-md-8 col-sm-10 col-xs-9 p-b-10">
												<p class="p-l-15 f-10 p-t-10">Set reminder</p>
												<div class=" p-l-10">
													<div class="switch">
													    <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round-flat1" type="checkbox">
													    <label for="cmn-toggle-2"></label>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-2 col-xs-3 p-t-40">
												<img src="{{ asset('img/ic-notifications-active@2x.png') }}">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1" style="width: 3.333333%;"></div>
								<div class="col-md-3 bs p-10">
									<div class="row">
										<div class="col-md-4 col-sm-9 col-xs-6">
											<img src="{{ asset('img/rectangle-20@2x(18).png') }}" class="img-circle h-50 width-50">
										</div>
										<div class="col-md-8 col-sm-3 col-xs-6">
											<p>Basket Uncensored</p>
											<p class="c-dark-sky-blue"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="p-l-5 f-12
											">Onikan, Lagos</span></p>
											<p class="f-12">Comedy</p>
										</div>
									</div>
									<div class="row m-l-5 m-r-5 bd-brandb">
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Date</p>
											<p class="f-12 c-greyish-brown">03 | 06 | 17</p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 bd-brandb">
											<p class="f-10 c-greyish-brown">Fee</p>
											<p class="f-12 c-greyish-brown">Free</p>
										</div>

										<div class="row">
											<div class="col-md-8 col-sm-10 col-xs-9 p-b-10">
												<p class="p-l-15 f-10 p-t-10">Set reminder</p>
												<div class=" p-l-10">
													<div class="switch">
													    <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round-flat1" type="checkbox">
													    <label for="cmn-toggle-3"></label>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-2 col-xs-3 p-t-40">
												<img src="{{ asset('img/ic-notifications-active@2x.png') }}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
@endsection
			