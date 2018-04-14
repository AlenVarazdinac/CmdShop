<?php

class Inventory{
	public $inventoryItems = [];

	// Function for storing items in inventory
	public function storeItem($item){
		$this->inventoryItems[] = [
			'item_id' => $item->itemId,
			'item_name' => $item->itemName,
			'item_price' => $item->itemPrice,
			'item_quantity' => $item->itemQuantity
		];
	}

	// Print all items in inventory
	public function inventoryList(){
		print_r($this->inventoryItems);
	}
}