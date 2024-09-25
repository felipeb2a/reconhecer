<?php
	if(! $logado){
        header('location:login.php');
        die('Você não tem permissão para acessar essa página!');
    }
?>