<?php

	function escreverEmail($info){

		$message = "<html>";
			$message .= "<head>";
				$message .= '<meta charset="utf-8">';
	    		$message .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">';
				$message .= "<style type=text/css>";

					$message .= 'body {';
			          $message .= 'margin: 0;';
			          $message .= 'font-family: Montserrat,sans-serif;';
			          $message .= 'font-size: 1rem;';
			          $message .= 'font-weight: 400;';
			          $message .= 'line-height: 1.5;';
			          $message .= 'color: #212529;';
			          $message .= 'text-align: left;';
			          $message .= 'background-color: #fff;';
			        $message .= '}';

			        $message .= '.mb-3, .my-3 {';
			          $message .= 'margin-bottom: 1rem!important;';
			        $message .= '}';

			        $message .= '.card {';
			          $message .= 'position: relative;';
			          $message .= 'display: -ms-flexbox;';
			          $message .= 'display: flex;';
			          $message .= '-ms-flex-direction: column;';
			          $message .= 'flex-direction: column;';
			          $message .= 'min-width: 0;';
			          $message .= 'word-wrap: break-word;';
			          $message .= 'background-color: #fff;';
			          $message .= 'background-clip: border-box;';
			          $message .= 'border: 1px solid rgba(0,0,0,.125);';
			          $message .= 'border-radius: .25rem;';
			        $message .= '}';
			        $message .= '.row {';
			          $message .= 'display: -ms-flexbox;';
			          $message .= 'display: flex;';
			          $message .= '-ms-flex-wrap: wrap;';
			          $message .= 'flex-wrap: wrap;';
			          $message .= 'margin-right: -15px;';
			          $message .= 'margin-left: -15px;';
			        $message .= '}';

			        $message .= '.col-md-4 {';
			           $message .= '-ms-flex: 0 0 33.33333%;';
			           $message .= 'flex: 0 0 33.33333%;';
			           $message .= 'max-width: 33.33333%;';       
			        $message .= '}';

			        $message .= '.col-md-8 {';
			          $message .= '-ms-flex: 0 0 66.66667%;';
			          $message .= 'flex: 0 0 66.66667%;';
			          $message .= 'max-width: 66.66667%;';    
			        $message .= '}';

			        $message .= '.card-body {';
			          $message .= '-ms-flex: 1 1 auto;';
			          $message .= 'flex: 1 1 auto;';
			          $message .= 'padding: 1.25rem;';
			        $message .= '}';

			        $message .= '.card-title {';
			          $message .= 'margin-bottom: .75rem;';
			        $message .= '}';

			        $message .= '.h5, h5 {';
			          $message .= 'font-size: 1.25rem;';
			        $message .= '}';

			        $message .= 'p {';
			          $message .= 'margin-top: 0;';
			          $message .= 'margin-bottom: 1rem;';
			        $message .= '}';

			        $message .= '.card-subtitle, .card-text:last-child {';
			          $message .= 'margin-bottom: 0;';
			        $message .= '}';

			        $message .= '.text-muted {';
			          $message .= 'color: #6c757d!important;';
			        $message .= '}';

			        $message .= '.small, small {';
			          $message .= 'font-size: 80%;';
			          $message .= 'font-weight: 400;';
			        $message .= '}';

			        $message .= 'small {';
			          $message .= 'font-size: 80%;';
			        $message .= '}';

			        $message .= '.shadow {';
			          $message .= 'box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;';
			        $message .= '}';

			        $message .= '.rounded {';
			          $message .= 'border-radius: .60rem!important;';
			        $message .= '}';

			        $message .= '.border {';
			          $message .= 'border: 1px solid #dee2e6!important;';
			        $message .= '}';

				$message .= "</style>";
			$message .= "</head>";
	    	$message .= "<body>";
	    		$message .= '<table class="card mb-3" style="max-width: 730px;">';
	                $message .= '<tr class="row g-0">';
			            $message .= '<td class="col-md-4 card-body" style="max-width: 200px;">';		                
			                if($info["select_selo"] == "Selo da Colaboração"){
			                	$message .= '<img  class="border rounded shadow" src="assets/img/content-email/selo-colaboracao.png" width="210">';
			                }
			                else{
			                	$message .= '<img  class="border rounded shadow" src="assets/img/content-email/selo-realizacao.png" width="210">';
			               	}
			            $message .= '</td>';
			            $message .= '<td class="col-md-8" style="max-width: 490px;">';
			                $message .= '<h2 class="card-title" style="color: #459CFF;">Parab&eacutens '.$info["name_destinatario"].' !  </br> Voc&ecirc acaba de receber o ' .$info["select_selo"]. ' de '.$info["name_remetente"].'!</h2>';
			                $message .= '<p class="card-text" style="color: #5A00BA;">'.$info["mensagem"].'</p>';
			                $message .= '<p class="card-text"><small style="color: #FF00DE;">'.date('d/m/Y').' - Adote essa id&eacuteia compartilhe com um colega de trabalho!</small></p>';
			            $message .= '</td>';
			        $message .= '<tr>';

			        $message .= '<tr>';
			            $message .= '<td colspan="2">';
			                $message .= '<img  class="border rounded shadow" src="assets/img/content-email/assinatura-email.jpg" width="700">';
			            $message .= '</td>';
			        $message .= '</tr>';

			        $message .= '<tr>';
			            $message .= '<td colspan="2" width="690">';
			                $message .= '<p class="card-text">';
			                    $message .= '<small style="font-weight: normal; color: #DDDDDD;">';
			                        $message .= '<i>';
			                            $message .= '&quot informa&ccedil&atildeo transmitida &eacute de uso exclusivo da pessoa ou entidade &agrave qual ela foi endere&ccedilada e pode conter material confidencial e&#47ou privilegiado&#46 Fica proibida qualquer revis&atildeo&#44 dissemina&ccedil&atildeo&#44 utiliza&ccedil&atildeo e&#47ou tomada de decis&otildees por pessoas ou entidades&#44 exceto pelo destinat&aacuterio pretendido&#46 Se por um erro voc&ecirc recebeu este e&#45mail&#44por favor&#44 apague&#45o de qualquer computador e contate o remetente&#46 &quot';
			                        $message .= '</i>';
			                    $message .= '</small>';
			                $message .= '</p>';
			            $message .= '</td>';
			        $message .= '</tr>';

			        $message .= '<tr>';            
			            $message .= '<td colspan="2" width="690">';
			                $message .= '<p class="card-text">';
			                    $message .= '<small style="font-weight: normal; color: #DDDDDD;">';
			                    $message .= '</br>';
			                        $message .= '<i>';
			                            $message .= '&quot The information transmitted is intended only for the person or entity to which it is addressed and may contain confidential and&#47or privileged material&#46 Any review&#44 dissemination&#44 making use of or taking of any action in reliance upon this information&#44 by people or entities other than the intended recipient&#44 is prohibited&#46 If you have received this in error&#44 please contact the sender and delete the material from any computer&#46 &quot';
			                        $message .= '</i>';
			                    $message .= '</small>';
			                $message .= '</p>';
			            $message .= '</td>';
			        $message .= '</tr>';
		    	$message .= '</table>';
		    $message .= "</body>";
	    $message .= "</html>";

	    //echo $message . '<br />';

	    return $message;

	}
?>