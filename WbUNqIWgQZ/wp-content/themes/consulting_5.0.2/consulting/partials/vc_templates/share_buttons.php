<div class="stm_share_buttons  <?php echo esc_attr( $css_class ); ?>">
    <?php
    if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) && ! get_post_meta( get_the_ID(), 'sharing_disabled', true ) ) { ?>
        <div class="share_buttons media-right">
            <?php
            $addtoany_options = get_option( 'addtoany_options' );
            if ( isset( $addtoany_options['header'] ) && '' != $addtoany_options['header'] ) { ?>
                <div class="addtoany_header"><?php echo stripslashes( esc_html( $addtoany_options['header'] ) ); ?></div>
            <?php }
            ADDTOANY_SHARE_SAVE_KIT( array( "use_current_page" => true ) ); ?>
        </div>
    <?php } ?>
</div>