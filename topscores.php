<!DOCTYPE html>

	<? 
            include("controls/classeTopScore.php");
            $topPunteggi = new TopScore();  //crea la variabile per i punteggi
        ?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	
                
		<title>Top Scores - UniCAsin&ograve; </title>  
		
	</head>

	<body>
            
	
            <div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png" alt="UniCAsino banner">
                    
                    <br>
                    
                    <div class='elencoPunteggi'>
                        <? $topPunteggi->showScores(); ?>   <!--mostra i punteggi sullo schermo-->
                    </div>
                    
                    <br>
                    
                    <? include("views/scoreForm.php"); ?>
                    
		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>