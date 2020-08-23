<?php
//Header Builder options
add_filter('stm_hb_theme_options', 'consulting_hb_theme_options');

function consulting_hb_theme_options($options)
{
    $options['header']['options']['main_header']['options']['logo_dark'] = array(
        'type' => 'image',
        'data' => array(
            'title'       => esc_html__('Dark Logo', 'consulting'),
            'value'       => '',
            'description' => esc_html__('Transparent header Logo', 'consulting'),
            'i18n'        => array(
                'add'     => esc_html__('Add image', 'consulting'),
                'remove'  => esc_html__('Remove image', 'consulting'),
                'replace' => esc_html__('Replace image', 'consulting')
            )
        )
    );
    $options['header']['options']['main_header']['options']['header_full_width'] = array(
        'type' => 'select',
        'data' => array(
            'title'   => esc_html__('Enable full width', 'consulting'),
            'value'   => '',
            'choices' => array(
                ''       => esc_html__('Disable', 'consulting'),
                'header_full_width'       => esc_html__('Enable', 'consulting'),
            )
        )
    );
    return $options;
}

//Header Builder elements
add_filter('stm_hb_elements', 'consulting_hb_elements', 100);

function consulting_hb_elements($elements) {

	$elements[] = array(
		'label' => 'Stock market indexes',
		'type' => 'text',
		'icon' => 'stock_market_indexes',
		'view_template' => 'stock_market_indexes',
		'settings_template' => 'hb_templates/modals/stock_market_indexes'
	);

	return $elements;
}