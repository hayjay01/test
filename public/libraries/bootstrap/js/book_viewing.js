// alert('Welcome to ajax live');
       $('#book_view').on( 'click', function(e){
            

           var view_fullname  = $('#view_fullname').val();
           alert(view_fullname);
           
           var view_email = $('#view_email').val();
           alert(view_email);

           var view_phone   = $('#view_phone').val();
           alert(view_phone);

           var view_company_name = $('#view_company_name').val();
           alert(view_company_name);

           var view_company_address= $('#view_company_address').val();
           alert(view_company_address);

           var view_date= $('#view_date').val();
           alert(view_date);

           var view_time = $('#view_time').val();
           alert(view_time);

           e.preventDefault();
           
            if(!view_fullname || !view_email || !view_phone || !view_company_name || !view_company_address || !view_date || !view_time){
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
                            url: "submit_booking.php",
                            type: "POST",
                            data: {fullname: view_fullname, email: view_email, phone: view_phone, company_name: view_company_name, company_address: view_company_address, date: view_date, time: view_time},
                            success: function(data){
                                  $('#view_fullname').val('');
                                  // alert(view_fullname);
                                  
                                  $('#view_email').val(' ');
                                  // alert(view_email);

                                  $('#view_phone').val('');
                                  // alert(view_phone);

                                  $('#view_company_name').val('');
                                  // alert(view_company_name);

                                  $('#view_company_address').val('');
                                  // alert(view_company_address);

                                  $('#view_date').val('');
                                  // alert(view_date);

                                  $('#view_time').val('');
                                  // alert(view_time);
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


