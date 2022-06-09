<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', esc_html__( 'Additional Information', 'estato' ) );

?>

<?php 
	
if ( $heading ) {
	echo boldthemes_get_heading_html( '', $heading, '', 'small', '', '', '' ) ;
}

if ( boldthemes_woocommerce_is_new_version() ) {
	wc_display_product_attributes( $product );
}else{
	$product->list_attributes();
}

?>
