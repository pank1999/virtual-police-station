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

//$rows1=mysqli_fetch_array($run1);
if(isset($_POST['submit'])){
    $serach=$_POST['search'];
    $query2="SELECT * FROM event_details WHERE pincode='$var' AND  Event_id='$serach'" or die(mysqli_error($con));
    $run2=mysqli_query($con,$query2) or die(mysqli_error($query2));
}
else{
    $query1="SELECT * FROM event_details WHERE pincode='$var' ORDER BY Event_id DESC" or die(mysqli_error($con));
    $run1=mysqli_query($con,$query1) or die(mysqli_error($query1));
}



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
       table tr th{
           color:white;

       }

       .search{
           position: relative;
           width:60px;
           height:60px;
           background:#fff;
           border-radius:60px;
           transition:0.5s;
           box-shadow:0 0 0 2px #2573ef;
           overflow:hidden;
       }
       .search .icon{
           position: absolute;
           top:0;
           left:0;
           width:60px;
           height:60px;
           background:#fff;
           border-radius:60px;
           display:flex;
           justify-content:center;
           align-items:center;
           z-index:1000;
           cursor:pointer;

       }
       .search .icon::before{
           content:'';
           position:absolute;
           width:15px;
           height:15px;
           border:3px solid #287dfc;
           border-radius:50%;
           transform:translate(-4px,-4px);
           
       }
       .search .icon::after{
           content:'';
           position:absolute;
           width:2px;
           height:12px;
           background:#287dfc;
           transform:translate(6px,6px) rotate(315deg);


           
       }
       .search .active{
           width:350px;
       }
       .search .input{
           position:relative;
           width:300px;
           height:60px;
           left:60px;
           display:flex;
           justify-content:center;
           align-items:center;
        
       }
       .search .input input{
           position:absolute;
           width:100%;
           height:100%;
           top:0;
           color:black;
           left:60px;
           border:none;
           outline:none;
           font-size:18px;
           padding:10px 0;

        
       }
       .clear{
           position:absolute;
           top:50%;
           transform:translate(-50%);
           width:15px;
           height:15px;
           right:15px;
           background:#ffd;
           cursor:pointer;
           display:flex;
           justify-content:center;
           align-items:center;

       }
       .clear:before{
           position:absolute;
           content:'';
           width:1px;
           height:15px;
           background:#999;
           transform:rotate(45deg);

       }
       .clear:after{
           position:absolute;
           content:'';
           width:1px;
           height:15px;
           background:#999;
           transform:rotate(315deg);
           
       }
       .search-box input{
               height:30px;
               width:200px;
               float:right;
               border-radius:50px;
               padding-left:30px;
       }
       .search-box button{
           float: right;
           margin-right:30px;
           padding-top:5px;
           padding-left:10px;
        

       }
       .s-icon{
           border-radius:10px;
           margin-left:10px;

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
                <!--
                 <h4 style="float:right;color:rgb(228, 108, 10);">Pankaj Pandey <br> <em style="margin-left:40px;">(SHO)</em></h4>
                  
                  <div class="search">
                      <div class="icon">
            
                      </div>
                      <div class="input">
                             <input type="text" name="" id="myserach" placeholder="Search">
                      </div>
                        <span class="clear" onclick="document.getElementById('mysearch').value=''"></span>
                  </div>
            -->
            <div class="search-box">
              
                <form action="" method="post">
                <button class="btn btn-primary" type="submit">Reset</button>
                    <button class="btn btn-secondary s-icon" type="submit" name="submit"><i class="bi bi-search"></i></button> <input type="text" class="form-control"  name="search" placeholder="Search By FIR-ID" id="">
                </form>
            </div>


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
                    if(!isset($_POST['submit'])){ 
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
                } else{ if(mysqli_num_rows($run2)==0){
                           echo"<P style='float:right ;margin-right:200px; color:red;'>No Record Found</p>";
                        }
                       while($row2=mysqli_fetch_array($run2)){
                        
                           ?>
                             
                           <tr>
                              <td> <?php echo $row2['Event_id'];
                                       $E_id=0;
                                      
                              ?> </td>
                              <td><?php echo $row2['E_time']; ?></td>
                              
                              <td><?php echo $row2['FIR_TYPE'] ;?></td>

                              <td>
                                <a href="generatepdf.php?E_id=<?php  echo $row2['Event_id']; ?> "> <button class="btn btn-success">download</button></a>  </td>
                              <td style="color:green;"><?php echo $row2['FIR_STATUS'];?></td>

                              <td><a href="update_fir_status.php?E_id=<?php  echo $row2['Event_id']; ?>" class="btn btn-info">Update</a></td>

                           </tr>


                     <?php }
                     }
                     ?>
                     
                 </table>

            </div>
            

        </div>

    </div>

    <?php include('include/footer.php'); ?>

    <script>

        const icon=document.querySelector(".icon");
        const search =document.querySelector(".search");
        icon.onclick=function(){
            search.classList.toggle('active');
        }
    </script>
    
</body>
</html>