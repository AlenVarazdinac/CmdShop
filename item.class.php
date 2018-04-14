<?php

class Item{
	public $itemId;
	public $itemName;
	public $itemPrice;
	public $itemQuantity;

	// Item constructor
	public function __construct($itemId, $itemName, $itemPrice, $itemQuantity){
		$this->itemId = $itemId;
		$this->itemName = $itemName;
		$this->itemPrice = $itemPrice;
		$this->itemQuantity = $itemQuantity;
	}
}