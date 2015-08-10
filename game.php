<!DOCTYPE html>

	<? 
		include("controls/classePartita.php");
		$partita = new Partita($_POST["user"]);
	
	?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	


		<title>UniCAsin&ograve; </title>  
		
	</head>

	<body>

		<div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png">
                    
			<p></p>
		
			<div class='colonna'>
				
                            <img id="insertCoinPic" src="images/insert.png"> </br>

                            <img id="levaPic" src="images/leva0.png" onclick="levaMove()">
                            
                            <script src="controls/javascript/levaMove.js"></script>

				</div>	<!--chiusura class colonne -->

		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>
