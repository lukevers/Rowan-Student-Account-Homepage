<?php
	
	$to = "me@lukevers.com";
	$from = $_POST["email"];
	$subject = $_POST["subject"];
	$body = $_POST["body"];
	$headers = "From: ".$from;
	
	//send me yo mail
	mail($to, $subject, $body, $headers);
	
	header('Location: http://elvis.rowan.edu/~eversl88/#thanks');
	
?>