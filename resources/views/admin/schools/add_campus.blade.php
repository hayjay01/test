@extends('admin.schools.master')
@section('title')Add Campus @endsection

@section('content')

	       <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	<div class="col-md-1"></div>
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add Campus</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form action="{{ route('add_campus') }}" method="post">
	                                    <div class="row">

	                                    	{{ csrf_field() }}
	                                    	<div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Name</label>
													<input type="text" class="form-control" name="name" value="{{ old('name')?old('name'):'' }}">
														@if($errors->has('name'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('name') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Contact Email</label>
													<input type="email" class="form-control" name="contact_email" value="{{ old('contact_email')?old('contact_email'):'' }}">
														@if($errors->has('contact_email'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('contact_email') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Mailing address</label>
													<input type="text" class="form-control" name="mailing_address" value="{{ old('mailing_address')?old('mailing_address'):'' }}">
														@if($errors->has('mailing_address'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('mailing_address') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	         
	                                    </div>


										<div class="row">
		                                    <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" name="city" value="{{ old('city')?old('city'):'' }}">
														@if($errors->has('city'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('city') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>


	                                    	<div class="col-md-3">
												<select name="state" id="input" class="form-control" required>
													<option value="">State</option>
													@forelse($states as $state)
													
													<option value="{{ $state->name }}">{{ $state->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Contact Phone</label>
													<input type="text" class="form-control" name="contact_phone" value="{{ old('contact_phone')?old('contact_phone'):'' }}">
														@if($errors->has('contact_phone'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('contact_phone') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>


	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Admission Phone</label>
													<input type="text" class="form-control" name="admission_phone" value="{{ old('admission_phone')?old('admission_phone'):'' }}">
														@if($errors->has('admission_phone'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('admission_phone') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>


	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Admission Email</label>
													<input type="email" class="form-control" name="admission_email" value="{{ old('admission_email')?old('admission_email'):'' }}">
														@if($errors->has('admission_email'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('admission_email') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>	                                    
	                                      </div>

	                                                                        

	                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-1"></div>
						<!-- <div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<div class="picture pos-abs t-4p l-4p">
				                <img src="assets/img/tim_80x80.png"
				                  class="picture_src img-circle" id="picture_preview" alt="" >
				                <input class="img_container" type="file" id="upload" name="file"> -->
				                <!-- <center>
				                  	<button class="btn btn-default btn-md" id="buttons" style="border-radius: 1px; padding: 7px 40px; margin-top: 7px; background-color: #EE2824; color: white; margin-left: 35px;">Upload</button>
				                </center> -->
				            <!-- </div>
    							</div>

    							<div class="content">
    								
    								<p class="card-content" style="margin-top: 150px;">
    									Upload image
    								</p>
    								
    							</div>
    						</div>
    					</div> -->
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <!-- <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div> -->
	        </footer>
	    </div>
	</div>

@endsection