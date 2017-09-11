@extends('admin.events.master')

@section('content')

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Edit Profile</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form enctype="multipart/form-data" method="post" action="{{ route('event_beauty_profile') }}">
	                                    <div class="row">
	                                    	{{ csrf_field() }}
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Company Name</label>
													<input type="text" class="form-control" name="name" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Username</label>
													<input type="text" class="form-control" disabled name="username">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email address</label>
													<input type="email" class="form-control" name="email">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">State</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Phone</label>
													<input type="text" class="form-control" name="phone">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group is-empty is-fileinput">
											        <input type="file" id="inputFile4" multiple="" name="logo">
										            <div class="input-group">
										                <input type="text" readonly="" class="form-control" placeholder="Upload logo" name="logo">
										                <span class="input-group-btn input-group-sm">
										                  	<button type="button" class="btn btn-fab btn-fab-mini">
										                    <i class="material-icons">portrait</i>
										                 	</button>
										                </span>
										            </div>
											 	</div>
	                                        </div>
	                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>

@endsection
