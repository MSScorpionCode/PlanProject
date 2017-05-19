<?php
function connectDB(){
	try 
	{
		$conn = new PDO("sqlsrv:Server=localhost;Database=hlsprins;ConnectionPooling=60", NULL, NULL);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		die('Error connecting to SQL Server' . $e->getMessage());
	}
	echo "Connected to SQL Server\n";
}
?>