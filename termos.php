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
<html lang="pt">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>termos</title>

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

         <h2>1. Termos</h2><br>

         <p>Ao acessar ao site Air Drop, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
         <br>
            
         <h2>2. Uso de Licenca</h2><br>

         <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Air Drop , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
         <ol>
            <li>modificar ou copiar os materiais; </li>
            <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial); </li>
            <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Air Drop;</li>
            <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou </li>
            <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
         </ol>
         <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Air Drop a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrônico ou impresso.</p>
            
         <h2>3. Responsabilidade</h2><br>

         <ol>
            <li>Os materiais no site Air Drop são fornecidos 'como estão'. Air Drop não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</li>
            <li>Além disso, o Quitanda Online não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
         </ol>
            
         <br>
         <h2>4. Limites</h2><br>

         <p>Em nenhum caso o Air Drop ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Air Drop, mesmo que Air Drop ou um representante autorizado da Air Drop tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
         <br>
            
         <h2>5. Materiais</h2><br>

         <p>Os materiais exibidos no site da Quitanda Online podem incluir erros técnicos, tipográficos ou fotográficos. Quitanda Online não garante que qualquer material em seu site seja preciso, completo ou atual. Air Drop pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Quitanda Online não se compromete a atualizar os materiais.</p>
         <br>
         
         <h2>6. Links</h2><br>

         <p>O Air Drop não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Air Drop do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p><br>

         <h3>Modificações</h3><br>

         <p>O Air Drop pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
         <br>

         <h3>Lei aplicável</h3><br>
         <p>Estes termos e condições são regidos e interpretados de acordo com as leis do Quitanda Online e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
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
   
         <button id="topo-btn" onclick="location.href='home.php';">Topo</button>
   
      </section>
   
      <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>Valene Paredes</span></div>
   
   </footer>
   
   
</body>
</html>