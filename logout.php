<?php

if(!isset($_SESSION['email'])){
   
    
    
    echo "<script>alert('You are successfully logout !')</script>"; 
     session_destroy();
    header('location:index.php');
}
else{
    
   // header('location:index.php');
}
?>