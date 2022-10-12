<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentify</title>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
 <!-- link font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="authenti.css">
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
    <section class="menu" id="menu">
         <form  method="post" action="controle.php" >
            <h3 class="sub-heading"><i class="fas fa-hands" id="star"></i>pharmacie communautaire</h3>
            <h1 class="heading"> veuillez vous authentifier avant l'accès dans la page! </h1>
           <div class="inputBox">
             <div class="input">
               <span>votre nom</span>
               <input type="text" name='name'>
             </div>
             <div class="input">
              <span>mot de passe</span>
              <input type="password" name='password'>
            </div>
            <div>
                <input type="submit" class="btn_right"name="btn" value="Suscribe">
            </div class="imgs">
           </div>
           </form>
           </section>

  
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 <script src="assets/code.js"></script> 
</body>
</html>