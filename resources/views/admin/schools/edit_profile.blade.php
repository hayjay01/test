@extends('admin.schools.master')
@section('title')Edit Profile @endsection

@section('content')


	       <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	<div class="col-md-1"></div>
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Edit Profile</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form action="{{ route('add_school') }}" method="post" enctype="multipart/form-data">
	                                {{ csrf_field() }}
	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">School name</label>
													<input type="text" class="form-control" name="name" required value="{{ $school->name }}">
														@if($errors->has('name'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('name') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>


	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" name="city" required value="{{ $school->city }}">

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
												<select name="lga" id="input" class="form-control" required>
													<option value="">Lga</option>
													@forelse($lgas as $lga)
													
													<option value="{{ $lga->name }}">{{ $lga->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
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

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Mailing address</label>
													<input type="text" class="form-control" name="mailing_address" required value="{{ $school->mailing_address }}">
														@if($errors->has('mailing_address'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('mailing_address') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Phone</label>
													<input type="text" class="form-control" name="phone" required value="{{ $school->phone }}">
														@if($errors->has('phone'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('phone') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="email" class="form-control" name="email" required value="{{ $school->email }}">			
														@if($errors->has('email'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('email') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Motto</label>
													<input type="text" class="form-control" name="motto" required value="{{ $school->motto }}">
													@if($errors->has('motto'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('motto') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Mission statement</label>
													<input type="text" class="form-control" name="mission" required value="{{ $school->mission_statement }}">
														@if($errors->has('mission'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('mission') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Vision</label>
													<input type="text" class="form-control" name="vision" required value="{{ $school->vision }}">				
														@if($errors->has('vision'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('vision') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Why choose us</label>
													<input type="text" class="form-control" name="why_choose_us" reuired value="{{ $school->why_choose_school }}">
														@if($errors->has('why_choose_us'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('why_choose_us') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Philosophy</label>
													<input type="text" class="form-control" name="philosophy" requied value="{{ $school->philosophy }}">
														@if($errors->has('philosophy'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('philosophy') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Core value <small>seperated by <strong>' , '</strong></small></label>
													<input type="text" class="form-control" name="value" required value="{{ $school->core_values }}">
													@if($errors->has('value'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('value') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Club-societies <small>seperated by <strong>' , '</strong></small></label>
													<input type="text" class="form-control" name="societies" requird value="{{ $school->club_societies }}">
														@if($errors->has('societies'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('societies') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group is-empty is-fileinput">
											        <input type="file" id="inputFile4" multiple="" name="logo" value="{{ old('logo')?old('logo'): '' }}">
													@if($errors->has('logo'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('logo') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
										            <div class="input-group">
										                <input type="text" readonly="" class="form-control" placeholder="Upload logo">
										                <span class="input-group-btn input-group-sm">
										                  	<button type="button" class="btn btn-fab btn-fab-mini">
										                    <i class="material-icons">portrait</i>
										                 	</button>
										                </span>
										            </div>
											 	</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">School review</label>
													<input type="text" class="form-control" name="review" required value="{{ $school->review }}">
														@if($errors->has('review'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('review') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>
	                                    </div>


	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Aim</label>
													<input type="text" class="form-control" name="aim" required value="{{ $school->aim }}">
													@if($errors->has('aim'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('aim') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Location</label>
													<input type="text" class="form-control" name="location" require value="{{ $school->location }}">
														@if($errors->has('location'))
					                                    	<span>
					                                    		<strong>
					                                    			{{ $errors->first('location') }}
					                                    		</strong>
					                                    	</span>
									                    @endif
												</div>
	                                        </div>	                                        	                                    

	                                    	<div class="col-md-3">
												<select name="school_level" id="input" class="form-control" required>
													<option value="">School Level</option>
													@forelse($school_types as $school_type)
													
													<option value="{{ $school_type->name }}">{{ $school_type->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div>


<!-- 	                                    	<div class="col-md-3">
												<select name="school_level" id="input" class="form-control" required>
													<option value="">Primary Color</option>
													@forelse($school_types as $school_type)
													
													<option value="{{ $school_type->name }}">{{ $school_type->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div>

	                                    	<div class="col-md-3">
												<select name="school_level" id="input" class="form-control" required>
													<option value="">Secondary Color</option>
													@forelse($school_types as $school_type)
													
													<option value="{{ $school_type->name }}">{{ $school_type->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div>

	                                    	<div class="col-md-3">
												<select name="school_level" id="input" class="form-control" required>
													<option value="">Other Color 1</option>
													@forelse($school_types as $school_type)
													
													<option value="{{ $school_type->name }}">{{ $school_type->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div>

	                                    	<div class="col-md-3">
												<select name="school_level" id="input" class="form-control" required>
													<option value="">Other Color 2</option>
													@forelse($school_types as $school_type)
													
													<option value="{{ $school_type->name }}">{{ $school_type->name }}</option>
													@empty
													<option>No Schools yet</option>
													@endforelse
												</select>
	                                        </div> -->
	                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-1"></div>

	                </div>
	            </div>
	        </div>
	  @endsection
