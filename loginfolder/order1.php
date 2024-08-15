<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"/> -->
	<title>
		shopping cart 
	</title>
	<link rel="stylesheet" href="order3.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
	<div class="main">
		
		<header id="header" class="header">
			<h1>ORDER UP</h1>
			<div class="iconShopping">
				
				<p>0</p>
				<i class="fa fa-shopping-cart"></i>
			</div>
		</header><!-- /header -->
		<?php
		if(isset($_SESSION['name'])){
		echo '<nav>
		<a href="index.php"><img src=""></a>
		<div class="nlinks">
		  <ul>
		<li><a href="index.php"> HOME </a></li>
		<li><a href="order2.php">EVENING </a></li>
		<li><a href="logout.php"> LOG OUT </a></li>
		
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
		<li><a href="order2.php">EVENING </a></li>
		<li><a href="login.php"> LOG IN </a></li>
		
		</ul>
		</div>
		</nav>';
	  }
		  ?>
		   <?php
  
  if(isset($_SESSION['name'])){
	echo '<p style="text-align:center;font-size:30px;" > WELCOME </p>';
	echo "<h1 class='yourClass'><span class='spanclass'>" .$_SESSION['name']. "</span></h1>";
	
	
	
  }
  
	?>
		<div class="itemsBox">
			<div class="item">
				<img src="fimg/burger.png" alt="burger"/>
				<div class="itemInfo">
					<h1>delicous burger</h1>
					<p>$<span>300</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
			<div class="item">
				<img src="fimg/chips.png"/>
				<div class="itemInfo">
					<h1>chips</h1>
					<p>$<span>150</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
			<div class="item">
				<img src="fimg/tacos.png"/>
				<div class="itemInfo">
					<h1>Delicous tacos</h1>
					<p>$<span>250</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
			<div class="item">
				<img src="fimg/tacos.png"/>
				<div class="itemInfo">
					<h1>Delicous tacos</h1>
					<p>$<span>250</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
		</div>
	</div>
	<div class="cartBox">
		<div class="cart">
			<i class="fa fa-close"></i>
			<h1>Cart</h1>
			<table></table>
			<div class="container">
			<button class="orderbtn" onclick="showAlert('order successful')">ORDER</button>
			<div class="popup">
				<img src="fimg/od.png">
			</div>
			</div>
		</div>
	</div>
		<script src="order3.js"></script>
</body>