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

$Eid= $_GET['E_id'];

//echo "valeu".$var;
$query1="SELECT * FROM event_details WHERE Event_id='$Eid' ORDER BY Event_id DESC" or die(mysqli_error($con));
$run1=mysqli_query($con,$query1) or die(mysqli_error($query1));
//$rows1=mysqli_fetch_array($run1);
$rows=mysqli_fetch_array($run1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update status</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
     

    <style>

       table tr{

       }
       table tr th{
        color:#2f3b4b;
       }
    
    </style>
</head>
<body>

<?php include('include/header.php'); ?>
<div class="container-fluid"  style="margin-top:10%;">

        <div class="row">
            <div class="col-lg-6">
                <h4 style="float:left;color:rgb(228, 108, 10);">Police Station ID: <em> <?php echo"".$psid; ?> </em> </h4>
            </div>
            <div class="col-lg-6">
                 <h4 style="float:right;color:rgb(228, 108, 10);">Pankaj Pandey <br> <em style="margin-left:40px;">(SHO)</em></h4>

            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 offset-3">
                 <form action="updatescript.php" method=post>
                   <div class="form-group">
                        <label for="">FIR ID</label>
                       <input type="text" name="fir_id" class="form-control"   value="<?php echo $rows['Event_id'] ;?>">
                   </div>
                   <div class="form-group">
                        <label for="">FIR TOPIC</label>
                       <input type="text" name="fir_topic" class="form-control" disabled value="<?php echo $rows['FIR_TYPE'] ;?>">
                   </div>
                   <div class="form-group">
                       <label for="">FIR STATUS</label>
                       <input type="text"  name="fir_status"class="form-control" value="<?php echo $rows['FIR_STATUS'] ;?>">
                   </div>
                   
                   <div class="form-group">
                        <input type="submit"  name="update" class="btn btn-success" value="update" >
                   </div>

                 
                 
                 
                 </form>
                 

            </div>
            

        </div>

</div>


</body>
</html>