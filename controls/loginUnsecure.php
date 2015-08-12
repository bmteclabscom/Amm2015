<?php

    /**loginUnsecure in quanto in questa funzione non ho sanitized l'input utente per il login*/

    include("connessioneDatabase.php");		//connessione al database 
	

    $user = $_POST["user"];     //netbeans rompeva le scatole per usare direttamente lo superglobal
    $passw = $_POST["password"];    //così per farlo star zitto ho usato direttamente delle variabili
    
    $loginQuery = "SELECT username, password FROM login WHERE username = '$user' AND password = '$passw' ";	//query di verifica login

    if(empty($user) || empty($passw) ){	//se i campi sono vuoti

            exit("Username o password mancanti");

    } else {	//altrimenti controlla se i valori corrispondono nel database

        $result = $mysqli->query($loginQuery);

        if ($result->num_rows != 1){	//se la risposta è negativa

            exit("Non hai i permessi per accedere a questa pagina");
        }
    }
        
    $mysqli->close();   //chiude la connessione al database
?>