<?
	/**connessione universale al database
	 * la chiusura deve essere gestita autonomamente
	 * */
	 
	$mysqli = new mysqli(); 	//

	$mysqli->connect("localhost", "root", "davide", "unicasino"); //apre la connessione col database

	
?>