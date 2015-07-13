<?php 

	$connection = mysql_connect('localhost', 'root', 'davide'); //apre la connessione col database
	mysql_select_db('database1');	

	$query = "SELECT * FROM articoli"; 	//seleziona tutti gli oggetti
	$result = mysql_query($query);		//risultati della ricerca

	echo "<table>"; 	//inizia la tabella

	while($row = mysql_fetch_array($result)){   	//forma la tabella finché ci sono oggetti nel database
		
		echo "<tr><td>" . $row['nome'] . "</td><td>" . $row['descrizione'] .
			"</td><td>" . $row['prezzo'] . "</td><td>" . $row['categoria'] ."</td></tr>";  
	
	}

	echo "</table>"; //chiude la tabella

	mysql_close(); 	//chiude la connessione 

?>
