@extends('admin.master')

@section('contents')


	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" data-background-color="orange" style="position: relative; height: 80px;">
							<img class="material-icons" src="{{ asset('img/icons/code.png') }}">
						</div>
						<div class="card-content">
							<p class="category">Followers</p>
							<h3 class="title">12244</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons text-danger">warning</i> <a href="#pablo">Frontend Followers
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" data-background-color="orange" style="position: relative; height: 80px;">
							<img class="material-icons" src="{{ asset('img/icons/backend.png') }}">
						</div>
						<div class="card-content">
							<p class="category">Backend Followers</p>
							<h3 class="title">12244</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">date_range</i> Backend Followers
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" style="position: relative; height: 80px;">
							<img class="material-icons" src="{{ asset('img/icons/headers/browser.png') }}" width="50px">
						</div>
						<div class="card-content">
							<p class="category">Design Followers</p>
							<h3 class="title">12244</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">local_offer</i> Design Followers: <strong>12244</strong>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" data-background-color="#fff" style="position: relative; height: 80px;">
							<img  src="{{ asset('img/icons/headers/android.png') }}" width="50px">
						</div>
						<div class="card-content">
							<p class="category">Android Followers</p>
							<h3 class="title">12244</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">update</i> Android follower
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-header card-chart" data-background-color="green">
							<div class="ct-chart" id="dailySalesChart"></div>
						</div>
						<div class="card-content">
							<h4 class="title">Daily Sales</h4>
							<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> increase in today sales.</p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">access_time</i> updated 4 minutes ago
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header card-chart" data-background-color="orange">
							<div class="ct-chart" id="emailsSubscriptionChart"></div>
						</div>
						<div class="card-content">
							<h4 class="title">Email Subscriptions</h4>
							<p class="category">Last Campaign Performance</p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">access_time</i> campaign sent 2 days ago
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header card-chart" data-background-color="red">
							<div class="ct-chart" id="completedTasksChart"></div>
						</div>
						<div class="card-content">
							<h4 class="title">Completed Tasks</h4>
							<p class="category">Last Campaign Performance</p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">access_time</i> campaign sent 2 days ago
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card card-nav-tabs">
						<div class="card-header" data-background-color="purple">
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<span class="nav-tabs-title">Tasks:</span>
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li class="active">
											<a href="#profile" data-toggle="tab">
												<i class="material-icons">bug_report</i>
												Bugs
											<div class="ripple-container"></div></a>
										</li>
										<li class="">
											<a href="#messages" data-toggle="tab">
												<i class="material-icons">code</i>
												Website
											<div class="ripple-container"></div></a>
										</li>
										<li class="">
											<a href="#settings" data-toggle="tab">
												<i class="material-icons">cloud</i>
												Server
											<div class="ripple-container"></div></a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="card-content">
							<div class="tab-content">
								<div class="tab-pane active" id="profile">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes" checked>
														</label>
													</div>
												</td>
												<td>Sign contract for "What are conference organizers afraid of?"</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes">
														</label>
													</div>
												</td>
												<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes">
														</label>
													</div>
												</td>
												<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes" checked>
														</label>
													</div>
												</td>
												<td>Create 4 Invisible User Experiences you Never Knew About</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="messages">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes" checked>
														</label>
													</div>
												</td>
												<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes">
														</label>
													</div>
												</td>
												<td>Sign contract for "What are conference organizers afraid of?"</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane" id="settings">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes">
														</label>
													</div>
												</td>
												<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes" checked>
														</label>
													</div>
												</td>
												<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="optionsCheckboxes">
														</label>
													</div>
												</td>
												<td>Sign contract for "What are conference organizers afraid of?"</td>
												<td class="td-actions text-right">
													<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
														<i class="material-icons">edit</i>
													</button>
													<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
														<i class="material-icons">close</i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Courses Application</h4>
                            <p class="category">New course applications</p>
                        </div>
                        <div class="card-content table-responsive">
                            {{-- <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>ID</th>
                                	<th>Name</th>
                                	<th>Email</th>
                                	<th>Course</th>
                                	<th>Delete</th>
                                </thead>
                                <tbody>
                                @forelse($applications as $application)
                                    <tr>
                                    	<td>{{ $application->id }}</td>
                                    	<td>{{ $application->full_name() }}</td>
                                    	<td>{{ $application->email }}</td>
                                    	<td>{{ $application->course->name }}</td>

                                    	<form method="post" action="{{ route('c_apply_remove', $application->id) }}">
                                    	{{ csrf_field() }}
										<td type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
											<button class="material-icons" type = "submit" style="border: none; background-color: transparent;">close</button>
										</td>
										</form>
                                    </tr>
                                   @empty
                                   	<tr>
                                    	<td>No application</td>
                                    	<td>No application</td>
                                    	<td>No application</td>
                                    	<td>No application</td>
										<td type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
											<i class="material-icons">close</i>
										</td>
                                    </tr>
                                   @endforelse
                                </tbody>
                            </table>--}}
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container-fluid">
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
		</div>
	</footer>
</div>

@endsection


