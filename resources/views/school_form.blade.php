@include('layouts.partials.school_header')
	<section>
		<div class="bg-light-burgundy">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 p-b-3p p-t-3p">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6"><img src="{{ route('show_image', [$school->logo]) }}" width="150px" height="140px"></div>
						</div>
					</div>
					<div class="col-md-9 m-t-8p">
						<div class="row">
							<div class="col-md-6">
								<p class="c-goldsc f-30 mf-22">{{ strtoupper($school->name) }}</p>
							</div>
							<div class="col-md-6"></div>
						</div>

						<div class="row m-t-2p">
							<div class="col-md-3"></div>
							<div class="col-md-4">
								<p class="schoolfont c-goldsc f-20">“ In love Serve One another “</p>
							</div>
							<div class="col-md-5"></div>
						</div>

						<div class="row m-t-30">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<a href="{{ route('school_page', [$school->id]) }}" class="btn bg-dark-blue-green m-b-0 mwidth-100">Information</a>
							<button class="btn bg-white c-warm-grey m-b-0 mwidth-100">Get admission form</button>
							<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Write review</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container p-b-100 mp-b-0 mp-t-9">
		                <div class="card wizard-card" data-color="light-burgundy1" id="wizard">
			                <form action="{{ route('school_form', [$school->id]) }}" method="post">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange","light-burgundy1", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		<span>
		                        			<img src="{{ route('show_image', [$school->logo]) }}" class="width-4p">
		                        		</span>
		                        		<span class="p-l-25 f-24 mf-19">{{ strtoupper($school->name) }}</span>
		                        	</h3>
									<h5 class="text-center">GET ADMISSION FORM</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>

			                            <li><a href="#location" data-toggle="tab">Student Information</a></li>
			                            <li><a href="#type" data-toggle="tab">Guardian Information</a></li>
			                            <li><a href="#facilities" data-toggle="tab">FORM CITY details</a></li>
			                            <li><a href="#description" data-toggle="tab">More details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content min-h-200">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('first_name')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">First Name</label>
		                                        	<input type="text" name="first_name" class="form-control" id="exampleInputEmail1" required value="{{ old('first_name')?old('first_name'):'' }}">
		                                        	@if($errors->has('first_name'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('first_name') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                        	
		                                    	</div>
		                                	</div>
		                                	{{ csrf_field() }}
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('last_name')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Last Name</label>
		                                        	<input type="text" name="last_name" class="form-control" id="exampleInputEmail1" required value="{{ old('last_name')?old('last_name'):'' }}">
		                                        	@if($errors->has('last_name'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('last_name') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('d_o_b')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">D.O.B</label>
		                                        	<input name="d_o_b" class="datepicker form-control" type="text" value="{{ old('d_o_b')?old('d_o_b'):'' }}" required />		                                        	

		                                        	@if($errors->has('d_o_b'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('d_o_b') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('gender')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Gender</label>
		                                        	<select name="gender" class="form-control" value="{{ old('gender')?old('gender'):'' }}" required="">
		                                            	<option  disabled="" selected=""></option>
		                                            	<option >Male</option>
		                                            	<option >Female </option>
		                                            </select>

		                                        	@if($errors->has('gender'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('gender') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <div class="row">
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('guardian_name')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" name="guardian_name" class="form-control" id="exampleInputEmail1" required value="{{ old('guardian_name')?old('guardian_name'):'' }}">

		                                        	@if($errors->has('guardian_name'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('guardian_name') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('guardian_address')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Address</label>
		                                        	<input type="text" name="guardian_address" class="form-control" id="exampleInputEmail1" required value="{{ old('guardian_address')?old('guardian_address'):'' }}">

		                                        	@if($errors->has('guardian_address'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('guardian_address') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('guardian_email')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Email</label>
		                                        	<input type="email" name="guardian_email" class="form-control" required value="{{ old('guardian_email')?old('guardian_email'):'' }}">

		                                        	@if($errors->has('guardian_email'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('guardian_email') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('guardian_relationship')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Relationship</label>
		                                        	<input type="text" name="guardian_relationship" class="form-control" id="exampleInputEmail1" required value="{{ old('guardian_relationship')?old('guardian_relationship'):'' }}">

		                                        	@if($errors->has('guardian_relationship'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('guardian_relationship') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <div class="row">
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('email')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Email</label>
		                                        	<input type="text" name="email" class="form-control" id="exampleInputEmail1" required value="{{ old('email')?old('email'):'' }}">

		                                        	@if($errors->has('email'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('email') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('password')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Password</label>
		                                        	<input name="password" type="password" class="form-control" id="exampleInputEmail1" required value="">

		                                        	@if($errors->has('password'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('password') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('password')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Confirm password</label>
		                                        	<input name="password_confirmation" type="password" class="form-control" required>

		                                        	@if($errors->has('password'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('password') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('fc_info')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">How did you hear about us </label>
		                                        	<input type="text" name="fc_info" class="form-control" id="exampleInputEmail1" required value="{{ old('fc_info')?old('fc_info'):'' }}">

		                                        	@if($errors->has('fc_info'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('fc_info') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('class')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Class of student</label>

		                                        	<select name="class" class="form-control" required>
		                                            	<option disabled="" selected=""></option>
		                                            	@forelse($grades as $grade)
		                                            	<option>{{ $grade->name }}</option>
		                                            	@empty
		                                            	<option>No Grade For School Yet</option>
		                                            	@endforelse
		                             
		                                            </select>		                                        	

		                                        	@if($errors->has('class'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('class') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('disabled')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Disabled ?</label>
		                                        	<select name="disabled" class="form-control" required>
		                                            	<option disabled="" selected=""></option>
		                                            	<option>Yes</option>
		                                            	<option>No</option>
		                                            </select>		                                        	
		                                        	@if($errors->has('disabled'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('disabled') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group{{ $errors->has('disability_type')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">Disability type?</label>
		                                        	<input type="text" name="disability_type" class="form-control" value="{{ old('disability_type')?old('disability_type'):'' }}">

		                                        	@if($errors->has('Disability_type'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('disability_type') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif			                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group{{ $errors->has('school_info')? 'has-error':'' }} label-floating">
		                                        	<label class="control-label">How did you hear about us </label>
		                                        	<input type="text" name="school_info" class="form-control" id="exampleInputEmail1" required value="{{ old('school_info')?old('school_info'):'' }}">

		                                        	@if($errors->has('school_info'))
				                                    	<span>
				                                    		<strong>
				                                    			{{ $errors->first('school_info') }}
				                                    		</strong>
				                                    	</span>
				                                    @endif		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' style="background: #87212e;" />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' style="background: #87212e;" />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

@include('layouts.partials.school_footer')
