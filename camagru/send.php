<?php
$to      = 'issam.elferkh@gmail.com';
$subject = 'Postfix Test';
$message = 'A test email';
$headers = 'From: issam.elferkh@gmail.com' . "\r\n" .
  'Reply-To: noreply@mydomain.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>