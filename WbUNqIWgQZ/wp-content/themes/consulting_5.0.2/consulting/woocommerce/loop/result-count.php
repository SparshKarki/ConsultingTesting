<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wp_query;

if ( ! woocommerce_products_will_display() )
	return;
?>
<p class="woocommerce-result-count">
	<?php
	$paged    = max( 1, $wp_query->get( 'paged' ) );
	$per_page = $wp_query->get( 'posts_per_page' );
	$total    = $wp_query->found_posts;
	$first    = ( $per_page * $paged ) - $per_page + 1;
	$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

	if ( 1 === $total ) {
		_e( 'Showing the single result', 'consulting' );
	} elseif ( $total <= $per_page || -1 === $per_page ) {
		printf( wp_kses( __( 'Showing all <strong>%d</strong> results', 'consulting' ), array( 'strong' => array() ) ), $total );
	} else {
		printf( wp_kses( _x( 'Showing <strong>%1$d&ndash;%2$d</strong> of <strong>%3$d</strong> results', '%1$d = first, %2$d = last, %3$d = total', 'consulting' ), array( 'strong' => array() ) ), $first, $last, $total );
	}
	?>
</p>
