<header class="header">
    <a href="../../../index.php" class="logo">
      <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="LOGO">
    </a>

    <nav class="navbar">
      <a href="">home</a>
      <a href="">about</a>
      <a href="">menu</a>
      <a href="">products</a>
      <a href="">contact</a>
      <a href="">blogs</a>
    </nav>

   <div class="icons">
      <form method="post">
         <input type="text" name="text-search" class="text-search" placeholder="search here">
         <button type="submit" name="btn-search"></button>
      </form>
      <button class="btn-search"><div class="fas fa-search"></div></button>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <?php
         if(isset($_SESSION['username'])){
            echo "<div class='fas fa-user' id='menu-btn'></div>";
         }else{
            echo "<a href='../../../user/view/content/signin.php' class='btn-signin'>Sign in</a>";
         }
      ?>
   </div>
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<div class="clear-header"></div>