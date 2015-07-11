<!DOCTYPE html>

	<?php
	
		include('php/sessione.php');	//fa partire la sessione 
	
	?>

<html>

	<head>
		
		<?php include('view/head.php'); ?>
		
	</head>

	<body>

		<div class='homepage'>
			
				<?php include('view/testata.php'); ?>

		
			<div class='colonne'>
				
				<?php include('view/colonnaSinistra.php'); ?>
				<?php include('view/colonnaDestra.php'); ?>
				<?php include('view/home.php'); ?>

				</div>
		</div>
		
		<!-- visualizzazione del footer -->
		<?php include('view/footer.php'); ?>


	</body> 
	 
 </html>
