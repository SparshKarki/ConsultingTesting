<?php

class Stm_Contacts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contacts', // Base ID
			esc_html__('Contacts', 'consulting'), // Name
			array( 'description' => esc_html__( 'Contacts widget', 'consulting' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo wp_kses_post($args['before_widget']);
		if ( ! empty( $title ) ) {
			echo wp_kses_post($args['before_title']) . esc_html( $title ) . wp_kses_post($args['after_title']);
		}
        echo '<ul class="stm_list-duty heading-font">';
		if(!empty($instance['address'])){
			echo '<li class="widget_contacts_address"><div class="icon"><i class="stm-location-2"></i></div><div class="text">' . html_entity_decode( $instance['address'] ) . '</div></li>';
		}

		if(!empty($instance['regime'])){
			echo '<li class="widget_contacts_regime"><div class="icon"><i class="stm-clock6"></i></div><div class="text">' . html_entity_decode( $instance['regime'] ) . '</div></li>';
		}

		if(!empty($instance['phone'])){
			echo '<li class="widget_contacts_phone"><div class="icon"><i class="stm-iphone"></i></div><div class="text">' . html_entity_decode( $instance['phone'] ) . '</div></li>';
		}

		if(!empty($instance['fax'])){
			echo '<li class="widget_contacts_hours"><div class="icon"><i class="stm-stm14_fax"></i></div><div class="text">' . html_entity_decode( $instance['fax'] ) . '</div></li>';
		}

		$email_text = '';
		if(!empty($instance['email'])){
            $email_text = '<li class="widget_contacts_email"><div class="icon"><i class="stm-email"></i></div><div class="text"><a href="mailto:'.html_entity_decode( $instance['email'] ).'">' . html_entity_decode( $instance['email'] ) . '</a><br /></div></li>';
            if(!empty($instance['email_2'])){
                $email_text = '<li class="widget_contacts_email"><div class="icon"><i class="stm-email"></i></div><div class="text"><a href="mailto:'.html_entity_decode( $instance['email'] ).'">' . html_entity_decode( $instance['email'] ) . '</a><br /><a href="mailto:'.html_entity_decode( $instance['email_2'] ).'">' . html_entity_decode( $instance['email_2'] ) . '</a></div></li>';
            }
            echo $email_text;
		}


        echo '</ul>';


		echo wp_kses_post($args['after_widget']);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		$title = '';
		$address = '';
		$regime = '';
		$phone = '';
		$fax = '';
		$email = '';
		$email_2 = '';

		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}else {
			$title = esc_html__( 'Contact', 'consulting' );
		}

		if ( isset( $instance[ 'address' ] ) ) {
			$address = $instance[ 'address' ];
		}

		if ( isset( $instance[ 'regime' ] ) ) {
			$regime = $instance[ 'regime' ];
		}

		if ( isset( $instance[ 'phone' ] ) ) {
			$phone = $instance[ 'phone' ];
		}

		if ( isset( $instance[ 'fax' ] ) ) {
			$fax = $instance[ 'fax' ];
		}

		if ( isset( $instance[ 'email' ] ) ) {
			$email = $instance[ 'email' ];
		}
		if ( isset( $instance[ 'email_2' ] ) ) {
			$email_2 = $instance[ 'email_2' ];
		}

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'consulting' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"><?php esc_html_e( 'Address:', 'consulting' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>"><?php echo esc_attr( $address ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'regime' ) ); ?>"><?php esc_html_e( 'Regime:', 'consulting' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'regime' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'regime' ) ); ?>"><?php echo esc_attr( $regime ); ?></textarea>
		</p>
        <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php esc_html_e( 'Phone:', 'consulting' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>"><?php echo esc_attr( $phone ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'fax' ) ); ?>"><?php esc_html_e( 'Fax:', 'consulting' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fax' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fax' ) ); ?>"><?php echo esc_attr( $fax ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_html_e( 'Email:', 'consulting' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_2' ) ); ?>" type="text" value="<?php echo esc_attr( $email_2 ); ?>">
		</p>
	<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? esc_attr( $new_instance['title'] ) : '';
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? esc_attr( $new_instance['address'] ) : '';
		$instance['regime'] = ( ! empty( $new_instance['regime'] ) ) ? esc_attr( $new_instance['regime'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? esc_attr( $new_instance['phone'] ) : '';
		$instance['fax'] = ( ! empty( $new_instance['fax'] ) ) ? esc_attr( $new_instance['fax'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_email( $new_instance['email'] ) : '';
		$instance['email_2'] = ( ! empty( $new_instance['email_2'] ) ) ? sanitize_email( $new_instance['email_2'] ) : '';

		return $instance;
	}

}

function register_contacts_widget() {
	register_widget( 'Stm_Contacts_Widget' );
}
add_action( 'widgets_init', 'register_contacts_widget' );