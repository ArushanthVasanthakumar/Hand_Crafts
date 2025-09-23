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

   <div class="flex">

      <a href="admin_page.php" class="logo">Ceylon Crafts<span></span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="shop.php">Shop</a>
         <a href="orders.php">Orders</a>
         <a href="about.php">About</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         
         <a href="search_page.php" class="fas fa-search"></a>
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM cart WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $count_wishlist_items = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
         ?>
         <a href="wishlist.php"><i class="fas fa-heart"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i></a> 
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars" onclick="showNavbar()"></div>
      </div>
     
     
      <!--Side navbar-->
   <div class="side-navbar">
   <p style="text-align: right"><i class="fa-solid fa-xmark" onclick="closeNavbar()"></i></p>
   <div class="side-navbar-links">
      <a class="side-navbar-link" href="home.php">Home</a>
      <a class="side-navbar-link" href="shop.php">Shop</a>
      <a class="side-navbar-link" href="orders.php">Orders</a>
      <a class="side-navbar-link" href="about.php">About</a>
      <a class="side-navbar-link" href="contact.php">Contact</a>
       <a class="side-navbar-link" href="contact.php">Profile</a>
   </div>

      </div>

    <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>

         <?php if($fetch_profile): ?>
            <!-- If logged in -->
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="profileImg">
            <p><?= $fetch_profile['name']; ?></p>
            <a href="user_profile_update.php" class="btn">Update profile</a>
            <a href="logout.php" class="delete-btn">Logout</a>
         <?php else: ?>
            <!-- If not logged in -->
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Login</a>
               <a href="register.php" class="option-btn">Register</a>
            </div>
         <?php endif; ?>
      </div>




      
     <script src="js/toggle.js"></script>
   </div>

</header>