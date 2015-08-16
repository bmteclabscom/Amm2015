<!DOCTYPE html>

    <? 
        session_start();

        include("controls/notSetUser.php");     //se non sei loggato non puoi accedere

        $_SESSION["monete"] = $_GET['monete']; 
    ?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	

                <script src="libs/jquery-2.1.4.js"></script> <!-- inserimento jquery -->
                <script src="controls/javascript/ajax.js"></script> <!-- inserimento ajax -->
                
		<title>About - UniCAsin&ograve; </title>  
		
	</head>

	<body>

		<div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png" alt="UniCasino banner">
                    
			<p></p>
		
                        <div id="changeText"> 
                            
                            <h3>Com'&egrave; nata l'idea</h3>
                            <p>
                                
                                L' idea della slot machine nasce dopo la discussione sul progetto con un collega, 
                                ancora non nessuna idea su cosa sviluppare e l'idea del classico web store non mi
                                soddisfava, avevo gi&agrave; perso troppo tempo su un progetto simile e ho deciso di scartarlo 
                                solo qualche giorno prima. Mi chiedeva di fargli vedere come stessi sviluppando 
                                la grafica
                            </p>
                        
                        </div>
                        
                        <button id="plsClick">Ulteriori dettagli</button>
                        
		</div>	<!--chiusura class homepage-->
		
	</body> 
	 
 </html>