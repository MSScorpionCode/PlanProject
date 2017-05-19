<?php
function connectDB(){
	try 
	{
		$pdo = new PDO("sqlsrv:Server=BASSERVER5\PRINS;Database=hlsprins", NULL, NULL);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		die('Error connecting to SQL Server' . $e->getMessage());
	}
	return $pdo;
}
?>