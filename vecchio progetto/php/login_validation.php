<?php 

	include("ConnessioneDatabase");		//connessione al database 
	
	$preparedStatement = $mysqli->stmt_init();	//prepared statement per evitare accessi non autorizzati tramite SQLinjection
	
	$loginQuery = "SELECT username, password FROM login WHERE user =? AND password =? ";	//query di verifica login
	
	$preparedStatement->prepare($loginQuery);	// preparo lo statement per l'esecuzione
	
	$preparedStatement->bind_param("ss", $_POST["username"], $_POST["password"]); // collego i parametri della query con il loro tipo
	
	
	if(empty($_POST["username"]) || empty($_POST["password"]) ){	//se i campi sono vuoti
		
		echo "Username o password mancanti <br/>";
    
    } else {	//altrimenti controlla se i valori corrispondono nel database
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$accessoSito = mysql_query($preparedStatement->execute());	//esegui la query

		
		if ($result > 0){	//se la risposta è affermativa
			
			echo "Accesso effettuato come ";
		
		} else
			echo "ACCESSO NEGATO"
	}
	
	mysql_close(); 	//chiude la connessione 

?>
