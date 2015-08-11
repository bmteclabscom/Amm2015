<!DOCTYPE html>

	<? 
		include("controls/classePartita.php");
		$partita = new Partita($_POST["user"]);
                $totalCoins = $partita->getCoins(); //a seconda dell'utente da determinate monete
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
                    <p class="score" >Coins: <?=$totalCoins ?></p>
		
                    <img id="casella1" src="images/caselle/default.png" >    
                    <img id="casella2" src="images/caselle/default.png" >
                    <img id="casella3" src="images/caselle/default.png" >
                    
                    </br>
                    
			<div class='colonna'>
				
                            <img id="insertCoinPic" src="images/insert.png" onclick="coinInserted()"> </br>
                            <script src="controls/javascript/coinInserted.js"></script>

                            <img id="levaPic" src="images/leva0.png" onclick="levaMove()">
                            <script src="controls/javascript/levaMove.js"></script>

			</div>	<!--chiusura class colonne -->

		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>
