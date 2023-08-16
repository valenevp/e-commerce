<?php

   include 'components/connect.php';

   session_start();

   if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
   }else{
      $user_id = '';
      header('location:user_login.php');
      exit;
   };

   if(isset($_POST['order'])){

      $name = $_POST['name'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $number = $_POST['number'];
      $number = filter_var($number, FILTER_SANITIZE_STRING);
      $email = $_POST['email'];
      $email = filter_var($email, FILTER_SANITIZE_STRING);
      $datan = $_POST['datan'];
      $datan = filter_var($datan, FILTER_SANITIZE_STRING);
      $method = $_POST['method'];
      $method = filter_var($method, FILTER_SANITIZE_STRING);
      $address = 'flat no. '. $_POST['flat'] .', '. $_POST['street'] .', '. $_POST['city'] .', '. $_POST['state'] .', '. $_POST['country'] .' - '. $_POST['pin_code'];
      $address = filter_var($address, FILTER_SANITIZE_STRING);
      $total_products = $_POST['total_products'];
      $total_price = $_POST['total_price'];

      // Criar um objeto DateTime a partir da data de nascimento
      $datan = DateTime::createFromFormat('Y-m-d', $datan);

      // Formatando a data para comparar com a data atual
      $datan = $datan->format('Y-m-d');

      $today = date('Y-m-d');
      $age = date_diff(date_create($datan), date_create($today))->y;

      if($age < 18){
         $message[] = 'Precisa ter pelo menos 18 anos para concluir a compra';
      } else {
      // Verificação do carrinho de compras e inserção do pedido no banco de dados  
   

      $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $check_cart->execute([$user_id]);

      if($check_cart->rowCount() > 0){

         $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, datan, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?,?)");
         $insert_order->execute([$user_id, $name, $number, $email, $datan, $method, $address, $total_products, $total_price]);

         $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
         $delete_cart->execute([$user_id]);

         $message[] = 'pedido feito com sucesso!';
         }else{
            $message[] = 'Seu carrinho está vazio';
         }
      }
   }   

?>

<!DOCTYPE html>
<html lang="pt">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>checkout</title>
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">

   </head>

<body>
   
   <?php include 'components/user_header.php'; ?>

   <section class="checkout-orders">

      <form action="" method="POST">

         <h3>meu pedido</h3>

         <div class="display-orders">
            <?php
               $grand_total = 0;
               $cart_items[] = '';
               $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
               $select_cart->execute([$user_id]);
               if($select_cart->rowCount() > 0){
                  while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
            ?>
            
            <p> <?= $fetch_cart['name']; ?> <span>(<?= '€'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?>)</span> </p>
         
            <?php
               }
               }else{
                  echo '<p class="empty">seu carrinho está vazio!</p>';
               }
            ?>

            <input type="hidden" name="total_products" value="<?= $total_products; ?>">
            <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
            <div class="grand-total">total : <span>€ <?= $grand_total; ?> </span></div>
         </div>

         <h3>faça seu pedido</h3>

         <div class="flex">
            <div class="inputBox">
               <span>nome completo :</span>
               <input type="text" name="name" placeholder="nome completo" class="box" maxlength="20" required>
            </div>
            <div class="inputBox">
               <span>telemóvel :</span>
               <input type="number" name="number" placeholder="telemóvel" class="box" min="0" max="" onkeypress="if(this.value.length == 16) return false;" required>
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" name="email" placeholder="email" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>data de nascimento :</span>
               <input type="date" name="datan" placeholder="datan" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>método de pagamento :</span>
               <select name="method" class="box" required>
                  <option value="cartão de crédito">cartão de crédito</option>
                  <option value="cartão de débito">cartão de débito</option>
                  <option value="mbway">mbway</option>
               </select>
            </div>
            <div class="inputBox">
               <span>morada :</span>
               <input type="text" name="flat" placeholder="morada" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>complemento:</span>
               <input type="text" name="street" placeholder="ex. nº" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>concelho :</span>
               <input type="text" name="city" placeholder="ex. porto" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>zona :</span>
               <input type="text" name="state" placeholder="ex. porto" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>país :</span>
               <input type="text" name="country" placeholder="ex. Portugal" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>número do cartão :</span>
               <input type="number" min="16" name="pin_code" placeholder="ex. 12345679" max="" onkeypress="if(this.value.length == 16) return false;" class="box" required>
            </div>
            <div class="inputBox">
               <span>cvv :</span>
               <input type="number" min="3" name="pin" placeholder="ex. 123"  max="999" onkeypress="if(this.value.length == 3) return false;" class="box" required>
            </div>
         </div>

         <input type="submit" name="order" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>" value="finalizar compra">

      </form>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>

</body>
</html>