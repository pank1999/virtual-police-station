<?php
session_start();
$email=$_SESSION['email'];
$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
 $otp=$_POST['otp'];
 $res=mysqli_query($con,"SELECT email FROM `user` WHERE email='$email' and otp='$otp'") ;

 $rows=mysqli_num_rows($res);
 if($rows>0){
     echo "yes";
 }
 else{
     echo "no";
 }
?>