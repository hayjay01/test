@include('layouts.partials.school_header')

	<section>
		<div class="bg-light-burgundy">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-5">
						<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Information</button>
						<button class="btn bg-white c-warm-grey m-b-0 mwidth-100">Get admission form</button>
						<button class="btn bg-dark-blue-green m-b-0 mwidth-100">Write review</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="">
	    <!--   Big container   -->
	    <div class="container-fluid">
	        <div class="container m-t-17 m-b-17">
            	<div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                  	<div class="blocks active-block" id="school1" onclick="boxActive1()">
	                      	<div class="block-header">
	                      	    <h4>PAY AT BANK</h4>
	                      	</div>
	                      	<div class="block-container m-t-20p m-b-56p">
	                         	<div class="row m-t-10p m-b-5p">
	                         		<div class="col-md-5">
	                         			<p>Account Name</p>

	                         		</div>
	                         		<div class="col-md-7">
	                         			<p>Formcity</p>
	                         		</div>
	                         	</div>

	                         	<div class="row">
	                         		<div class="col-md-5">
	                         			<p>Account Number</p>

	                         		</div>
	                         		<div class="col-md-7">
	                         			<p>227659232230</p>
	                         		</div>
	                         	</div>

	                         	<div class="row m-t-5p m-b-10p">
	                         		<div class="col-md-5">
	                         			<p>Bank Name</p>

	                         		</div>
	                         		<div class="col-md-7">
	                         			<p>Diamond Bank</p>
	                         		</div>
	                         	</div>

	                        </div>
	                   </div>
                	</div>
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                  	<div class="blocks" id="school2" onclick="boxActive2()">
	                      	<div class="block-header">
	                          	<h4>FORMCITY CARD</h4>
	                      	</div>
	                      	<div class="block-container">
	                          	<div class="container-fluid">
	                          		<div class="row bd-brandb bg-light-burgundy c-white">
	                          			<div class="col-md-6">
	                          				<p>Payment detials</p>
	                          			</div>
	                          			<div class="col-md-6">
	                          				<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
	                          			</div>
	                          		</div>
	                          		<form action="" method="POST" role="form">
                          				<div class="form-group">
									    	<input type="tel" value="" placeholder="Cardholder Name  " class="form-control p-l-0 width-100p" required="" />
										</div>

										<div class="input-group width-100p">
											<input type="tel" class="form-control p-l-0 " placeholder="Valid Card Number" autocomplete="cc-number"
                                            required autofocus>
											<span class="input-group-addon p-l-0 p-r-0">
												<i class="material-icons">credit_card</i>
											</span>
										</div>
                          				
                          				<div class="row">
                          					<div class="col-md-6">
                          						<div class="form-group">
											    	<input type="tel" value="" placeholder="End Date" class="form-control p-l-0 width-100p" required="" />
												</div>
                          					</div>
                          					<div class="col-md-6">
                          						<div class="form-group">
											    	<input type="tel" value="" placeholder="CVV" class="form-control p-l-0 width-100p" required="" />
												</div>
                          					</div>
                          				</div>

                          				<p class="f-10"> I have read and accept the terms of use,rules of flight  and privacy policy</p>
                          			
                          				<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                          			</form>
	                          	</div>
	                      	</div>
	                      	<div class="block-footer">
	                          	<a class="order-now" href="#">Order Now</a>
	                      	</div>
	                  	</div>
                	</div>
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                  	<div class="blocks" id="school3" onclick="boxActive3()">
	                      	<div class="block-header">
	                          	<h4>PAY ONLINE/BANK TRANSFER </h4>
	                      	</div>
	                      	<div class="block-container m-t-17 m-b-17">
	                          	<div class="container-fluid">
	                          		<form action="" method="POST" role="form">
                          				<div class="form-group">
									    	<input type="text" value="" placeholder="Bank account name you are depositing from" class="form-control p-l-0 width-100p" required="" />
										</div>

										<div class="input-group width-100p">
											<input type="text" class="form-control p-l-0 " placeholder="Date of deposit" >
										</div>
                          				
                          				<div class="input-group width-100p">
											<input type="text" class="form-control p-l-0 " placeholder="Deposit reference (Reference number)" >
										</div>

                          				<p class="f-14">Note:<span class="f-11"> Any transaction fees charge by your bank will be deducted from the total transfer amount</span></p>
                          			
                          				<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                          			</form>
	                          	</div>
	                      	</div>
	                      	<div class="block-footer">
	                          	<a class="order-now" href="#">Order Now</a>
	                      	</div>
	                  	</div>
                	</div>
            	</div>
      		</div>
	    </div> <!--  big container -->

		<script type="text/javascript">
		// var school= $('.school');
		// 	for (var i = 0; i < schools.length; i++) {
		// 	  // Using $() to re-wrap the element.
		// 	  $(schools[i]).text('a');
		// 	}
			 function boxActive1(){
				$('#school1').addClass('active-block');
				$('#school2').removeClass('active-block');
				$('#school3').removeClass('active-block');
			}
			function boxActive2(){
				$('#school1').removeClass('active-block');
				$('#school2').addClass('active-block');
				$('#school3').removeClass('active-block');
			}
			function boxActive3(){
				$('#school1').removeClass('active-block');
				$('#school2').removeClass('active-block');
				$('#school3').addClass('active-block');
			}
	</script>
@include('layouts.partials.school_footer')


