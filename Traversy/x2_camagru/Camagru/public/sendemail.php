<?php
   $to      = 'linuvoromu@crowd-mail.com';
   $subject = 'le sujet';
   $message = 'Bonjour !';
   $headers = 'From: linuvoromu@crowd-mail.com' . "\r\n" .
   'Reply-To: linuvoromu@crowd-mail.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

   if (mail($to, $subject, $message, $headers))
    echo "fgfc";
   ?>