<?php
function connectDB(){
	$servername = 'localhost';
	$username = 'root';
	$password = '';

	try 
	{
		$pdo = new PDO("mysql:host=$servername;dbname=bas", $username, $password);
	} 
	catch (PDOException $e) 
	{
		echo "Connection failed: " . $e->getMessage();	
	}

	return $pdo;
}
?>