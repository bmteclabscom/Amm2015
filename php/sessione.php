<?php

	session_start();
		
	//da implementare
	$server = "localhost";
	$username = "";
	$password = "";
	$database = "";
	
	$mysqli = new mysqli();
	$mysqli->connect($server, $username, $password, $database);
	
	 if($mysqli->connect_errno != 0){

		$errore = $mysqli->connect_errno;
		$messaggioErrore = $mysqli->connect_error;
		error_log("Errore nella connessione al server $errore: $messaggioErrore", 0);
		echo "Errore nella connessione $messaggioErrore";
	
	}
?>	
