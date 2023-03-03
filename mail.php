<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = "torresbranden42@gmail.com";
$subject = "Mail From Website";

$headers = "From: ".$name. "\r\n";

$txt = "You have recieved an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n
    Message: ". $message;

if($email!=NULL) {
    mail($to, $subject, $txt, $headers);
}

header('Location:Thank-you.html');

?>