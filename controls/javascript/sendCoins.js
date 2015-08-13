/*invia i dati sulle monete alla pagina dei punteggi*/

function goToScoresResult(){

    var url = "topscores.php?monete=";

    $("#goToScore").attr('href', url.concat(totalCoins) );
    
}