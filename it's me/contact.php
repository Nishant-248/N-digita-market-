<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "yourmail@gmail.com";
$subject = "New Message from Website";

$body = "Name: $name \nEmail: $email \nMessage: $message";

mail($to,$subject,$body);

echo "Message Sent Successfully";

?>