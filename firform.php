<?php
session_start();
if(!isset($_SESSION['email'])){

   echo "<script> alert('login first ') </script>";
   echo"<script> location.href='index.php' </script>";    
}
///$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));

//$query1="SELECT * FROM event_details";
///$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));

if(isset($_POST['sendotp'])) {
    require('../include/textlocal.class.php');
    require('../include/credential.php');

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>FIR FORM</title>

   
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  
    <style>
     #suspect{
        display:inline-flex;
    
     }
    </style>

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
     
     <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky"  style="background-color:#313c4b; position:fixed; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="./assets/images/mp-police-logo.jpg" height="70px" width="100px" alt=""><em></em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="" style="color:white; background-color:#2f3b4b;">Home</a></li>
                           <!-- <li class="scroll-to-section"><a href="#features" style="color:white; background-color:#2f3b4b;">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes" style="color:white;background-color:#2f3b4b;">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule" style="color:white; background-color:#2f3b4b;">Schedules</a></li>
                        -->
                            <li class="scroll-to-section"><a href="#contact-us" style="color:white; background-color:#2f3b4b;">Contact</a></li> 
                           
                            <li class="main-button"><a href="index.php" data-toggle="modal" data-target="">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="col-lg-10  col-xs-12" style="margin-top:100px; margin-left:130px;">
                <div class="panel panel-danger">
                    <div class="panel-heading" style="background-color:#ed563b;">
                    
                         <h1 style="color:white;">Lodge an FIR</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning"></p>
                       <form   method="POST" role="form" enctype="multipart/form-data">
                            <center><h2>Complainant Details</h2></center>    
                            <label for="">Name of the complainant</label> <br>

                            <div class="form-group">
                                <input type="text" name="C_name" class="form-control" placeholder="Full Name" required="true">
                                 
                            </div>
                            <label for="">Complainant's  District</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_district" class="form-control" placeholder="eg. satna" required="true" >
                                 
                            </div>
                            <label for=""> complainant's Father Name</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_fathername" class="form-control" placeholder="Full Name" required="true" >
                                 
                            </div>
                            <label for="">Address of complainant</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_address" class="form-control" placeholder="address" required="true">
                                 
                            </div>
                            <label for="">Moblie number</label> <br>
                            <!--mobile verification -->
                            <div class="form-group">
                                <input type="text" name="C_mobileno" class="form-control" placeholder="+91 xxxxxxxxxx" required="true">
                                <br>
                                <label for="">To verify mobile number click to send OTP button </label>  
                                <button type="submit" name="sendotp" onclick="func1()" id="sendotpbtn" class="btn btn-info">SEND OTP</button> 
                                <br>
                                <input type="text" name="enteredotp" class="form-group" id="otpvalue" placeholder="Enter OTP to verify" hidden >
                                <button type="submit" name="verifyotp" class="btn btn-success" id="verifybtn" hidden>VERIFY</button> 
                            </div>

                            <label for="">Aadhar card number</label>

                            <div class="form-group">
                                <input type="text" name="Aadhar_id" class="form-control" placeholder="Aadhar card number" required="true" pattern=".{12}" >
                                 
                           </div>
                            <label for="">Valid ID Proof copy with self attested</label>

                            <div class="form-group">
                                <input type="file" name="C_Id_proof" class="form-control" placeholder="Aadhar card/voter id card/passport/pan card/driving licence" required="true" >
                                 
                           </div>


                           <div class="form-group">
                              
                           
                           </div>
                           <hr style="height:3px; background-color:#ed563b;">

                           
                           <center><h2>Witness Details</h2></center>    
                            <label for="">Name of the Witness </label> <br>

                            <div class="form-group">
                                <input type="text" name="W_name" value="NA" class="form-control" placeholder="Full Name">
                                 
                            </div>
                            <label for="">Witness  District</label> <br>
                            <div class="form-group">
                                <input type="text" name="W_district"  value="NA"class="form-control" placeholder="eg. satna"  >
                                 
                            </div>
                            <label for="">Witness Father Name</label> <br>
                            <div class="form-group">
                                <input type="text" name="W_fathername"  value="NA"class="form-control" placeholder="Full Name"  >
                                 
                            </div>
                            <label for="">Address of Witness</label> <br>
                            <div class="form-group">
                                <input type="text" name="W_address"  value="NA"class="form-control" placeholder="address">
                                 
                            </div>
                            <label for="">Moblie number</label> <br>
                            <div class="form-group">
                                <input type="text" name="W_mobileno" value="0000000000" class="form-control" placeholder="+91 xxxxxxxxxx">
                                 
                            </div>
                            <label for="">Valid ID Proof copy with self attested</label>

                            <div class="form-group">
                                <input type="file" name="W_Id_proof" value="NA" class="form-control" placeholder="Aadhar card/voter id card/passport/pan card/driving licence" >
                                 
                           </div>
                           <hr style="height:3px; background-color:#ed563b;">
                           <center><h2>Event Details</h2></center>
                           <label>FIR TYPE</label> <br>
                            <div class="form-group">
                                <input type="text" name="FIR_TYPE" class="form-control" placeholder="" required="true">
                                 
                            </div>
                             <label for="cars">select place of crime</label>
                                <div  class="form-group">
                                  <select name="cars" id="cars" onclick="F1();" style="height:40px; width:500px;">
                                         <option value=""  id="0">select Area</option>
                                         <option value="Maihar Police station"  id="1">Maihar</option>
                                         <option value="satna Police station" id="2">satna</option>
                                          <option value="Raigaon Police station" id="3">Raigaon</option>
                                         <option value="Amarpatan Police station" id="4">Amarpatan</option>
                                         <option value="Nagod Police station" id="5">Nagod</option>
                                         <option value="sitpura Police station" id="6">sitpura</option>
                                         <option value="Dhankher Police station" id="7">Dhankher</option>
                                         <option value="Jaitwara Police station" id="8">Jaitwara</option>
                                  </select> <label id="police_station" style="color:green;"></label>

                                  <script>

                                      function F1(){
                                          var x = document.getElementById('cars').value;
                                          document.getElementById('police_station').innerHTML=x;
 
                                        }


                                  </script>

                                </div>  
                                <label for="cars">Enter Pincode</label>
                                <div  class="form-group">
                                    <input type="number" name="pincode" placeholder="eg 485002" required=".{6}" >
                                </div> 


                            <label for="cars">select police station</label>
                                <div  class="form-group">
                                  <select name="Police_station" id="cars" style="height:40px; width:500px;">
                                         <option value="city police station">city police station</option>
                                         <option value="Maihar police station">Maihar police station</option>
                                          <option value="Nagod police station">Nagod police station</option>
                                         <option value="Baikunthpur police station">Baikunthpur police station</option>
                                         <option value="Ram Nagar police station">Ram Nagar police station</option>
                                         <option value="Singhpur police station">Singhpur police station</option>
                                         <option value="Amarpatan police station">Amarpatan police station</option>
                                         <option value="Kolgawan police station">Kolgawan police station</option>
                                         <option value="Mahila thana police station">Mahila thana police station</option>
                                         <option value="Babupur sub police station">Babupur sub police station</option>
                                         <option value="Sabhapur police station">Sabhapur police station</option>
                                         <option value="Satna police station(Traffic)">Satna police station(Traffic)</option>
                                         <option value="Jaitwara police station">Jaitwara police station</option>
                                         <option value="Nayagaon police station">Nayagaon police station</option>
                                         <option value="Jasso police station">Jasso police station</option>
                                         <option value="Kotar out post police station">Kotar out post police station</option>
                                         <option value="Amdara police station">Amdara police station</option>
                                         <option value="Barondha police station">Barondha police station</option>
                                         <option value="Bedera police station"> Bedera police station</option>
                                         <option value="Kothi police station">Kothi police station</option>
                                         <option value="Rampur Baghelan police station">Rampur Baghelan police station</option>
                                         <option value="Unchehra police station">Unchehra police station</option>


                                  </select>
                                </div>  
                               

                           <label for="">Place of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="text" name="E_place" class="form-control" style="height:50px; " placeholder="Address" required="true">
                                 
                            </div>
                            <label for="">Date of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="Date" name="E_date" class="form-control" style="height:30px; width:500px;" placeholder="DD/MM/YYYY" required="true">
                                 
                            </div>
                            <label for="">Time of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="time" name="E_time" class="form-control" style="height:30px; width:500px;" placeholder="DD/MM/YYYY" required="true">
                                 
                            </div>
                            <label for="">Any suspect</label>
                            <div class="form-group">
                        
                                  <input type="radio" name="E_suspect" id="suspect" value="Yes"> Yes
                                  <input type="radio" name="E_suspect" id="suspect" value="No"> No
                                
                            </div>
                            <label for="">Event Discription in the form of formal letter </label>
                            <p>Note: letter should contains all event  details in chronological order with legal signature containing date and time. </p>
                            <div class="form-group">
                                <input type="file" name="E_description" class="form-control" placeholder="" required="true" >
                                 
                           </div>
                            
                            <label for="">Any avidence/proof regarding event</label>
                            <div class="form-group">
                                <input type="file" name="E_anyproof" class="form-control" placeholder="Aadhar card/voter id card/passport/pan card/driving licence" required="true" >
                                 
                           </div>

                           <label for="">Any remarks</label> <br>
                           <input type="textarea" name="E_remarks" id="" style="width:1000px;height:100px;"> <br>

                            <br> <br>
                            
                                                      
                         <center><button class="btn btn-danger" type="submit" style="width:300px; background-color:#ed563b;font-size:30px;">Submit</button></center>  
                       </form>

                    </div>
                    <div class="panel-footer danger">
                       

                    </div>


                </div>


            </div>
    
</body>
</html>