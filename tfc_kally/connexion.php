<?php

try
{
	/* cette ligne permet de stocker la connection de la bases de donnees dans la variable $bdd */
	
	$bdd = new PDO('mysql:host=localhost;dbname=refference', 'root','');
}

catch(Exception $e)
{
	die('error:' .$e->getmessage());
}
