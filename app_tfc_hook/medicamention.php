<?php 
 session_start();
 if($_SESSION['userconneted'] !== true){
  header('location: authenti.php');
 }
 
 require_once 'connexion.php';
 $datas = $bdd->query('SELECT* FROM medicaments');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome at pharma</title>
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
    <table id="content_table" class="table table-hover table-dark">
            <thead>
              <tr>
                <th id="title" scope="col">N°</th>
                <th  id="title" scope="col">Noms médicaments</th>
                <th  id="title" scope="col">Forme médicaments</th>
                <th  id="title" scope="col">Date de création</th>
                <th  id="title" scope="col">Prix unitaire</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datas as $oneData ) : ?>
                <tr>
                  <td><?= $oneData['id_med']?></td>
                  <td><?= $oneData['nom_med']?></td>
                  <td><?= $oneData['forme_med']?></td>
                  <td><?= $oneData['date_creation']?></td>
                  <td><?= $oneData['prix_unitaire']?></td>
                </tr>
              <?php endforeach ; ?>
            </tbody>
    </div>
  <script type="text/javascript" src="ajouts/jquery.min.js"></script>
<script type="text/javascript" src="ajouts/bootstrap.min.js"></script>
  </body>
</html>