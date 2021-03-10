<?php

session_start();
//include('profile.php');
if(!isset($_SESSION['user_name'])){

   echo "<script> alert('login first ') </script>";
   echo"<script> location.href='index.php' </script>";    
}

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
$var=$_SESSION['pincode'];
$psid=$_SESSION['police_station_id'];
$ps=$_SESSION['ps'];
//echo "valeu".$var;
$query1="SELECT * FROM event_details WHERE pincode='$var' ORDER BY Event_id DESC" or die(mysqli_error($con));
$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));
//$rows1=mysqli_fetch_array($run1);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS_Admin_dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
     
    <style>
       table tr th{
           color:white;

       }
    
    </style>
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <?php include("include/header.php"); ?>
    
    <div class="container-fluid" style="margin-top:10%;">
        <div class="row">
            <div class="col-lg-6">
                <h4 style="float:left;color:rgb(228, 108, 10);">Police Station ID: <em> <?php echo"".$psid; ?> </em> </h4>
            </div>
            <div class="col-lg-6">
                 <h4 style="float:right;color:rgb(228, 108, 10);">Pankaj Pandey <br> <em style="margin-left:40px;">(SHO)</em></h4>

            </div>

        </div>

        <!-- list of fir -->
        <div class="row">
            <div class="col-lg-12">
                 <table class="table table-striped table-hover ">
                     <tr style="background-color:#2f3b4b;"> 
                         
                         
                         <th>FIR ID</th>
                         <th>TIME STAMP</th>
                         <TH>FIR TOPIC</TH>
                         <th>GET FIR COPY</th>
                         <TH>STATUS</TH>
                         <th>UPDATE STATUS</th>
                     </tr>
                    <?php 

                    if(mysqli_num_rows($run1)==0){
                        echo"No record found";
                    }
                    else{

                    
                     while($rows=mysqli_fetch_array($run1)){ ?>
                           <tr>
                              <td> <?php echo $rows['Event_id'];
                                       $E_id=0;
                                      
                              ?> </td>
                              <td><?php echo $rows['E_time']; ?></td>
                              
                              <td><?php echo $rows['FIR_TYPE'] ;?></td>

                              <td>
                                <a href="generatepdf.php?E_id=<?php  echo $rows['Event_id']; ?> "> <button class="btn btn-success">download</button></a>  </td>
                              <td style="color:green;"><?php echo $rows['FIR_STATUS'];?></td>

                              <td><a href="update_fir_status.php?E_id=<?php  echo $rows['Event_id']; ?>" class="btn btn-info">Update</a></td>

                           </tr>


                     <?php }
                    }
                     ?>
                     
                 </table>

            </div>
            

        </div>

    </div>

    <?php include('include/footer.php'); ?>
    
</body>
</html>