<?php
 require_once 'vendor/autopload.php';
 require_once 'connexion.php';
  $faker = Faker\Factory::create();
  $nom =$faker;
  echo $faker->name();
  echo $faker->email();

  for ($i=0; $i < 100; $i++) { 
      // preparer la requete
       $sql ='INSERT INTO client values(null,:noms,:adresses,:montant)';
       $datas = $bdd->prepare($sql);
        $datas->execute([
         'noms'=>$nom,
        
       ]);

      // faire execute en recuperant les donnees via faker
      // $db->execute([$faker->name(), $faker->email()])
      
  }
 
 ?>