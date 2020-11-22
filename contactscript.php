<?php


$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="INSERT INTO contact_info(Name,email,subject,message) VALUE('$name','$email','$subject','$message')";
$queryrun=mysqli_query($con,$query) or die(mysqli_error($con));

if($queryrun){
    echo "<script> alert('messsage sent successfully') </script>";
    echo"<script> location.href='index.php' </script>";
}
else{
    echo "<script> alert('messsage not sent successfully') </script>";

}



?>