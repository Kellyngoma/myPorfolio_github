<?php
$_age = '';

   if(isset($_POST['btn'])){
      if(isset($_POST['age'])) { 
         $_age = ($_POST['age']);
       if($_age >= 18 && $_age <= 24 ){
        return ('form.html');
          
       }
       elseif ($_age > 41 && $_age <= 65 ) {
         echo 'votre age est plus avancé c\'est moyennant 18 à 40 ' .'ans que cela est possible';
       }
       elseif($_age < 18){
         $_ageRestant = 18 - $_age;
         echo  'vous avez  '. $_age = ($_POST['age'] ) . '  pour ouvrir un compte il vous faut encore  '. $_ageRestant .' , ' .  ' pour avoir 18 ans';
       }
       
       else{
         echo 'vous avez le droit de payer avant l\'ouverture le compte';
       }
      }  
     }
 
   


?>
