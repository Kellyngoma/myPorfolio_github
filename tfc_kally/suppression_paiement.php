<?php
    require_once 'connexion.php';
    $codeFrais= $_GET['codeEleve'];
  
 
   if(!empty($_GET['codeEleve'])){
     $requete = $bdd->prepare('DELETE FROM frais WHERE code= :code');
     $result = $requete->execute([
        'code' => $codeFrais,
  
     ]);
 
 
     
  }
  header('location: fichier_el.php?message=l\'agent a été bien supprimé');

