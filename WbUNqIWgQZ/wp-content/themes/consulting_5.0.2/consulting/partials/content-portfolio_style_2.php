<?php
$image_size = '360x250';
if($i === 1 || (((($i + 1) % 3) === 0) && $i !== 2) ){
    $image_size = '360x403';
}
elseif($i === 2 || (($i + 2) % 3) === 0){
    $image_size = '360x283';
}
$attachment_id = get_post_thumbnail_id( get_the_ID() );
if(!empty($attachment_id)){
    $thumbnail = consulting_get_image($attachment_id, $image_size);
}
$term_list  = wp_get_post_terms( get_the_ID(), 'stm_portfolio_category' );
?>
<div class="item">
    <?php if ( has_post_thumbnail() ):
        ?>
        <div class="item_thumbnail has-thumbnail">
            <?php echo wp_kses_post($thumbnail); ?>
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