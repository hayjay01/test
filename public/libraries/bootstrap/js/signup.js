// alert('Welcome to ajax live');
       $('#sign_up').on( 'click', function(e){
            

           var fullname  = $('#full_name').val();
           alert(fullname);
           
           var fullemail = $('#full_email').val();
           alert(fullemail);

           var fullpassword   = $('#full_password').val();
           alert(fullpassword);

           

           e.preventDefault();
           
            if(!fullname || !fullemail || !fullpassword){
                setTimeout(function () { 
                                swal({
                                  title: "Oops!",
                                  text: "Please try to fill all the form",
                                  imageUrl: 'assets/img/inside.jpg'
                                });
                              });
            }else{
                 $.ajax({
                            url: "php/signup.php",
                            type: "POST",
                            data: {full_name: fullname, full_email: fullemail, full_password: fullpassword},
                            success: function(data){
                                  $('#full_name').val('');
                                  // alert(full_name);
                                  
                                  $('#full_email').val(' ');
                                  // alert(full_email);

                                  $('#full_password').val('');
                                  // alert(full_password);

                                  setTimeout(function () { 
                                  swal({
                                    title: "request example",
                                    text: "Submit to run ",
                                    type: "info",
                                    closeOnConfirm: false,
                                    showLoaderOnConfirm: true
                                  }, function () {
                                    setTimeout(function () {
                                      swal("request finished!");
                                    }, 2000);
                                  });
                                });
                            },error:function(){
                                alert("Error while posting wth ajax call!");
                            }
                    });
            }
      }) //end of onclick submit


