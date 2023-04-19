<?php 

/*

Plugin Name: emilias-plugin
Plugin URI: http://localhost/lab2-emilia
Description: Mitt första plugin.
Version: 1.0
Requires at least: 1.0
Requires PHP: 5.2
Author: Emilia Johansson
Author URI: http://localhost/lab2-emilia/wp-admin/plugins.php?plugin_status=all&paged=1&s
License: Dont know
Text Domain: emilias-plugin
*/


echo "Emilias Plugin";


// lägger till något, en krok wp_footer som vi ska
//hänga upp vår kod på. 
// funktionen är det som ska hända.
add_action('wp_footer', 'runfunction')

/*
// Kör en info_function.
function runfunction() {
    info_function()
}
*/


?>