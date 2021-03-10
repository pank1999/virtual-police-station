<?php
session_start();
if(isset($_SESSION['email'])){
   
    
    
     // echo "<script>alert('You are successfully logout !')</script>"; 
     session_destroy();
    header('location:index.php');
}
else if(isset($_SESSION['user_name'])){
    session_destroy();
    header('location:index.php');
}


?>