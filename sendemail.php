<?php

include 'index.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer-master/src/Exception.php';
require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';
//objectname->member

$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'dishika.m@somaiya.edu';   // SMTP username
$mail->Password = 'Dishika@16';   // SMTP password
$mail->SMTPSecure = 'ssl';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                    // TCP port to connect to

// Sender info
$mail->setFrom('dishika.m@somaiya.edu', 'Smile Foundation');
//$mail->addReplyTo('xyz@gmail.com', 'xyz account');

// Add a recipient
$mail->addAddress($email,$name);

// $mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'Newsletter from Smile Foundation';

// Mail body content
$bodyContent = '<h1>Thank you for Subscribing</h1>';
$bodyContent .= '<p>This email is sent by <b>Smile Foundation</b>. We are glad that you chose us to be a part of and look forward to your active contribution both in deed and person. Keep spreading smiles!</p>';
$mail->Body    = $bodyContent;

// Send email
if($mail->send()) {
    ;
} else {
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}

?>
