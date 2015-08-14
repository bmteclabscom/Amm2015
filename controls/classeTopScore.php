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
        
        /**la logica è la seguente: voglio mantenere il database con solo cinque righe
            nel caso si presenti un nuovo inserimento che porti il database a più di cinque righe
         * lo carica e lo confronta con il punteggio più basso presente; nel caso sia maggiore conferma
         * le modifiche e cancella il più piccolo, altrimenti annulla tutto         */
        public function transazione(){
            
            include("connessioneDatabase.php"); //connette al database
            
            /*query di ricerca*/
            $checkQuery = "SELECT * FROM topscore WHERE 1";     //controllo gli elementi totali del database
            
            $punteggioMinore = "SELECT * FROM topscore ORDER BY score LIMIT 1";     //query per trovare il punteggio più basso
            
            $deleteQuery = "DELETE FROM topscore ORDER BY score LIMIT 1";   //elimino la riga col punteggio più basso
            
            
            $numeroRighe = mysqli_num_rows($mysqli->query($checkQuery));
            
            $mysqli->autocommit(false); //disattivo l'autocommit per la transazione
            
            
            if ($numeroRighe < 5){  //se il database ha meno di cinque righe salvo il punteggio
                
                $query = "INSERT INTO topscore (id, user, score) VALUES (default, ?, ?)";
            
                $stmt = $mysqli->prepare($query);

                $stmt->bind_param("si", $_POST["nomeScorer"], $_POST["punteggioMonete"]);

                $stmt->execute();
                
                
            } else {
    
                /**salvo il punteggio nel database per eseguire una migliore comparazione tra i dati*/
                $query = "INSERT INTO topscore (id, user, score) VALUES (default, ?, ?)";
            
                $stmt = $mysqli->prepare($query);

                $stmt->bind_param("si", $_POST["nomeScorer"], $_POST["punteggioMonete"]);

                $stmt->execute();
                
                $compareQuery = "SELECT * FROM topscore ORDER BY score LIMIT 2";    //seleziono i due risultati più piccoli
                
                $risposta = $mysqli->query($compareQuery);  //li cerco
                
                $compareArray = array();    //creo un array per confrontarli
                
                for ($i = 0; $i<2; $i++){
                    
                    $compareArray[] = $risposta->fetch_object();    //salvo i risultati nell'array
                    
                }
                
                if($compareArray[0]->score === $_POST["punteggioMonete"] && 
                        $_POST["nomeScorer"] === $compareArray[0]->user ){    //se viene inserito il punteggio più basso
                    
                    $mysqli->rollback();    //ripristino il database allo stato originale
                                        
                } else {    //altrimenti
                    
                    $mysqli->query($deleteQuery);   //tolgo il risultato più piccolo
                    
                    $mysqli->commit();  //e do conferma
                }
                
            }
            
            
            $mysqli->autocommit(true);  //riattivo il commit automatico
        }
        
    }



?>