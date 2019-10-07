<?php 

	function connect(){
	try{
	$pdo = new PDO('mysql:host=localhost;dbname=test','root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}catch(PDOException $e){
		echo $e->getMessage();

	}
	return $pdo;
	}
 ?>