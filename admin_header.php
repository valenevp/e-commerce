<!DOCTYPE html>
<html lang="pt">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>admin</title> 
   </head>

  <body>

   <?php
      if(isset($message)){
         foreach($message as $message){
            echo '
            <div class="message">
               <span>'.$message.'</span>
               <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
           ';
         }
      }
   ?>

   <header class="header">

      <section class="flex">

         <h2>Navegação do administrador</h2>

         <a href="../admin/dashboard.php" class="logo"><span></span></a>

         <nav class="navbar">
            <a href="../admin/dashboard.php">Home</a>
            <a href="../admin/products.php">Produtos</a>
            <a href="../admin/placed_orders.php">Pedidos</a>
            <a href="../admin/admin_accounts.php">Admins</a>
            <a href="../admin/users_accounts.php">Usuario</a>
            <a href="../admin/messages.php">Mensagens</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="profile">
            <h3>Informações do perfil do administrador</h3>

            <?php
               $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
               $select_profile->execute([$admin_id]);
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>

            <p><?= $fetch_profile['name']; ?></p>
         
            <a href="../admin/update_profile.php" class="btn">atualizar</a>
            <div class="flex-btn">
               <a href="../admin/register_admin.php" class="option-btn">registo</a>
               <a href="../admin/admin_login.php" class="option-btn">entrar</a>
            </div>
            <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">sair</a> 
         </div>

      </section>

   </header>

</body> 
</html>


