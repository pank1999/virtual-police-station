<?php

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
session_start();



$email =  mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
//$password = md5($password);

$select_query ="SELECT id ,email, password FROM user_info WHERE  email ='$email'"
  or die(mysqli_error($con));

$select_query_result = mysqli_query($con,$select_query)
  or die(mysqli_error($con));

$rows = mysqli_num_rows($select_query_result);

    
if($rows == 0){ 

echo "<script>alert('No such user exits with this email ! signin now')</script>";
echo "<script>location.href = 'index.php'</script>";

}

$pass = "SELECT * from user_info where email = '$email'";

$pass_result = mysqli_query($con,$pass)
  or die(mysqli_error($con));

$pass_com = mysqli_fetch_array($pass_result)
  or die(mysqli_error($con));  




 if( $pass_com['password'] !== $password){
    
echo "<script>alert('Incorrect password! retry')</script>";
echo "<script>location.href = 'index.php'</script>";   
    
}

else {
 
  session_start();
   $_SESSION['email'] = $email;
  $_SESSION['u_id'] = $pass_com['id'];
  $_SESSION['first_name'] =$rows['first_name'];
  $_SESSION['last_name']=$rows['last_name'];

 //echo $_SESSION['email'];
 // echo $_SESSION['u_id'];
  // echo "<script>alert('Wellcome $name')</script>"; 
//echo "<script>location.href = 'Dashboard01.php'</script>";
header('location:userdashboard.php');
  
}



?>


