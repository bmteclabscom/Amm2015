<? 
    /**pagina di aiuto per il login e per mantenere la sessione 
        alle 1:50 del mattino è l'unica soluzione efficacie che mi è venuta in mente     */

    include("controls/loginCheck.php");     //effettua un controllo sui dati login

    if (isset($_SESSION["user"])){
        include("controls/classePartita.php");
        $partita = new Partita($_SESSION["user"]);  //a seconda dell'utente da determinate monete
        
        $_SESSION["partita"] = $partita;
        
    } else {
        //nel caso venga tentato un accesso alla pagina senza login la connessione viene interrotta
        exit("Non hai i permessi per accedere a questa pagina");    
    }

    $_SESSION["monete"] = $partita->getCoins();
    
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=game.php">';

?>