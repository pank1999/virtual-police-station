<?php
session_start();
if(!isset($_SESSION['email'])){

   echo "<script> alert('login first ') </script>";
   echo"<script> location.href='index.php' </script>";    
}
///$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));

//$query1="SELECT * FROM event_details";
///$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));
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
    .r:after{
        content:"  *";
        color:red;
    }
    .form-box{
        margin-left:12%;
        width:80%;
        
    }
    .text-area{
        width:100%;
        height:100px;
    }
    input[type="text"]{
        box-shadow: 0 0 5pt 0.5pt #d3d3d3;
        border-radius:10px;
        height:40px;
    }
    input[type="time"]{
        box-shadow: 0 0 5pt 0.5pt #d3d3d3;
        border-radius:20px;
        width:30%;
    }
    input[type="Date"]{
        box-shadow: 0 0 5pt 0.5pt #d3d3d3;
        border-radius:20px;
        width:30%;
    }
    input[type="textarea"]{
        box-shadow: 0 0 5pt 0.5pt #d3d3d3;
        border-radius:10px;
        
    }
    input[type="file"]{
        box-shadow: 0 0 5pt 0.5pt #d3d3d3;
        border-radius:10px;
        height:40px;
        
    }

    
    @media  only screen AND (max-width:720px){
        .form-box{
        margin-left:0%;
        margin-top:5%;
    }
    .text-area{
        width:100%;
        height:100px;
    }
    
    
    }
    </style>

    
</head> 
<body>
     
    <?php include('include/header_1.php') ?>
    <div style="margin-top:8%;"><marquee style="color:green; font-size:20px;" behavior="" scroll-amount="12" direction="">Note:please fill the appropriate data in the form because it will be legally verfied by government officials,if any inappropiate information found,then the complaint would be rejected with in 24 hours.</marquee></div>
    <div class="col-10  col-12 form-box">
                <div class="panel panel-danger">
                    <div class="panel-heading" style="background-color:#ed563b;">
                    
                         <h1 style="color:white;">Lodge an FIR</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning"></p>
                       <form   method="POST" role="form" action="firscript.php" enctype="multipart/form-data">
                            <center><h2>Complainant Details</h2></center>    
                            <label for=""  class="r" >Name of the complainant</label> <br>

                            <div class="form-group">
                                <input type="text" name="C_name" class="form-control" placeholder="Full Name" required="true" >
                                 
                            </div>
                            <label for="" class="r">Complainant's  District</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_district" class="form-control" placeholder="eg. satna"  required="true" >
                                 
                            </div>
                            <label for="" class="r"> complainant's Father Name</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_fathername" class="form-control" placeholder="Full Name" required="true"   >
                                 
                            </div>
                            <label for="" class="r">Address of complainant</label> <br>
                            <div class="form-group">
                                <input type="text" name="C_address" class="form-control" placeholder="address" required="true" >
                                 
                            </div>
                            <label class="r" for="">Moblie number</label> <br>
                            <input type="text" name="C_mobileno" value="" class="form-control" placeholder="+91 xxxxxxxxxx" >
                                 

                            

                            <label for="" class="r">Aadhar card number</label>

                            <div class="form-group">
                                <input type="text" name="Aadhar_id" class="form-control" placeholder="Aadhar card number" required="true"  pattern=".{12}" >
                                 
                           </div>
                            <label class="r" for="">Valid ID Proof copy with self attested</label>

                            <div class="form-group">
                                <input type="file" name="C_Id_proof" class="form-control" required="true"  placeholder="Aadhar card/voter id card/passport/pan card/driving licence"  >
                                 
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
                            
                            <div class="form-group">
                                <label for="">Moblie number</label> 
                                <input type="text" name="W_mobileno" value="00000000000" class="form-control" placeholder="+91 xxxxxxxxxx" >
                                 
                            </div>
                            <label for="">Valid ID Proof copy with self attested</label>

                            <div class="form-group">
                                <input type="file" name="W_Id_proof" value="NA" class="form-control" placeholder="Aadhar card/voter id card/passport/pan card/driving licence" >
                                 
                           </div>
                           <hr style="height:3px; background-color:#ed563b;">
                           <center><h2>Event Details</h2></center>
                           <label class="r">FIR TYPE</label> <br>
                            <div class="form-group">
                                <select name="FIR_TYPE" onclick="Firtype()" class="form-control" id="fir">
                                
                                      <option value="">select</option>
                                      <option value="Burglary">Burglary</option>
                                      <option value="Robbery">Robbery</option>
                                      <option value="Assault">Assault</option>
                                      <option value="cybercrime">cybercrime</option>
                                      <option value="Domestic voilence">Domestic voilence</option>
                                      <option value="other">other</option>
                                </select>
                                <input type="text" id="other" placeholder="Enter FIR Type" name="FIR_TYPE" class="form-control" style="visibility:hidden;position:absolute; margin-top:10px;">
                                <script>

                                         function Firtype(){
                                                var x = document.getElementById('fir').value; 
                                                if(x=="other"){
                                                    document.getElementById('other').style.visibility="visible";
                                                    document.getElementById('other').style.position="relative";
                                                }
                                                else{
                                                    document.getElementById('other').style.visibility="hidden";
                                                    document.getElementById('other').style.position="absolute";
                                                }
                                                   
                                                
                                               

                                         }


</script>
                                
                            </div>   
                                
                                <div class="form-group">
                                <label class="r">Select State</label> 
                                <select name="state" class="form-control" id="">
                                
                                      <option value="">select state</option>
                                      <option value="Burglary">Andhra Pradesh</option>
                                      <option value="Robbery">Arunachal Pradesh</option>
                                      <option value="Assault">Assam</option>
                                      <option value="cybercrime">Bihar</option>
                                      <option value="Chhattisgarh">Chhattisgarh</option>
                                      <option value="Goa">Goa</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Haryana">Haryana</option>
                                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                                      <option value="Jharkhand">Jharkhand</option>
                                      <option value="Karnataka">Karnataka</option>
                                      <option value="Kerala">Kerala</option>
                                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Manipur">Manipur</option>
                                      <option value="Meghalaya">Meghalaya</option>
                                      <option value="Mizoram">Mizoram</option>
                                      <option value="Nagaland">Nagaland</option>
                                      <option value="Odisha">Odisha</option>
                                      <option value="Punjab">Punjab</option>
                                      <option value="Rajasthan">Rajasthan</option>
                                      <option value="Sikkim">Sikkim</option>
                                      <option value="Tamil Nadu">Tamil Nadu</option>
                                      <option value="Telangana">Telangana</option>
                                      <option value="Tripura">Tripura</option>
                                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                                      <option value="Uttarakhand">Uttarakhand</option>
                                      <option value="West Bengal">West Bengal</option>
                                      
                                </select>
                              
                            </div>
                             <label class="r"for="cars">Enter place of crime</label>
                                <div  class="form-group">
                                    <input type="text" placeholder="Enter Place Of Crime" name="cars" id="" class="form-control">
                                    <!--
                                  <select name="cars"   id="cars" onclick="F1();" style="height:40px; " required="true" >
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
                                     -->
                                  <script>

                                      function F1(){
                                          var x = document.getElementById('cars').value;
                                          document.getElementById('police_station').innerHTML=x;
 
                                        }


                                  </script>

                                </div>  
                                <label  class="r" for="cars">Enter Pincode</label>
                                <div  class="form-group">
                                    <input type="number"  class="form-control" name="pincode" placeholder="eg 485002" required="true"  >
                                </div> 


                            <label class="r" for="cars">select police station</label>
                                <div  class="form-group">
                                  <select  class="form-control" name="Police_station" id="cars" style="height:40px; ">
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
                               

                           <label for="" class="r">Place of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="text" name="E_place" class="form-control" style="height:50px; "  required="true" placeholder="Address">
                                 
                            </div>
                            <label for="" class="r">Date of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="Date" name="E_date" class="form-control" style="height:30px;" required="true"  placeholder="DD/MM/YYYY" >
                                 
                            </div>
                            <label for="" class="r">Time of Occurrence</label> <br>
                            <div class="form-group">
                                <input type="time" name="E_time" class="form-control" style="height:30px; " required="true"  placeholder="DD/MM/YYYY" >
                                 
                            </div>
                            <label for="" class="r">Any suspect</label>
                            <div class="form-group">
                        
                                  <input type="radio"  onclick="s1()"  id="suspect" value="Yes"> Yes
                                  <input type="radio" name="E_suspect" id="suspect-n" value="No"> No
                                  <input type="text" placeholder="Enter Suspect Description " class="form-control" name="E_suspect" id="suspect-t" style="visibility:hidden;position:absolute;">
                                
                            </div>
                            <script>

                                      function s1(){
                                          var x = document.getElementById('suspect').value;
                                          if(x=="Yes"){
                                            document.getElementById('suspect-t').style.visibility="visible";
                                          document.getElementById('suspect-t').style.position="relative";

 
                                          }
                                          else{
                                            document.getElementById('suspect-t').style.visibility="hidden";
                                          document.getElementById('suspect-t').style.position="absolute";
 
                                          }
                                         
                                        }


                                  </script>
                            
                            <label class="r" for="">Event Discription in the form of formal letter </label>
                            <p style="color:red;">Note: letter should contains all event  details in chronological order with legal signature containing date and time.Check The Sample format in home page. </p>
                            <div class="form-group">
                                <input type="file" name="E_description" class="form-control" placeholder="" required="true"  >
                                 
                           </div>
                            
                            <label for="">Any avidence/proof regarding event</label>
                            <div class="form-group">
                                <input type="file" name="E_anyproof" class="form-control"  placeholder="Aadhar card/voter id card/passport/pan card/driving licence"  >
                                 
                           </div>

                           <label for="">Any remarks</label> <br>
                           <input type="textarea" class="form-control text-area" name="E_remarks" id="" style=""> <br>

                            <br> <br>
                            <input  type="checkbox" name="checked" required="true">
                            <p style="font-size:18px;color:black; font-weight:bold;">I hereby to declare that, all the information filled in this form are true to the best of my knowledge if found inappropriate the FIR is liable to be rejected.   </p>
                           
                                                      
                         <center><button class="btn btn-danger" type="submit" name="finalsubmit" style="width:300px; background-color:#ed563b;font-size:30px;">Submit</button></center>  
                       </form>

                    </div>
                    <div class="panel-footer danger">
                       

                    </div>


                </div>
                


            </div>


            
    
</body>
</html>