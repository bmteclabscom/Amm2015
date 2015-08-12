<?
	/**connessione universale al database
	 * la chiusura deve essere gestita autonomamente
	 * */
	 
	$mysqli = new mysqli(); 	//crea una variabile mysqli

	$conn = $mysqli->connect("localhost", "root", "davide", "unicasino"); //apre la connessione col database

        if ($mysqli->connect_errno){    //se la connessione da errore
            
            exit("Error database connection");  //stampa un messaggio e chiude la connessione
            
        }
?>