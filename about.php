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
		
                        <div id="changeText"> </div>
                        
                        <button id="plsClick">Please don't click me</button>
                        
		</div>	<!--chiusura class homepage-->
		
	</body> 
	 
 </html>