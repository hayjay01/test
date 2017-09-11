@extends('admin.schools.master')
Edit Grade

@section('content')
    

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Grades Added</h4>
                                <p class="category">Here are the grades added</p>
                            </div>
                            <div class="card-content table-responsive">
                                 <table class="table">
                                    <thead class="text-primary">
                                        <th>Name</th>
                                    	<th>Amount</th>
                                        <th>Update Grade</th>
                                    	<th>Delete Grade</th>
                                    </thead>
                                <tbody>
                                        
                                    @forelse($grades as $grade)
                                    
                                            <tr>
                                                <td>
                                                    <form method="post" action="{{ route('grade_status', [$grade->id, 'Update']) }}">
                                                        {{ csrf_field() }}

                                                        <div class="col-md-4 form-group">
                                                            <input type="text" name="name" value="{{ ucfirst($grade->name) }}" class="form-control">
                                                        </div>
                                                    
                                                </td>
                                                <td>

                                                        <div class="col-md-4 form-group">
                                                            <input type="text" name="amount" value="{{ number_format($grade->school->first()->pivot->amount, 2) }}" class="form-control">
                                                        </div>

                                                </td>

                                                <td>

                                                        <button class="material-icons btn btn-success btn-simple btn-xs" type="submit" style="border: none; background-color: transparent;" rel="tooltip" title="Update">check</button>
                                                                                                       
                                                </td>
                                            </form>

                                                <td>
                                                    <form action="{{ route('grade_status', [$grade->id, 'Deleted']) }}" method="post">
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

                                        </tr> 
                                    @endforelse 
                                          
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