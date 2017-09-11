@extends('admin.events.master')

	@section('content')
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Event Application</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Event logo</th>
	                                    	<th>Event name</th>
	                                    	<th>Attendee name</th>
	                                    	<th>Pay status</th>
											<th>Reference code</th>
											<th>Sms</th>
											<th>Quantity</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Dakota Rice</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
												<td class="text-primary">$36,738</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">$23,789</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Netherlands</td>
	                                        	<td>Baileux</td>
												<td class="text-primary">$56,142</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Overland Park</td>
												<td class="text-primary">$38,735</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Doris Greene</td>
	                                        	<td>Malawi</td>
	                                        	<td>Feldkirchen in Kärnten</td>
												<td class="text-primary">$63,542</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>Mason Porter</td>
	                                        	<td>Chile</td>
	                                        	<td>Gloucester</td>
												<td class="text-primary">$78,615</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-md-12">
	                        <div class="card card-plain">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Beauty Pagent</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                    	<th>Event logo</th>
	                                        <th>Pagent</th>
	                                    	<th>Attendee Name</th>
	                                    	<th>D.O.B</th>
	                                    	<th>Location</th>
	                                    	<th>State of origin</th>
	                                    	<th>Height</th>
	                                    	<th>Gender</th>
	                                    	<th>Interest</th>
	                                    	<th>Pay Status</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>1</td>
	                                        	<td>Dakota Rice</td>
	                                        	<td>$36,738</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>$23,789</td>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>$56,142</td>
	                                        	<td>Netherlands</td>
	                                        	<td>Baileux</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>$38,735</td>
	                                        	<td>Korea, South</td>
	                                        	<td>Overland Park</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>5</td>
	                                        	<td>Doris Greene</td>
	                                        	<td>$63,542</td>
	                                        	<td>Malawi</td>
	                                        	<td>Feldkirchen in Kärnten</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>
	                                        		<img src="assets/img/1547120_web1_Elaine-Metcalf-crowning.jpg" class="img-circle" style="width: 60px; height:60px;">
	                                        	</td>
	                                        	<td>6</td>
	                                        	<td>Mason Porter</td>
	                                        	<td>$78,615</td>
	                                        	<td>Chile</td>
	                                        	<td>Gloucester</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

@endsection