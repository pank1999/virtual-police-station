<?php 

if(isset($_POST['sendotp'])) {
    require('include/textlocal.class.php');
    require('include/credential.php');
  
    $textlocal = new Textlocal(false, false,API_KEY);
  
    // You can access MOBILE from credential.php
    // $numbers = array(MOBILE);
    // Access enter mobile number in input box
    $numbers = array($_POST['C_mobileno']);
  
    $sender = 'TXTLCL';
    $otp = mt_rand(10000, 99999);
    $message = "Hello " . $_POST['C_name'] . " This is your OTP: " . $otp;
  
    try {
        $result = $textlocal->sendSms($numbers, $message, $sender);
        setcookie('otp', $otp);
        echo "OTP successfully send..";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
  }


  if(isset($_POST['verifyotp'])) { 
    $otp = $_POST['otp'];
    if($_COOKIE['otp'] == $otp) {
        echo "Congratulation, Your mobile is verified.";
    } else {
        echo "Please enter correct otp.";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile verification</title>
    <?php  include('include/common_css.php') ;?>


    <script type="text/javascript">
        function func1(){
            var value=document.getElementById("otpvalue");
            var valuebtn=document.getElementById("verifybtn");

            value.style.visibility="visible";
            valuebtn.style.visibility="visible";




        } 
    
    
    </script> 



</head>
<body>
<?php include('include/header_1.php'); ?>

     <form action="" method="post" style="margin-top:10%;" >   
        <div class="form-group">
            <input type="text" name="C_mobileno" class="form-control" placeholder="+91 xxxxxxxxxx" required="true" >
            <br>
            <label for="">To verify mobile number click to send OTP button </label>  
            <button type="submit" name="sendotp" value="sendotp" onclick="func1()" id="sendotpbtn" class="btn btn-info">SEND OTP</button> 
            <br>
            <input type="text" name="enteredotp" class="form-group" id="otpvalue" placeholder="Enter OTP to verify"  >
             <button type="submit" name="verifyotp" value="verifyotp" class="btn btn-success" id="verifybtn" >VERIFY</button> 
         </div>

         </form>   
</body>
</html>