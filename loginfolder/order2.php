<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="order1.css">
        <meta name="viewport" content="with=device-width, initialscale=1.0">
        <script>
    
   function Delete(e){
      let items = [];
      JSON.parse(localStorage.getItem('items')).map(data=>{
        if(data.id != e.parentElement.parentElement.children[0].textContent){
          
          items.push(data);

        }
      });
      localStorage.setItem('items',JSON.stringify(items));
      window.location.reload();
    };
  </script>
    </head>
    <body>
      <div class="container">
        <?php
  if(isset($_SESSION['name'])){
  echo '<nav>
  <a href="index.php"><img src=""></a>
  <div class="nlinks">
    <ul>
  <li><a href="index.php"> HOME </a></li>
  
  <li><a href="order1.php"> MORNING</a></li>
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
  <li><a href="login.php"> LOG IN </a></li>
  <li><a href="order1.php">MORNING</a></li>
  
  <li><a href=""> CONTACT </a></li>
  </ul>
  </div>
  </nav>';
}
    ?>
 
 <div id="title">
    
     
  <?php
  
if(isset($_SESSION['name'])){
  echo '<p style="text-align:center;font-size:30px;" > WELCOME </p>';
  echo "<h1 class='yourClass'><span class='spanclass'>" .$_SESSION['name']. "</span></h1>";
  
  
  
}

  ?>
 
        </div>
        <div class="menu">
            <div class = "heading">
          <h1> &mdash; EVENING MENU &mdash; </h1>
              </div>
            <div class="fitem">
              <img src="fimg/burger.png">
              <div class="details">
               
                <p>One of ,If Not The Best Burgers Sold In Strathmore</p>
                <div class="details-s">
                  <h5> BURGER</h5>
                  <br>
                  <br>
                  <h5 class="price">600 ksh</h5>
                </div>
                
                <a href="#" title="add to cart" class="attToCart">Add to cart</a>
              </div>
              <div class="fitem">
                <img src="fimg/fish.png">
                <div class="details">
                  <p>one of ,if not the best Fishes sold in strathmore</p>
                  <div class="details-s">
                    <h5> SMALL-FRY</h5>
                    <br>
                    <br>
                    <h5 class="price">450ksh</h5>
                  </div>
                  <a href="#" title="add to cart" class="attToCart">Add to cart</a>
                </div>
                <div class="fitem">
                <img src="fimg/fish.png">
                <div class="details">
                  <p>one of ,if not the best Fishes sold in strathmore</p>
                  <div class="details-s">
                    <h5> SMALL-FRY</h5>
                    <br>
                    <br>
                    <h5 class="price">450ksh</h5>
                  </div>
                  <a href="#" title="add to cart" class="attToCart">Add to cart</a>
                </div>
                <div class="fitem">
                <img src="fimg/fish.png">
                <div class="details">
                  <p>one of ,if not the best Fishes sold in strathmore</p>
                  <div class="details-s">
                    <h5> SMALL-FRY</h5>
                    <br>
                    <br>
                    <h5 class="price">450ksh</h5>
                  </div>
                  <a href="#" title="add to cart" class="attToCart">Add to cart</a>
                </div>
                <div class="fitem">
                <img src="fimg/fish.png">
                <div class="details">
                  <p>one of ,if not the best Fishes sold in strathmore</p>
                  <div class="details-s">
                    <h5> SMALL-FRY</h5>
                    <br>
                    <br>
                    <h5 class="price">450ksh</h5>
                  </div>
                  <a href="#" title="add to cart" class="attToCart">Add to cart</a>
                </div>
                <div class="fitem">
                <img src="fimg/fish.png">
                <div class="details">
                  <p>one of ,if not the best Fishes sold in strathmore</p>
                  <div class="details-s">
                    <h5> SMALL-FRY</h5>
                    <br>
                    <br>
                    <h5 class="price">450ksh</h5>
                  </div>
                  <a href="#" title="add to cart" class="attToCart">Add to cart</a>
                </div>

            </div>
          </div>
  </body>
</html>  
  
    </body>
</html>