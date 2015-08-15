<!DOCTYPE html>

    <?
        session_start();
    
        if (isset($_SESSION["user"]) && isset($_SESSION["password"])){  //se ti sei già loggato
            
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=game.php">';   //vai alla pagina del gioco
            
        }
    
    ?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	


		<title>Login to UniCAsin&ograve; </title>  
		
	</head>

	<body>

		<div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png" alt="UniCasino banner">
                    
			<p></p>
		
                        <? include("views/login.php"); ?>  <!--form per il login -->

                        <img id="disclaimer" src="images/giocoresponsabile.jpg" alt="Banner gioco d'azzardo"> <!--immagine sul gioco d'azzardo-->
                        
		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>
