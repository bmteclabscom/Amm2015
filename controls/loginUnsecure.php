<?php

    include("connessioneDatabase.php");		//connessione al database 
	

    $user = $_POST["user"];     //netbeans rompeva le scatole per usare direttamente lo superglobal
    $passw = $_POST["password"];    //così per farlo star zitto ho usato direttamente delle variabili
    
    $loginQuery = "SELECT username, password FROM login WHERE username = '$user' AND password = '$passw' ";	//query di verifica login

    if(empty($user) || empty($passw) ){	//se i campi sono vuoti

            exit("Username o password mancanti");

    } else {	//altrimenti controlla se i valori corrispondono nel database


        if ($mysqli->query($loginQuery) === FALSE){	//se la risposta è negativa

            exit("Non hai i permessi per accedere a questa pagina");
        }
    }
        
?>