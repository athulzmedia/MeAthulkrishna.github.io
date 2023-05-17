<?php
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "athulkrishnapp5833@gmail.com";
$txt=" Name =". $name ."\r\n Email =". $email ."\r\n Mobile Number =". $phone ."\r\n Subject =". $subject ."\r\n Message=". $message ;
$headers ="From: noreply@codeconia.com"."\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("location:thankyou.html");
?>