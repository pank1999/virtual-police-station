<?php
session_start();
$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
   
    $updatedstatus=$_POST['fir_status'];
    $fir_id=$_POST['fir_id'];
    $query="UPDATE event_details  SET FIR_STATUS='$updatedstatus' WHERE Event_id=$fir_id";
    $queryrun=mysqli_query($con,$query) or die(mysqli_error($con));
    if($queryrun){
        echo"<script>alert('successfully updated')</script>";
        echo"<script>location.href='PS_Admin_dashboard.php'</script>";
    
    }
    else{
        echo "<script> alert(' Not  successfully Registered') </script>";
        echo"<script> location.href='PS_Admin_dashboard.php' </script>";
   
    }
    


?>