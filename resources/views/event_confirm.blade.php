@extends('layouts.master')

@section('content')

	<section>
		<div class="container">
			<div class="row m-t-5p">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<div class="row">
						<div class="col-md-5 bd-brandb p-t-44 p-b-44">
							<p>REEKADO BANKS</p>

							<div class="row">
								<div class="col-md-7 col-sm-7 col-xs-7">
									<div class="row">
										<div class="col-md-2 col-xs-2">
											<span><i class="fa fa-map-marker c-puple" aria-hidden="true"></i></span>
										</div>
										<div class="col-md-10">
											<p class="f-10">Onikan, Lagos</p>
										</div>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5">
									<p class="f-10">Age: 18+</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-7 col-xs-7">
									<div class="row">
										<div class="col-md-2 col-xs-2">
											<span><i class="fa fa-calendar c-puple" aria-hidden="true"></i></span>
										</div>
										<div class="col-md-10">
											<p class="f-10">11th july, 2017. 4.30pm</p>
										</div>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5">
									<p class="f-10">Last entry: 21:30PM</p>
								</div>
							</div>
							<!--
							<p class="m-t-20">SEATING</p>
							<p class="m-t-15 f-12">side blocked seat B<br>seat 24c</p>
							-->
							<div class="checkbox m-t-15">
								<div class="row">
									<div class="col-md-1 col-sm-1">
										<input type="checkbox" id="check2">
										<label for="check2" class="p-l-0">
											
										</label>
									</div>
									<div class="col-md-10 col-sm-10 col-xs-10">
										<span class="f-9"> Do you want an SMS reminder for this event? This service would cost N50</span>
									</div>
								</div>
							</div>

							<div class="checkbox m-t-15">
								<div class="row">
									<div class="col-md-4 col-sm-9 col-xs-8">
										<p>Amount:</p>
									</div>
									<div class="col-md-8 col-sm-3 col-xs-4">
										<p>₦ 12,000</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<input type="" class="form-control" id="" placeholder="Voucher code">
									</div>
								</div>
								<div class="col-md-2">
									<div class="col-md-1 col-sm-1">
										<input type="checkbox" id="check2">
										<label for="check2" class="p-l-0">
											
										</label>
									</div>
								</div>
							</div>
							<div class="row m-t-15">
								<div class="col-md-4 col-sm-4 col-xs-4"></div>
								<div class="col-md-4 col-sm-4">

									<form method="post", action="{{ route('attend_event') }}">

									{{ csrf_field() }}
									<button type="submit" class="bg-linegradent1 f-10  p-2 c-white bd-brandl bd-4 text-center width-100p m-l-13p dis-inline-b mm-l-0" name="">PROCEED</button>

									</form>
								</div>
								<div class="col-md-4 col-sm-4"></div>
							</div>
						</div>
						<div class="col-md-7 col-sm-7 mm-t-5">
							<img src="{{ asset('img/rectangle-26@2x.png') }}" class="width-100p">
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	
@endsection('content')