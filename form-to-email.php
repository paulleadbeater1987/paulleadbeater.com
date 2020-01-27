<?php

if(!empty($_POST['website'])) die();

  $name = $_POST['name'];
  $emailAddress = $_POST['emailAddress'];
  $phoneNumber = $_POST['phoneNumber'];
  $message = $_POST['message'];

  $emailFrom = 'noreply@paulleadbeater.com';
  $emailSubject = "New Website Enquiry";
  $emailBody = nl2br("<p>You have received a new enquiry via paulleadbeater.com </p>".
  	"Customer name: $name <br />".
  	"Customer email: $emailAddress <br />".
  	"Customer phone number: $phoneNumber <br />".
  	"<p>Message: <br /> $message</p>");

  $to = "paul_leadbeater@live.co.uk";
  
  $headers = "From: $emailFrom \r\n".
   "Reply-To: $emailAddress \r\n".
   "Content-type: text/html";

  mail($to, $emailSubject, $emailBody, $headers);
  header('Location: /');
 
 ?>