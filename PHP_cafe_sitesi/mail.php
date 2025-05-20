<?php

$name = $_POST["name"];
$email = $_POST["Email"];
$content = $_POST["message"];
$to = "sabri6yilmaz@gmail.com";
$mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
mail($to, $subject, $content, $mailHeaders);
header("Location:index.html");
?>