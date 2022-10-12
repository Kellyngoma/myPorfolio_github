<?php
sessionn_start();
  if(isset($_POST['valider'])){
    if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['name_product']) && !empty($_POST['product']) && !empty($_POST['many']) &&!empty($_POST['date']) && !empty($_POST['one_message']) && !empty($_POST['two_message']) ){
        $nom ='hook';
        $numero = '0815610594';
        $nom_saisi = htmlspecialchars($_POST['name'])::
        $numero_saisi =htmlspecialchars($_POST['number'])::
        if($nom_saisi == $nom and $numero_saisi == $numero){
            header('location:index.php');
        }

    }else{
        echo 'Veuillez complèter tous les champs!';
    }
  }

?> 