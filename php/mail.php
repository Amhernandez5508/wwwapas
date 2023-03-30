<?php

$name = $_POST["name"];
$email = $_POST["mail"];
$message = $_POST["textArea"];

$to = "3131ale@gmail.com";
$email_subject = "Contacto WWWAPAS";
$headers = "From: $email";

mail($to, $email_subject, $message, $headers);
echo "\n\n\n<h1>    Lo contactaremos en breve</h1>"
?>