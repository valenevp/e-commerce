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
      <title>home</title>

      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">  

   </head>

<body>
   
   <?php include 'components/user_header.php'; ?>


      <div class="carousel">
         <div class="carousel-items">
            <div class="carousel-item active">
               <img src="./slide/airdrop.png" alt="Slide 1">
            </div>
            <div class="carousel-item">
               <img src="./slide/aranha1.png" alt="Slide 2">
            </div>
            <div class="carousel-item">
               <img src="./slide/aranha2.png" alt="Slide 3">
            </div>
            <div class="carousel-item">
               <img src="./slide/estranho.png" alt="Slide 4">
            </div>
            <div class="carousel-item">
               <img src="./slide/herois.png" alt="Slide 5">
            </div>
            <div class="carousel-item">
               <img src="./slide/starwars.png" alt="Slide 6">
            </div>
         </div>

         <div class="carousel-controls">
            <button class="prev">&#8249;</button>
            <div class="carousel-indicators">
               <button class="carousel-indicator active"></button>
               <button class="carousel-indicator"></button>
               <button class="carousel-indicator"></button>
               <button class="carousel-indicator"></button>
               <button class="carousel-indicator"></button>
               <button class="carousel-indicator"></button>
            </div>
            <button class="next">&#8250;</button>
         </div>
      </div>

      <br>

      <section class="category">

         <h1 class="heading">Caixas Tematicas</h1>

         <div class="swiper category-slider">

            <div class="swiper-wrapper">

               <a href="category.php?category=laptop" class="swiper-slide slide">
                  <img src="./produtos/ANTIHEROIS/ANTI_HEROIS_1.png" alt="">
                  <h3>Anti Herois</h3>
               </a>

               <a href="category.php?category=tv" class="swiper-slide slide">
                  <img src="./produtos/DR.ESTRANHO/dr_est_AVATAR.png" alt="">
                  <h3>Dr. Estranho</h3>
               </a>

               <a href="category.php?category=camera" class="swiper-slide slide">
                  <img src="./produtos/HOMEMARANHA/homem_aranha.png" alt="">
                  <h3>Homem Aranha</h3>
               </a>

               <a href="category.php?category=mouse" class="swiper-slide slide">
                  <img src="./produtos/HOPE/AIRDROP_HOPE_SW.png" alt="">
                  <h3>Hope</h3>
               </a>

               <a href="category.php?category=fridge" class="swiper-slide slide">
                  <img src="./produtos/LORDS/BG_drop_lords_2.png" alt="">
                  <h3>Lord</h3>
               </a>

               <a href="category.php?category=washing" class="swiper-slide slide">
                  <img src="./produtos/MORTALKOMBAT/AD_2.png" alt="">
                  <h3>Mortal Kombat</h3>
               </a>

               <a href="category.php?category=smartphone" class="swiper-slide slide">
                  <img src="./produtos/POKEMONELITE/AIR_DROP_POKEMON_ELITE_FEED.jpg" alt="">
                  <h3>Pokemon</h3>
               </a>

               <a href="category.php?category=watch" class="swiper-slide slide">
                  <img src="./produtos/STARWARSIMPERIO/SW_IMPERIO_2.png" alt="">
                  <h3>Star Wars</h3>
               </a>

            </div>

            <div class="swiper-pagination"></div>

          </div>

      </section>

   <section class="home-products">

      <h1 class="heading">Produtos</h1>

      <div class="swiper products-slider">

         <div class="swiper-wrapper">

            <?php
               $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
               $select_products->execute();
               if($select_products->rowCount() > 0){
                  while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){       

            ?>

            <form action="/process-form.php" method="post" class="swiper-slide slide">
                  <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      
                  <?php $estoque = $fetch_product['estoque']; // armazena a quantidade em estoque do produto ?>
      
                  
                  <a href="quick_view.php?pid=<?php echo $fetch_product['id']; ?>" class="fas fa-eye"></a>
                  
                  <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                  <div class="name"><?= $fetch_product['name']; ?></div>
               
                  <div class="flex">
                     <div class="price"><span>€ </span><?= $fetch_product['price']; ?><span></span></div>
                     <div class="quantity">
                        <span class="estoque">Disponível em estoque: <?= $estoque; ?></span>     
                     </div>
                  </div>
      
      
               <?php if($estoque > 0){?>      

               <input type="submit" value="adicionar no carrinho" class="btn" name="add_to_cart">

               <?php } else{?>
               
                  <input type="text" value="esgotado" class="btn2" name="add_to_cart">
      
               <?php }?>

            </form>
   
            <?php
               }
               }else{
                  echo '<p> class="empty">Nenhum produto adicionado ainda! </p>';
               }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>


   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="./js/script.js"></script>
   <script src="./js/slide.js"></script>

   <script>

      var swiper = new Swiper(".home-slider", {
         loop:true,
         spaceBetween: 20,
         pagination: {
         el: ".swiper-pagination",
            clickable:true,
         },
      });

      var swiper = new Swiper(".category-slider", {
         loop:true,
         spaceBetween: 20,
            pagination: {
            el: ".swiper-pagination",
            clickable:true,
         },
         breakpoints: {
            0: {
            slidesPerView: 2,
         },
         650: {
            slidesPerView: 3,
         },
         768: {
            slidesPerView: 4,
         },
         1024: {
            slidesPerView: 5,
         },
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop:true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable:true,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });

   </script>


</body>
</html>