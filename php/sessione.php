<?php

	session_start();
		
	//da implementare
	$db_hostname = "localhost";
	$db_database = "database1";
	$db_username = "root";
	$db_password = "davide";
	
	$mysqli = new mysqli();
	$mysqli->connect($db_hostname, $db_username, $db_password, $db_database);
	
	 if($mysqli->connect_errno != 0){

		$errore = $mysqli->connect_errno;
		$messaggioErrore = $mysqli->connect_error;
		error_log("Errore nella connessione al server $errore: $messaggioErrore", 0);
		echo "Errore nella connessione $messaggioErrore";
	
	}
?>	
