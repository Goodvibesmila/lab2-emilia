<?php

/*

Plugin Name: emilias-plugin

*/

/*
$image = imagecreate ( 500, 300);
$background_color = imagecolorallocate($, 0, 153, 0);

$text_color = imagecolorallocate( $image, 255, 255, 255);

imagestring($image, 5, 180, 100, "Missa inte att det är fri frakt för alla köp över 300kr.", $text_color);
imagestring($image, 3, 160, 120, "Erbjudandet gäller i en vecka.", $text_color);

header("Content-Type: image/png");

imagepng($image);
imagedestroy($image);

*/

// Ändrat kommentar vid checkout.
add_filter('woocommerce_checkout_fields', 'checkout_function');

function checkout_function($fields) {

    $fields['order']['order_comments']['placeholder'] = 'Om du vill lägga till en kommentar om din order, går det bra att göra det här.';

    return $fields;
}


/* createelement, lägga till en bild på single.php och kanske kolla w3schools efter funktioner för ideer. */

?>