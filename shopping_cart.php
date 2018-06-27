<?php
	// products and their prices
	$products = array("toothpaste" => 1.50, "packet of teabags" => 2.00, "jam" => 1.00, "bread" => 3.00, "butter" => 2.50, "apples" => 0.20, "bunch of bananas" => 1.50, );	
	// shopping cart items and their quantities
	$cart1 = array("jam" => 2, "butter" => 1, "bread" => 3);
	$cart2 = array("apples" => 10, "bunch of bananas" => 2, "toothpaste" => 2, "packet of teabags" => 2);
	$cart3 = array("bread" => 4, "jam" => 1, "butter" => 2, "apples" => 4, "bunch of bananas" => 1);
	
	// function to loop through a shopping cart and calculate the total using the products array
	function calcTotal($cart, $products){
		$total = 0;
		foreach($cart as $product=>$quantity){
			$total = $total + $products[$product] * $quantity;
		}
		return $total;
	}
	
	echo calcTotal($cart1,$products) . "<br>";
	echo calcTotal($cart2,$products) . "<br>";
	echo calcTotal($cart3,$products) . "<br>";
?>