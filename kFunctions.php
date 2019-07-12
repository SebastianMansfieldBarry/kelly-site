<?php

function sendEmail() {
  date_default_timezone_set( 'Africa/Johannesburg' );
  $currentTime = date("h:i:sa");


$from = "sendermeail@localhost";
$to = "sebastian.mansfieldbarry@gmail.com";
$subject = "Kropman Site test email sent at: " . $currentTime;
$message = "This is a test to check if php mail function sends out the email";
$headers = "From:" . $from;

if ( mail($to, $subject, $message, $headers) ) {
   echo "Message successfully sent, supposedly, at: " . $currentTime;
} else {
   echo "Message delivery failed...";
}

echo "What message is being sent here?";
}

?>