<?php
if ( ! class_exists( 'STM_Customizer_Stock_Index_Control' ) ) {

	class STM_Customizer_Stock_Index_Control extends WP_Customize_Control {

		public $type = 'stm-stock-index';
        public $placeholder = '';

        public function render_content() {

            $input_args = array(
                'type'        => 'text',
                'label'       => $this->label,
                'name'        => '',
                'id'          => $this->id,
                'value'       => $this->value(),
                'placeholder' => $this->placeholder,
                'link'        => $this->get_link(),
                'options'     => $this->choices
            );

            $stock_index_data = consulting_get_stocks_indexes_symbols();
            ?>

            <?php $stocks =  wp_list_pluck($stock_index_data, 'value'); ?>

			<div id="stm-customize-control-<?php echo esc_attr( $this->id ); ?>" class="stm-customize-control stm-customize-control-<?php echo esc_attr( str_replace( 'stm-', '', $this->type ) ); ?>">

				<span class="customize-control-title">
					<?php echo esc_html( $this->label ); ?>
				</span>

				<div class="stm-form-item">
					<div class="stm-font-family-wrapper stm-form-item">
						<?php stm_input( $input_args ); ?>
					</div>
				</div>

				<?php if ( '' != $this->description ) : ?>
					<div class="description customize-control-description">
						<?php echo esc_html( $this->description ); ?>
					</div>
				<?php endif; ?>

			</div>

            <script type="text/javascript">
                var stm_stocks = Object.values(<?php echo json_encode($stocks) ?>);
            </script>
			<?php
		}
	}
}