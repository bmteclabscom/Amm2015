<?
	/**connessione universale al database
	 * la chiusura deve essere gestita autonomamente
	 * */
	 
	$mysqli = new mysqli(); 	//

	$mysqli->connect("localhost", "root", "davide", "database1"); //apre la connessione col database

	
?>
