<div class="formLogin">
	
	<form class="form" action="" method="POST">
		
		<p class='loginForm'>
			
			<label>Username: 
				<input type='text' name='username' placeholder='Username' maxlength='15' title="Inserisci l' username" required>
			</label> <br>
			
			<label>Password: 
				<input class='passwordForma' type='password' placeholder='Password' name='password' maxlength='20' title='Inserisci la password' required>
			</label><br>
			
			<input class='loginBotton' type='submit' name='login' value='Accedi'>
		</p>
		
		<? include("../php/login_validation.php"); ?>	//
		
	</form>
</div>
