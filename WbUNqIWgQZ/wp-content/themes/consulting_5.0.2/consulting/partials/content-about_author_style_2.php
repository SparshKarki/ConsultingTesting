<div class="stm_post_about_author style_2">
    <div class="author_image">
        <?php echo get_avatar( get_the_author_meta( 'email' ), 60 ); ?>
    </div>
    <div class="author_info">
        <div class="author_name">
            <strong><?php the_author(); ?></strong>
        </div>
        <?php if(!empty(get_the_date())): ?>
            <div class="post_date">
                <?php echo esc_html(get_the_date()); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
