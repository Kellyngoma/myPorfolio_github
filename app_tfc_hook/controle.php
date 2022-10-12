<?php
session_start();
 $name = $_POST["name"];
 $password =$_POST["password"];
 $securite= 'monsieurjean';
 if($password==$securite){
     $_SESSION['userconneted'] = true;
    header('location: index.php');
 }
 else{
     echo 'vous n\'avez pas l\'accès';
 }
 


