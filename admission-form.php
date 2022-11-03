<?php 
$name = $_POST['name'];
$father_name = $_POST['fname'];
$mother_name = $_POST['mname'];
$visitor_email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$aggregate = $_POST['cgpa'];
$applied_for = $_POST['course'];
$phone_no = $_POST['phone'];
$address = $_POST['address'];

$email_from = 'bbsbpc@bbsbpc.online';

$email_subject = 'Admission Form';

$email_body = "User Name: $name.\n".
                "Father's Name: $father_name.\n".
                "Mother's Name: $mother_name.\n".
                "User Email: $visitor_email.\n".
                "Date of Birth: $dob.\n".
                "Gender: $gender.\n".
                "Educational Qualification: $qualification.\n".
                "Aggregare(%)/CGPA: $aggregate.\n".
                "Course Applied For: $applied_for.\n".
                "Phone no: $phone_no.\n".
                "Address: $address.\n".


$to = 'atarique009@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);


header("Location: admission-form.html");


 ?>