<?php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


#enter your website name which you host
$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".  
               "Subject: $subject.\n".
               "User message: $message.\n";

  
#Enter Email where you recieve contact form info
$to = 'srav.ni211@gmail.com';

$headers = "From : $email_form \r\n";
$headers .= "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")


?>