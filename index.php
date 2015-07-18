<!DOCTYPE html>

	<?php
	
		include('php/sessione.php');	//fa partire la sessione 
	
	?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="view/css/style.css" media="screen">	
		<link rel="stylesheet" type="text/css"	href="view/css/background.css" media="screen">	
		<link rel="stylesheet" type="text/css"	href="view/css/testo.css" media="screen">	


		<title>GoodStore.net</title>  <!-- il titolo è un richiamo non troppo velato. AHAH-->
		
	</head>

	<body>

		<div class='homepage'>
			
				<?php require('view/testata.php'); ?>

		
			<div class='colonne'>
				
				<?php require('view/colonnaSinistra.php'); ?>
				<?php require('view/colonnaDestra.php'); ?>
				<?php require('view/login.php'); ?>

				</div>	<!--chiusura class colonne -->
		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->
		<?php require('view/footer.php'); ?>


	</body> 
	 
 </html>
