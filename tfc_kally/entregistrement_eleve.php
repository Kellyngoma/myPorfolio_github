<?php
 
session_start();

if (!(array_key_exists('connected', $_SESSION) && $_SESSION['connected'] == true)) {

  header('location: authenti.php');

  }

  require_once 'connexion.php';

   $name = $_POST['nom'];
   $sexe = $_POST['sexe'];
   $naiss = $_POST['date'];
   $adresse = $_POST['adresse'];

  if(COUNT($_POST) > 1){
    $sql = 'INSERT INTO eleve values(null,:nom,:sexe,:date_naissance,:adresse,null)';
    $requete = $bdd->prepare($sql);
    $result = $requete->execute([
       'nom' => $name,
       'sexe' => $sexe,
       'date_naissance' => $naiss,
       'adresse' =>$adresse,
    ]); 
 }



?>
