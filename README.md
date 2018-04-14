## How to use

1. Run index.php with php (php index.php)
2. Shop commands
- First stage (Adding items to inventory)
	
	**ADD** <br/>
	Add item to inventory <br/>
	ADD 'item_id' 'item_name' 'item_price' 'item_quantity' <br/>
	example: ADD 1 Shirt 4.99 10 <br/>
	This will add 10 Shirts priced 4.99 with ID 1 <br/>
	
	**INV** <br/>
	Display current items in inventory <br/>
	
	**END** <br/>
	End first stage <br/>
	
- Second stage (Adding items to cart)
	
	**ADD** <br/>
	Add item to cart <br/>
	ADD 'item_id' 'item_quantity' <br/>
	example: ADD 1 4 <br/>
	This will add 4 items with ID 1 <br/>
	
	**CHECKOUT** <br/>
	Checkout your items from cart <br/>

	**CART** <br/>
	Display current items in cart <br/>

	**INV** <br/>
	Display current items in inventory <br/>

	**END** <br/>
	End second stage and exit <br/>
	
