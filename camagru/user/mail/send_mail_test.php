<?php
// require_once("../../config/connection.php");
// function ft_send_email($username,$email,$hash){

//     $to      = $email; // Send email to our user
//     $subject = 'Signup | Verification'; // Give the email a subject 
//     $message = '
     
//     Thanks for signing up In Camagru!
//     Your account has been created, you can login with the following username and password after you have activated your account by pressing the url below.
     
//     ------------------------
//     Username: '.$username.'
//     ------------------------
     
//     Please click this link to activate your account:
//     http://10.12.100.163/verify.php?email='.$email.'&hash='.$hash.'
     
//     '; // Our message above including the link
                         
//     $headers = 'From:noreply@camagru.com' . "\r\n"; // Set from headers
//     mail($to, $subject, $message, $headers); // Send our email
// }


// //ft_send_email($_POST['username'], $_POST['email'], $hash);
// ft_send_email("issam","issam.elferkh@gmail.com","hash");
// echo "Hi";


// // Pear Mail Library
// require_once "Mail.php";

// $from = '<fromaddress@gmail.com>';
// $to = '<issam.elferkh@gmail.com>';
// $subject = 'Hi!';
// $body = "Hi,\n\nHow are you?";

// $headers = array(
//     'From' => $from,
//     'To' => $to,
//     'Subject' => $subject
// );

// $smtp = Mail::factory('smtp', array(
//         'host' => 'ssl://smtp.gmail.com',
//         'port' => '465',
//         'auth' => true,
//         'username' => 'issam.web1337@gmail.com',
//         'password' => '2019@bionicUBUNTU'
//     ));

// $mail = $smtp->send($to, $headers, $body);

// if (PEAR::isError($mail)) {
//     echo('<p>' . $mail->getMessage() . '</p>');
// } else {
//     echo('<p>Message successfully sent!</p>');
// }



$to      = 'issam.elferkh@gmail.comt';
$subject = 'Postfix Test';
$message = 'A test email';
$headers = 'From: noreply@mydomain.com' . "\r\n" .
  'Reply-To: noreply@mydomain.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

