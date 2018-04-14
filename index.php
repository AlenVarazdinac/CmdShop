<?php

// Import classes
require_once('item.class.php');
require_once('inventory.class.php');
require_once('cart.class.php');

// Create new inv & cart
$inventory = new Inventory();
$cart = new Cart();

// Stage 1
// Creating items and storing them in inventory
while(true){
	$exit = false;
	$line = readline("Command: ");
	$command = explode(' ', $line);

	switch ($command[0]) {
		// Create new item
		case 'ADD':
			$item = new Item($command[1], $command[2], $command[3], $command[4]);
			$inventory->storeItem($item);
			break;
		
		// Check items in inventory
		case 'INV':
			$inventory->inventoryList();
			break;

		// End Stage 1
		case 'END':
			$exit = true;
			break;

		// Default response
		default:
			echo "INVALID \n";
			break;
	}
	// $exit = true to exit while loop
	if($exit) {
		break;
	}
}

// Stage 2
// Creating items and storing them in inventory
while(true){
	$exit = false;
	$line = readline("Command: ");
	$command = explode(' ', $line);

	switch ($command[0]) {
		// Create new item
		case 'ADD':
			$itemId = $command[1];
			$itemQuantity = $command[2];
			$item = $inventory->retrieveItem($itemId, $itemQuantity);
			$cart->addToCart($item, $itemQuantity);
			break;
		
		// Cart checkout
		case 'CHECKOUT':
            $cart->checkout();
            break;

		// Check items in inventory
		case 'INV':
			$inventory->inventoryList();
			break;

		// Check items in cart
		case 'CART':
			$cart->myCart();
			break;

		// End Stage 2 and exit shop
		case 'END':
			$exit = true;
			break;

		// Default response
		default:
			echo "INVALID \n";
			break;
	}
	// $exit = true to exit while loop
	if($exit) {
		break;
	}
}