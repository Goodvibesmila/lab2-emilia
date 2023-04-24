<?php 


// Här har jag gjort en hook till platsen "before add to car form".
// Det är funktionen add_function som är hookad till platsen.
// Funktionen skickar ut ett echo "Du har möjlighet att.."
add_action('woocommerce_before_add_to_cart_form', 'add_function');

function add_function(){

    echo 'Du har möjlighet att lägga till vara nedan.';

}

// Här gör jag en reomve_action på platsen before shop loop item title.
// Det är templateloopproductthumbnails som jag krokar "av". Från platsen
// Det innebär att bilderna på enskilda produkter på page, front-page och arkiv försvinner.
// Bilderna är kvar på single.php.
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');


?>