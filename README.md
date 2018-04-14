## How to use

1. Run index.php with php (php index.php)
2. Shop commands
- First stage (Adding items to inventory)
	
	**ADD**

	Add item to inventory 

	ADD 'item_id' 'item_name' 'item_price' 'item_quantity'

	example: ADD 1 Shirt 4.99 10

	This will add 10 Shirts priced 4.99 with ID 1
	
	**INV**

	Display current items in inventory
	
	**END**

	End first stage
	
- Second stage (Adding items to cart)
	
	**ADD**

	Add item to cart 

	ADD 'item_id' 'item_quantity'

	example: ADD 1 4

	This will add 4 items with ID 1
	
	**CHECKOUT**

	Checkout your items from cart


	**CART**

	Display current items in cart


	**INV**

	Display current items in inventory

	
	**END**
	
	End second stage and exit
	