@extends('admin.schools.master')
@section('title')Add Grade @endsection

@section('content')

	       <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	<div class="col-md-1"></div>
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add Grade</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form action="{{ route('add_grade') }}" method="post">
	                                	{{ csrf_field() }}
	                                    <div class="row">

	                                    	<div class="col-md-6">
												<select name="grade" id="input" class="form-control" required="required">
													<option value="">Name</option>
													@forelse($grades as $grade)
													<option value="{{ $grade->name }}">{{ $grade->name }}</option>
													@empty
													<option>No grade yet</option>
													@endforelse
												</select>
	                                        </div>

	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Amount</label>
													<input type="textarea" class="form-control" name="amount">
												</div>
	                                        </div>
									
	                                        <!-- <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Evet date</label>
													<input type="text" class="form-control"  onfocus="(this.type='date')" >
												</div>
	                                        </div> -->
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
	@endsection

