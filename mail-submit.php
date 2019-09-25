<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$receiver_mail = "swapnilp576p@gmail.com"; //change mail here
		$subject = ""; //email subject 
		$from = "admin@sitename.tld";

		$message = "";

		foreach ($_POST as $key => $value) {
			$message .= $key. " : ".$value."<br>";
		}

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();

		$mail_status = mail($receiver_mail, $subject, $message);

		if ($mail_status) {
			//mail sent successfully
			echo "<script> alert('Submitted') </script>";
			header("Location : index.html");
			die();
		}
		else{
			// mail sending fail
			echo "<script> alert('Submission Failed') </script>";
			header("Location : index.html");
			die();
		}
	}
