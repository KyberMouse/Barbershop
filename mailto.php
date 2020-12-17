<?php

$name= $_POST ['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'filip.kocifaj@gmail.com';

$email_subject= "Barbershop Nová správa";

$email_body= "Meno používateľa: $name.\n".
             "E-mail používateľa: $visitor_email.\n".
              "Správa: $message.\n";

$to="filip.kocifaj@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>