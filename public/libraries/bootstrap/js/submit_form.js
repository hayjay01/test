alert('Welcome to ajax live');

$(function(){
     
       /* Edit button ajax call */
       $('#book_view').on( 'click', function(){
            $('#myModal').modal('hide');
           var view_fullname  = $('#view_fullname').val();

           var view_email = $('#view_email').val();

           var view_phone   = $('#view_phone').val();

           var view_company_name = $('#view_company_name').val();

           var view_company_address= $('#view_company_address').val();

           var view_date= $('#view_date').val();

           var view_time = $('#view_time').val();

           
            if(!view_fullname || !view_email || !view_phone !view_company_name || !view_company_address || !view_date || !view_time){
                setTimeout(function () { 
                                swal("Oops!" , "All fields are required...","error",
                                  );
                              }, 
                              1000);
            }else{
                 $.ajax({
                            url: "apartment_details.php",
                            type: "POST",
                            data: {fullname: view_fullname, email: view_email, phone: view_phone, company_name: view_company_name, company_address: view_company_address, date: view_date, time: view_time,},
                            success: function(data){
                                console.log(data);
                              setTimeout(function () { 
                                swal("Thank You!" , " date and time,","success");
                              }, 
                              1000);
                            },error:function(){
                                alert("Error while posting wth ajax call!");
                            }
                    });
            }

