<?php

$emailSubject = 'An Interested Dude Wants to send an email';
$webmaster = 'mefarazath@gmail.com';

$name = $__POST['name'];
$email = $__POST['email'];
$message= $__POST['message'];

$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Questions: $message <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";

$success = mail($webMaster, $emailSubject, $body, $headers);

$theResults = <<<EOD
EOD;

echo "$theResults";
?>
