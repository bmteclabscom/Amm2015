/*invia i dati sulle monete alla pagina dei punteggi*/

function goToScoresResult(){
    
    /**questo orribile accrocchio è l'unica cosa che mi sono inventato per manterenere
     * la sessione delle monete salvate!
     * e sarebbe anche una falla, chiunque potrebbe imbrogliare cambiando il valore della url*/

    var url = "topscores.php?monete=";

    $("#goToScore").attr('href', url.concat(totalCoins) );  //aggiunge all'url predefinito il valore delle monete
    
}

function trackMoney(){
    
    /**questo orribile accrocchio è l'unica cosa che mi sono inventato per manterenere
     * la sessione delle monete salvate!
     * e sarebbe anche una falla, chiunque potrebbe imbrogliare cambiando il valore della url*/

    var url = "about.php?monete=";

    $("#aboutMe").attr('href', url.concat(totalCoins) );  //aggiunge all'url predefinito il valore delle monete
    
}