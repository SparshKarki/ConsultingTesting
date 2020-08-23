<?php
$vc_status = get_post_meta( get_the_ID() , '_wpb_vc_js_status', true);
$is_elementor = consulting_is_elementor_page(get_the_ID());
if($is_elementor) {
    $vc_status = 1;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content consulting_elementor_wrapper">
        <?php if ( $vc_status != 'false' && $vc_status == true ): ?>
            <?php
            if ( is_singular('stm_event') ) {
                echo '<div class="event_content ">';
                the_content();
                echo '</div>';
            } else {
                the_content();
            }
            ?>
        <?php else: ?>
            <?php if ( is_singular('stm_event') ) : ?>
                <?php
                $sidebar_type = get_theme_mod( 'event_sidebar_type', 'wp' );
                if ( $sidebar_type == 'wp' ) {
                    $sidebar_id = get_theme_mod( 'event_wp_sidebar', 'consulting-right-sidebar' );
                } else {
                    $sidebar_id = get_theme_mod( 'event_vc_sidebar' );
                }
                if ( ! empty( $_GET['sidebar_id'] ) ) {
                    $sidebar_id =  $_GET['sidebar_id'];
                }
                $structure = consulting_get_structure( $sidebar_id, $sidebar_type, get_theme_mod( 'blog_sidebar_position', 'right' ), get_theme_mod( 'blog_layout' ) ); ?>
                <?php echo consulting_filtered_output($structure['content_before']); ?>
                <div class="without_vc">
                    <div class="event_content">
                        <?php get_template_part( 'partials/content', 'event-info' ); ?>
                        <?php the_content(); ?>
                        <?php get_template_part( 'partials/content', 'event-form' ); ?>
                    </div>
                </div>
                <?php echo consulting_filtered_output($structure['content_after']); ?>
                <?php echo consulting_filtered_output($structure['sidebar_before']); ?>
                <?php
                if ( $sidebar_id ) {
                    if ( $sidebar_type == 'wp' ) {
                        $sidebar = true;
                    } else {
                        $sidebar = get_post( $sidebar_id );
                    }
                }
                if ( isset( $sidebar ) ) {
                    if ( $sidebar_type == 'vc' ) { ?>
                        <?php $is_elementor_sidebar = consulting_is_elementor_page($sidebar_id); ?>
                        <?php if ($is_elementor_sidebar && class_exists('Elementor\Plugin')): ?>
                            <?php echo \Elementor\Plugin::$instance->frontend->get_builder_content($sidebar_id); ?>
                        <?php else: ?>
                            <style type="text/css" scoped>
                                <?php echo get_post_meta( $sidebar_id, '_wpb_shortcodes_custom_css', true ); ?>
                            </style>
                            <div class="sidebar-area stm_sidebar">
                                <?php echo apply_filters( 'the_content', $sidebar->post_content ); ?>
                            </div>
                        <?php endif; ?>
                    <?php } else { ?>
                        <div class="sidebar-area default_widgets">
                            <?php dynamic_sidebar( $sidebar_id ); ?>
                        </div>
                    <?php }
                }
                ?>
                <?php echo consulting_filtered_output($structure['sidebar_after']); ?>
            <?php else: ?>
                <?php
                $sidebar_type = get_theme_mod( 'blog_sidebar_type', 'wp' );
                if ( $sidebar_type == 'wp' ) {
                    $sidebar_id = get_theme_mod( 'blog_wp_sidebar', 'consulting-right-sidebar' );
                } else {
                    $sidebar_id = get_theme_mod( 'blog_vc_sidebar' );
                }
                if ( ! empty( $_GET['sidebar_id'] ) ) {
                    $sidebar_id =  $_GET['sidebar_id'];
                }
                $structure = consulting_get_structure( $sidebar_id, $sidebar_type, get_theme_mod( 'blog_sidebar_position', 'right' ), get_theme_mod( 'blog_layout' ) ); ?>
                <?php echo consulting_filtered_output($structure['content_before']); ?>
                <div class="without_vc">
                    <?php if ( get_post_meta( get_the_ID(), 'disable_title', true ) ): ?>
                        <?php the_title( '<h1 class="h2 no_stripe page_title_2">', '</h1>' ); ?>
                    <?php endif; ?>
                    <div class="post_details_wr">
                        <?php get_template_part( 'partials/content', 'post_details' ); ?>
                    </div>
                    <div class="wpb_text_column">
                        <?php the_content(); ?>
                    </div>
                    <br/>
                    <br/>
                    <?php get_template_part( 'partials/content', 'post_bottom' ); ?>
                    <?php get_template_part( 'partials/content', 'about_author' ); ?>
                    <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links"><label>' . esc_html__( 'Pages:', 'consulting' ) . '</label>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '%',
                        'separator'   => '',
                    ) );
                    ?>
                    <?php if ( comments_open() || get_comments_number() ) : ?>
                        <div class="stm_post_comments">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php echo consulting_filtered_output($structure['content_after']); ?>
                <?php echo consulting_filtered_output($structure['sidebar_before']); ?>
                <?php
                if ( $sidebar_id ) {
                    if ( $sidebar_type == 'wp' ) {
                        $sidebar = true;
                    } else {
                        $sidebar = get_post( $sidebar_id );
                    }
                }
                if ( isset( $sidebar ) ) {
                    if ( $sidebar_type == 'vc' ) { ?>
                        <?php $is_elementor_sidebar = consulting_is_elementor_page($sidebar_id); ?>
                        <?php if ($is_elementor_sidebar && class_exists('Elementor\Plugin')): ?>
                            <?php echo \Elementor\Plugin::$instance->frontend->get_builder_content($sidebar_id); ?>
                        <?php else: ?>
                            <style type="text/css" scoped>
                                <?php echo get_post_meta( $sidebar_id, '_wpb_shortcodes_custom_css', true ); ?>
                            </style>
                            <div class="sidebar-area stm_sidebar">
                                <?php echo apply_filters( 'the_content', $sidebar->post_content ); ?>
                            </div>
                        <?php endif; ?>
                    <?php } else { ?>
                        <div class="sidebar-area default_widgets">
                            <?php dynamic_sidebar( $sidebar_id ); ?>
                        </div>
                    <?php }
                }
                ?>
                <?php echo consulting_filtered_output($structure['sidebar_after']); ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article> <!-- #post-## -->