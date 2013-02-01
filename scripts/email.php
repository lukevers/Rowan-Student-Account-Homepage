<?php
	
	$to = "me@lukevers.com";
	$from = $_POST["email"];
	$subject = $_POST["subject"];
	$body = $_POST["body"];
	
	$headers = "From: ".$from;
	
	echo $to;
	echo $subject;
	echo $body;
	echo $headers;
	
	//mail($to, $subject, $body, $headers);
	
?>