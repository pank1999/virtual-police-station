<?php
session_start();
 $con= new mysqli("localhost:3308","root","","virtual_police_station") or die(mysqli_error($con));
 $email=$_POST['email'];
 
 $res=mysqli_query($con,"SELECT email FROM `user` WHERE email='$email'") ;
 $rows=mysqli_num_rows($res);
 if($rows==0){
     $otp=rand('11111','99999');
     mysqli_query($con,"INSERT INTO `user` VALUES('$email','$otp')");
     $_SESSION['email']=$email;
     send_mail($otp);
     
     echo "yes";
     } 
 else{
    $otp=rand('11111','99999');
    mysqli_query($con,"UPDATE `user` set otp=$otp WHERE email='$email' ");
    $_SESSION['email']=$email;
	send_mail($otp);
    echo "yes";
 }


 function send_mail($otp){
   require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'pankajpandey9589@gmail.com';                 // SMTP username
 $mail->Password = 'PKpandey@2000';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;                                    // TCP port to connect to

 $mail->setFrom('pankajpandey9589@gmail.com', 'VPS');
 $mail->addAddress($_POST['email']);     // Add a recipient
 //$mail->addAddress('ellen@example.com');               // Name is optional
 $mail->addReplyTo('pankajpandey9589@gmail.com');
 //$mail->addCC('cc@example.com');
 //$mail->addBCC('bcc@example.com');

 //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 $mail->isHTML(true);                                  // Set email format to HTML

 $mail->Subject = 'OTP VERIFICATION';
 $mail->Body    = 'OTP verification code is'.$otp.'</b>';
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo; 
 } else {
    //echo 'Message has been sent';
 }

}


?>