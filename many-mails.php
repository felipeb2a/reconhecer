<?php

  function separaDestinatarios(){

    //INSERIRINDO MAIS DE UM DESTINATARIO
    $name_destinatarios = explode(";",$_POST["name_destinatario"]); //SEPARANDO NOME

    $email_destinatarios = explode(";",$_POST["email_destinatario"]); //SEPARANDO EMAILS

    $returnInfo = array(); //ARRAY DE RETORNO

    for($i = 1; $i <= count($email_destinatarios); $i++)
    {
      //echo $_POST["data"] . '<br />';
      //echo $_POST["name_remetente"] . '<br />';
      //echo $_POST["email_remetente"] . '<br />';
      //echo $name_destinatarios[count($email_destinatarios)-$i] . '<br />';
      //echo $email_destinatarios[count($email_destinatarios)-$i] . '<br />';
      //echo $_POST["select_selo"] . '<br />';
      //echo $_POST["mensagem"] . '<br />';

      array_push($returnInfo, array(
      'data'=>$_POST["data"],'name_remetente'=>$_POST["name_remetente"],'email_remetente'=>$_POST["email_remetente"],'name_destinatario'=>$name_destinatarios[count($email_destinatarios)-$i],'email_destinatario'=>$email_destinatarios[count($email_destinatarios)-$i],'select_selo'=>$_POST["select_selo"],'mensagem'=>$_POST["mensagem"])
      );
    }

    //print_r($returnInfo);

    //echo count($returnInfo);

    //echo '<br />';
    
    //var_dump($returnInfo);

    //foreach($returnInfo as $key => $value){
    //    echo $key:[$value];
    //}

    return $returnInfo;
  }

?> 