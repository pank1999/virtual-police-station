<?php
 session_start();
//set random name for the image, used time() for uniqueness
$aadhar=$_SESSION['aadhar'];
$con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con)); 
$query="SELECT Event_id  FROM  `event_details` WHERE Aadhar_id='$aadhar'  ORDER BY Event_id DESC  limit 1";
$queryrun=mysqli_query($con,$query);
$rows=mysqli_fetch_array($queryrun);
$fetch_event_id=$rows['Event_id'];


$filename =  time() . '.jpg';
$filepath = 'cphotos/';
 
if(!is_dir($filepath)){
    mkdir($filepath);
}
if(isset($_FILES['webcam'])){

    move_uploaded_file($_FILES['webcam']['tmp_name'],$filepath.$filename);
    $sql="UPDATE `event_details` set C_photo='$filename' WHERE Event_id='$fetch_event_id'";
    $rsql=mysqli_query($con,$sql);

}
//read the raw POST data and save the file with file_put_contents()
?>