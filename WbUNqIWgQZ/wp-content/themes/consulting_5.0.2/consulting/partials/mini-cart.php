<?php if ( class_exists( 'WooCommerce' ) ): ?>
    <?php if ( ! WC()->cart->is_empty() ) : ?>
        <span class="count shopping-cart__product"><?php printf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'consulting' ), WC()->cart->get_cart_contents_count()); ?></span>
    <?php else : ?>
        <span class="count shopping-cart__product"><?php esc_html_e( '0', 'consulting' ); ?></span>
    <?php endif; ?>
<?php endif; ?>