<?php

/**
 * Plugin Name: Extend Woo
*/

add_action('init','remove_text',1);

function remove_text()
{
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',20);
//remove default sorting drop-down from WooCommerce
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30 );
//If You Want Page Title Hidden
add_filter( 'woocommerce_show_page_title', '__return_false' );   
}