<?php

/*
	Code for WooCommerce Product Based Content by Harun R Rayhan
*/


// Checking user Loggedin or not first
if( is_user_logged_in() ){ // If user loggedin then this part of code will run	
	
	// Chicking WooCommerce Plugin installed or not??
	if ( class_exists( 'WooCommerce' ) ) {
		
		// Getting user detils
		$current_user = wp_get_current_user(); // getting user data
		$email = $current_user->user_email; // get user email
		$product_id = '213'; // product id, you have to change it with your own product id, To find your product id: http://prntscr.com/aitkg1
		
		if( current_user_can('activate_plugins') || woocommerce_customer_bought_product( $email, $current_user->ID, $product_id ) ){ 
			
			
			
			
			
			// Content for your customer who bought your product goes here
			
			
			
			
			
		}else{
			
			
			// User but not bought your specific product goes here.
			
			
			
		}
	} else {
	  // you don't appear to have WooCommerce activated
	}
		
	
}else{ // This part will run if user not Loggedin
	// Not Loggedin user content here
}
