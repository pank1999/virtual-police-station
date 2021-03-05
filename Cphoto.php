<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> take_snapshot</title>

  <?php  include('include/common_css.php') ;?>

</head>
<style>
 #camera{

width:500px;
height:500px;
border:1px solid green;

}
</style>

       
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
               document.getElementById('results').innerHTML=
              '<img src="'+data_uri+'"/>';
                                   
                                   
             });


      }
                           
  </script>
                                   
                                   
                                   
  <center>  
          <div id="results"  >
                                        
          </div>
          <?php 
       
             // if(isset($_SESSION['photosubmit'])){
  
             // echo"<script>alert('successfully submitted');</script>";
             //echo"<script>location:href='mobileverification.php';</script>";
             // }
             $cname=$_GET['c_name'];
                                        
          ?>                
           <a href="mobileverification.php?c_name=$cname">
            <button type="submit" name="photosubmit" class="btn btn-succes btn-mediam">Submit</button>
            </a>
  </center>
                                      
                                      
                                      
  
                                   

                    
                                   
                           
                           
                           
                           
                          
                        
    
  
</body>
</html>

