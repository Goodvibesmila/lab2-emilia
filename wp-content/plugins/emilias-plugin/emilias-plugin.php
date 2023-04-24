<?php

/*

Plugin Name: emilias-plugin

*/

// Ändrat kommentar vid checkout.
add_filter('woocommerce_checkout_fields', 'checkout_function');

function checkout_function($fields) {

    $fields['order']['order_comments']['placeholder'] = 'Om du vill lägga till en kommentar om din order, går det bra att göra det här.';

    return $fields;
}


?>