<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "satishkakde736@mail.com";
$subject = $_POST['subject'];;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject=".$subjec."\r\n Message =" . $message;
$headers = "dpking.github.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>