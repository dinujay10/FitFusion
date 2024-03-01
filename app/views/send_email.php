<?php
// Get the email address from the POST request
$email = $_POST['email'];

// Send the email
$to = $email;
$subject = 'Confirmation Email';
$message = 'Your confirmation message here.';
$headers = 'From: your_email@example.com';

// Use a proper email sending function like mail() or a library like PHPMailer
$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    echo 'Email sent successfully';
} else {
    echo 'Error sending email';
}

  
?> 
