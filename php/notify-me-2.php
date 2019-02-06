<?php

	header('content-type: application/json');

	$o = new stdClass();
	$o->status = 'success';
	echo json_encode($o);

	$email_to = "info@orosilver.ec"; // Write your email here to receive the email addresses submitted
    $subject = 'Inscribete'; // Write the subject you'll see in your inbox

	$email = $_POST["email"];
	$text = "FELICITACIONES ! Pronto te enviaremos informacion sobre nuestras promociones: $email";

	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
    $headers .= 'From: LEGEND Template <noreply@yourdomain.com>' . "\r\n"; // As an example, the 'From' address should be set to something like 'noreply@yourdomain.com' in order to be based on the same domain as the form.

	mail($email_to, $subject, $text, $headers);

?>
