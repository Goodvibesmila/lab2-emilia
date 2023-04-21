<?php 

//remove_action('woocommerce_before_shop_loop_item_title', '')


// Anpassning av kassan (Checkout)
add_filter('woocommerce_checkout_fields', 'checkout_function');

function checkout_function($fields) {

    $fields['order']['order_comments']['placeholder'] = 'Ett nytt forum för kommentarer';

    return $fields;
}


?>