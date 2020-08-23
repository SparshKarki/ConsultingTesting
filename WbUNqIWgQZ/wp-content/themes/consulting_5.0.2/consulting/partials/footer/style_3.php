<?php
$consulting_layout = get_option('consulting_layout', 'layout_1');
$socials = consulting_get_socials( 'footer_socials' );
$copyright = get_theme_mod( 'footer_copyright', wp_kses( __( "Copyright &copy; 2012-2020 <a href='http://consulting.stylemixthemes.com/landing/'>Consulting Theme</a> by <a href='https://stylemixthemes.com/' target='_blank'>Stylemix Themes</a>. All rights reserved", 'consulting' ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ) );
if( !get_theme_mod( 'footer_show_hide', false ) ): ?>
    <footer id="footer" class="stm_footer style_3">
        <div class="container footer-top">
            <div class="row">
                <div class="col-md-6">
                    <?php if( !get_theme_mod( 'footer_logo_show_hide', false ) ): ?>
                        <?php if(stm_check_layout( 'layout_geneva' )) {
                            $footer_logo = get_theme_mod( 'footer_logo', get_template_directory_uri() . '/assets/images/tmp/' . $consulting_layout . '/logo_dark.svg' );
                        } else {
                            $footer_logo = get_theme_mod( 'footer_logo', get_template_directory_uri() . '/assets/images/tmp/' . $consulting_layout . '/logo_default.svg' );
                        } ?>
                        <?php if( $footer_logo ): ?>
                            <div class="footer_logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ) ?>">
                                    <img src="<?php echo esc_url( $footer_logo ); ?>"
                                         alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php if( !get_theme_mod( 'footer_show_hide_socials', false ) ) : ?>
                        <?php if( $socials ): ?>
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
                </div>
            </div>
        </div>
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
                                        <?php dynamic_sidebar( 'consulting-footer-' . $count ); ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if( !empty( $copyright ) ): ?>
            <div class="copyright">
                <div class="container">
                    <div class="copyright-wrap">
                        <?php if( !get_theme_mod( 'footer_current_year', false ) ): ?>
                            <?php printf( _x( '%s', 'Copyright', 'consulting' ), $copyright ); ?>
                        <?php else: ?>
                            <?php printf( _x( '© %s %s', '© year copyright', 'consulting' ), date( 'Y' ), $copyright ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </footer>
<?php endif; ?>
