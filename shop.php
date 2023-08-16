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
      <title>produtos</title>
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">

   </head>

<body>
   
   <?php include 'components/user_header.php'; ?>

   <section class="products">

      <h1 class="heading">Produtos</h1>

      <div class="box-container">

         <?php
            $select_products = $conn->prepare("SELECT * FROM `products`"); 
            $select_products->execute();
            if($select_products->rowCount() > 0){
            while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
         ?>
   
         <form action="/process-form.php" method="post" class="box">
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
      
            <?php if($estoque > 0){ ?>      

            <input type="submit" value="adicionar no carrinho" class="btn" name="add_to_cart">

            <?php } else{?>
               <input type="text" value="esgotado" class="btn2" name="add_to_cart">
            <?php }?>

         </form>
   
         <?php
            }
            }else{
               echo '<p class="empty">produto não encontrado!<p>';
            }
         ?>

      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>

</body>
</html>