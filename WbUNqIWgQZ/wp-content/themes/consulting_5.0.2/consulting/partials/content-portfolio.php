<div class="item <?php
$portfolio_box = array();
$portfolio_box['portfolio_column']   = get_post_meta( get_the_ID(), 'stm_portfolio_column', true );
if ( $portfolio_box ) {
    foreach ( $portfolio_box as $key => $val ) {
        echo consulting_filtered_output($portfolio_box['portfolio_column']);
    }
}
$term_list  = wp_get_post_terms( get_the_ID(), 'stm_portfolio_category' );
?>">
    <?php if ( has_post_thumbnail() ): ?>
        <?php if ( $portfolio_box['portfolio_column'] === 'default' ): ?>
            <?php $image_size = '700x500'; ?>
        <?php elseif( $portfolio_box['portfolio_column'] === 'long' ) : ?>
            <?php $image_size = '700x1060'; ?>
        <?php elseif( $portfolio_box['portfolio_column'] === 'wide' ) : ?>
            <?php $image_size = '1460x500'; ?>
        <?php endif; ?>
        <?php $post_thumbnail = consulting_get_image(get_post_thumbnail_id(), $image_size); ?>
        <div class="item_thumbnail has-thumbnail">
            <?php echo consulting_filtered_output($post_thumbnail); ?>
            <a href="<?php the_permalink(); ?>">
                <span class="portfolio-title">
                    <?php the_title(); ?>
                    <?php if( $term_list ): ?>
                        <span class="portfolio-category"><?php echo esc_html( $term_list[0]->name ); ?></span>
                    <?php endif; ?>
                </span>
            </a>
        </div>
        <?php else: ?>
        <div class="item_thumbnail">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tmp/placeholder.gif' ); ?>" alt="<?php esc_attr_e('Placeholder', 'consulting') ?>" />
            <a href="<?php the_permalink(); ?>">
                <span class="portfolio-title">
                    <?php the_title(); ?>
                    <?php if( $term_list ): ?>
                        <span class="portfolio-category"><?php echo esc_html( $term_list[0]->name ); ?></span>
                    <?php endif; ?>
                </span>
            </a>
        </div>
    <?php endif; ?>
</div>