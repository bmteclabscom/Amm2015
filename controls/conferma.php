<?
    
    include("classeTopScore.php");
    
    $tmp = new TopScore();
    
    $tmp->transazione();


    echo $_POST["nomeScorer"];
    echo $_POST["punteggioMonete"];

?>