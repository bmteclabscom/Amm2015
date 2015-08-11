<?php

    include("connessioneDatabase.php");		//connessione al database 
	
    $preparedStatement = $mysqli->stmt_init();	//prepared statement per evitare accessi non autorizzati tramite SQLinjection

    $loginQuery = "SELECT username, password FROM login WHERE user =? AND password =? ";	//query di verifica login

    $preparedStatement->prepare($loginQuery);	// preparo lo statement per l'esecuzione

    $user = $_POST["user"];
    $passw = $_POST["password"];
    
    $preparedStatement->bind_param("ss", $user, $passw); // collego i parametri della query con il loro tipo


    if(empty($user) || empty($passw) ){	//se i campi sono vuoti

            echo "Username o password mancanti <br/>";

    } else {	//altrimenti controlla se i valori corrispondono nel database

            $accessoSito = mysql_query($preparedStatement->execute());	//esegui la query


            if ($result > 0){	//se la risposta è affermativa

                    //echo "Accesso effettuato come ";

            } else {
                    exit("Non hai i permessi per accedere a questa pagina");
            }
        }

    mysql_close(); 	//chiude la connessione 

?>