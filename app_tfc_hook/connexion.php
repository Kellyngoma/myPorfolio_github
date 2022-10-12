<?php

try
{
	/* cette ligne permet de stocker la connexion de la bases de donnees dans la variable $bdd */
	
	$bdd = new PDO('mysql:host=localhost;dbname=pharmacie', 'root','');
}

catch(Exception $e)
{
	die('error:' .$e->getmessage());
}