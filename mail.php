<?php
//edit 
// phpinfo();
$Name = "Da Duder"; //senders name
$email = "diokoucheikhou@gmail.com"; //senders e-mail adress
$recipient = "diokoucheikh@gmail.com"; //recipient
$mail_body = "The text for the mail..."; //mail body
$subject = "Test email"; //subject
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

mail($recipient, $subject, $mail_body, $header); //mail command :)
?>
