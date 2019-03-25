<?php

include("shif-config.php");

$homeUrl = $_POST['base-url'];

if (isset($_POST['shif-send'])) {

	if ($shifNewsletterService=='mailchimp') {
		        
		// MailChimp API URL
		$memberID = md5(strtolower($_POST['shif-email']));
		$dataCenter = substr($shiftMailchimpConfig['mailchimp-api-key'],strpos($shiftMailchimpConfig['mailchimp-api-key'],'-')+1);
		$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $shiftMailchimpConfig['mailchimp-list-id'] . '/members/' . $memberID;
		        
		// member information
		$json = json_encode( $shiftMailchimpConfig['mailchimp-list-fields'] );
		        
		// send a HTTP POST request with curl
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $shiftMailchimpConfig['mailchimp-api-key']);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if ($shifEmailService=='ses') {

			require 'PHPMailer/PHPMailerAutoload.php';

			// Correo al propietario
			include("mail-templates/".$shifOwnerEmailConfig['message']);
			foreach ($shifOwnerEmailConfig['recipients-info'] as $recipient) {
				$mail4Owner = new PHPMailer;
				$mail4Owner->isSMTP();
				$mail4Owner->setFrom($shifSESConfig['ses-email-from'], $shifSESConfig['ses-name-from']);
				$mail4Owner->addAddress($recipient[0], $recipient[1]);
				$mail4Owner->Username = $shifSESConfig['ses-user'];
				$mail4Owner->Password = $shifSESConfig['ses-psw'];
				$mail4Owner->Host = $shifSESConfig['ses-host'];
				$mail4Owner->Port = 465;
				$mail4Owner->Subject = $shifOwnerEmailConfig['subjet'];
				$mail4Owner->Body = $ownerMessage;
				$mail4Owner->SMTPAuth = true;
				$mail4Owner->SMTPSecure = 'ssl';
				$mail4Owner->isHTML(true);
				$mail4Owner->send();
			}

			// Correo al usuario
			include("mail-templates/".$shifUserEmailConfig['message']);
			$mail4User = new PHPMailer;
			$mail4User->isSMTP();
			$mail4User->setFrom($shifSESConfig['ses-email-from'], $shifSESConfig['ses-name-from']);
			$mail4User->addAddress($shifUserEmailConfig['recipient-address'], $shifUserEmailConfig['recipient-name']);
			$mail4User->Username = $shifSESConfig['ses-user'];
			$mail4User->Password = $shifSESConfig['ses-psw'];
			$mail4User->Host = $shifSESConfig['ses-host'];
			$mail4User->Port = 465;
			$mail4User->Subject = $shifUserEmailConfig['subjet'];
			$mail4User->Body = $userMessage;
			$mail4User->SMTPAuth = true;
			$mail4User->SMTPSecure = 'ssl';
			$mail4User->CharSet = 'utf8';
			$mail4User->isHTML(true);
			$mail4User->send();
		
		} elseif ($shifEmailService=='server') {

			require 'PHPMailer/PHPMailerAutoload.php';

			// Correo al propietario
			include("mail-templates/".$shifOwnerEmailConfig['message']);
			foreach ($shifOwnerEmailConfig['recipients-info'] as $recipient) {
				$mail4Owner = new PHPMailer;
				$mail4Owner->setFrom($shifServerConfig['server-email-from'], $shifServerConfig['server-name-from']);
				$mail4Owner->addAddress($recipient[0], $recipient[1]);
				$mail4Owner->Subject = $shifOwnerEmailConfig['subjet'];
				$mail4Owner->Body = $ownerMessage;
				$mail4Owner->isHTML(true);
				$mail4Owner->send();
			}

			// Correo al usuario
			include("mail-templates/".$shifUserEmailConfig['message']);
			$mail4User = new PHPMailer;
			$mail4User->setFrom($shifServerConfig['server-email-from'], $shifServerConfig['server-name-from']);
			$mail4User->addAddress($shifUserEmailConfig['recipient-address'], $shifUserEmailConfig['recipient-name']);
			$mail4User->Subject = $shifUserEmailConfig['subjet'];
			$mail4User->Body = $userMessage;
			$mail4User->CharSet = 'utf8';
			$mail4User->isHTML(true);
			$mail4User->send();
		}

		header("Location: $homeUrl");

	} elseif ($shifNewsletterService=='sendy') {

		//Subscribe
		$postdata = http_build_query($shifSendyConfig['sendy-list-fields']);
		$opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
		$context  = stream_context_create($opts);
		$result = file_get_contents($shifSendyConfig['sendy-installation-url'].'/subscribe', false, $context);
		
		if ($shifEmailService=='ses') {

			require 'PHPMailer/PHPMailerAutoload.php';

			// Correo al propietario
			include("mail-templates/".$shifOwnerEmailConfig['message']);
			foreach ($shifOwnerEmailConfig['recipients-info'] as $recipient) {
				$mail4Owner = new PHPMailer;
				$mail4Owner->isSMTP();
				$mail4Owner->setFrom($shifSESConfig['ses-email-from'], $shifSESConfig['ses-name-from']);
				$mail4Owner->addAddress($recipient[0], $recipient[1]);
				$mail4Owner->Username = $shifSESConfig['ses-user'];
				$mail4Owner->Password = $shifSESConfig['ses-psw'];
				$mail4Owner->Host = $shifSESConfig['ses-host'];
				$mail4Owner->Port = 465;
				$mail4Owner->Subject = $shifOwnerEmailConfig['subjet'];
				$mail4Owner->Body = $ownerMessage;
				$mail4Owner->SMTPAuth = true;
				$mail4Owner->SMTPSecure = 'ssl';
				$mail4Owner->isHTML(true);
				$mail4Owner->send();
			}

			// Correo al usuario
			include("mail-templates/".$shifUserEmailConfig['message']);
			$mail4User = new PHPMailer;
			$mail4User->isSMTP();
			$mail4User->setFrom($shifSESConfig['ses-email-from'], $shifSESConfig['ses-name-from']);
			$mail4User->addAddress($shifUserEmailConfig['recipient-address'], $shifUserEmailConfig['recipient-name']);
			$mail4User->Username = $shifSESConfig['ses-user'];
			$mail4User->Password = $shifSESConfig['ses-psw'];
			$mail4User->Host = $shifSESConfig['ses-host'];
			$mail4User->Port = 465;
			$mail4User->Subject = $shifUserEmailConfig['subjet'];
			$mail4User->Body = $userMessage;
			$mail4User->SMTPAuth = true;
			$mail4User->SMTPSecure = 'ssl';
			$mail4User->CharSet = 'utf8';
			$mail4User->isHTML(true);
			$mail4User->send();
		
		} elseif ($shifEmailService=='server') {

			require 'PHPMailer/PHPMailerAutoload.php';

			// Correo al propietario
			include("mail-templates/".$shifOwnerEmailConfig['message']);
			foreach ($shifOwnerEmailConfig['recipients-info'] as $recipient) {
				$mail4Owner = new PHPMailer;
				$mail4Owner->setFrom($shifServerConfig['server-email-from'], $shifServerConfig['server-name-from']);
				$mail4Owner->addAddress($recipient[0], $recipient[1]);
				$mail4Owner->Subject = $shifOwnerEmailConfig['subjet'];
				$mail4Owner->Body = $ownerMessage;
				$mail4Owner->isHTML(true);
				$mail4Owner->send();
			}

			// Correo al usuario
			include("mail-templates/".$shifUserEmailConfig['message']);
			$mail4User = new PHPMailer;
			$mail4User->setFrom($shifServerConfig['server-email-from'], $shifServerConfig['server-name-from']);
			$mail4User->addAddress($shifUserEmailConfig['recipient-address'], $shifUserEmailConfig['recipient-name']);
			$mail4User->Subject = $shifUserEmailConfig['subjet'];
			$mail4User->Body = $userMessage;
			$mail4User->CharSet = 'utf8';
			$mail4User->isHTML(true);
			$mail4User->send();
		}

		header("Location: ".$homeUrl);

	} else {

		header("Location: $homeUrl");
	}
}



