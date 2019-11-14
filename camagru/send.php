<?php
function ft_send_email($username,$email,$hash){

    $to      = $email; // Send email to our user
    $subject = 'Signup | Verification'; // Give the email a subject 
    $message = '
     
    Thanks for signing up In Camagru!
    Your account has been created, you can login with the following username and password after you have activated your account by pressing the url below.
     
    ------------------------
    Username: '.$username.'
    ------------------------
     
    Please click this link to activate your account:
    http://10.12.100.163/verify.php?email='.$email.'&hash='.$hash.'
     
    '; // Our message above including the link
                         
    $headers = 'From:noreply@camagru.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}
$_POST['username'] = "issam";
$_POST['email'] = "issam.elferkh@gmail.com";
$hash = "hash213545dgs435g4d34gh3";
if (ft_send_email($_POST['username'], $_POST['email'], $hash)) {
    echo "OK";
} else {
    echo "NOK";
}
        








