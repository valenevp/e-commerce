<?php

   include 'components/connect.php';

   session_start();

   if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
   }else{
      $user_id = '';
   };

   include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>quemsomos</title>

      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="./css/style.css">

      <script src="./js/slide.js"></script>
     

   </head>

<body>

   <?php include 'components/user_header.php'; ?>


   <main class="flex-fill">
    
      <div class="container">
         <br>

         <h2>Quem Somos</h2>

         <hr>
         <p>
            Air Drop....
         </p><br>
         <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
         </p><br>
         <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
         </p>
      </div>
   </main>

   <br>

   <footer class="footer">

      <section class="grid">

         <div class="box">
            <h3>Air Drop</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="shop.php"> <i class="fas fa-angle-right"></i> pedidos</a>
            <a href="contact.php"> <i class="fas fa-angle-right"></i> contacto</a>
         </div>

         <div class="box">
            <h3>Informações Legais</h3>
            <a href="privacidade.php"> <i class="fas fa-angle-right"></i> Política de Privacidade</a>
            <a href="termos.php"> <i class="fas fa-angle-right"></i> Termos de Uso</a>
            <a href="quemsomos.php"> <i class="fas fa-angle-right"></i> Quem Somos</a>
            <a href="trocas.php"> <i class="fas fa-angle-right"></i> Trocas e Devoluções</a>
         </div>

         <div class="box">
            <h3>Contacto</h3>
            <a href="tel:1234567890"><i class="fas fa-phone"></i> +351 932 187 461</a>
            <a href="tel:11122233333"><i class="fas fa-phone"></i> +351 266 231 500</a>
            <a href="mailto:multiverso@gmail.com"><i class="fas fa-envelope"></i> multiverso@gmail.com</a>
            <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Porto, PT </a>
         </div>

         <div class="box">
            <h3>Seguir</h3>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>instagram</a>
            <a href="https://twitter.com/?lang=pt_pt"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i>linkedin</a>
         </div>

         <a href="home.php" id="topo-btn" class="botao">Topo</a>

      </section>

      <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>Valene Paredes</span></div>

   </footer>

</body>
</html>