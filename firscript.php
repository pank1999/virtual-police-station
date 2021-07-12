


<?php
session_start();

$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
if(isset($_POST['finalsubmit'])){
  //complainant details
  $full_name = mysqli_real_escape_string($con,$_POST['C_name']);
  $C_district = mysqli_real_escape_string($con,$_POST['C_district']);
  $C_fathername =  mysqli_real_escape_string($con,$_POST['C_fathername']);
  $C_address=mysqli_real_escape_string($con,$_POST['C_address']);
  $C_mobileno=  mysqli_real_escape_string($con,$_POST['C_mobileno']);
  $Aadhar_id= mysqli_real_escape_string($con,$_POST['Aadhar_id']);
  $C_Id_proof =  $_FILES['C_Id_proof'];

   //creating aadhar session
  $_SESSION['aadhar']=$Aadhar_id;


  $file_name1=$C_Id_proof['name'];
  $file_error1=$C_Id_proof['error'];
  $file_tmp1=$C_Id_proof['tmp_name'];
  $destination_file1='C_id/'.$file_name1;
  move_uploaded_file($file_tmp1,$destination_file1);

  
//witness details 

$W_full_name = mysqli_real_escape_string($con,$_POST['W_name']);
$W_district = mysqli_real_escape_string($con,$_POST['W_district']);
$W_fathername =  mysqli_real_escape_string($con,$_POST['W_fathername']);
$W_address=mysqli_real_escape_string($con,$_POST['W_address']);
$W_mobileno=  mysqli_real_escape_string($con,$_POST['W_mobileno']);
$W_Id_proof = $_FILES['W_Id_proof'];

$file_name3=$W_Id_proof['name'];
$file_error3=$W_Id_proof['error'];
$file_tmp3=$W_Id_proof['tmp_name'];
$destination_file3='W_id/'.$file_name3;
move_uploaded_file($file_tmp3,$destination_file3);



  //event details
  $FIR_TYPE = mysqli_real_escape_string($con,$_POST['FIR_TYPE']);
  $pincode= mysqli_real_escape_string($con,$_POST['pincode']);
  $police_station= mysqli_real_escape_string($con,$_POST['Police_station']);

  $E_place = mysqli_real_escape_string($con,$_POST['E_place']);
  $E_date = mysqli_real_escape_string($con,$_POST['E_date']);
  //$E_time =  mysqli_real_escape_string($con,$_POST['E_time']);
  $E_suspect=mysqli_real_escape_string($con,$_POST['E_suspect']);
  $E_description=$_FILES['E_description'];

    $file_name2=$E_description['name'];
    $file_error2=$E_description['error'];
    $file_tmp2=$E_description['tmp_name'];
    $destination_file2='E_description/'.$file_name2;
    move_uploaded_file($file_tmp2,$destination_file2);

    
      
    // $E_description=  mysqli_real_escape_string($con,$_FILES['E_description']);
    $Eanyproof=$_FILES['E_anyproof'];
       $file_name4=$Eanyproof['name'];
      $file_error4=$Eanyproof['error'];
      $file_tmp4=$Eanyproof['tmp_name'];
      $destination_file4='E_avidance/'.$file_name4;
      move_uploaded_file($file_tmp4,$destination_file4);
      
     $email=$_SESSION['email'];
    $E_remark=mysqli_real_escape_string($con,$_POST['E_remarks']);


    $insertquery1="INSERT INTO complainat_details(C_name,C_district,C_fathername,C_address,C_mobileno,C_Id_proof) VALUES('$full_name','$C_district','$C_fathername','$C_address','$C_mobileno','$file_name1')";
 
    $insertquery2="INSERT INTO witness_details(W_name,W_district,W_fathername,W_address,W_mobileno,W_Id_proof) VALUES('$W_full_name','$W_district','$W_fathername','$W_address','$W_mobileno','$file_name3')" ;
    
    $insertquery3="INSERT INTO event_details(FIR_TYPE , pincode ,Police_station,E_place,E_date,Aadhar_id,E_suspect,E_description,E_anyproof,E_remarks,E_time) VALUES('$FIR_TYPE','$pincode','$police_station','$E_place','$E_date','$Aadhar_id','$E_suspect','$file_name2','$file_name4','$E_remark' ,CURRENT_TIMESTAMP())";
     
    $updatequery="UPDATE `user` set Aadhar_Id=$Aadhar_id WHERE email='$email'";
     
    mysqli_query($con,$updatequery)or die(mysqli_error($con));
   $queryrun1=mysqli_query($con,$insertquery1) or die (mysqli_error(($con)));

   $queryrun2=mysqli_query($con,$insertquery2) or die(mysqli_error(($con)));

   $queryrun3=mysqli_query($con,$insertquery3) or die(mysqli_error(($con)));

    

   
   if($queryrun1 || $queryrun2 || $queryrun3){
     

    echo "<script> alert('FIR Lodged Successfully') </script>";
    echo"<script> location.href='Cphoto.php?c_mobile=$C_mobileno && adharid=$Aadhar_id'</script>";
   }

   else{
    echo "<script> alert(' Not  successfully Registered') </script>";
    echo"<script> location.href='firform.php' </script>";
   }

}

?>