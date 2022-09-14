<?php
//get data from form  
$name = $_GET'name'];
$email= $_GET['email'];
$message= $_GET['message'];
$to = "satishkakde736@mail.com";
$subject = $_GET['subject'];;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject=".$subjec."\r\n Message =" . $message;
$headers = "dpking.github.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
