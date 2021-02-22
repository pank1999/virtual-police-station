<?php

session_start();
//include('profile.php');
//if(!isset($_SESSION['email'])){

  // echo "<script> alert('login first ') </script>";
  // echo"<script> location.href='index.php' </script>";    
//}

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
$var=$_SESSION['aadhar'];

$query1="SELECT * FROM event_details WHERE Aadhar_id='$var' ORDER BY Event_id DESC";
$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));




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
                            <h3 style="float:left;margin-right:100px; color:white;">MAIHAR POLICE STATION</h3>
                            <li class="scroll-to-section"><a href="index.php" class="" style="color:white; background-color:#2f3b4b;">Home</a></li>
                            <li class="scroll-to-section"><a href="#" data-toggle="modal" data-target="#profilemodel" style="color:white; background-color:#2f3b4b;">Profile</a></li>
                          <!--  <li class="scroll-to-section"><a href="#our-classes" style="color:white;">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule" style="color:white;">Schedules</a></li>
                            <li class="scroll-to-section"><a href="#contact-us" style="color:white;">Contact</a></li> 
                          -->
                            <li class="main-button"><a href="logout.php" data-toggle="modal" data-target="">logout</a></li>
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

    <div class="container-fluid" style="margin-top:10%;">
        <div class="row">
            <div class="col-lg-6">
                <h4 style="float:left;color:rgb(228, 108, 10);">Police Station ID: <em>PS10101</em> </h4>
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

                           </tr>


                     <?php }
                    }
                     ?>
                     
                 </table>

            </div>
            

        </div>

    </div>
    
</body>
</html>