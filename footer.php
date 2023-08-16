<!DOCTYPE html>
<html lang="pt">

   <head>
    <title>Footer</title>
    
   </head>
<body>


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

      
         <button id="topo-btn" onclick="location.href='home.php';">Topo</button>


      </section>

      <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>Valene Paredes</span></div>

   </footer>

</body>
</html>