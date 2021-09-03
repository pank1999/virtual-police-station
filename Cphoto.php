<?php 
      session_start();
             // if(isset($_SESSION['photosubmit'])){
  
             // echo"<script>alert('successfully submitted');</script>";
             //echo"<script>location:href='mobileverification.php';</script>";
             // }
            // $cname=$_GET['c_name'];
             $adharid=$_GET['adharid'];
             $cmobile=$_GET['c_mobile'];
             $_SESSION['c_mobile']=$cmobile;
            $con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
              
            $query="SELECT Event_id  FROM  event_details WHERE Aadhar_id='$adharid'  ORDER BY Event_id DESC  limit 1";
            $queryrun=mysqli_query($con,$query);
            $rows=mysqli_fetch_array($queryrun);
            $fetch_event_id=$rows['Event_id'];

            if(isset($_SESSION['photosubmit'])){

            
              

            }
           // echo $fetch_event_id;

          ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> take_snapshot</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <?php include('include/common_css.php');?>                               
<style>
  #camera{

width:350px;
height:350px;
border:1px solid green;

}
</style>
               
</head>
<body>
 <?php include('include/header_1.php'); ?>
<!--taking photo --->
                                  
<center>
  
  <div id="camera" style="margin-top:10%;"> </div> 
  
                                  
  <button onclick="take_snapshot()">Capture Image</button></center> 
</body>
                                  
                                  
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>


<script>
     
     Webcam.set({
        width:200,
        height:200,
        image_format:'jpeg',
        jpeg_quality:90,
       

      })
      
   
     Webcam.attach("#camera")

     function take_snapshot(){
          Webcam.snap(function(data_uri){
            Webcam.upload(data_uri,"saveimage.php",function(code,text,name){ 
            document.getElementById('results').innerHTML=
             '<img src="'+data_uri+'"/>';
             
            });
              
                                  
                                  
            });


     }

     function fun(){
       alert('photo uploaded successfully');
      


     }
                          
 </script>
                                  
                                  
                                  
 <center> <form action="userdashboard.php" method="post">
          <div id="results"  >
                                       
          </div>
                      
                <button type="submit" onclick="fun()" name="photosubmit" class="btn btn-success">Submit</button>
          
           
           </form>

          
 </center>
                                   
                           
                           
                           
                           
                          
                        
    
  
</body>
</html>

