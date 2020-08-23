<div class="stm_news_unit-block">
    <h5 class="no_stripe"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <?php if( get_the_excerpt() ) : ?>
        <div class="stm_the_excerpt">
            <?php the_excerpt(); ?>
        </div>
    <?php endif; ?>
    <a class="stm_link_bordered" href="<?php the_permalink(); ?>">
        <span><?php esc_html_e('Read more', 'consulting'); ?></span>
    </a>
</div>