<?
    /**questa classe gestisce la visualizzazione dei migliori punteggi ottenuti tramite la slotmachine
        e il salvataggio del proprio punteggio attuale     */

    class TopScore {
        
        private $punteggio;
        private $nomeUtente;
        
        public function __construct(){ }
        
        
        /**apre il database e visualizza una tabella con i migliori cinque punteggi */
        public function showScores(){
            
            include("connessioneDatabase.php"); //connette al database
            
            $query = "SELECT user, score FROM topscore ORDER BY score DESC LIMIT 5";
            
            $risultato = $mysqli->query($query); 
            
            echo "<br/>Top Scores <br/>";
            
            if ($mysqli->errno > 0){
                
                echo "Non è possibile visualizzare attualmente i punteggi";
                
            }
            
            if ($risultato->num_rows === 0){
                
                echo "Non sono presenti ancora punteggi";
                
            } else {
                
                echo "<ol> \n";
                
                while ($riga = $risultato->fetch_object()){
                    
                    echo "<li> $riga->user $riga->score </li> \n";
                    
                }
                
                echo "</ol> \n";
            }
            
            $mysqli->close();
            
        }
        
        /**scrive sul database il punteggio corrente */
        public function saveScore(){
            
            include("connessioneDatabase.php"); //connette al database
            
            $query = "INSERT INTO topscore (id, user, score) VALUES (default, ?, ?)";
            
            $stmt = $mysqli->prepare($query);
            
            $stmt->bind_param("si", $_POST["nomeScorer"], $_POST["punteggioMonete"]);
            
            $stmt->execute();
            
        }
        
    }



?>