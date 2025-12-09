<?php

//Getting Form Values
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

//Email Info
$to = "fk75120233@gmail.com";

$headers = "From : $email\r\n";
$fullMessage = "Name : $name\nEmail :
$email\nSubject: $Subject\nMessage: \n$Message";

//Send Email
mail($to, $subject,$fullMessage,$headers);

//Whatsapp Forward
$MyWhatsapp= "923175848648";
$encodedMessage = urlencode($fullMessage);
$waURL = "https://wa.me/$MyWhatsapp?text=$encodedMessage";

header("Location: $waURL");
exit;

?>