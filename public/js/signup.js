$  (document).ready(function(){

	// $("#sign_up").click(function(){
	// 	// alert("not valid")
	// 	// html           database
	// 	var fullname = $("#fullname").val();
	// 	var email = $("#email").val();
	// 	var password = $("#password").val();


	// 	// creating boolean variable
	// 	var isValid = true;

	// 	if (fullname.length == '') {
	// 		isValid = false;
	// 		$("#errorFullname").html("Fullname field cannot be empty");
	// 	}else{
	// 		$("#errorFullname").html("");
	// 	}

	// 	var isValid = true;

	// 	if (email == '') {
	// 		isValid = false;
	// 		$("#errorEmail").html("Email field cannot be empty");
	// 	}else{
	// 		$("#errorEmail").html("");
	// 	}

	// 	var isValid = true;

	// 	if (password == '') {
	// 		isValid = false;
	// 		$("#errorPassword").html("Password field cannot be empty");
	// 	}else{
	// 		$("#errorPassword").html("");
	// 	}

	// 	// for the error message to display

	// 	if (isValid == true){

	// 		$.ajax({
	// 			url: "../script_files/insert.php",
	// 			type: "POST",
	// 			data: {
	// 				full_name: fullname,
	// 				email: email,
	// 				password: password
	// 			},
	// 			// addcallback
	// 			success: function(){

	// 			}
	// 		});

	// 	}else{
	// 		return false;
	// 	}
	// });
	<!--
      // Form validation code will come here.
     
    
   //-->



// signup validation

    $("#submit").click(function(){
      	// e.preventDefault();
      	// alert('sjhsdhhd');
      	         if( document.myForm.fullname.value == "" )
         {
            $("#errorFullname").html('Please enter your full name')
            $("#errorFullname").css('color', 'red')
            document.myForm.fullname.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            $("#errorEmail").html('Please enter your mail address')
            $("#errorEmail").css('color', 'red')
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.password.value == "" )
         {
            $("#errorPassword").html('Please enter your Password')
            $("#errorPassword").css('color', 'red')
            document.myForm.password.focus() ;
            return false;
         }

         if( document.myForm.confirm_password.value == "" )
         {
            $("#errorPassword").html('Please enter confirm Password')
            $("#errorPassword").css('color', 'red')
            document.myForm.password.focus() ;
            return false;
         }


         if( document.myForm.confirm_password.value != document.myForm.password.value )
         {
            $("#errorPassword").html('Password and Confirm Password doesnt macth!')
            $("#errorPassword").css('color', 'red')
            document.myForm.confirm_password.focus() ;
            return false;
         }
         

         return( true );

      });



// login validation


 $("#login_submit").click(function(){
      	// e.preventDefault();
      	// alert('sjhsdhhd');
      	 
      	 if( document.loginform.email.value == "" )
         {
            $("#loginEmail").html('Please enter your mail address')
            $("#loginEmail").css('color', 'red')
            document.loginform.email.focus() ;
            return false;
         }
         
        if( document.loginform.password.value == "" )
         {
            $("#loginPassword").html('Please enter your Password')
            $("#loginPassword").css('color', 'red')
            document.loginform.password.focus() ;
            return false;
         }
		return( true );

      });


});
