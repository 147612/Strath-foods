<?php
session_start();
?>
<!DOCTYPE html>
<htnl>
    <head>
<link rel="stylesheet" href="order.css">
<meta name="viewport" content="with=device-width, initial
scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;700;800&display=swap" rel="stylesheet">
  
    </head>
    <body>
        <section class="header">
            <?php
        if(isset($_SESSION['name'])){
  echo '<nav>
  <a href="index.php"><img src=""></a>
  <div class="nlinks">
    <ul>
  <li><a href="index.php"> HOME </a></li>
  
  <li><a href="order.php"> FOOD</a></li>
  <li><a href="logout.php"> LOG OUT </a></li>
  <li><a href=""> CONTACT </a></li>
  </ul>
  </div>
  </nav>';
  
}
else{
  echo '<nav>
  <a href="index.php"><img src=""></a>
  <div class="nlinks">
    <ul>
  <li><a href="index.php"> HOME </a></li>
  <li><a href="user.php"> LOG IN </a></li>
  <li><a href="order.html"> FOOD</a></li>
  
  <li><a href=""> CONTACT </a></li>
  </ul>
  </div>
  </nav>';
}
?>
            <div class="icons"> 
 <div id="menu-btn" class="bars"></div>
 <div id="search-btn" class="search"></div>
<div id="cart-btn" class="shoppingcart"></div>
<div id="login-btn" class="user"></div>


            </div>
            <div class="foods">
                <div id="burger">
                    <p>bruger</p>
                    <img src="strath.png" width="100px" height="100px">
                

                </div>
                <div id="taco">
<img src="food.png" width="100px" height="100px">
<p>TACO</p>
                </div>
            </div>
    </body>
</htnl>