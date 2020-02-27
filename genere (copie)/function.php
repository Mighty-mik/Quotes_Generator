<?php

ini_set('display_errors', 'On');
error_reporting(-1);

$dbhost = 'localhost'; // set the hostname
$dbname = 'id12737531_generator'; // set the database name
$user = 'id12737531_mukengeshayi_michael';
$pass = 'Aragorn2';

try {
		$bdd = new PDO('mysql:host=localhost;dbname=id12737531_generator;charset=utf8', $user, $pass);
		// set the PDO error mode to exception
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
		    
		catch(PDOException $e)
		{
			
				die('Erreur : '.$e->getMessage());
		}
		
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
	   
		
		$reponse = $bdd->query('SELECT * FROM `africus` ORDER BY RAND() LIMIT 1');
		                        
	 
		 
		 while($row=$reponse->fetch()) {          
		   
			echo $row['citations'];	}?>
			 