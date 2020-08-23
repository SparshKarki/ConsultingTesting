<?php

if( $style != 'carousel' ) {
    $css_class .= ' ' . $style;
}
if( $style == 'grid' ) {
    $css_class .= ' cols_' . $per_row;
}
if( $grid_view == 'short' ) {
    $css_class .= ' short-view';
}
elseif( $grid_view == 'minimal' ) {
    $css_class .= ' minimal';
}

if(!empty($image_style)){
    $css_class .= ' ' . $image_style;
}

if( !empty( $style_grid ) and $style_grid == 2 ) {
    $css_class .= ' style_2';
}

$args = array(
    'post_type' => 'stm_staff',
    'posts_per_page' => $count
);

if( $category != 'all' ) {
    $args[ 'stm_staff_category' ] = $category;
}

$testimonials = new WP_Query( $args );

if( $style == 'carousel' ) {
    wp_enqueue_script( 'slick' );
    wp_enqueue_style( 'slick' );
}

$carousel_id = uniqid( 'staff_carousel_' );

$image_size = 'consulting-image-350x250-croped';
if( $grid_view == 'minimal' ) {
    $image_size = 'thumbnail';
}
elseif( $grid_view == 'list_2' ){
    $image_size = 'consulting-image-320x320-croped';
}

if( stm_check_layout( 'layout_geneva' ) ) {
    $image_size = '164x200';
}

?>

<?php if( $testimonials->have_posts() ) : ?>

    <?php if( $style == 'carousel' ) : ?>

        <div class="staff_carousel_container<?php echo esc_attr( $css_class ); ?>">
            <?php if( $carousel_arrows ) : ?>
                <div class="staff_carousel_arrows">
                    <div class="staff_carousel_arrows_inner"></div>
                </div>
            <?php endif; ?>
            <div class="staff_carousel-box">
                <div class="staff_carousel" id="<?php echo esc_attr( $carousel_id ); ?>">
                    <?php while ( $testimonials->have_posts() ): $testimonials->the_post(); ?>
                        <div class="staff_carousel_item">
                            <?php if( has_post_thumbnail() ): ?>
                                <div class="staff_image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'consulting-image-350x250-croped' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="staff_info">
                                <h5 class="no_stripe">
                                    <a href="<?php the_permalink(); ?>" class="text_decoration_none secondary_font_color_hv"><?php the_title(); ?></a>
                                </h5>
                                <?php if( $department = get_post_meta( get_the_ID(), 'department', true ) ): ?>
                                    <div class="staff_department">
                                        <?php echo esc_html( $department ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                    endwhile; ?>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div class="staff_list<?php echo esc_attr( $css_class ); ?>">
            <ul class="<?php if( $grid_view == 'social_icons' ): ?>staff_with_icons<?php endif; ?>">
                <?php while ( $testimonials->have_posts() ): $testimonials->the_post(); ?>
                    <li>
                        <?php if( $style != 'grid' ) {
                            $len = 155;
                        }
                        elseif( $grid_view == 'social_icons' ) {
                            $len = 165;
                        }
                        else {
                            $len = 95;
                        } ?>
                        <?php
                        if( $style === 'list_2' ): ?>
                            <div class="inner">
                                <?php if( has_post_thumbnail() ): ?>
                                    <div class="staff_image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail($image_size); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="staff_content remove_padding">
                                    <a href="<?php the_permalink(); ?>" class="base_font_color text_decoration_none">
                                        <h4 class="secondary_font_color_hv">
                                            <?php the_title(); ?>
                                        </h4>
                                    </a>
                                    <?php if( $department = get_post_meta( get_the_ID(), 'department', true ) ): ?>
                                        <div class="staff_department">
                                            <?php echo esc_html( $department ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( has_excerpt() ): ?>
                                        <div class="staff_excerpt">
                                            <?php echo wp_kses_post(consulting_substr_text( get_the_excerpt(), 100 )); ?>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="read_more base_font_color">
                                        <i class="stm-lnr-arrow-right third_bg_color"></i>
                                        <?php esc_html_e('Read more', 'consulting'); ?>
                                    </a>
                                </div>
                            </div>
                        <?php
                        elseif( !empty( $style_grid ) and $style_grid == 2 ): $len = 250; ?>
                            <div class="inner_box">
                                <div class="inner">
                                    <h4 class="no_stripe">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <?php if( $department = get_post_meta( get_the_ID(), 'department', true ) ): ?>
                                        <div class="staff_department">
                                            <?php echo esc_html( $department ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="stm_invis">
                                        <div class="stm_excerpt">
                                            <?php if( $excerpt = consulting_substr_text( get_the_excerpt(), $len ) ): ?>
                                                <p><?php echo wp_kses_post( $excerpt ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <a class="stm_link_bordered white"
                                           href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'consulting' ); ?></a>
                                    </div>
                                </div>
                                <div class="staff_image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'consulting-image-1110x550-croped' ); ?>
                                    </a>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php if( has_post_thumbnail() ): ?>
                                <div class="staff_image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if( $grid_view == 'social_icons' ) {
                                            the_post_thumbnail( 'consulting-image-550x550-croped' );
                                        }
                                        else {
                                            if( stm_check_layout( 'layout_osaka' ) || stm_check_layout( 'layout_ankara' ) ) {
                                                the_post_thumbnail( 'thumbnail' );
                                            }
                                            else {
                                                the_post_thumbnail( $image_size );
                                            }
                                        }
                                        ?>
                                    </a>
                                    <ul class="staff_socials hidden">
                                        <?php if( $facebook = get_post_meta( get_the_ID(), 'facebook', true ) ): ?>
                                            <li class="staff_facebook">
                                                <a href="<?php echo esc_html( $facebook ); ?>"><i
                                                        class="fa fa-facebook"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if( $twitter = get_post_meta( get_the_ID(), 'twitter', true ) ): ?>
                                            <li class="staff_twitter">
                                                <a href="<?php echo esc_html( $twitter ); ?>"><i
                                                        class="fa fa-twitter"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if( $google_plus = get_post_meta( get_the_ID(), 'google_plus', true ) ): ?>
                                            <li class="staff_google_plus">
                                                <a href="<?php echo esc_html( $google_plus ); ?>"><i
                                                        class="fa fa-google-plus"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if( $linkedin = get_post_meta( get_the_ID(), 'linkedin', true ) ): ?>
                                            <li class="staff_linkedin">
                                                <a href="<?php echo esc_html( $linkedin ); ?>"><i
                                                        class="fa fa-linkedin"></i></a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="staff_info">
                                <h4 class="no_stripe">
                                    <a href="<?php the_permalink(); ?>" class="secondary_font_color_hv text_decoration_none"><?php the_title(); ?></a>
                                </h4>
                                <?php if( $department = get_post_meta( get_the_ID(), 'department', true ) ): ?>
                                    <div class="staff_department">
                                        <?php echo esc_html( $department ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $excerpt = consulting_substr_text( get_the_excerpt(), $len ) ): ?>
                                    <p><?php echo esc_html( $excerpt ); ?></p>
                                <?php endif; ?>
                                <?php if( $style != 'grid' ) : ?>
                                    <a href="<?php the_permalink(); ?>"
                                       class="button bordered size-sm icon_right"><?php esc_html_e( 'view profile', 'consulting' ); ?>
                                        <i class="fa fa-chevron-right"></i></a>
                                <?php else: ?>
                                    <a class="read_more" href="<?php the_permalink(); ?>">
                                        <span><?php esc_html_e( 'view profile', 'consulting' ); ?></span>
                                        <i class=" fa fa-chevron-right stm_icon"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <?php if( $link[ 'url' ] ): ?>
                    <li class="staff_custom_link">
                        <a href="<?php echo esc_url( $link[ 'url' ] ); ?>">
                            <?php if( !empty( $link[ 'title' ] ) || !empty( $link_text ) ) : ?>
                                <span>
                            <?php if( !empty( $link[ 'title' ] ) ) : ?>
                                <span class="staff_custom_link_title"><?php echo esc_html( $link[ 'title' ] ); ?></span>
                            <?php endif; ?>
                                    <?php echo esc_html( $link_text ); ?>
                        </span>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>

    <?php endif; ?>

<?php endif; ?>

<?php if( $style == 'carousel' ): ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            var <?php echo esc_js( $carousel_id ) ?> =
            $("#<?php echo esc_attr( $carousel_id ) ?>");
            var slickRtl = false;

            if ($('body').hasClass('rtl')) {
                slickRtl = true;
            }

            <?php $arrows = (!empty($carousel_arrows)) ? 'true': 'false'; ?>

            <?php echo esc_attr( $carousel_id ) ?>.
            slick({
                rtl: slickRtl,
                dots: false,
                infinite: true,
                <?php if( $carousel_arrows ) : ?>
                appendArrows: '.staff_carousel_arrows_inner',
                prevArrow: "<div class=\"slick_prev\"><i class=\"fa fa-chevron-left\"></i></div>",
                nextArrow: "<div class=\"slick_next\"><i class=\"fa fa-chevron-right\"></i></div>",
                <?php endif; ?>
                'arrows': <?php echo consulting_filtered_output($arrows); ?>,
                slidesToShow: <?php echo esc_js( $slides_to_show ); ?>,
                cssEase: "cubic-bezier(0.455, 0.030, 0.515, 0.955)",
                responsive: [
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 560,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
<?php endif; ?>