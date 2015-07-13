<!DOCTYPE html>

	<?php
		
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
			
				<?php include('view/testata.php'); ?>

		
			<div class='colonne'>
				
				<?php include('view/colonnaSinistra.php'); ?>
				<?php include('view/colonnaDestra.php'); ?>
				<?php include('view/store.php'); ?>

				</div>
		</div>
		
		<!-- visualizzazione del footer -->
		<?php include('view/footer.php'); ?>


	</body> 
	 
 </html>
