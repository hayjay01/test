@extends('emails.user.master')

@section('content')

	<section>
		<div class="row m-t-20p">
			<div class="col-md-3 col-sm-1 col-xs-1"></div>
			<div class="col-md-6 col-sm-10 col-xs-10">
				<div class="bg-dark-pastel-green p-2p" >
					<span class="f-13">Dear {{ $user->full_name }} ( $role ), you are welcome to formcity, where you have fun buying hows tick, applying for schools e.t.c Thank you.</span><span class="p-l-5p"><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-md-3 col-sm-1 col-xs-1"></div>
		</div>
	</section>
@endsection

