<?php
	try{
 	$bdd = new PDO('mysql:host=localhost;dbname=hotelo;charset=utf8', 'root', '');
	}
		
		catch (exception $toi) {
		die ('l\'erreur est la suivante :'.$toi->getmessage());
		}

 ?>

