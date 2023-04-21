<?php 

add_action('woocommerce_before_add_to_cart_form', 'add_function');

function add_function(){

    echo 'Du har möjlighet att lägga till vara nedan.';

}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');


// Anpassning av kassan (Checkout)
add_filter('woocommerce_checkout_fields', 'checkout_function');

function checkout_function($fields) {

    $fields['order']['order_comments']['placeholder'] = 'Här kan du lämna en kommentar.';

    return $fields;
}


?>