<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start(); // To store the return response

// Check if the request parameters is defined
if(isset($_POST['to']) && isset($_POST['cc']) && isset($_POST['subject']) && isset($_POST['body'])) {
	
	// filter and validation
	$to = filter_var($_POST['to'], FILTER_SANITIZE_STRING);
	$cc = filter_var($_POST['cc'], FILTER_SANITIZE_STRING);
	$subj = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
	

	$valid_recipients = 0;
	
	// check email format
	$valid_recipients += (filter_var($to, FILTER_SANITIZE_EMAIL)) ? 0 : 1;
	$valid_recipients += (filter_var($cc, FILTER_SANITIZE_EMAIL)) ? 0 : 1;
	
	
	// check if email is valid
	if($valid_recipients === 0) {
		$mail = new PHPMailer(true);						// Passing `true` enables exceptions
	
		try {
			// Configuration
			$mail->SMTPDebug = 2;                           // Enable verbose debug output
			$mail->isSMTP();								// Set mailer to use SMTP
			$mail->Host = "smtp.gmail.com";					// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;							// Enable SMTP authentication
			$mail->Username = "solitasra@gmail.com";	// SMTP username
			$mail->Password = "S01idsdapo";					// SMTP password
			$mail->SMTPSecure = "ssl";						// Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;								// TCP port to connect to

			// Recipients
			$mail->setFrom('jerielformento@gmail.com', 'Customer Order');
			$mail->addAddress($to, $to);					// Add a recipient
			$mail->addCC($cc, $cc);

			// Content
			$mail->isHTML(true);							// Set email format to HTML
			$mail->Subject = $subj;
			$mail->Body    = $body;
			
			// check if mail has been sent
			if($mail->send()) {
				$_SESSION['message'] = "Mail has been successfully sent.";
			} else {
				$_SESSION['message'] = "Sending failed:" . $mail->ErrorInfo;
			}

		} catch (Exception $e) {
			$_SESSION['message'] = "Sending failed: " . $mail->ErrorInfo;
		}	
	} else {
		$_SESSION['message'] = "Invalid email format!";	
	}
} else {
	$_SESSION['message'] = "All fields required!";
}

header("Location: index.php");