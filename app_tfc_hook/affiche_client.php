<?php
 session_start();
 
 if($_SESSION['userconneted'] !== true){

    header('location: authenti.php');
 }
 require_once 'connexion.php';

$datas = $bdd->query('SELECT* FROM clients');

$firstname = $_POST['name'];
$localisation = $_POST['adresse'];
$total = $_POST['many'];
$medicamention = $_POST['production'];

if(COUNT($_POST) > 1){
 $sql = 'INSERT INTO clients VALUES(null,:noms,:adresse,:montant,:nomProduit)';

 $requete = $bdd->prepare($sql);
 $result = $requete->execute([
    'noms' => $firstname,
    'adresse' => $localisation,
    'montant' => $total,
    'nomProduit' => $medicamention,
 ]);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome at clients</title>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<link rel="stylesheet" type="text/css" href="ajouts/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="ajouts/icomoon.css">
    <!-- link font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="med.css">
</head>
<body>
  <!--my header start section-->
    <header>
        <a href="#" id="logo"><i class="fas-fa-untensils"></i>Pharma.</a>
        <nav class="navbar">
            <a href="index.php" id="active">Home</a>
            <a href="#dishes">story</a>
            <a href="#about">about us</a>
            <a href="#review">review</a>
            <a href="#pharm">other_phama</a>
            <a href="#menu">menu</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a class="fas fa-heart"></a>
            <a class="fas fa-shopping-cart"></a>
        </div>
    </header>
    <div>
     <?php if (!empty($_GET['message'])) { ?>
              <div><?= $_GET['message']; ?>
          <?php  } ?>
     <div>
    <table id="content_table" class="table table-hover table-dark">
      <thead>
         <tr>
          <th id="title" scope="col">identifiant</th>
           <th  id="title" scope="col">noms</th>
           <th  id="title" scope="col">adresses</th>
            <th  id="title" scope="col">montant</th>
            <th id="title" scope="col">produit commandé</th>
            <th id='title' scope="col">action</th>
        </tr>
    </thead>
      <tbody>
        <?php foreach($datas as $data) :?>
          <tr>
           <td><?= $data['id_cli']?></td>
            <td><?= $data['noms']?></td>
             <td><?= $data['adresse']?></td>
              <td><?= $data['montant']?></td>
              <td><?= $data['nomProduit']?></td>
              <td><a href="suppression.php?id_cli=<?= $data['id_cli'] ?>">Supprimer</a></td>
            </tr>
         <?php endforeach ; ?>
     </tbody>
  </div>
<script type="text/javascript" src="ajouts/jquery.min.js"></script>
<script type="text/javascript" src="ajouts/bootstrap.min.js"></script>
  </body>
</html>