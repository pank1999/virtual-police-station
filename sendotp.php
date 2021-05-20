<?php
 $con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
 $email=$_POST['email'];
 $res=mysqli_query($con,"SELECT email FROM `user` WHERE email='$email'") ;
 $rows=mysqli_num_rows($res);
 if($rows==0){
     $otp=rand('11111','99999');
     mysqli_query($con,"INSERT INTO `user` VALUES('$email','$otp')");
     $html="Your OTP Verification Code is ".$otp;
     smtp_mailer($email,'OTP Verification',$html);
     echo "yes";
     } 
 else{
    $otp=rand('11111','99999');
    mysqli_query($con,"UPDATE `user` set otp=$otp WHERE email='$email' ");
    $html="Your OTP Verification Code is ".$otp;
    smtp_mailer($email,'OTP Verification',$html);
    echo "yes";
 }

 function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.sendgrid.net";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "pankajpandey9589@gmail.com";
	$mail->Password = "PKpandey@2000";
	$mail->SetFrom("pankajpandey9589@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}

?>