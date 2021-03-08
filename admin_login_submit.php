<?php

session_start();

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
$username=$_POST['user'];
$password=$_POST['password'];

$query="SELECT * FROM ps_admin_login where user_name='$username' ";
$run=mysqli_query($con,$query) or die (mysqli_error($con));
$result=mysqli_fetch_array($run);
$row=mysqli_num_rows($run);
//$pincode=$row['pincode'];


if($row==0){
    echo "<script>alert('No Such Admin exists !')</script>";
    echo"<script>location.href='admin_login_page.php'</script>";
    
}
else{
    if($result['Password']==$password &&  $result['user_name']==$username){
        $_SESSION['user_name']=$username;
        $_SESSION['pincode']=$result['pincode'];
        $_SESSION['police_station_id']=$result['ps_id'];
        $_SESSION['ps']=$result['police_station'];
        header('location:PS_Admin_dashboard.php');

    }
    else{
        echo "<script>alert('Incorrect password! retry')</script>";
      //  echo "<script>location.href = 'index.php'</script>";          

    }
}

?>
