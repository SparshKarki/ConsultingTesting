<?php
$css_class .= ' cols_' . $cols;
$css_class .= ' ' . $style;

if( $style == 'grid_with_filter' ) {
    $css_class .= ' ' . esc_attr( $grid_with_filter_style );

    if( $grid_with_filter_style == 'style_2' ) {
        $css_class .= ' container';
    }
}

if( $style == 'grid' ) {
    $css_class .= ' ' . esc_attr( $grid_style );
}

wp_enqueue_script( 'isotope' );
wp_enqueue_script( 'imagesloaded' );
wp_enqueue_script( 'owl.carousel' );
wp_enqueue_style( 'owl.carousel' );

if( empty( $works_count ) ) {
    $works_count = -1;
}
if( $style == 'masonry' ) {
    $works_count = 4;
}
if( $style == 'tiles' ) {
    $works_count = 5;
}
$all_works = new WP_Query( array(
    'post_type' => 'stm_works',
    'posts_per_page' => $works_count
) );

$categories = get_terms( 'stm_works_category' );
$categories_slug = array();

if( !empty( $works_categories ) ) {
    $categories_arr = array();
    $works_categories_arr = explode( ', ', $works_categories );
    foreach( $categories as $cat ) {
        if( in_array( $cat->slug, $works_categories_arr ) ) {
            $categories_arr[] = (object) array( 'name' => $cat->name, 'slug' => $cat->slug );
            $categories_slug[] = $cat->slug;
        }
    }

    $categories = $categories_arr;

    if( $style == 'grid_with_filter' ) {
        $all_works = new WP_Query( array(
            'post_type' => 'stm_works',
            'posts_per_page' => $works_count,
            'tax_query' => array(
                array(
                    'taxonomy' => 'stm_works_category',
                    'field' => 'slug',
                    'terms' => $categories_slug,
                ),
            ),
        ) );
    }
}

$works_id = uniqid( 'stm_works_' );

$has_user_size = false;
if( !$img_size ) {
    $img_size = 'consulting-image-255x182-croped';
}
else {
    $has_user_size = true;
}
if( $style == 'masonry' ):
$count = $all_works->found_posts;
if( $count > $works_count ) $count = $works_count;
$i = 0; ?>
<?php if( $all_works->have_posts() ): ?>
<div class="stm_works<?php echo esc_attr( $css_class ); ?>" id="<?php echo esc_attr( $works_id ); ?>">
    <?php while ( $all_works->have_posts() ):
    $all_works->the_post(); ?>
<?php if( $i == 0 || $i == 1 ): ?>
    <div class="stm_works_col">
        <?php endif; ?>
        <?php $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' ); ?>
        <?php
        $image_size = '261x261';
        $tile_class = 'default';
        if( $i == 0 ) {
            $image_size = '552x552';
            $tile_class = 'big';
        }
        elseif( $i == 1 ) {
            $image_size = '552x261';
            $tile_class = 'medium';
        }
        $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $image_size );
        ?>
        <div class="stm_works_item <?php echo esc_attr( $tile_class ); ?>">
            <div class="inner">
                <?php echo wp_kses_post( $post_thumbnail ); ?>
                <div class="date third_bg_color">
                    <span class="day"><?php echo get_the_date( 'd' ); ?></span>
                    <span class="month"><?php echo get_the_date( 'M' ); ?></span>
                </div>
                <div class="content">
                    <a href="<?php the_permalink(); ?>" class="title">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php
                    if( !empty( $term_list ) ):
                        foreach( $term_list as $term ):
                            ?>
                            <a href="<?php echo get_term_link( $term->term_id, 'stm_works_category' ); ?>" class="term">
                                <?php echo esc_html( $term->name ); ?>
                            </a>
                        <?php
                        endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
        <?php
        if( $i == 0 || $i == ( intval( $count ) - 1 ) ) echo '</div>';
        $i++;
        endwhile; ?>
    </div>
    <?php endif; ?>
    <?php elseif( $style === 'tiles' ): ?>
        <?php if( $all_works->have_posts() ): ?>
            <?php $count = 0; ?>
            <div class="stm_works<?php echo esc_attr( $css_class ); ?>">
                <?php while ( $all_works->have_posts() ): $all_works->the_post(); ?>
                    <?php
                    $count++;
                    $image_size = ( $count === 1 ) ? '360x360' : '360x165';
                    $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' );
                    ?>
                    <div class="stm_works__item text-center item-<?php echo esc_attr( $count ); ?>">
                        <div class="stm_works__item_wrapper">
                            <?php if( has_post_thumbnail() ) {
                                $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $image_size );
                                echo wp_kses_post( $post_thumbnail );
                            } ?>
                            <div class="info">
                                <h3 class="work-title stripe_center">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <?php if( !empty( $term_list ) ): ?>
                                    <div class="work-category">
                                        <?php echo esc_html( $term_list[ 0 ]->name ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <?php if( $all_works->have_posts() ): ?>
            <?php if( $style == 'grid_with_carousel' ) : ?>

                <div id="<?php echo esc_attr( $works_id ); ?>"
                     class="stm_works_wr<?php echo esc_attr( $css_class ); ?>">
                    <?php while ( $all_works->have_posts() ): $all_works->the_post(); ?>
                        <?php $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' ); ?>
                        <div class="item">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'consulting-image-550x550-croped' ); ?></a>
                            </div>
                            <div class="info">
                                <?php if( $term_list ): ?>
                                    <div class="category"><a
                                                href="#<?php echo esc_attr( $term_list[ 0 ]->slug ); ?>"><span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                            <i class="fa fa-chevron-right"></i></a></div>
                                <?php endif; ?>
                                <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $("#<?php echo esc_js( $works_id ); ?>").owlCarousel({
                            <?php if( $loop ): ?>
                            loop: true,
                            <?php endif; ?>
                            <?php if( $autoplay ): ?>
                            autoplay: true,
                            <?php endif; ?>
                            <?php if( $dots ): ?>
                            dots: true,
                            <?php endif; ?>
                            <?php if( $nav ): ?>
                            nav: true,
                            <?php endif; ?>
                            smartSpeed: <?php echo esc_js( $smart_speed ); ?>,
                            responsive: {
                                0: {
                                    items: <?php echo esc_js( $items_mobile ); ?>
                                },
                                480: {
                                    items: <?php echo esc_js( $items_land ); ?>
                                },
                                768: {
                                    items: <?php echo esc_js( $items_tablet ); ?>
                                },
                                992: {
                                    items: <?php echo esc_js( $items_small_desktop ); ?>
                                },
                                1024: {
                                    items: <?php echo esc_js( $items ); ?>
                                }
                            }
                        });
                    });
                </script>

            <?php else: ?>
                <div id="<?php echo esc_attr( $works_id ); ?>"
                     class="stm_works_wr<?php echo esc_attr( $css_class ); ?>">
                    <?php if( $style == 'grid_with_filter' && $categories ): ?>
                        <ul class="works_filter">
                            <li class="active"><a href="#all"><?php esc_html_e( 'All', 'consulting' ); ?></a></li>
                            <?php foreach( $categories as $cat ): ?>
                                <li>
                                    <a href="#<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_attr( $cat->name ); ?></a>
                                </li>
                            <?php endforeach; ?>
                            <?php if( $grid_with_filter_style == 'style_2' ) : ?>
                                <li class="works_filter_switcher">
                                    <a href="#" class="stm_works_grid_switcher">
                                        <i class="fa fa-arrow-left left"></i>
                                        <i class="fa fa-arrow-right right"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="stm_works">
                            <?php while ( $all_works->have_posts() ): $all_works->the_post(); ?>
                                <?php
                                $work_class = '';
                                $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' );
                                if( $term_list ) {
                                    foreach( $term_list as $term ) {
                                        $work_class .= ' ' . $term->slug;
                                    }
                                }
                                ?>
                                <div class="item all<?php echo esc_attr( $work_class ); ?>">
                                    <?php if( $grid_with_filter_style == 'style_2' ) : ?>

                                        <div class="item_wr">
                                            <?php

                                            $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $img_size );

                                            echo consulting_filtered_output( $post_thumbnail );
                                            if( strlen( get_the_title() ) > 50 ) {
                                                $title = substr( get_the_title(), 0, 50 ) . "...";
                                            }
                                            else {
                                                $title = get_the_title();
                                            }
                                            ?>
                                            <div class="title"><?php echo sanitize_text_field( $title ); ?></div>
                                            <?php if( $term_list ): ?>
                                                <div class="category"><?php echo esc_html( $term_list[ 0 ]->name ); ?></div>
                                            <?php endif; ?>
                                            <a class="link" href="<?php the_permalink(); ?>"></a>
                                        </div>

                                    <?php else: ?>

                                        <div class="image">
                                            <?php


                                            $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $img_size );

                                            if( strlen( get_the_title() ) > 71 ) {
                                                $title = substr( get_the_title(), 0, 71 ) . "...";
                                            }
                                            else {
                                                $title = get_the_title();
                                            }
                                            ?>
                                            <a href="<?php the_permalink(); ?>"><?php echo consulting_filtered_output( $post_thumbnail ); ?></a>
                                        </div>
                                        <div class="info">
                                            <?php if( $term_list ): ?>
                                                <div class="category"><a
                                                            href="#<?php echo esc_attr( $term_list[ 0 ]->slug ); ?>"><span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                                        <i class="fa fa-chevron-right"></i></a></div>
                                            <?php endif; ?>
                                            <div class="title"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    <?php elseif( $style == 'grid' && $grid_style == 'style_3' ): ?>
                        <div class="stm_works_grid_wrap style_3">
                            <?php while ( $all_works->have_posts() ):
                                $all_works->the_post(); ?>
                                <?php
                                if( has_post_thumbnail() ):

                                    $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), '550x260' );
                                    $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' );
                                    ?>
                                    <div class="stm_works_item">
                                        <div class="work_wrap">
                                            <a href="<?php the_permalink(); ?>" class="image">
                                                <?php echo wp_kses_post( $post_thumbnail ); ?>
                                            </a>
                                            <div class="work_content">
                                                <a href="<?php the_permalink(); ?>" class="title">
                                                    <h4>
                                                        <?php the_title(); ?>
                                                    </h4>
                                                </a>
                                                <?php if( !empty( $term_list ) ): ?>
                                                    <a href="<?php echo esc_url( get_term_link( $term_list[ 0 ] ) ); ?>"
                                                       class="term">
                                                        <span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php elseif( $style == 'grid' && $grid_style == 'style_2' ): ?>

                        <?php if( stm_check_layout( 'layout_17' ) ): ?>

                            <div class="stm_works_masonry_disabled">
                                <?php $i = 0;
                                while ( $all_works->have_posts() ): $all_works->the_post();
                                    $i++; ?>
                                    <?php $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' ); ?>
                                    <div class="item">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $generated_img_size = $img_size;
                                            $class = 'default';
                                            if( $i == 1 ) {
                                                $generated_img_size = '539x540';
                                                $class = 'large';
                                            }
                                            elseif( $i == 2 ) {
                                                $generated_img_size = '539x255';
                                                $class = 'medium';
                                            }
                                            else {
                                                $generated_img_size = '254x255';
                                            }

                                            $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $generated_img_size );
                                            ?>
                                            <?php echo consulting_filtered_output( $post_thumbnail ); ?>
                                        </a>
                                        <div class="info <?php echo esc_attr( $class ); ?>">
                                            <?php if( $term_list ): ?>
                                                <div class="category">
                                                    <a href="<?php echo esc_url( get_term_link( $term_list[ 0 ] ) ); ?>"><span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                                        <i class="fa fa-chevron-left"></i></a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="title heading_font"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>

                        <?php elseif(
                            stm_check_layout( 'layout_19' )
                            || stm_check_layout( 'layout_zurich' )
                            || stm_check_layout( 'layout_san_francisco' )
                            || stm_check_layout( 'layout_stockholm' )
                            || stm_check_layout( 'layout_geneva' )
                            || stm_check_layout( 'layout_osaka' )
                            || stm_check_layout( 'layout_budapest' )
                            || stm_check_layout( 'layout_barcelona' ) ): ?>

                            <div class="stm_works_masonry_disabled">
                                <?php $i = 0;
                                while ( $all_works->have_posts() ): $all_works->the_post();
                                    $i++; ?>
                                    <?php $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' ); ?>
                                    <div class="item">
                                        <?php
                                        $generated_img_size = $img_size;
                                        $class = 'default';
                                        if( $i == 1 ) {
                                            $generated_img_size = '550x525';
                                            $class = 'large';
                                        }
                                        elseif( $i == 2 ) {
                                            $generated_img_size = '545x255';
                                            $class = 'medium';
                                        }
                                        else {
                                            $generated_img_size = '265x255';
                                        }

                                        $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $generated_img_size );
                                        ?>
                                        <?php echo consulting_filtered_output( $post_thumbnail ); ?>
                                        <a href="<?php the_permalink(); ?>">
                                    <span class="work-title">
                                        <?php the_title(); ?>
                                        <?php if( $term_list ): ?>
                                            <span class="work-description"><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                        <?php endif; ?>
                                    </span>
                                        </a>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>

                        <?php else: ?>
                            <div class="stm_works">
                                <?php while ( $all_works->have_posts() ): $all_works->the_post(); ?>
                                    <?php $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' ); ?>
                                    <div class="item">
                                        <div class="image">
                                            <?php


                                            $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $img_size );
                                            if( strlen( get_the_title() ) > 71 ) {
                                                $title = substr( get_the_title(), 0, 71 ) . "...";
                                            }
                                            else {
                                                $title = get_the_title();
                                            }
                                            ?>
                                            <a href="<?php the_permalink(); ?>"><?php echo consulting_filtered_output( $post_thumbnail ); ?></a>
                                            <?php if( stm_check_layout( 'layout_16' ) ): ?>
                                                <div class="stm_l16_works_bot">
                                                    <?php if( $term_list ): ?>
                                                        <div class="category"><a
                                                                    href="<?php echo esc_url( get_term_link( $term_list[ 0 ] ) ); ?>"><span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span></a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="title heading-font"><a
                                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="info">
                                            <?php if( stm_check_layout( 'layout_16' ) ): ?>
                                                <div class="stm_the_excerpt"><?php the_excerpt(); ?></div>
                                                <a class="stm_link_bordered"
                                                   href="<?php echo esc_url( get_the_permalink() ) ?>"><?php esc_html_e( 'Read more', 'consulting' ); ?></a>
                                            <?php else: ?>
                                                <?php if( $term_list ): ?>
                                                    <div class="category"><a
                                                                href="#<?php echo esc_attr( $term_list[ 0 ]->slug ); ?>"><span><?php echo esc_html( $term_list[ 0 ]->name ); ?></span>
                                                            <i class="fa fa-chevron-right"></i></a></div>
                                                <?php endif; ?>
                                                <div class="title"><a
                                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        <?php endif; ?>

                    <?php else: ?>

                        <div class="stm_works clearfix">
                            <?php while ( $all_works->have_posts() ): $all_works->the_post(); ?>
                                <?php
                                $term_list = wp_get_post_terms( get_the_ID(), 'stm_works_category' );
                                ?>
                                <div class="item">
                                    <div class="item_wr">
                                        <?php

                                        if( stm_check_layout( 'layout_13' ) and !$has_user_size ) {
                                            $img_size = 'consulting-image-320x320-croped';
                                        }

                                        $post_thumbnail = consulting_get_image( get_post_thumbnail_id(), $img_size );
                                        echo consulting_filtered_output( $post_thumbnail );
                                        if( strlen( get_the_title() ) > 50 ) {
                                            $title = substr( get_the_title(), 0, 50 ) . "...";
                                        }
                                        else {
                                            $title = get_the_title();
                                        }
                                        ?>

                                        <?php if( stm_check_layout( 'layout_13' ) ): ?>
                                            <div class="stm_item_wr-content">
                                                <?php if( $term_list ): ?>
                                                    <div class="category"><?php echo esc_html( $term_list[ 0 ]->name ); ?>
                                                        <i
                                                                class="fa fa-chevron-right"></i></div>
                                                <?php endif; ?>
                                                <div class="title"><?php echo sanitize_text_field( $title ); ?></div>
                                            </div>
                                            <a class="link" href="<?php the_permalink(); ?>"></a>
                                        <?php else: ?>
                                            <div class="title"><?php echo sanitize_text_field( $title ); ?></div>
                                            <?php if( $term_list ): ?>
                                                <div class="category"><?php echo esc_html( $term_list[ 0 ]->name ); ?></div>
                                            <?php endif; ?>
                                            <a class="link" href="<?php the_permalink(); ?>"></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>

                    <?php endif; ?>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            var $container = $("#<?php echo esc_js( $works_id ); ?> .stm_works");
                            var originLeft = true;
                            if ($('body').hasClass('rtl')) {
                                originLeft = false;
                            }
                            $container.isotope({
                                layoutMode: 'fitRows',
                                itemSelector: '.item',
                                transitionDuration: '0.7s',
                                isOriginLeft: originLeft,
                                <?php if(!empty( $works_count_visible )): ?>
                                filter: function () {
                                    return $(this).index() < <?php echo esc_js( intval( $works_count_visible ) ); ?>
                                }
                                <?php endif; ?>
                            });
                            $container.imagesLoaded().progress(function () {
                                $container.isotope('layout');
                            });
                            $container.isotope('layout');
                            $('#<?php echo esc_js( $works_id ); ?> .works_filter a').on('click', function () {
                                var i = 0;
                                if (!$(this).hasClass("stm_works_grid_switcher")) {

                                    $(this).closest('ul').find('li.active').removeClass('active');
                                    $(this).parent().addClass('active');
                                    var sort = $(this).attr('href');
                                    sort = sort.substring(1);
                                    <?php if(empty( $works_count_visible )): ?>
                                    $container.isotope({
                                        filter: '.' + sort
                                    });
                                    <?php else: ?>
                                    $container.isotope({
                                        filter: function () {
                                            if ($(this).hasClass(sort) && i < <?php echo esc_js( intval( $works_count_visible ) ); ?>) {
                                                i++;
                                                return $(this);
                                            }
                                        }
                                    });
                                    <?php endif; ?>
                                    return false;
                                }
                            });
                            $(document).on('click', '.stm_works_grid_switcher', function () {
                                $(this).toggleClass('active');
                                var $container_wrapper = $(this).closest('.stm_works_wr');
                                if ($('body').hasClass('boxed_layout')) {
                                    $container_wrapper.toggleClass('wide');
                                } else {
                                    $container_wrapper.toggleClass('wide container');
                                }
                                //$container_wrapper.find('.stm_works_grid_switcher').closest('.works_filter').toggleClass('container');
                                $container.isotope('layout');
                                $container.closest('.stm_works').animate({'height': $container.height() + $('#stm_works_<?php echo esc_js( $works_id ); ?> .stm_works').height()}, 300);
                                return false;
                            });
                            $('#<?php echo esc_js( $works_id ); ?> .item .category a').on('click', function () {
                                if (!$(this).hasClass("stm_works_grid_switcher")) {
                                    var sort = $(this).attr('href');
                                    sort = sort.substring(1);
                                    $('#<?php echo esc_js( $works_id ); ?> .works_filter li.active').removeClass('active');
                                    $('#<?php echo esc_js( $works_id ); ?> .works_filter li a[href="#' + sort + '"]').closest('li').addClass('active');
                                    $container.isotope({
                                        filter: '.' + sort
                                    });
                                    return false;
                                }
                            });
                        });
                    </script>
                    <?php
                    if( stm_check_layout( 'layout_20' ) ):?>
                        <script type="text/javascript">
                            jQuery(document).ready(function ($) {

                                var works_filter = $(".works_filter"),
                                    elem_width,
                                    elem_left_offset,
                                    elem_parent,
                                    slider_line;

                                $(window).load(function () {

                                    works_filter.each(function () {
                                        $(this).append('<li class="magic-line"></li>');

                                        var start_elem_width = 0;
                                        var start_elem_offset = 0;
                                        var active_elem = $(this).find(".active");

                                        if (active_elem.length) {
                                            start_elem_width = active_elem.outerWidth();
                                            start_elem_offset = active_elem.position().left;
                                        }

                                        $(this).find(".magic-line").css({
                                            "width": start_elem_width + "px",
                                            "left": start_elem_offset + "px"
                                        })
                                            .data("width", start_elem_width)
                                            .data("left", start_elem_offset);
                                    });

                                });

                                works_filter.find("li a").on('click', function () {
                                    works_filter.each(function () {
                                        var start_elem_width = 0;
                                        var start_elem_offset = 0;
                                        var active_elem = $(this).find(".active");

                                        if (active_elem.length) {
                                            start_elem_width = active_elem.outerWidth();
                                            start_elem_offset = active_elem.position().left;
                                        }

                                        $(this).find(".magic-line").css({
                                            "width": start_elem_width + "px",
                                            "left": start_elem_offset + "px"
                                        })
                                            .data("width", start_elem_width)
                                            .data("left", start_elem_offset);
                                    });
                                });

                                works_filter.find("li a").on('hover', function () {

                                    elem_parent = $(this).parent();
                                    elem_width = elem_parent.outerWidth();
                                    elem_left_offset = $(this).position().left;
                                    slider_line = elem_parent.siblings(".magic-line");
                                    slider_line.stop().animate({
                                        "width": elem_width + "px",
                                        "left": elem_left_offset + "px"
                                    });

                                }, function () {

                                    slider_line.stop().animate({
                                        "width": slider_line.data("width") + "px",
                                        "left": slider_line.data("left") + "px"
                                    });

                                });

                            });
                        </script>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
