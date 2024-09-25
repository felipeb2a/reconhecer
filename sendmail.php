<?php
	include_once('many-mails.php'); //separar emails destinatarios
	include_once('save-csv.php'); //salva informacoes em csv
	include_once('message-mailer.php'); //inclui mensagem formatada em html
	include_once('config-phpmailer.php'); //inclui configuração phpmailer

	//FUNCAO SEPARA DESTINATARIOS
	$info = separaDestinatarios();

	$arraySucesso = array(); //array com emails enviados com sucesso.
	$arrayFalha = array(); //array com emails enviados com falha.


	foreach($info as $line){
		//echo $line["data"] . '<br />';
		//echo $line["name_remetente"] . '<br />';
		//echo $line["email_remetente"] . '<br />';
		//echo $line["name_destinatario"] . '<br />';
		//echo $line["email_destinatario"] . '<br />';
		//echo $line["select_selo"] . '<br />';
		//echo $line["mensagem"] . '<br />';

		//echo "escrevendo a mensagem" . '<br />';
		$message = escreverEmail($line); //CHAMA FUNCAO ESCREVER EMAIL
		
		//echo "enviando a mensagem" . '<br />';
		$isEnviado = enviarEmail($message, $line); //CHAMA FUNCAO ENVIAR EMAIL

		//salva destinatarios de emails enviados com erro e sucesso 
		if($isEnviado){
			array_push($arraySucesso, $line["name_destinatario"]);
			
			salvarCsv($line); //CHAMA FUNCAO SALVAR CSV CASO E-MAIL ENVIADO COM SUCESSO

		} else{
			array_push($arrayFalha, $line["name_destinatario"]);
		}

	}

	//array para lista
	function array2ul($array) {
		$out = '<ul>';
		foreach($array as $value){
			$out .= '<li><span>'.$value.'</span></li>';
		}
		$out .= '</ul>';

		return $out; 
	}

	$EnvioEmailSucesso = array2ul($arraySucesso);

	$EnvioEmailFalha = array2ul($arrayFalha);

	include_once('page-mailer-status.php'); //inclui pagina de status envio e-mail

?>