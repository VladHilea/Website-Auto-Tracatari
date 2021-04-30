<?php

$prenume     =   $_POST['prenume'];

$nume     =   $_POST['nume'];

$telefon  =   $_POST['phone'];

$email    =   $_POST['mail'];

$mesaj    =   $_POST['message'];






 



$to      = 'contact@autocry24.ro';

$subject = "Contact Auto CRY 24 $nume $prenume";

$message = "

Nume: $nume $prenume 

Nr:  $telefon 

Mail:  $email 

$mesaj";

$headers = 'From: contact@autocry24.ro' . "\r\n" .

           'Reply-To: contact@autocry24.ro' . "\r\n" .

           'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://www.autocry24.ro");



?>
