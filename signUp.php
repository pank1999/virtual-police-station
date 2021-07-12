<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <?php
     include('include/common_css.php');
    ?>

    <style>
     body{
         text-align:center;
     }  
     input{
         width: 50%;
     }
    
    </style>
</head>
<body>
      <?php include('include/header_1.php'); ?>
      <div class="container " style="margin-top:10%">
      <h2 style="text-decoration:underline;" >User Authentication Via</h2>
      <h3></h3>
          <div class="row">
            
            <div class="col-lg-12 panel">
              <div class="panel-heading" style="background-color:#ed563b; color:white;">
                <h2>Email Id</h2> 
              </div>
              <div class="panel-body">
                  <form class="form-group" action="" method="get">
              
                         <input type="text" id="email" name="email" class="form-control  first_box" style="visibility:none;" placeholder="Email ID"> <br> <br>
                         <button class="btn first_box" type="button" onclick="sendOTP()"  style="background-color:#232d39;color:white;" onclick="sendOtp()">SEND OTP</button>

                         <input type="text" id="otp" class="form-control  second_box" style="visibility:none;" placeholder="OTP"> <br> <br>
                         <span id="otp_error" style="color:red;"></span> 
                         <button class="btn btn-success second_box" onclick="submitOTP()" type="button">Submit OTP</button>
                          
                  </form>
              </div>
              <div class="panel-footer">
              </div>
            </div> 
           <!--   
            <div class="col-lg-6 panel">
              <div class="panel-heading" style="background-color:#ed563b; color:white;">
                <h2> Mobile Number</h2> 
              </div>
              <div class="panel-body">
                  <form class="form-group" action="" method="get">
                        <input  class="form-control" Id="Aadhar" style="visibility:none;" placeholder="MOBILE NUMBER" type="text"> <br> <br>
                    
                         <button class="btn" style="background-color:#232d39;color:white;"  >SEND OTP</button>
                  </form>
              </div>
              <div class="panel-footer">
              </div>
                                 
            </div> -->
          </div>
      </div>   

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
         function sendOTP(){
             var email=jQuery('#email').val();
             jQuery.ajax({
              url:"sendotp.php",
              type:'post',
              data:'email='+email, 
              success:function(result){
                   if(result=="yes"){
                     
                     jQuery('.second_box').show();
                     jQuery('.first_box').hide();
                   }
              }
            // document.getElementById("Aadhar").style.visibility="hidden";
            // doument.querySelector("button").textContent="Verify OTP";

         });
         }



         function submitOTP()
         {
          var otp=jQuery('#otp').val();
             jQuery.ajax({
              url:'verifyotp.php',
              type:'post',
              data:'otp='+otp,
              success:function(result){
                   if(result=="yes"){
                    <?php
                     session_start();
                    $_SESSION['email']=$_GET['email'] ; ?>
                     window.location="firform.php";
                   }
                   if(result=="no"){
                         jQuery("#otp_error").html("please enter valid otp");
                   }
              }
            // document.getElementById("Aadhar").style.visibility="hidden";
            // doument.querySelector("button").textContent="Verify OTP";

         });
                  

         }
      
      
      </script> 

      <style>
      
          .second_box{
            display:none;
          }
      </style>
</body>
</html>