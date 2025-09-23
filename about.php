<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/why_choose_us.jpg" alt="" height="180" width="450">
         <h3>Why choose us?</h3>
         <p>We create handmade crafts with care, blending tradition and creativity. Each piece is unique, crafted from quality materials, and carries a personal touch. Choosing us means owning something meaningful while supporting true craftsmanship.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

      <div class="box">
         <img src="images/what_we_provide.jpg" alt="" height="180" width="450">
         <h3>What we provide?</h3>
         <p>We offer a wide range of unique, handmade crafts designed with creativity and care. From traditional designs to modern inspirations, every product is crafted using quality materials—perfect for gifting, decorating, or adding a personal touch to your lifestyle.</p>
         <a href="shop.php" class="btn">Our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>“Absolutely beautiful craftsmanship! The details are amazing, and you can feel the love put into every piece. I’ll definitely be ordering again.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>— Kevin T.</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>“Unique designs and high-quality materials. My order arrived on time and was even more stunning in person. Truly special handmade work.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>— Ayesha L.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>“These crafts are not just products, they’re stories. I gifted one to a friend, and she loved the authenticity, charm, uniqueness, beauty, quality, and detail.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>— Daniel M.</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>“Great experience! The team was friendly, and the handmade item I received was one of a kind. Worth every penny.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>— Sarah K.</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>“Beautifully made, sustainable, and unique. I love supporting artisans who create with passion. Highly recommend this shop.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>— Michael R.</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>“Each craft feels personal and special. It’s refreshing to find handmade products that blend tradition with creativity so well.”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>— Priya S.</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>