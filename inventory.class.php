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

	// Retrieve items from inventory
	public function retrieveItem($itemId, $itemQuantity){
		foreach($this->inventoryItems as &$inventoryItem){
			if($inventoryItem['item_id'] === $itemId){
				$inventoryItem['item_quantity'] -= $itemQuantity;
				$item = [
					'item_id' => $inventoryItem['item_id'],
					'item_name' => $inventoryItem['item_name'],
					'item_price' => $inventoryItem['item_price'],
					'item_quantity' => $inventoryItem['item_quantity']
				];
				return $item;
			}
		}
	}

	// Print all items in inventory
	public function inventoryList(){
		print_r($this->inventoryItems);
	}
}