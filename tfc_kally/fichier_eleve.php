<?php 
session_start();

if (!(array_key_exists('connected', $_SESSION) && $_SESSION['connected'] == true)) {
  header('location: authenti.php');
}
require_once 'connexion.php';
$datas =$bdd->query('SELECT* FROM eleve');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="icomoon.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <header>
    <a href="#" id="logo"><i class="fas-fa-untensils"></i>complexe scolaire la refférence</a>
    <nav class="navbar">
      <a href="index.html">accueil</a>
      <a href="formulaire.php">entregistrez un élève</a>
      <a href="#">tous les élèves</a>
      <a href="agent.php">tous les agents</a>
      <a href="paiement.php"> paiments</a>
    </nav>
</header>
<?php if (!empty($_GET['message'])) { ?>
              <div><?= $_GET['message']; ?>
          <?php  } ?>
    <div>
        <table id="content_table"class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">NOM</th>
                <th scope="col">sexe</th>
                <th scope="col">date de naissance</th>
                <th scope="col">adresse</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datas as $data) : ?>
              <tr>
                <th><?= $data['codeEleve'] ?></th>
                <td><?= $data['nomEle']?></td>
                <td><?= $data['sexeElev']?></td>
                <td><?= $data['date_naissance']?></td>
                <td><?= $data['adresse']?></td>
                <td><a href="suppression_eleve.php?codeEleve=<?= $data['codeEleve'] ?>">Supprimer</a></td>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
    </div>
        <!--order section ends-->
      <!-- footer section starts-->
      <section class="footer" id="contact">
        <div id="box-container">
          <div class="box">
            <h3>locations</h3>
             <a href="#">kitona</a>
             <a href="#">N°29</a>
             <a href="#"> quartier bulambemba</a>
             <a href="#">commune de ngaba</a>
          </div>
  
          <div class="box">
            <h3>nous joindre </h3>
             <a href="#">acceuil</a>
             <a href="#">enregistrer un l'élève</a>
             <a href="#">les élèves</a>
             <a href="#">les agents</a>
             <a href="#">intituler frais</a>
          </div>
  
          <div class="box">
            <h3>contact info</h3>
             <a href="#">appeler par  : </a>
             <a href="#">+2435616670</a>
          </div>
           
          <div class="box" id="follow">
            <h3>follow us</h3>
             <a href="#">facebook</a>
             <a href="#">twitter</a>
             <a href="#">instagram</a>
             <a href="#">linkendin</a>
          </div>
        </div>
        <div class="credit">
          copyright @ 2021 <span>mr. hook designer</span>
        </div>
      </section>
      <!--fin formulaire-->
      
    <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>	
</body>
</html>