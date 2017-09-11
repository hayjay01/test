@extends('admin.schools.master')
@section('title')Applications @endsection

@section('content')
    

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Students Applications</h4>
                                <p class="category">Here are the students that applied</p>
                            </div>
                            <div class="card-content table-responsive">
                                 <table class="table">
                                    <thead class="text-primary">
                                        <th>School Name</th>
                                    	<th>Student Name</th>
                                        <th>Student Email</th>
                                    	<th>Guardian Name</th>
                                        <th>Guardian Email</th>
                                    	<th>Class</th>
										<th>Tuition</th>
                                        <th>Pay Status</th>
                                        <th>Disability</th>
                                        <th>Refernce Code</th>
                                        <th>Accept</th>
                                        <th>Decline</th>
                                        <th>Drop</th>
                                    </thead>
                                    <tbody>
                                    
                                    @forelse($applications as $application)
                                    
                                            <tr>
                                            	<td>{{ ucfirst($application->school->name) }}</td>
                                                <td>{{ ucfirst($application->fullname()) }}</td>
                                                
                                            	<td>{{ $application->user->email }}</td>

                                                <td>{{ ucfirst($application->guardian_name) }}</td>

                                                <td>{{ $application->guardian_email }}</td>
                                            	<td class="text-primary">{{ $application->grade->name }}</td>
    											<td>{{ $application->grade->school->first()->pivot->amount }}</td>
                                                <td>{{ $application->paid() }}</td>
                                                <td>{{ $application->disabled() }}</td>
                                                <td>{{ $application->reference_code }}</td>

                                                @if(!$application->accepted)
                                                <td>
                                                    <form action="{{ route('admission_status', [$application->id, 'activate' ]) }}" method="post">
                                                        {{ csrf_field() }}

                                                        <button class="material-icons btn btn-success btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Accept">check</button>
                                                        
                                                    </form>                                                
                                                </td>
                                                @else
                                                <td>Accepted</td>
                                                @endif
                                                @if($application->accepted)
                                                <td>
                                                    <form action="{{ route('admission_status', [$application->id, 'deactivate' ]) }}" method="post">
                                                        {{ csrf_field() }}

                                                        <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Decline">close</button>
                                                        
                                                    </form>                                                
                                                </td>
                                                @else
                                                <td>Declined</td>
                                                @endif

                                                <td>
                                                    <form action="{{ route('admission_status', [$application->id]) }}" method="post">
                                                        {{ csrf_field() }}

                                                        <button class="material-icons btn btn-danger btn-simple btn-xs" type = "submit" style="border: none; background-color: transparent;" rel="tooltip" title="Delete">close</button>
                                                        
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
                                            <td>No Application</td>
                                            <td>No Application</td>
                                            <th>No Application</th>

                                        </tr> 
                                    @endforelse 
                                              
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                                        
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