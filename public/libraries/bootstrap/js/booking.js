// alert('Welcome to ajax live');
       $('#book_now').on( 'click', function(e){
            

           var view_fullname  = $('#book_fullname').val();
           alert(view_fullname);
           
           var view_email = $('#book_email').val();
           alert(view_email);

           var view_phone   = $('#book_phone').val();
           alert(view_phone);

           var view_company_name = $('#book_company_name').val();
           alert(view_company_name);

           var view_company_address= $('#book_company_address').val();
           alert(view_company_address);

           var book_monthly_income= $('#book_monthly_income').find('option:selected').val()
           alert(book_monthly_income);

         
           e.preventDefault();
           
            if(!view_fullname || !view_email || !view_phone || !view_company_name || !view_company_address || !book_monthly_income){
                setTimeout(function () { 
                                swal({
                                  title: "Oops!",
                                  text: "Please try to fill all the form",
                                  imageUrl: 'assets/img/inside.jpg'
                                });
                              }, 
                              );
            }else{
                 $.ajax({
                            url: "book_now.php",
                            type: "POST",
                            data: {full_name: view_fullname, email: view_email, phone_number: view_phone, company_name: view_company_name, company_address: view_company_address, monthly_income: book_monthly_income},
                            success: function(data){
                                  $('#book_fullname').val('');
                                  // alert(view_fullname);
                                  
                                  $('#book_email').val(' ');
                                  // alert(view_email);

                                  $('#book_phone').val('');
                                  // alert(view_phone);

                                  $('#book_company_name').val('');
                                  // alert(view_company_name);

                                  $('#book_company_address').val('');
                                  // alert(view_company_address);

                                  $('#book_monthly_income').val('');
                                  setTimeout(function () { 
                                  swal({
                                    title: "Your apartment has been reserved for you while we confirm the information you have given",
                                    text: "Once you have been confirmed we will send you an email confirmation explaining the move in process ",
                                    imageUrl: 'assets/img/inside.jpg',
                                    type: "success",

                                    closeOnConfirm: false,
                                    showLoaderOnConfirm: true
                                  }, function () {
                                    setTimeout(function () {
                                      swal("Thanks for booking an apartment from us");
                                    }, );
                                  });
                                });
                            },error:function(){
                                alert("Error while posting wth ajax call!");
                            }
                    });
            }
      }) //end of onclick submit


