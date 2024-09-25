<?php 

	function conectar(){

		/* DB PROD*/
		/*
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "reconhecer";
		$returnStatus;
		
		/* DB TEST */
		
    	$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "reconhecer";
		$returnStatus;
		
		/* Create connection */
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		//echo "Initial character set is: " . $conn -> character_set_name();

		// Change character set to utf8
		$conn -> set_charset("utf8");

		//echo "Current character set is: " . $conn -> character_set_name();

		return $conn;
	}
		
?>