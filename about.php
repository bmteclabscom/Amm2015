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
                            
                            <h3>About the author</h3>
                            <p>
                                Alessio Manai, studente al secondo (ormai terzo) anno del corso di laurea in Informatica. 
                                Mi appassionano le tecnologie informatiche e le loro falle di sicurezza. 
                                Attualmente sviluppo sulla piattaforma Android.
                            </p>
                            
                            
                            <h3>Com'&egrave; nata l'idea</h3>
                            <p>
                                
                                L' idea della slot machine nasce dopo la discussione sul progetto con un collega, 
                                ancora non avevo nessuna idea su cosa sviluppare e l'idea del classico web store non mi
                                soddisfava, avevo gi&agrave; perso troppo tempo su un progetto simile e ho deciso di scartarlo 
                                solo qualche giorno prima. Mi chiedeva di fargli vedere come stessi sviluppando 
                                la grafica del vecchio progetto (uno schifo) quando ad un certo punto del discorso 
                                mi venne in mente di 
                                fare qualcosa di banale, tipo una lotteria o un bingo con dentro qualche easter eggs 
                                per rendere il progetto pi&ugrave; interessante, ed ecco che continuando a parlare ho partorito 
                                la malsana idea di un' applicazione simile: tempo una sera e la slot machine era gi&agrave; 
                                funzionante, mancava solo inserire ulteriori funzionalit&agrave; rispettando i requisiti della 
                                consegna.
                            </p>
                        
                        </div>
                        
                        <button id="plsClick">Ulteriori dettagli</button>
                        
		</div>	<!--chiusura class homepage-->
		
	</body> 
	 
 </html>