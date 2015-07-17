<?php 

	include("ConnessioneDatabase");		//connessione al database 
	
	if(empty($_POST["username"]) || empty($_POST["password"]) ){	//se i campi sono vuoti
		
		echo "Username o password mancanti <br/>";
    
    } else {	//altrimenti controlla se i valori corrispondono nel database
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$accessoSito = mysql_query("SELECT username, password FROM login WHERE user = '$username' AND password = '$password'");
		
		if ($result > 0){	//se la risposta è affermativa
			
			echo "Accesso effettuato come ";
		
		} else
			echo "ACCESSO NEGATO"
	}
	
	mysql_close(); 	//chiude la connessione 

?>
