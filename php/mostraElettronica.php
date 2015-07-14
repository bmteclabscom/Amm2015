<?php 

	$connection = mysql_connect('localhost', 'root', 'davide'); //apre la connessione col database
	mysql_select_db('database1');	

	$query = "SELECT articoli.nome, articoli.descrizione, articoli.prezzo, elettronica.marca,
					elettronica.memoria1 FROM articoli JOIN elettronica 
					ON articoli.id = elettronica.id"; 	//seleziona tutti gli oggetti con questa query
					
	$result = mysql_query($query);		//risultati della ricerca

	echo "<table>"; 	//inizia la tabella

	while($row = mysql_fetch_array($result)){   	//forma la tabella finché ci sono oggetti nel database
		
		echo "<tr><td>" . $row['articoli.nome'] . "</td><td>" . $row['articoli.articoli.descrizione'] .
			"</td><td>" . $row['prezzo'] . "</td><td>" . $row['elettronica.marcasc'] ."</td></tr>";  
	
	}

	echo "</table>"; //chiude la tabella

	mysql_close(); 	//chiude la connessione 

?>
