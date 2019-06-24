<?php
	$name = $_POST['name'];
	$title = $_POST['title'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$email_from = 'y262han@edu.uwaterloo.ca';
	$email_subject = "Yushuo Website Form Submission";
	$email_body = "User Name: $name.\n".
					"User Title: $title. \n".
					"User Email: $visitor_email.\n".
					"User Message: $message.\n";
	$to = "y262han@edu.uwaterloo.ca";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply_To: $visitor_email \r\n";

	mail('y262han@edu.uwaterloo.ca','hello','HELLO THIS IS A TEST', 'foo')
	header("Location: Contact.html");


?>