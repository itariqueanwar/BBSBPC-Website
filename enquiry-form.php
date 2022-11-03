<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['course'];
$message = $_POST['message'];


$email_from = 'bbsbpc@bbsbpc.online';

$email_subject = 'New Enquiry';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"Course: $subject.\n".
				"User Message: $message.\n".


$to = 'atarique009@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);


header("Location: Contact.html");


 ?>