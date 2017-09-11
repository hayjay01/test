@extends('admin.events.master')

@section('content')
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	<div class="col-md-1"></div>
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Event</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" enctype="multipart/form-data", action="">
	                                    <div class="row">
	                                    	{{ csrf_field() }}
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Event name</label>
													<input type="text" class="form-control" name="name" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Event date</label>
													<input type="text" class="form-control"  onfocus="(this.type='date')" name="date" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Location</label>
													<input type="text" class="form-control" name="location" required>
												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" name="city">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">State</label>
													<input type="text" class="form-control" name="state">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Discription</label>
													<input type="text" class="form-control" name="description" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Amount</label>
													<input type="text" class="form-control" name="amount" required>
												</div>
	                                        </div>

	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Last entry</label>
													<input type="text" class="form-control" name="last_entry", required>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Age limit</label>
													<input type="text" class="form-control" name="age_limit">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Duration <small>in hours</small></label>
													<input type="text" class="form-control" name="duration" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group is-empty is-fileinput">
											        <input type="file" id="inputFile4" multiple="" name="logo" required>
										            <div class="input-group">
										              <input type="text" readonly="" class="form-control" placeholder="Upload picture">
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
													<label class="control-label">Phone</label>
													<input type="phone" class="form-control" name="phone" required>
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
	                </div>
	            </div>
	        </div>
@endsection
	    