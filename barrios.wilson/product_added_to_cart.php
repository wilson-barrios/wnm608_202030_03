<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);
$p = array_find(
	getCart(),
	function($o) use ($id) { return $o->id==$_GET['id']; }
);
$o = getRows(makeConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Product Item</div>
			</div>
	</header>

	<div class="container">

		<div class="thankyoupic"><img src="img/thankyou.png"></div>
		
		<div class="card soft">
			


			<div class="thankyou">
				For adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
			</div>
		</div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_item.php?id=<?= $o->id ?>"><img class="icon-admin" src="img/back2.png" alt="Back"><br><br> Back to the <?= $o->name ?></a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php"><img class="icon-admin" src="img/store2.png" alt="store"><br><br>Continue Shopping</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php"><img class="icon-admin" src="img/cart3.png" alt="store"><br><br>Shopping Cart</a>
					</li>
				</ul>
			</nav>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>
    
	<?php include "parts/footer.php" ?>
</body>
</html>

