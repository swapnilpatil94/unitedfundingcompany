<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$receiver_mail = "swapnilp576p@gmail.com"; //change mail here
		$subject = ""; //email subject 

		$message = "";

		foreach ($_POST as $key => $value) {
			$message .= $key. " : ".$value;
		}

		$mail_status = mail($receiver_mail, $subject, $message);

		if ($mail_status) {
			//mail sent successfully
			echo "Mail Sent";
		}
		else{
			// mail sending fail
			echo "Mail Sending fail!";
		}
	}
