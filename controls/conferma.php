<!DOCTYPE html>

<?
    
    include("classeTopScore.php");  //includo la classe per effettuare la transazione
    
    $tmp = new TopScore();
    
    $tmp->transazione();    //esegue la scrittura del punteggio sul server

?>

    <script>alert("Punteggio inviato al server \nContinua pure a giocare!");</script>

<html>  <!--a dir la verità non so perché abbia scritto questo codice visto che non viene visualizzato, ma vabbè-->

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	


		<title>UniCAsin&ograve; </title>  
		
	</head>

	<body>

		<div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png" alt="UniCasino banner">
                    
			<p></p>
		
                        
                        
		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->
            
                
             <META HTTP-EQUIV="Refresh" Content="0; URL=../game.php">
	
        </body> 
	    
 </html>

