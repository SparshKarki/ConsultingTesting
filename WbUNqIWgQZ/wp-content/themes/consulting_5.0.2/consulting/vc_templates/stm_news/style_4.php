<?php
$image_size = '360x250';
if( $i === 1 || ( ( ( ( $i + 1 ) % 3 ) === 0 ) && $i !== 2 ) ) {
    $image_size = '360x403';
}
elseif( $i === 2 || ( ( $i + 2 ) % 3 ) === 0 ) {
    $image_size = '360x283';
}
$attachment_id = get_post_thumbnail_id( get_the_ID() );
if( !empty( $attachment_id ) ) {
    $thumbnail = consulting_get_image($attachment_id, $image_size);
}
$post_url = get_the_permalink();
?>
<?php if( has_post_thumbnail() ): ?>
    <li class="view_style_4 news_item">
        <div class="post_item">
            <a href="<?php echo esc_url( $post_url ); ?>" class="image">
                <div class="post_date third_bg_color base_font_color">
                    <?php echo get_the_date(); ?>
                </div>
                <?php
                echo wp_kses_post( $thumbnail );
                ?>
                <h5><?php the_title(); ?></h5>
            </a>
        </div>
    </li>
<?php endif; ?>