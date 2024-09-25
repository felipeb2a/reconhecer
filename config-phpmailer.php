<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	function enviarEmail($message, $info){

		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		$validaEnvioEmail; //variavel valida selo de envio email

		try {
		    //Server settings
		    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		    $mail->isSMTP();                                              //Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                         //Set the SMTP server to send through
		    $mail->Port       = 587;                                      //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		    $mail->SMTPAuth   = true;                                     //Enable SMTP authentication
		    
		    //gmail
		    $mail->Username   = 'name.lastname@domain.com';           //SMTP username
		    $mail->Password   = 'passwd';                               //SMTP password
		    
		    //office365
		    //$mail->Host       = 'SMTP.office365.com';                   //Set the SMTP server office365
		    //$mail->Username   = '';            //SMTP username
		    //$mail->Password   = '';                     //SMTP password

		    //config charset (aceitar palavras com acento)
		    $mail->CharSet = 'UTF-8';
			$mail->Encoding = 'quoted-printable';

		    //Recipients
		    $mail->setFrom($info["email_destinatario"], $info["name_remetente"]);
		    $mail->addAddress($info["email_destinatario"], $info["name_destinatario"]);     //Add a recipient
		    $mail->addAddress($info["email_remetente"], $info["name_remetente"]);     //Add a recipient
		    //$mail->addAddress('recrutamento@domain.com', 'RH');     //Add a recipient
		    //$mail->addReplyTo('helpdesk@domain.com.br', 'helpdesk');
		    //$mail->addCC('helpdesk@domain.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		    //Content
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = html_entity_decode($info["select_selo"]);
		    //$mail->msgHTML(file_get_contents('contents-email.html'), __DIR__); //Envia msg html (não seguro e vários provedores não aceitam)
		    $mail->MsgHTML($message, __DIR__);                    //Sent email in format html
		    $mail->AltBody = $info["select_selo"];

		    $mail->send();										  //Sent mailer

		    //echo 'Message has been sent';
		    //echo 'Selo enviado com sucesso!';
		    //return $validaEnvioEmail = '<h3 class="text-success">Selo enviado com sucesso!</h3>';
		    return true;

		} catch (Exception $e) {
		    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		    //echo "**Mensagem não enviada** >>> Erro: {$mail->ErrorInfo} <<<";
		    //return $validaEnvioEmail = '<h3 class="text-danger">**Selo não enviado** >>> Erro: {$mail->ErrorInfo} <<<</h3>';
		    return false;
		}
	}
?>