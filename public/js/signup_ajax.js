// alert('Welcome to ajax live');
       $("#submit").on( 'click', function(e){
            // alert('clicked');
           e.preventDefault();

           var sign_fullname  = $('#sign_fullname').val();
           alert(sign_fullname);
           
           var sign_email = $('#sign_email').val();
           alert(sign_email);

           var sign_password   = $('#sign_password').val();
           alert(sign_password);

           var sign_confirm_password   = $('#sign_confirm_password').val();
           alert(sign_confirm_password);

           
            if(!sign_fullname || !sign_email || !sign_password || !sign_confirm_password){
                setTimeout(function () { 
                                swal({
                                  title: "Oops!",
                                  text: "Please try to fill all the form",
                                  imageUrl: 'assets/img/inside.jpg'
                                });
                              }, 
                              );
                if (sign_password.val() != sign_confirm_password) {
                   setTimeout(function () { 
                                swal({
                                  title: "Oops!",
                                  text: "Password doesnt match!",
                                  imageUrl: 'assets/img/inside.jpg'
                                });
                              }, 
                              );
                }
            }else{
                 $.ajax({
                            url: "signup.php",
                            type: "POST",
                            data: {fullname: sign_fullname, email: sign_email, password: sign_password, confirm_password: sign_confirm_password},
                            success: function(data){
                                  $("sign_fullname").val(' ');
                                  $("sign_email").val(' ');
                                  $("sign_password").val(' ');
                                  $("sign_confirm_password").val(' ');
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
      }); //end of onclick submit

