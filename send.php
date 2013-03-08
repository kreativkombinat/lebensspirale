<?php
$email_to = "lebensspirale@aol.com";
$name = $_POST["name"];
$email = $_POST["email"];
$url = $_POST["url"];
$message = $_POST["message"];
$text = "NAME: $name<br>
         EMAIL: $email<br>
		 URL: $url<br>		 
         MESSAGE: $message";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: <$email>" . "\r\n";
mail($email_to, "Nachricht via Kontaktformular", $text, $headers);
?>
