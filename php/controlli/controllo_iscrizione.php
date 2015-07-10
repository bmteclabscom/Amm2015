<?php

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
		
		echo "Username, password e/o email mancante <br/>";
	
	}
	else {
		$usr = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

	}
                    
?>
