<?php
session_start();
if(!isset($_SESSION['aadhar'])){

  echo "<script> alert('login first ') </script>";
  echo"<script> location.href='index.php' </script>";    
}

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
$var=$_SESSION['aadhar'];
$query1="SELECT * FROM user_info WHERE Aadhar_id='$var'";
$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));

$rows=mysqli_fetch_array($run1);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
  <?php include('include/common_css.php');  ?>
  <style>
      .profile{
        margin-top:10%;
        box-shadow:3px 2px 2px 3px gray;
        border-radius:10px;
        justify-content:center;
        width:60%;
        background-color:black;
      }
      .item{
          margin-top:20px;
          text-align:center;
          border-bottom:2px solid white;
          
      }
      .item:last-child{
        border-bottom:none;
      }
      p{
        color:white;
      }
      .field p{
        font-size:16px;
        font-weight:bold;


      }
      
      .field{
         border-right:3px solid yellow;

      }
      .item:hover{
          background-color:orange;
      }
      h1{
        text-align:center;
        margin-bottom:20px;
        color:white;
        border-bottom:2px solid white;
      }
  </style>
</head>
<body>
  <?php 
      include('include/header_1.php');
  
  ?>
    <div  class="container profile">
         <h1>Profile Details</h1>
        <div class="row">
            <div class="col-6 field">
                  <div class="item"> 
                        <p>First Name</p>
                  </div>
                  <div class="item">
                      <p> Last Name</p>
                  </div>
                  <div class="item">
                       <p>Mobile Number</p>
                  </div>
                  <div class="item">
                      <p>Aadhar Id</p>
                  </div>
                  <div class="item">
                       <p>Password</p>
                  </div>
            </div>  
            <div class="col-6">
            <div class="item"> 
                        <p><?php echo $rows['first_name']; ?></p>
                  </div>
                  <div class="item">
                      <p><?php echo $rows['last_name']; ?></p>
                  </div>
                  <div class="item">
                       <p><?php echo $rows['phone_number']; ?></p>
                  </div>
                  <div class="item">
                      <p><?php echo $rows['Aadhar_id']; ?></p>
                  </div>
                  <div class="item">
                       <p><?php echo base64_encode($rows['password']); ?></p>
                  </div>

            </div>

        </div>

    </div>

   



</body>
</html>