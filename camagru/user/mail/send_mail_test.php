<?php
require_once("../../config/connection.php");
function ft_send_email($username,$email,$hash){

    $to      = $email; // Send email to our user
    $subject = 'Signup | Verification'; // Give the email a subject 
    $message = '
     
    Thanks for using Camagru!
    Your account has been created, you can login with the following username and password after you have activated your account by pressing the url below.
     
    ------------------------
    Username: '.$username.'
    ------------------------
     
    Please click this link to activate your account:
    http://10.12.100.163/verify.php?email='.$email.'&hash='.$hash.'
     
    '; // Our message above including the link
                         
    $headers = 'From:no-reply@camagru.com' . "\r\n"; // Set from headers
    // mail($to, $subject, $message, $headers); // Send our email

    $result = mail($to, $subject, $message, $headers);
    echo $result ? "sent" : "error";
}


//ft_send_email($_POST['username'], $_POST['email'], $hash);
ft_send_email("issam","issam.elferkh@gmail.com","hash");
echo "Hi";
