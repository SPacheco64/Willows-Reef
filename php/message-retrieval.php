<?php
	$errors = "";
	$myemail = "info@willowsreef.com";
	
	if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"]))
	{
		$errors .= "\n Error: all fields are required";
	}

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email))
	{
		$errors .= "\n Error: Invalid email address";
	}

	if(empty($errors))
	{
		$to = $myemail;
		$email_subject = "Contact Us Form Message From: $name";
		$email_body = "Customer Name: $name\n\n$message\n\nCustomer's Email: $email";

		if(mail($to, $email_subject, $email_body))
		{
			header('Location: /message-received');
		} 
		else
		{
			echo 'Unable to send message. Please make sure all information is correct!';
		}
	}
?>