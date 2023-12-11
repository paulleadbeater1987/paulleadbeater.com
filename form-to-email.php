<?php

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_phonenumber = $_POST['phonenumber'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'noreply@paulleadbeater.com';
$email_subject = "New Copy Hood Enquiry";
$email_body = "You have received a new message from \n
  Name: $name.\n
  Tel: $visitor_phonenumber.\n
  Email: $visitor_email.\n".
      "Here is the message:\n $message".
    
$to = 'paul_leadbeater@live.co.uk';
$headers = "From: noreply@paulleadbeater.com \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.
header('Location: index.html');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 