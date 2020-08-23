<?php

require_once CONSULTING_INC_PATH . '/tgm/tgm-plugin-activation.php';

add_action('tgmpa_register', 'consulting_require_plugins');

function consulting_require_plugins($return = false)
{
    $plugins = array(
        'stm-importer' => array(
            'name' => 'STM Importer',
            'slug' => 'stm-importer',
            'source' => get_package('stm-importer', 'zip'),
            'required' => true,
            'version' => '5.3.2',
            'external_url' => 'https://stylemixthemes.com/'
        ),
        'stm-post-type' => array(
            'name' => 'STM Post Type',
            'slug' => 'stm-post-type',
            'source' => get_package('stm-post-type', 'zip'),
            'required' => true,
            'version' => '3.0',
            'external_url' => 'https://stylemixthemes.com/'
        ),
        'custom-icons-by-stylemixthemes' => array(
            'name' => 'Custom icons by stylemixthemes',
            'slug' => 'custom-icons-by-stylemixthemes',
            'source' => get_package('custom-icons-by-stylemixthemes', 'zip'),
            'required' => true,
            'version' => '3.0.2',
            'external_url' => 'https://stylemixthemes.com/'
        ),
        'js_composer' => array(
            'name' => 'WPBakery Visual Composer',
            'slug' => 'js_composer',
            'source' => get_package('js_composer', 'zip'),
            'external_url' => 'http://vc.wpbakery.com',
            'version' => '6.2.0',
            'required' => false,
        ),
        'elementor' => array(
            'name' => 'Elementor',
            'slug' => 'elementor',
            'required' => false,
        ),
        'consulting-elementor-widgets' => array(
            'name' => 'Consulting Elementor',
            'slug' => 'consulting-elementor-widgets',
            'source' => get_package('consulting-elementor-widgets', 'zip'),
            'required' => false,
            'version' => '1.0'
        ),
        'revslider' => array(
            'name' => 'Revolution Slider',
            'slug' => 'revslider',
            'source' => get_package('revslider', 'zip'),
            'required' => true,
            'external_url' => 'http://www.themepunch.com/revolution/',
            'version' => '6.2.6'
        ),
        'booked' => array(
            'name' => 'Booked',
            'slug' => 'booked',
            'source' => get_package('booked', 'zip'),
            'required' => false,
            'external_url' => 'http://getbooked.io/',
            'version' => '2.2.6'
        ),
        'pearl-header-builder' => array(
            'name' => 'Pearl header builder',
            'slug' => 'pearl-header-builder',
            'required' => false,
        ),
        'breadcrumb-navxt' => array(
            'name' => 'Breadcrumb NavXT',
            'slug' => 'breadcrumb-navxt',
            'required' => false
        ),
        'contact-form-7' => array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => false
        ),
        'woocommerce' => array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
            'required' => false
        ),
        'mailchimp-for-wp' => array(
            'name' => 'MailChimp for WordPress Lite',
            'slug' => 'mailchimp-for-wp',
            'required' => false
        ),
        'instagram-feed' => array(
            'name' => 'Instagram Feed',
            'slug' => 'instagram-feed',
            'required' => false
        ),
        'recent-tweets-widget' => array(
            'name' => 'Recent Tweets Widget',
            'slug' => 'recent-tweets-widget',
            'required' => false
        ),
        'tinymce-advanced' => array(
            'name' => 'TinyMCE Advanced',
            'slug' => 'tinymce-advanced',
            'required' => false
        ),
        'add-to-any' => array(
            'name' => 'AddToAny Share Buttons',
            'slug' => 'add-to-any',
            'required' => false
        ),
        'amp' => array(
            'name' => 'AMP',
            'slug' => 'amp',
            'required' => false
        ),
        'cost-calculator-builder' => array(
            'name' => 'Cost Calculator Builder',
            'slug' => 'cost-calculator-builder',
            'required' => false
        ),
        'eroom-zoom-meetings-webinar' => array(
            'name' => 'Eroom Zoom Meetings Webinar',
            'slug' => 'eroom-zoom-meetings-webinar',
            'required' => false
        ),
        'stm-gdpr-compliance' => array(
            'name' => 'GDPR Compliance & Cookie Consent',
            'slug' => 'stm-gdpr-compliance',
            'source' => get_package('stm-gdpr-compliance', 'zip'),
            'required' => false,
            'version' => '1.1',
            'external_url' => 'http://stylemixthemes.com/'
        )
    );

    if ($return) {
        return $plugins;
    } else {
        $config = array(
            'id' => 'pearl_theme_id',
            'is_automatic' => false
        );


        $layout_plugins = consulting_layout_plugins(consulting_get_layout());
        $recommended_plugins = consulting_premium_bundled_plugins();
        $layout_plugins = array_merge($layout_plugins, $recommended_plugins);

        $tgm_layout_plugins = array();
        foreach ($layout_plugins as $layout_plugin) {
            $tgm_layout_plugins[$layout_plugin] = $plugins[$layout_plugin];
        }

        tgmpa($tgm_layout_plugins, $config);
    }

}