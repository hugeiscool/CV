<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$mailDestinataire="dimitri.huge@ensc.fr";

$from = "From: <".$email."> \nMime-Version:\n"; 
$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
$header= "Formulaire de contact";

$messageMail = "

		Nom :   ".$name."
		Email :   ".$email."
		Message: ".Stripslashes($message)."";
		
mail($mailDestinataire, $subject, $messageMail, $from);  

header ("Refresh: 0.005;URL=mailEnvoye.html");
			    
?>