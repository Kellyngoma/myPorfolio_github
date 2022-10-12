<?php
    require_once 'connexion.php';
    $identity= $_GET['id_cli'];
  
   if(!empty($_GET['id_cli'])){
     $requete = $bdd->prepare('DELETE FROM clients WHERE id_cli = :id_cli');
     $result = $requete->execute([
        'id_cli' => $identity,
     ]);

  }
  header('location: affiche_client.php?message=vous avez supprimé un client');

?>
