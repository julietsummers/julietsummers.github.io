<?php
$to = 'my.email1@gmail.com';
$subject = 'New Form Submission';
$message = "Name: {$_POST['name']}\nSurname: {$_POST['surname']}\nQuery: {$_POST['query']}";

mail($to, $subject, $message);
?>
