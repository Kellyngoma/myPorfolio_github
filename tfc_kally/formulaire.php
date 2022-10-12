<?php 
session_start();

if (!(array_key_exists('connected', $_SESSION) && $_SESSION['connected'] == true)) {
  header('location: authenti.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
  <header>
    <a href="#" id="logo"><i class="fas-fa-untensils"></i>complexe scolaire la refférence</a>
    <nav class="navbar">
        <a href="index.html">accueil</a>
            <a href="#">entregistrez un élève</a>
            <a href="fichier_eleve.php">tous les élèves</a>
            <a href="agent.php">tous les agents</a>
            <a href="liste.php"> paiements</a>
    </nav>
</header>
     <!--order section form starts-->
     <section class="menu" id="menu">
         <form  method="post" action="entregistrement_eleve.php" >
          <h1 class="heading">identification de l'élève</h1>
          <?php if (!empty($_GET['message'])) { ?>
              <div><?= $_GET['message']; ?></div>
          <?php  } ?>
          <div class="inputBox">
           <div class="input">
             <span>nom</span>
             <input type="text" name='nom' required>
           </div>
           <div class="input">
            <span>sexe</span>
            <input type="text" name='sexe'  required>
          </div>
         </div>
         <div class="inputBox">
          <div class="input">
            <span>post-nom</span>
            <input type="text" name='post-nom'  requireed>
          </div>
          <div class="input">
           <span>prénom</span>
           <input type="text" name='prenom' required>
         </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span> adresse </span>
            <input type="text" name='adresse' placeholder="adresse" requered>
          </div>
          <div class="input">
           <span>date de naissance</span>
           <input type="datetime-local" name='date' requered>
         </div>
        </div>
        </div>
          <input type="submit" value="valider " id="btn" name='valide'>
         </form>
      </section>
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
             <a href="#">appeler par  :  </a>
             <a href="#">+2435616670</a>
             <a href="#">blessingPharma@gmail.com</a>
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
    
</body>
</html>