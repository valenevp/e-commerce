<?php

   include 'components/connect.php';

   session_start();

   if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
   }else{
      $user_id = '';
      header('location:user_login.php');
   };

   if(isset($_POST['delete'])){
      $cart_id = $_POST['cart_id'];
      $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
      $delete_cart_item->execute([$cart_id]);
   }

   if(isset($_GET['delete_all'])){
      $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart_item->execute([$user_id]);
      header('location:cart.php');
   }

   if(isset($_POST['update_qty'])){
      $cart_id = $_POST['cart_id'];
      $qty = $_POST['qty'];
      $qty = filter_var($qty, FILTER_SANITIZE_STRING);
      $estoque = $_POST['estoque'];
      $estoque = filter_var($estoque, FILTER_SANITIZE_STRING);
      $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
      $update_qty->execute([$qty, $cart_id]);
      $message[] = 'quantidade do carrinho atualizada';

   }

?>

<!DOCTYPE html>
<html lang="pt">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>carrinho</title>
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">

   </head>

<body>
   
   <?php include 'components/user_header.php'; ?>

   <section class="products shopping-cart">

      <h3 class="heading">carrinho</h3>

      <div class="box-container">

         <?php
            $grand_total = 0;
            $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $select_cart->execute([$user_id]);
      
            if($select_cart->rowCount() > 0){
               while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
            
            // obter informações do produto atual
            $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
            $select_product->execute([$fetch_cart['pid']]);
            $fetch_product = $select_product->fetch(PDO::FETCH_ASSOC);

            // armazena a quantidade em estoque do produto atual
            $estoque = $fetch_product['estoque'];

            // verifica se a quantidade solicitada é maior do que o estoque atual
            if (isset($_POST['qty']) && $_POST['qty'] > $estoque) {
               $erro = "Desculpe, não há estoque suficiente. O estoque atual é de " . $estoque . " unidades.";
            // exibe a mensagem de erro para o usuário
               echo "<script>alert('" . $erro . "')</script>";
            }
   
   
         ?>

         <form action="/process-form.php" method="post" class="box">
            <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
            <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
            <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
      
            <div class="name"><?= $fetch_cart['name']; ?></div>
            <div class="flex">
               <div class="price">€ <?= $fetch_cart['price']; ?> </div>

               <?php $estoque = $fetch_product['estoque']; // armazena a quantidade em estoque do produto ?>

               <div class="quantity">
                  <span class="estoque">estoque: <?= $estoque; ?></span>     
               </div>
       
            
            
               <input type="number" name="qty" class="qty" min="1" max="" value="<?= $fetch_cart['quantity']; ?>" id="quantidade">


            
               <button type="submit" class="fas fa-edit" name="update_qty" onclick="return verificarQuantidadeMaxima();"></button>
                        
            </div>

            <div class="sub-total"> sub total : <span>€ <?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?> </span> </div>
            <input type="submit" value="deletar" onclick="return confirm('deletar do carrinho?');" class="delete-btn" name="delete">

         </form>

         <?php
            $grand_total += $sub_total;
            }
            }else{
               echo '<p class="empty">seu carrinho está vazio</p>';
            }
         ?>

      </div>

      <div class="cart-total">
         <p>total : <span>€ <?= $grand_total; ?> </span></p>
         <a href="shop.php" class="option-btn">continue comprando</a>
         <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('deletar tudo do carrinho?');">deletar tudo</a>
         <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">finalizar compra</a>
      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="/js/script.js"></script>

</body>
</html>