<?php 

	include("library/connect.php");//connect to databse
	
	$section = $_REQUEST["section"]; // get data from the HTML form on new student form
	$food = $_REQUEST["food"];
	$description = $_REQUEST["description"];
	$price = $_REQUEST["price"];

	mysql_query ("INSERT INTO food_menu (section, food, description, price) VALUES ('$section', '$food', '$description', $price)")/* insert the data to the food_menu table*/
		or die ("Could not add the data to table");//error message

?>
