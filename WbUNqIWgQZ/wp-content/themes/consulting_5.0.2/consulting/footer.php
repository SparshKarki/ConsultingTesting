<?php if( !is_404() ): ?>
    </div> <!--.container-->
    </div> <!--#main-->
    </div> <!--.content_wrapper-->
    <?php
    $consulting_layout = get_option( 'consulting_layout', 'layout_1' );
    $logo_tmp = '';
    if( !empty( $consulting_layout ) && $consulting_layout != 'layout_1' && $consulting_layout != 'layout_12' ) {
        $logo_tmp = $consulting_layout . '_';
    }
    $footer_style = get_theme_mod( 'footer_style', 'style_1' );

    if( $footer_style === 'style_3' ):
        get_template_part( 'partials/footer/style_3' );
    else:
        $socials = consulting_get_socials( 'footer_socials' );
        $page_ID = consulting_page_id();
        $copyright_class = '';
        $copyright_border_top = get_post_meta( $page_ID, 'separator_footer_copyright_border_t', true );

        if( $copyright_border_top ) {
            $copyright_class .= ' border-top-hide';
        }

        $copyright = get_theme_mod( 'footer_copyright', wp_kses( __( "Copyright &copy; 2012-2020 <a href='http://consulting.stylemixthemes.com/landing/'>Consulting Theme</a> by <a href='https://stylemixthemes.com/' target='_blank'>Stylemix Themes</a>. All rights reserved", 'consulting' ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ) );
        $footer_class = '';
        $footer_class = ' ' . $footer_style;

        if( empty( $copyright ) || empty( $socials ) && $footer_style != 'style_1' ) {
            $footer_class .= ' no-copyright';
        }

        if( stm_check_layout( 'layout_14' ) and get_theme_mod( 'enable_page_switcher', true ) and is_front_page() ) {
            get_template_part( 'partials/page-scroll' );
        }
        ?>
        <?php if( !get_theme_mod( 'footer_show_hide', false ) ): ?>

        <footer id="footer" class="footer<?php echo esc_attr( $footer_class ); ?>">
            <?php if( stm_check_layout( 'layout_14' ) and get_theme_mod( 'footer_enable_menu_top', true ) ): ?>
                <div class="container">
                    <div class="top_nav">
                        <div class="stm_l14_footer_menu top_nav_wrapper">
                            <?php
                            wp_nav_menu( array(
                                    'theme_location' => 'consulting-primary_menu',
                                    'container' => false,
                                    'depth' => 1,
                                    'menu_class' => 'main_menu_nav'
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( is_active_sidebar( 'consulting-footer-1' ) or is_active_sidebar( 'consulting-footer-2' ) or is_active_sidebar( 'consulting-footer-3' ) or is_active_sidebar( 'consulting-footer-4' ) ): ?>
                <?php if( get_theme_mod( 'footer_sidebar_count', 4 ) != 'disable' ): ?>
                    <div class="widgets_row">
                        <div class="container">
                            <div class="footer_widgets">
                                <div class="row">
                                    <?php
                                    $footer_sidebar_count = intval( get_theme_mod( 'footer_sidebar_count', 4 ) );
                                    $col = 12 / $footer_sidebar_count;
                                    for( $count = 1; $count <= $footer_sidebar_count; $count++ ): ?>
                                        <div class="col-lg-<?php echo esc_attr( $col ); ?> col-md-<?php echo esc_attr( $col ); ?> col-sm-6 col-xs-12">
                                            <?php if( $count == 1 ): ?>
                                                <?php if( !get_theme_mod( 'footer_logo_show_hide', false ) ): ?>
                                                    <?php if( $footer_logo = get_theme_mod( 'footer_logo', '' ) ): ?>
                                                        <div class="footer_logo">
                                                            <a href="<?php echo esc_url( home_url( '/' ) ) ?>">
                                                                <img src="<?php echo esc_url( $footer_logo ); ?>"
                                                                     alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if( $footer_text = get_theme_mod( 'footer_text', '' ) ): ?>
                                                    <div class="footer_text">
                                                        <p><?php printf( _x( '%s', 'Footer Text', 'consulting' ), $footer_text ); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( !get_theme_mod( 'footer_show_hide_socials', false ) ) : ?>
                                                    <?php if( $socials && $footer_style == 'style_2' ): ?>
                                                        <div class="socials">
                                                            <ul>
                                                                <?php foreach( $socials as $key => $val ): ?>
                                                                    <li>
                                                                        <a href="<?php echo esc_url( $val ); ?>"
                                                                           target="_blank"
                                                                           class="social-<?php echo esc_attr( $key ); ?>">
                                                                            <i class="fa fa-<?php echo esc_attr( $key ); ?>"></i>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php dynamic_sidebar( 'consulting-footer-' . $count ); ?>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( !empty( $copyright ) || !empty( $socials ) && $footer_style == 'style_1' ) : ?>
                <div class="copyright_row<?php echo esc_attr( $copyright_class ); ?><?php echo ( get_theme_mod( 'footer_sidebar_count', 4 ) == 'disable' ) ? ' widgets_disabled' : ''; ?>">
                    <div class="container">
                        <div class="copyright_row_wr">
                            <?php if( !get_theme_mod( 'footer_show_hide_socials', false ) ): ?>
                                <?php if( !empty( $socials ) && $footer_style == 'style_1' ): ?>
                                    <div class="socials">
                                        <ul>
                                            <?php foreach( $socials as $key => $val ): ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $val ); ?>" target="_blank"
                                                       class="social-<?php echo esc_attr( $key ); ?>">
                                                        <i class="fa fa-<?php echo esc_attr( $key ); ?>"></i>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if( !empty( $copyright ) ): ?>
                                <div class="copyright">
                                    <?php if( !get_theme_mod( 'footer_current_year', false ) ): ?>
                                        <?php printf( _x( '%s', 'Copyright', 'consulting' ), $copyright ); ?>
                                    <?php else: ?>
                                        <?php printf( _x( '© %s %s', '© year copyright', 'consulting' ), date( 'Y' ), $copyright ); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </footer>
    <?php endif; ?>
    <?php endif; ?>
    </div> <!--#wrapper-->
<?php endif; ?>
<?php do_action( 'frontend_customizer' ); ?>
<?php wp_footer(); ?>
<?php get_template_part( 'partials/custom_footer' ); ?>
</body>
</html>