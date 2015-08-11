<!DOCTYPE html>

	<? 
            //include("controls/loginCheck.php");
        
            if (isset($_POST["user"])){
		include("controls/classePartita.php");
		$partita = new Partita($_POST["user"]);  //a seconda dell'utente da determinate monete
            } else {
                //nel caso venga tentato un accesso alla pagina senza login la connessione viene interrotta
                exit("Non hai i permessi per accedere a questa pagina");    
            }
        ?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	
                
                <script src="libs/jquery-2.1.4.js"></script> <!-- inserimento jquery -->

		<title>UniCAsin&ograve; </title>  
		
	</head>

	<body>
            
            <script src="controls/javascript/startGame.js"></script>
	
            <div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png">
                    
                    </br>
                    
                    <script>
                        
                        totalCoins = <?php echo $partita->getCoins() ; ?>; 
                        
                    /*questa riga non è bellissima da vedere, 
                     * ma è l'implementazione quick&dirt perfetta per ricavare il numero di monete a dispozione
                     * Per la mia gioia è persino una implementazione non sicura 
                     * 
                        */
                    </script>

                    <p id="score" >Coins: <?= $partita->getCoins() ?></p>

                    <? include("views/caselle.php"); ?>
                    
                    <? include("views/colonna.php"); ?>

		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>
