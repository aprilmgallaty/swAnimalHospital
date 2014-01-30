<?php

	function isEmail($email)
	{ 
		if( (!preg_match('/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/', $email)) && 
			(preg_match('/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/',$email)) )
		{return true;}
		return false;
	}

	$error = '';
	$result = '';	

	if (empty($_POST['email'])){
		$error = 'You must fill out the email field';
	}
	elseif (!isEmail($_POST['email'])){ 
		$error = 'The email field is invalid'; 
	}
	else {
		$to = "burgess@swanimalhospital.net";
		$headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\nMIME-Version: 1.0\nContent-type: text/html; charset=utf-8"; 
		$subject = 'Customer message from SWAH website'; 
		$message = 'Phone number: ' . $_POST['phone'] . '<br/><br/>' . strip_tags($_POST['message']);
		$sent = mail($to, $subject, $message, $headers);
		if ($sent) {
			$result = 'Thank you for contacting us. We will get back to you as soon as possible.';
		}
		else {
			$result = 'Sorry, the message could not be sent at this time. Please try again later, or call us during normal business hours.';
		}
	}

	include "contact.php";

?>