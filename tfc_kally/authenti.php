<?php
session_start();

require_once 'connexion.php';

if (count($_POST) > 1) {
    $nom = $_POST['name'];
    $password = $_POST['password'];

    $sql = 'SELECT COUNT(*) AS user_exist FROM agent WHERE nom = :nom AND password = :password';
    $requete = $bdd->prepare($sql);
    $requete->execute([
        'nom'   =>  $nom,
        'password'  =>  $password,
    ]);

    if ($requete->fetch()['user_exist'] == 1) {
        $_SESSION['connected'] = true;
        
        header('location: formulaire.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="authenti.css">
    <link rel="stylesheet" type="test/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <section class="menu" id="menu">
         <form  method="post" action="" >
            <h3 class="sub-heading"><i class="fas fa-hands" id="star"></i>  <span>complexe</span> scolaire    <span>La refférence</span></h3>
            <h1 class="heading"> veuillez vous authentifier avant l'accès dans la page! </h1>
           <div class="inputBox">
             <div class="input">
               <span>your name</span>
               <input type="text" name='name'>
             </div>
             <div class="input">
              <span>your passoword</span>
              <input type="password" name='password'>
            </div>
            <div>
                <input type="submit"  class="btn_left"name="btn btn-primary" value="Supprimer">
            </div>
            <div>
                <input type="submit" class="btn_right"name="btn" value="Valider">
            </div>
           </div>
           </form>
           </section>
</body>
</html> 