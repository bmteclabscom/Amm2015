<?
	/**connessione universale al database
	 * la chiusura deve essere gestita autonomamente
	 * */
	 
        $SVILUPPO = 0;

	$mysqli = new mysqli(); 	//crea una variabile mysqli

        if ($SVILUPPO === 1) {  //se sto sviluppando, si logga al database della macchina virtuale
            $conn = $mysqli->connect("localhost", "root", "davide", "unicasino"); //apre la connessione col locale
        } else {    //se ho consegnato
            $conn = $mysqli->connect("localhost", "manaiAlessio", "riccio7644", "amm15_manaiAlessio"); //apre la connessione col database del server
        }
        
        if ($mysqli->connect_errno){    //se la connessione da errore
            
            exit("Error database connection");  //stampa un messaggio e chiude la connessione
            
        }
?>