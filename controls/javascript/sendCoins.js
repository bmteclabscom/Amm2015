/*invia i dati sulle monete alla pagina dei punteggi*/

function goToScoresResult(){
    
    /**questo orribile accrocchio è l'unica cosa che mi sono inventato per manterenere
     * la sessione delle monete salvate!*/

    var url = "topscores.php?monete=";

    $("#goToScore").attr('href', url.concat(totalCoins) );  //aggiunge all'url predefinito il valore delle monete
    
}