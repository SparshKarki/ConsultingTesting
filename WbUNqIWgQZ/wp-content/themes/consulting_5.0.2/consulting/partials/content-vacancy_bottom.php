<div class="vacancy_bottom media">
	<?php if ( $contact_link = get_post_meta( get_the_ID(), 'contact_link', true ) ): ?>
		<div class="media-middle media-body">
			<a class="button bordered icon_right" href="<?php echo esc_url( $contact_link ); ?>">
				<?php esc_html_e( 'apply now', 'consulting' ); ?>
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
	<?php endif; ?>
	<?php
	if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) && ! get_post_meta( get_the_ID(), 'sharing_disabled', true ) ) { ?>
		<div class="share_buttons media-right">
			<label><?php esc_html_e( 'Share', 'consulting' ); ?></label>
			<?php
			$addtoany_options = get_option( 'addtoany_options' );
			if ( isset( $addtoany_options['header'] ) && '' != $addtoany_options['header'] ) { ?>
				<div class="addtoany_header"><?php echo stripslashes( esc_html( $addtoany_options['header'] ) ); ?></div>
			<?php }
			ADDTOANY_SHARE_SAVE_KIT( array( "use_current_page" => true ) ); ?>
		</div>
	<?php } ?>
</div>