<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "torresbranden42@gmail.com";

mail($recipient, $phone, $message, $mailheader)
or die("Error!");

echo '
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <link rel="stylesheet" href="Thank-you.css">
</head>
<body>
    <div class="container">
        <p>Thank you for contacting us.<br> We will get back to you as soon as possible!</p>
        <p class="back">Go back to the <a href="index.html">homepage</a></p>
    </div>
</body>
</html>
';

?>