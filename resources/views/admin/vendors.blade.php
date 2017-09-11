@extends('admin.master')

@section('contents')
    

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Schools Admin Applications</h4>
                                <p class="category">Here are school admins application</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        
                                        <th>Logo</th>
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Mailing Address</th>
                                    	<th>Location</th>
                                        <th>City</th>
                                        <th>State</th>
                                    	<th>L.G.A</th>
                                        <th>School Type</th>
                                        <th>Activate</th>
                                        <th>DeActivate</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                        @forelse($school_admins as $school_admin)
                                        <tr>
                                            <td>
                                                <img src="{{ route('show_image', [$school_admin->ownSchool->logo]) }}" class="img-circle" style="width: 60px; height:60px;">
                                            </td>
                                        	<td>{{ ucfirst($school_admin->ownSchool->name) }}</td>
                                        	<td>{{ $school_admin->ownSchool->email }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->phone) }}</td>
                                        	<td>{{ ucfirst($school_admin->ownSchool->mailing_address) }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->location) }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->city) }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->state->name) }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->lga->name) }}</td>
                                            <td>{{ ucfirst($school_admin->ownSchool->subCategory->name) }}</td>

                                            @if(!$school_admin->ownSchool->status)
                                            <td>
                                                <form action="{{ route('school_status', [$school_admin->ownSchool->id, 'activate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Activate">check</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Activated</td>
                                            @endif
                                            @if($school_admin->ownSchool->status)
                                            <td>
                                                <form action="{{ route('school_status', [$school_admin->ownSchool->id, 'deactivate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="DeActivate">close</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Deactivated</td>
                                            @endif


                                            <td>
                                                <form action="{{ route('school_status', [$school_admin->ownSchool->id ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Drop">close</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @empty

                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>

                                        </tr>
                                        @endforelse                                    

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Event & Beauty Pageant Admin Applications</h4>
                                <p class="category">Here are event & beauty pageant admins application</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Company's Logo(Optional)</th>
                                        <th>Owner Name</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                        <th>Company's Name(Optional)</th>
                                        <th>Activate</th>
                                        <th>DeActivate</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse($event_admins as $admin)
                                        <tr>
                                            <td>
                                                <img src="{{ route('show_image', [$admin->company_logo]) }}" class="img-circle" style="width: 60px; height:60px;">
                                            </td>
                                            <td>{{ ucfirst($admin->full_name) }}</td>
                                            <td>{{ ucfirst($admin->email) }}</td>
                                            <td>{{ ucfirst($admin->phone) }}</td>
                                            <td>{{ ucfirst($admin->company_name) }}</td>

                                            
                                                                                    
                                            @if(!$admin->status)
                                            <td>
                                                <form action="{{ route('event_admin_status', [$admin->id, 'activate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Activate">check</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Activated</td>
                                            @endif
                                            @if($admin->status)
                                            <td>
                                                <form action="{{ route('event_admin_status', [$admin->id, 'deactivate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="DeActivate">close</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Deactivated</td>
                                            @endif


                                            <td>
                                                <form action="{{ route('event_admin_status', [$admin->id ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Delete User">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>

                                        </tr>
                                        @endforelse
                                    

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Event & Beauty Pageant Applications</h4>
                                <p class="category">Here are events & beauty added by their admin</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Owner Name</th>
                                        <th>Date</th>
                                        <th>Age Limit</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Approve</th>
                                        <th>Decline</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                        
                                    @if(!empty($events_beautys))
                                        @foreach($events_beautys as $event_beauty)
                                        <tr>
                                            <td>No Logo</td>
                                            <td>{{ ucfirst($event_beauty['event_name']) }}</td>
                                            <td>{{ ucfirst($event_beauty['owner']) }}</td>
                                            <td>{{ $event_beauty['event_date'] }}</td>
                                            <td>{{ $event_beauty['event_ageLimit'] }} +</td>
                                            <td>{{ $event_beauty['event_price'] }}</td>
                                            <td>{{ ucfirst($event_beauty['type']) }}</td>
                                                                                        
                                            
                                            @if(!$event_beauty['status'])
                                            <td>
                                                <form action="{{ route('event_beauty_status', [$event_beauty['id'], $event_beauty['type'], 'activate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Activate">check</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Activated</td>
                                            @endif
                                            @if($event_beauty['status'])
                                            <td>
                                                <form action="{{ route('event_beauty_status', [$event_beauty['id'], $event_beauty['type'], 'deactivate' ]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="DeActivate">close</button>
                                                    
                                                </form>                                                
                                            </td>
                                            @else
                                            <td>Deactivated</td>
                                            @endif


                                            <td>
                                                <form action="{{ route('event_admin_status', [$event_beauty['id']]) }}" method="post">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Delete User">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                        @endforeach
                                    @else
                                    
                                        <tr>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                        </tr>
                                    @endif
                                    

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Seminars & Conference Admin Applications</h4>
                                <p class="category"></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead>
        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Approve</th>
                                        <th>Decline</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td>123456789</td>
                                            <td>123456789</td>
                                            
                                            <td>123456789</td>
                                            
                                            
                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Approve">check</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                    
                                        <tr>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Approve">check</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                    

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Reality Shows Admin Applications</h4>
                                <p class="category"></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead>
        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company's Name(Optional)</th>
                                        <th>Budget</th>
                                        <th>About Project</th>
                                        <th>Approve</th>
                                        <th>Decline</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td>123456789</td>
                                            <td>123456789</td>
                                            
                                            <td>123456789</td>
                                            
                                            <td>Not Provided</td>
                                            
                                            <td>123456789</td>
                                            
                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Approve">check</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                    
                                        <tr>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <td>No Application</td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Approve">check</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                            <td>
                                                <formaction="#">
                                                    {{ csrf_field() }}

                                                    <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Remove">close</button>
                                                    
                                                </form>                                                
                                            </td>

                                        </tr>
                                    

                                        
                                    </tbody>
                                </table>
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