<?php

include 'config.php';

$name = $_POST['name'];
$number = $_POST['number'];
$visitor_email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];



$email_from = '088682@glr.nl';

$email_subject = "Nieuwe Vraag ";

$email_body = "Gebruiker  $name \n telefoonnummer: $number \n email: $visitor_email .\n company: $company  \n " .
    "Heeft dit vraag/opmerking:\n $message";

$to = "088682@glr.nl";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: https://88682.stu.sd-lab.nl/beroeps2/verzamelaar/index.html#C3");




