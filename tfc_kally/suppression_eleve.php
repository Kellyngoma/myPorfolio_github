<?php
    require_once 'connexion.php';
    $codeEleve= $_GET['codeEleve'];
  
 
   if(!empty($_GET['codeEleve'])){
     $requete = $bdd->prepare('DELETE FROM eleve WHERE codeEleve = :codeEleve');
     $result = $requete->execute([
        'codeEleve' => $codeEleve,
  
     ]);
 
 
     
  }
  header('location: fichier_eleve.php?message=l\'éléve a été bien supprimé');


?>