<!DOCTYPE html>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	


		<title>Login to UniCAsin&ograve; </title>  
		
	</head>

	<body>

		<div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png">
                    
			<p></p>
		
			<div class='login'>
				
				<form class="form" action="game.php" method="POST">
		
					<p class='loginForm'>
						
						<label>Username: 
							<input type='text' name='username' placeholder='Username' maxlength='15' title="Inserisci l' username" required>
						</label> <br>
						
						<label>Password: 
							<input class='passwordForma' type='password' placeholder='Password' name='password' maxlength='20' title='Inserisci la password' required>
						</label><br>
						
						<input class='loginBotton' type='submit' name='login' value='Accedi'>
					</p>
					
					
				</form>

			</div>	<!--chiusura class colonne -->

		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->


	</body> 
	 
 </html>
