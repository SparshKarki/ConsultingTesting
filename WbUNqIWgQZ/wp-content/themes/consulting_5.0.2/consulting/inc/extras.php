<?php
function stm_set_html_content_type() {
    return 'text/html';
}

add_filter('nav_menu_css_class', 'consulting_nav_class', 10, 2);
function consulting_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');

    // Removes current_page_parent class from blog menu item
    if ( get_post_type() == $post_type )
        $classes = array_filter($classes, "consulting_nav_current_value" );

    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a current_page_parent class to the parent menu item
    if( in_array( $post_type.'-menu-item', $classes ) )
        array_push($classes, 'current_page_parent');

    return $classes;
}

function consulting_nav_current_value( $element ) {
    return ( $element != "current_page_parent" );
}

if( ! function_exists( 'consulting_page_id' ) ) {
    function consulting_page_id() {
        $page_ID = get_the_ID();

        if( is_front_page() ) {
            $page_ID = get_option('page_on_front');
        }

        if ( is_home() || is_category() || is_search() || is_tag() || is_tax() ) {
            $page_ID = get_option( 'page_for_posts' );
        }

        return $page_ID;
    }
}

add_filter( 'upload_mimes', 'consulting_custom_mime' );

if ( ! function_exists( 'consulting_custom_mime' ) ) {
    function consulting_custom_mime( $mimes ) {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['ico'] = 'image/icon';

        return $mimes;
    }
}

if ( ! function_exists( 'consulting_comment' ) ) {
    function consulting_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        extract( $args, EXTR_SKIP );

        $rating = '';
        if ( isset( $comment->post_type ) && $comment->post_type == 'product' && get_option( 'woocommerce_enable_review_rating' ) == 'yes' ) {
            $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
        }

        if ( 'div' == $args['style'] ) {
            $tag       = 'div';
            $add_below = 'comment';
        } else {
            $tag       = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo esc_attr( $tag ) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) { ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
        <?php } ?>
        <?php if ( $args['avatar_size'] != 0 ) { ?>
            <div class="vcard">
                <?php echo get_avatar( $comment, 174 ); ?>
            </div>
        <?php } ?>
        <div class="comment-info clearfix">
            <div class="comment-author"><?php echo get_comment_author_link(); ?></div>
            <div class="comment-meta commentmetadata">
                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                    <?php printf( esc_html__( '%1$s at %2$s', 'consulting' ), get_comment_date(), get_comment_time() ); ?>
                </a>
                <?php if ( $rating ) { ?>
                    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
                         title="<?php echo sprintf( esc_html__( 'Rated %d out of 5', 'consulting' ), $rating ) ?>">
						<span style="width:<?php echo esc_attr( $rating / 5 ) * 100; ?>%"><strong
                                itemprop="ratingValue"><?php echo esc_html( $rating ); ?></strong> <?php esc_html_e( 'out of 5', 'consulting' ); ?></span>
                    </div>
                <?php } ?>
                <?php comment_reply_link( array_merge( $args, array(
                    'reply_text' => wp_kses( __( '<i class="fa fa-reply"></i> Reply', 'consulting' ), array( 'i' => array() ) ),
                    'add_below'  => $add_below,
                    'depth'      => $depth,
                    'max_depth'  => $args['max_depth']
                ) ) ); ?>
                <?php edit_comment_link( esc_html__( 'Edit', 'consulting' ), '  ', '' ); ?>
            </div>
            <div class="comment-text">
                <?php comment_text(); ?>
            </div>
            <?php if ( $comment->comment_approved == '0' ) { ?>
                <em
                    class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'consulting' ); ?></em>
            <?php } ?>
        </div>

        <?php if ( 'div' != $args['style'] ) { ?>
            </div>
        <?php } ?>
    <?php
    }
}

add_filter( 'comment_form_default_fields', 'consulting_comment_form_fields' );

if ( ! function_exists( 'consulting_comment_form_fields' ) ) {
    function consulting_comment_form_fields( $fields ) {
        $commenter = wp_get_current_commenter();
        $req       = get_option( 'require_name_email' );
        $aria_req  = ( $req ? " aria-required='true'" : '' );
        $html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
        $fields    = array(
            'author' => '<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="input-group comment-form-author">
		            			<input placeholder="' . esc_attr__( 'Name', 'consulting' ) . ( $req ? ' *' : '' ) . '" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	                        </div>
	                    </div>',
            'email'  => '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="input-group comment-form-email">
							<input placeholder="' . esc_attr__( 'E-mail', 'consulting' ) . ( $req ? ' *' : '' ) . '" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
						</div>
					</div>',
            'url'    => '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="input-group comment-form-url">
							<input placeholder="' . esc_attr__( 'Website', 'consulting' ) . '" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
						</div>
					</div></div>'
        );

        return $fields;
    }
}

add_filter( 'comment_form_defaults', 'consulting_comment_form' );

if ( ! function_exists( 'consulting_comment_form' ) ) {
    function consulting_comment_form( $args ) {
        $args['comment_field'] = '<div class="input-group comment-form-comment">
						        <textarea placeholder="' . _x( 'Message', 'noun', 'consulting' ) . ' *" class="form-control" name="comment" rows="9" aria-required="true"></textarea>
							  </div>
							  <div class="input-group">
							    <button type="submit" class="button size-lg icon_left"><i class="fa fa-chevron-right"></i> ' . esc_html__( 'post a comment', 'consulting' ) . '</button>
						    </div>';

        return $args;
    }
}

if ( ! function_exists( 'consulting_move_comment_field_to_bottom' ) ) {
    function consulting_move_comment_field_to_bottom( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;

        return $fields;
    }
}

add_filter( 'comment_form_fields', 'consulting_move_comment_field_to_bottom' );

if ( ! function_exists( 'consulting_wpml_lang_switcher' ) ) {
    function consulting_wpml_lang_switcher() {
        if ( function_exists( 'icl_get_languages' ) ) {
            $languages = icl_get_languages( 'skip_missing=0&orderby=code' );
            $output    = '';
            if ( ! empty( $languages ) ) {
                $output .= '<div id="stm_wpml_lang_switcher">';
                $output .= '<div class="active_language">' . esc_html( ICL_LANGUAGE_NAME_EN ) . ' <i class="fa fa-angle-down"></i></div>';
                $output .= '<ul>';
                foreach ( $languages as $l ) {
                    if ( ! $l['active'] ) {
                        $output .= '<li>';
                        $output .= '<a href="' . esc_url( $l['url'] ) . '">';
                        $output .= esc_html( icl_disp_language( $l['native_name'] ) );
                        $output .= '</a>';
                        $output .= '</li>';
                    }
                }
                $output .= '</ul>';
                $output .= '</div>';
                echo consulting_filtered_output($output);
            }
        }
    }
}

if ( ! function_exists( 'consulting_get_header_style' ) ) {
    function consulting_get_header_style() {
        $header_style = get_theme_mod( 'header_style', 'header_style_1' );
        if ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_1' ) {
            $header_style = 'header_style_1';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_2' ) {
            $header_style = 'header_style_2';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_3' ) {
            $header_style = 'header_style_3';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_4' ) {
            $header_style = 'header_style_4';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_5' ) {
            $header_style = 'header_style_5';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_6' ) {
            $header_style = 'header_style_6';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_7' ) {
            $header_style = 'header_style_7';
        } elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_8' ) {
            $header_style = 'header_style_8';
        }

        return $header_style;
    }
}

if ( ! function_exists( 'consulting_get_header' ) ) {
    function consulting_get_header() {
        $header = '';
        return get_header( $header );
    }
}

if ( ! function_exists( 'consulting_get_socials' ) ) {
    function consulting_get_socials( $type = 'header_socials' ) {
        $socials_array  = array();
        $socials_enable = get_theme_mod( $type );
        $socials_enable = explode( ',', $socials_enable );

        $socials        = get_theme_mod( 'socials' );
        $socials_values = array();
        if ( ! empty( $socials ) ) {
            parse_str( $socials, $socials_values );
        }

        if ( $socials_enable ) {
            foreach ( $socials_enable as $social ) {
                if ( ! empty( $socials_values[ $social ] ) ) {
                    $socials_array[ $social ] = $socials_values[ $social ];
                }
            }
        }

        return $socials_array;
    }
}

if ( ! function_exists( 'consulting_page_title' ) ) {
    function consulting_page_title( $display = true, $single_posts = '', $vacancies_posts = '' ) {
        global $wp_locale;

        $m        = get_query_var( 'm' );
        $year     = get_query_var( 'year' );
        $monthnum = get_query_var( 'monthnum' );
        $day      = get_query_var( 'day' );
        $search   = get_query_var( 's' );
        $title    = '';


        // If there is a post
        if ( is_single() || ( is_home() && ! is_front_page() ) || ( is_page() && ! is_front_page() ) || is_front_page() ) {
            $title = single_post_title( '', false );
        }

        if ( is_home() ) {
            if ( ! get_option( 'page_for_posts' ) ) {
                $title = $single_posts;
            }
        }

        // If there's a post type archive
        if ( is_post_type_archive() ) {
            $post_type = get_query_var( 'post_type' );
            if ( is_array( $post_type ) ) {
                $post_type = reset( $post_type );
            }
            $post_type_object = get_post_type_object( $post_type );
            if ( ! $post_type_object->has_archive ) {
                $title = post_type_archive_title( '', false );
            }
        }

        // If there's a category or tag
        if ( is_category() || is_tag() ) {
            $title = single_term_title( '', false );
        }

        // If there's a taxonomy
        if ( is_tax() ) {
            $term = get_queried_object();
            if ( $term ) {
                $tax   = get_taxonomy( $term->taxonomy );
                $title = single_term_title( '', false );
            }
        }

        // If there's an author
        if ( is_author() && ! is_post_type_archive() ) {
            $author = get_queried_object();
            if ( $author ) {
                $title = $author->display_name;
            }
        }

        // Post type archives with has_archive should override terms.
        if ( is_post_type_archive() && $post_type_object->has_archive ) {
            if ( function_exists( 'is_shop' ) && is_shop() ) {
                $title = get_the_title( get_option( 'woocommerce_shop_page_id' ) );
            } else {
                $title = post_type_archive_title( '', false );
            }
        }

        // If there's a month
        if ( is_archive() && ! empty( $m ) ) {
            $my_year  = substr( $m, 0, 4 );
            $my_month = $wp_locale->get_month( substr( $m, 4, 2 ) );
            $my_day   = intval( substr( $m, 6, 2 ) );
            $title    = $my_year . ( $my_month ? $my_month : '' ) . ( $my_day ? $my_day : '' );
        }

        // If there's a year
        if ( is_archive() && ! empty( $year ) ) {
            $title = $year;
            if ( ! empty( $monthnum ) ) {
                $title .= ' ' . $wp_locale->get_month( $monthnum );
            }
            if ( ! empty( $day ) ) {
                $title .= ' ' . zeroise( $day, 2 );
            }
        }

        // If it's a search
        if ( is_search() ) {
            /* translators: 1: separator, 2: search phrase */
            $title = esc_html__( 'Search Results', 'consulting' );
        }

        // If it's a 404 page
        if ( is_404() ) {
            $title = esc_html__( 'Page not found', 'consulting' );
        }

        if ( $display ) {
            echo esc_html( $title );
        } else {
            return esc_html( $title );
        }
    }
}

add_filter( 'woocommerce_add_to_cart_fragments', 'consulting_cart_fragments' );
function consulting_cart_fragments($fragments) {
    ob_start();
    ?>
    <?php if ( ! WC()->cart->is_empty() ) : ?>
        <span class="count shopping-cart__product"><?php printf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'consulting' ), WC()->cart->get_cart_contents_count()); ?></span>
    <?php else : ?>
        <span class="count shopping-cart__product"><?php esc_html_e( '0', 'consulting' ); ?></span>
    <?php endif; ?>
    <?php

    $fragments['.shopping-cart__product'] = ob_get_clean();

    return $fragments;
}

if ( ! function_exists( 'consulting_breadcrumbs' ) ) {
    function consulting_breadcrumbs() {
        if ( function_exists( 'bcn_display' ) && ! get_post_meta( get_the_ID(), 'disable_breadcrumbs', true ) ) { ?>
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
        <?php }
    }
}

if ( ! function_exists( 'consulting_substr_text' ) ) {
    function consulting_substr_text( $text = '', $len ) {
        if ( strlen( $text ) > $len ) {
            $text = substr( $text, 0, strpos( $text, ' ', $len ) );
            $text .= '...';
        }

        return $text;
    }
}

if ( ! function_exists( 'consulting_get_structure' ) ) {
    function consulting_get_structure( $sidebar_id, $sidebar_type, $sidebar_position, $layout = false ) {

        $output                   = array();
        $output['content_before'] = $output['content_after'] = $output['sidebar_before'] = $output['sidebar_after'] = '';
        $output['class']          = 'posts_list';

        if ( $layout == 'grid' ) {
            $output['class'] = 'posts_grid';
        }
        if ( ! empty( $_GET['layout'] ) && $_GET['layout'] == 'grid' ) {
            $output['class'] = 'posts_grid';
        }

        if ( $sidebar_type == 'vc' ) {
            if ( $sidebar_id ) {
                $sidebar = get_post( $sidebar_id );
            }
        } else {
            if ( $sidebar_id ) {
                $sidebar = true;
            }
        }

        if ( isset( $sidebar ) ) {
            $output['class'] .= ' with_sidebar';
        }

        if ( $sidebar_position == 'right' && isset( $sidebar ) ) {
            $output['content_before'] .= '<div class="row">';
            $output['content_before'] .= '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
            $output['content_before'] .= '<div class="col_in __padd-right">';

            $output['content_after'] .= '</div>';
            $output['content_after'] .= '</div>'; // col
            $output['sidebar_before'] .= '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">';
            // .sidebar-area
            $output['sidebar_after'] .= '</div>'; // col
            $output['sidebar_after'] .= '</div>'; // row
        }

        if ( $sidebar_position == 'left' && isset( $sidebar ) ) {
            $output['content_before'] .= '<div class="row">';
            $output['content_before'] .= '<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">';
            $output['content_before'] .= '<div class="col_in __padd-left">';

            $output['content_after'] .= '</div>';
            $output['content_after'] .= '</div>'; // col
            $output['sidebar_before'] .= '<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 hidden-sm hidden-xs">';
            // .sidebar-area
            $output['sidebar_after'] .= '</div>'; // col
            $output['sidebar_after'] .= '</div>'; // row
        }

        return $output;
    }
}

if ( ! function_exists( 'consulting_blog_layout' ) ) {
    function consulting_blog_layout() {
        $blog_layout = get_theme_mod( 'blog_layout', 'list' );
        if ( isset( $_REQUEST['layout'] ) && $_REQUEST['layout'] == 'grid' ) {
            $blog_layout = 'grid';
        }

        return $blog_layout;
    }
}

if ( ! function_exists( 'consulting_sass_config' ) ) {
    function consulting_sass_config( $defaults ) {
        return array(
            'variables' => array( get_template_directory_uri() . '/assets/scss/site/_base_variables.scss' ),
            'imports'   => array( get_template_directory_uri() . '/style.scss' )
        );
    }
}

add_filter( 'sass_configuration', 'consulting_sass_config' );

if( ! function_exists( 'consulting_hex2rgba' ) ){
    function consulting_hex2rgba($color, $opacity = false) {

        $default = 'rgb(0,0,0)';

        if(empty($color))
            return $default;

        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }

        if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
            return $default;
        }

        $rgb =  array_map('hexdec', $hex);

        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }

        return $output;
    }
}

if ( ! function_exists( 'consulting_get_top_bar_info' ) ) {
    function consulting_get_top_bar_info() {
        $top_bar_info = array();
        for ( $i = 1; $i <= 10; $i ++ ) {
            $top_bar_info_office = get_theme_mod( 'top_bar_info_' . $i . '_office' );
            if ( ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['office'] = $top_bar_info_office;
            }
            $top_bar_info_address = get_theme_mod( 'top_bar_info_' . $i . '_address' );
            if ( ! empty( $top_bar_info_address ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['address'] = $top_bar_info_address;
            }
            $top_bar_info_address_icon = get_theme_mod( 'top_bar_info_' . $i . '_address_icon', 'stm-marker' );
            if ( ! empty( $top_bar_info_address ) && ! empty( $top_bar_info_address_icon ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['address_icon'] = $top_bar_info_address_icon;
            }
            $top_bar_info_hours = get_theme_mod( 'top_bar_info_' . $i . '_hours' );
            if ( ! empty( $top_bar_info_hours ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['hours'] = $top_bar_info_hours;
            }
            $top_bar_info_hours_icon = get_theme_mod( 'top_bar_info_' . $i . '_hours_icon', 'fa fa-clock-o' );
            if ( ! empty( $top_bar_info_hours ) && ! empty( $top_bar_info_hours_icon ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['hours_icon'] = $top_bar_info_hours_icon;
            }
            $top_bar_info_phone = get_theme_mod( 'top_bar_info_' . $i . '_phone' );
            if ( ! empty( $top_bar_info_phone ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['phone'] = $top_bar_info_phone;
            }
            $top_bar_info_phone_icon = get_theme_mod( 'top_bar_info_' . $i . '_phone_icon', 'fa fa-phone' );
            if ( ! empty( $top_bar_info_phone ) && ! empty( $top_bar_info_phone_icon ) && ! empty( $top_bar_info_office ) ) {
                $top_bar_info[ $i ]['phone_icon'] = $top_bar_info_phone_icon;
            }
        }

        return $top_bar_info;
    }
}

function stm_consulting_pa($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

if ( ! function_exists('consulting_paging_nav') ) :
    function consulting_paging_nav($paging_extra_class = '', $current_query = '' ) {
        global $wp_query, $wp_rewrite;

        if( ! $current_query ) {
            $paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
            $pages = $wp_query->max_num_pages;
        } else {
            $paged = $current_query->query_vars['paged'];
            $pages = $current_query->max_num_pages;
        }

        if ( $pages < 2 ) {
            return;
        }

        $pagenum_link = html_entity_decode( get_pagenum_link() );
        $query_args   = array();
        $url_parts    = explode( '?', $pagenum_link );

        if ( isset( $url_parts[1] ) ) {
            wp_parse_str( $url_parts[1], $query_args );
        }

        $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
        $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

        $links = paginate_links( array(
            'base'     => $pagenum_link,
            'format'   => $format,
            'total'    => $pages,
            'current'  => $paged,
            'mid_size' => 1,
            'add_args' => array_map( 'urlencode', $query_args ),
            'prev_text' => '<i class="fa fa-chevron-left"></i>',
            'next_text' => '<i class="fa fa-chevron-right"></i>',
            'type'      => 'list'
        ) );

        if ( $links ) :
            ?>
            <?php echo wp_kses_post( $links ); ?>
        <?php
        endif;
    }
endif;

function stm_ajax_load_events() {
    check_ajax_referer('stm_ajax_load_events', 'security');
    $data = array();
    $load_more = true;
    $posts_per_page = (!empty($_POST['load_by'])) ? intval($_POST['load_by']) : 1;
    $page = (!empty($_POST['page'])) ? intval($_POST['page']) : 1;
    $events_filter = (!empty($_POST['filter'])) ? sanitize_text_field($_POST['filter']) : null;
    $category = (!empty($_POST['category'])) ? esc_html($_POST['category']) : null;

    $offset = $page * $posts_per_page;
    $args = array(
        'post_type' => 'stm_event',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'orderby' => 'meta_value_num',
        'meta_key' => 'stm_event_date_start',
        'post_status'    => 'publish',
        'order' => 'ASC'
    );

    if( 'upcoming' === $events_filter ) {
        $args['meta_query'][] = array(
            'key' => 'stm_event_date_start',
            'value' => time(),
            'compare' => '>=',
        );
    } elseif( 'past' === $events_filter ) {
        $args['meta_query'][] = array(
            'key' => 'stm_event_date_start',
            'value' => time(),
            'compare' => '<=',
        );
    }

    if ( $category != 'all' ) {
        $args['stm_event_category'] = $category;
    }
    $query = new WP_Query($args);

    $html = '';
    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();

            get_template_part('partials/content-event', 'modern');
        }
        $html = ob_get_clean();
    }

    $data['new_page'] = $page + 1;
    $data['html'] = $html;

    if($query->max_num_pages == $data['new_page']) {
        $load_more = false;
    }

    $data['load_more'] = $load_more;

    echo json_encode($data);

    exit;
}

add_action('wp_ajax_stm_ajax_load_events', 'stm_ajax_load_events');
add_action('wp_ajax_nopriv_stm_ajax_load_events', 'stm_ajax_load_events');

function stm_ajax_load_portfolio() {
    check_ajax_referer('stm_ajax_load_portfolio', 'security');
    $data = array();
    $load_more = true;
    $posts_per_page = (!empty($_POST['load_by'])) ? intval($_POST['load_by']) : 1;
    $page = (!empty($_POST['page'])) ? intval($_POST['page']) : 1;
    $category = (!empty($_POST['category'])) ? esc_html($_POST['category']) : null;

    $offset = $page * $posts_per_page;
    $args = array(
        'post_type' => 'stm_portfolio',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset
    );
    if ( $category != 'all' ) {
        $args['stm_portfolio_category'] = $category;
    }
    $query = new WP_Query($args);

    $html = '';
    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();

            get_template_part('partials/content', 'portfolio');
        }
        $html = ob_get_clean();
    }

    $data['new_page'] = $page + 1;
    $data['html'] = $html;

    if($query->max_num_pages == $data['new_page']) {
        $load_more = false;
    }

    $data['load_more'] = $load_more;

    echo json_encode($data);

    exit;
}

add_action('wp_ajax_stm_ajax_load_portfolio', 'stm_ajax_load_portfolio');
add_action('wp_ajax_nopriv_stm_ajax_load_portfolio', 'stm_ajax_load_portfolio');

//Ajax request event member
function stm_ajax_add_event_member() {
    check_ajax_referer('stm_ajax_add_event_member', 'security');
    do_action('consulting_add_event_member');

    exit;
}

function consulting_get_local_file_contents( $file_path ) {
    ob_start();
    include $file_path;
    $contents = ob_get_clean();

    return $contents;
}

function consulting_filtered_output($output) {
    return apply_filters('consulting_filtered_output', $output);
}

add_action( 'wp_ajax_stm_ajax_add_event_member', 'stm_ajax_add_event_member' );
add_action( 'wp_ajax_nopriv_stm_ajax_add_event_member', 'stm_ajax_add_event_member' );

add_action( 'before_delete_post', 'member_before_delete' );
function member_before_delete( $postid ){
    global $post_type;
    if ( $post_type != 'event_member' ) return;

    $event_id = get_post_meta($postid, 'memberId', true );

    $event_attended = get_post_meta($event_id, 'event_attended', true );
    update_post_meta( $event_id, 'event_attended', $event_attended - 1 );
}

add_filter('language_attributes', 'stm_preloader_html_class');

function stm_preloader_html_class($output) {
    $enable_preloader = get_theme_mod('enable_preloader', false);
    $preloader_class = '';

    if ($enable_preloader) {
        $preloader_class = ' class="stm-site-preloader"';
    }

    return $output . $preloader_class;
}

//Registration
function stm_custom_register() {
    check_ajax_referer('stm_custom_register', 'security');
    wp_send_json(apply_filters('consulting_custom_register', array()));
    exit;
}

add_action( 'wp_ajax_stm_custom_register', 'stm_custom_register' );
add_action( 'wp_ajax_nopriv_stm_custom_register', 'stm_custom_register' );


function consulting_base_decode($content) {
    return apply_filters('consulting_base_decode', $content);
}

// AMP Custom styles
add_action('amp_post_template_css','ampforwp_add_custom_css_example', 11);
function ampforwp_add_custom_css_example() { ?>
    /* Add your custom css here */
    .stm_sidebar, .vc_cta3-container, .post_bottom .media-body, .stm_post_comments, .amp-wp-article-content .post_thumbnail, .stm_post_info  {
        display: none;
    }
    .share_buttons label {
        display: block;
        padding: 0 0 10px 5px;
    }
    <?php
}

function consulting_get_image($image_id, $img_size) {

    if(function_exists('wpb_getImageBySize')) {

        if($image_id > 0) {

            $post_thumbnail = wpb_getImageBySize(array(
                'attach_id' => $image_id,
                'thumb_size' => $img_size,
            ));

            $post_thumbnail = $post_thumbnail['thumbnail'];

        } else {

            $post_thumbnail = array();
            $post_thumbnail['thumbnail'] = '<img src="' . vc_asset_url( 'vc/no_image.png' ) . '" />';
            $post_thumbnail['p_img_large'][0] = vc_asset_url( 'vc/no_image.png' );

        }

    } elseif (class_exists('Consulting_Elementor_Widgets')) {

        $post_thumbnail = Consulting_Elementor_Widgets::get_cropped_image($image_id, $img_size);

    } else {

        $post_thumbnail = wp_get_attachment_image($image_id, $img_size);

    }

    return $post_thumbnail;
}

function consulting_is_elementor_page($id) {
    if(empty($id)) return false;

    $elementor_status = get_post_meta( $id, '_elementor_edit_mode', true );
    $elementor_status = (!empty($elementor_status) && $elementor_status === 'builder');

    return $elementor_status;
}

function consulting_vc_hex2rgb( $color ) {
    $color = str_replace( '#', '', $color );

    if ( strlen( $color ) === 6 ) {
        list( $r, $g, $b ) = array(
            $color[0] . $color[1],
            $color[2] . $color[3],
            $color[4] . $color[5],
        );
    } elseif ( strlen( $color ) === 3 ) {
        list( $r, $g, $b ) = array(
            $color[0] . $color[0],
            $color[1] . $color[1],
            $color[2] . $color[2],
        );
    } else {
        return false;
    }

    $r = hexdec( $r );
    $g = hexdec( $g );
    $b = hexdec( $b );

    return array(
        $r,
        $g,
        $b,
    );
}