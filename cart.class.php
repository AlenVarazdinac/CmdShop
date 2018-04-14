<?php

class cart{
	public $cartItems = [];
	public $itemTotalPrice = 0;
	public $totalPrice = 0;

	// Add item to cart
	public function addToCart($item, $itemQuantity){
		if(empty($this->cartItems)){
			$item['item_quantity'] = $itemQuantity;
			$this->cartItems[] = $item;
		}else{
			foreach($this->cartItems as &$cartItem){
				if($cartItem['item_id'] === $item['item_id']){
					$cartItem['item_quantity'] += $itemQuantity;
					echo "Item quantity increased \n";
					break;
				}else{
					$item['item_quantity'] = $itemQuantity;
					$this->cartItems[] = $item;
					echo "Item added in cart \n";
					break;
				}
			}	
		}
	}

	public function checkout(){
		if(!empty($this->cartItems)){
			echo "=============================== \n";
			echo "ITEM \t QTY \t PRICE \t TOTAL \n \n";

			foreach($this->cartItems as $cartItem){
				$itemQty = $cartItem['item_quantity'];
				$itemPrice = $cartItem['item_price'];
				$this->itemTotalPrice = $itemQty * $itemPrice;
				$this->totalPrice += $this->itemTotalPrice;
				echo $cartItem['item_name'] . "\t  " . $cartItem['item_quantity'] . 
				"\t  " . $cartItem['item_price'] . "\t  " . $this->itemTotalPrice . "\n";
			}
			echo "------------------------------- \n";
			echo "Total cost: $" . $this->totalPrice . "\n";
			echo "=============================== \n";
		}else{
			echo "Your cart is empty. \n";
		}
	}

	// Print all items in cart
	public function myCart(){
		print_r($this->cartItems);
	}
}