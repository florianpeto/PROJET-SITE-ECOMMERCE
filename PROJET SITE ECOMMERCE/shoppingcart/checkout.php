<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');
   if($cart_query && $detail_query){
      $grand = $fetch_cart['price'] * $fetch_cart['quantity'];
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Merci pour votre achat!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : ".$price_total." FCFA  </span>
         </div>
         <div class='customer-details'>
            <p> votre nom : <span>".$name."</span> </p>
            <p> votre numero : <span>".$number."</span> </p>
            <p> Votre email : <span>".$email."</span> </p>
            <p> Votre addresse : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> Votre mode de paiement : <span>".$method."</span> </p>
            <p></p>
         </div>
            <a href='products.php' class='btn'>Continuer vos achats </a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">completer votre commande</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $fetch_cart['price'] * $fetch_cart['quantity'];
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>votre panier est vide!</span></div>";
      }
      ?>
      <span class="grand-total"> prix total : <?= $grand_total; ?> FCFA </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Votre nom</span>
            <input type="text" placeholder="entrer votre nom" name="name" required>
         </div>
         <div class="inputBox">
            <span>Votre numero</span>
            <input type="text" placeholder="entrer votre numero" name="number" required>
         </div>
         <div class="inputBox">
            <span>Votre email</span>
            <input type="email" placeholder="entrer votre email" name="email" required>
         </div>
         <div class="inputBox">
            <span>methode de paiement</span>
            <select name="method">
               <option value="cash on delivery" selected>paiement cash </option>
               <option value="credit cart">carte de credit</option>
               <option value="paypal">paypal</option>
               <option value="om"> Paiement mobile </option>

            </select>
         </div>
         <div class="inputBox">
            <span>addresse 1</span>
            <input type="text" placeholder="entrer votre adresse" name="flat" required>
         </div>
         <div class="inputBox">
            <span>addresse 2</span>
            <input type="text" placeholder="entrer votre adresse" name="street" required>
         </div>
         <div class="inputBox">
            <span>Ville</span>
            <input type="text" placeholder="ex: mumbai" name="city" required>
         </div>
         <div class="inputBox">
            <span>Etat</span>
            <input type="text" placeholder="ex: maharashtra" name="state" required>
         </div>
         <div class="inputBox">
            <span>Pays</span>
            <input type="text" placeholder="ex: india" name="country" required>
         </div>
         <div class="inputBox">
            <span>code pin</span>
            <input type="text" placeholder="ex: 123456" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="Commander maintenant" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>