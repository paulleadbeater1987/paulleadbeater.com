<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../phpmailer/src/Exception.php';
require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../phpmailer/src/SMTP.php';

# Message vars
$msg = '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit'))
{
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  # Check required fields
  if (!empty($name) && !empty($email) && !empty($message)) {

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      
      $mail = new PHPMailer(true);
      
      try {
        //Server settings
        $mail->isSMTP();                           // Send using SMTP
        $mail->Host       = 'mail.privateemail.com';   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                  // Enable SMTP authentication
        $mail->Username   = 'paul_leadbeater@live.co.uk';   // SMTP username
        $mail->Password   = 'h0meLessNess!';       // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
        $mail->Port       = 465;                   // TCP port to connect to

        //Recipients
        $mail->setFrom('paul_leadbeater@live.co.uk', 'Paul Leadbeater');
        $mail->addAddress('paul_leadbeater@live.co.uk', 'Paul Leadbeater');    // Add a recipient
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);                       // Set email format to HTML
        $mail->Subject = 'Software';
        $mail->Body    = '<h2>Software</h2>
                          <h4>Name</h4><p>'.$name.'</p>
                          <h4>Email</h4><p>'.$email.'</p>
                          <h4>Message</h4><p>'.$message.'</p>';
        $mail->AltBody = 'Name: '.$name."\n".'Email: '.$email."\n".'Message: '.$message;

        if ($mail->send()) {
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'Your email has NOT been sent. Error: ' . $mail->ErrorInfo;
          $msgClass = 'alert-danger';
        }
      } catch (Exception $e) {
        $msg = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
        $msgClass = 'alert-danger';
      }
    }
  } else {
    # Empty boxes
    $msg = 'Please fill in ALL fields';
    $msgClass = 'alert-danger';
  }
}

?>