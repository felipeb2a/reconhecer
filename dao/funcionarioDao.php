<?php 
    require_once('../config/mysql.php');

	function login($login){
    	$conn = conectar();
    	$sql = "select * from funcionario where login = '$login'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listFuncionarios(){
    	$conn = conectar();
    	$sql = "select * from funcionario where status = '0' order by name";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listTodosFuncionarios(){
    	$conn = conectar();
    	$sql = "select * from funcionario order by name";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function findFuncionariosName($login){
    	$conn = conectar();
    	$sql = "select * from funcionario where login = '$login'";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function saveFuncionario($sql){
		$conn = conectar();
		$status;

		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
			$status .= '<h3 class="text-success">Formulário enviado com sucesso!</h3>';
			$status .= '</div>';
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Formulário não enviado** >>> Erro:  {'.$conn->error.'}<<<</h3>';
			$status .= '</div>';
		}

		$conn->close();

		return $status;
	}

?>