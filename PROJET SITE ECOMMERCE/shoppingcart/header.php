<header class="header">

   <div class="flex">

   <a href="#" class="logo"><span>K</span>eyce<span> F</span>arm</a>

      <nav class="navbar">
         <a href="admin.php">ajout produits</a>
         <a href="products.php">produits</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">panier <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>
   <style>
      .logo{
    color: rgb(4, 2, 2);
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}
.logo span{
    color: #107407;
}






   </style>

</header>