<?php
    
$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
   // session_start();

     $First_name=$_POST['first_name'];
     $Last_name=$_POST['last_name'];
     $Phone_number=$_POST['phone_number'];
     $id_proof=$_FILES['Id_proof'];
     $adhar_id=$_POST['Aadhar_id'];
     $Email=$_POST['email'];
     $password=$_POST['password'];
     // $password=md5($password);
    
      $file_name=$id_proof['name'];
      $file_error=$id_proof['error'];
      $file_tmp=$id_proof['tmp_name'];
      $destination_file='signup_id/'.$file_name;
      move_uploaded_file($file_tmp,$destination_file);

    $confirom_password=  mysqli_real_escape_string($con,$_POST['confirom_password']);
    
//$regex_email ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_contact="/^[6789][0-9]{9}$/";

/*if(!preg_match($regex_email,$email_id)){
    
    echo "<script>alert('Please enter a valid email id.')</script>";
    echo"<script>location.href='signup.php'</script>";
}*/
 if(strlen($password)<6){
    echo "<script>alert('Please enter a valid password.')</script>";
    echo"<script>location.href='index.php'</script>";
}
else if(strlen($Phone_number)<10){
    echo "<script>alert('Please enter a valid phone number.')</script>";
    echo"<script>location.href='index.php'</script>";
}
/*
else if(!preg_match($regex_contact,$phone_number)){
    
     echo "<script>alert('Please enter a valid contact no.')</script>";
     echo"<script>location.href='index.php'</script>";
}
*/
   else  {    $user_check = "SELECT email from user_info where Aadhar_id = '$adhar_id' "
              or die(mysqli_error($con));

              $user_check_query = mysqli_query($con,$user_check)
              or die(mysqli_error($con)); 



              if( mysqli_num_rows($user_check_query )>0){
                 echo "<script>alert('User with this Aadhar id already exits!')</script>";
                 echo "<script>location.href = 'index.php'</script>";
                }

 
             else {
                 $user_reg ="INSERT INTO `user_info` (first_name,last_name,phone_number,ID_proof,Aadhar_id,email,password) VALUES('$First_name','$Last_name','$Phone_number','$file_name',$adhar_id,'$Email','$password')";

                 $user_sub = mysqli_query($con,$user_reg)
                 or die(mysqli_error($con));



              if($user_sub){
                  session_start();
                $_SESSION['email'] = $Email;
                $_SESSION['first_name'] = $First_name;
                $_SESSION['last_name'] = $Last_name;
                $_SESSION['aadhar']=$adhar_id;

                $_SESSION['u_id'] = mysqli_insert_id($con);
                echo "<script>alert('Resgistered successfully ')</script>";
                echo "<script>location.href = 'userdashboard.php'</script>";
              //  header('location:index.php');
                 }
      
               else {
                  echo "<script>alert('Not registered successfully !retry')</script>";
                  echo "<script>location.href = 'index.php'</script>";
                }

         }
   }
?>
