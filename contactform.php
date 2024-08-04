<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$project= $_POST['project'];
$subject= $_POST['subject'];
$message= $_POST['message'];
 
$to = "enthworks@gmail.com";
$subject = "Website Enquiry";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Phone =" . $phone. 
	"\r\n Company =" . $project .
	"\r\n Subject =" . $subject . 
	"\r\n Message =" . $message;
 
$headers = "From: enthworks@gmail.com";
		   
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:contact.html");
?>