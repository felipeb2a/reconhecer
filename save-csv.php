<?php

  function salvarCsv($info){

    //header('Content-Type: application/csv');
    //header('Content-Disposition: attachment; filename="selo.csv"');
    //header('Cache-Control: max-age=0');

    // BOM header UTF-8
    //echo "\xEF\xBB\xBF";
    //$headers = ['Data', 'De', 'Para', 'E-mail', 'Selo', 'Mensagem'];

    //echo $_POST["data"];
    //echo $_POST["name_remetente"];
    //echo $_POST["email_remetente"];
    //echo $_POST["name_destinatario"];
    //echo $_POST["email_destinatario"];
    //echo $_POST["select_selo"];
    //echo $_POST["mensagem"];

    //IMPRIMIR TEST VARIAVEL POST
    //foreach ($_POST as $line){
    //  echo $line;
    //}

    //SALVAR SELO NO ARQUIVO CSV
    //ABRIR ARQUIVO
    $file = fopen("selo.csv","a");

    //SALVAR UM DESTINATARIO
    //fputcsv($file, $_POST);

    //SALVAR VARIOS DESTINATARIOS
    //foreach($info as $line){
      //echo $line["data"];
      //echo '<br />';
      fputcsv($file, $info);
    //}

    //FECHAR ARQUIVO
    fclose($file);
  }
?> 