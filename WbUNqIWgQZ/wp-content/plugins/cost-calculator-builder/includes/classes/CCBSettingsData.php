<?php

namespace cBuidler\Classes;

class CCBSettingsData
{
    public static function fields_data()
    {
        return [
            [
                'name' => 'Checkbox',
                'type' => 'checkbox',
                'icon' => 'fas fa-check-square',
                'description' => 'checkbox fields'
            ],

            [
                'name' => 'Radio',
                'type' => 'radio-button',
                'icon' => 'fas fa-dot-circle',
                'description' => 'radio fields'
            ],

            [
                'name' => 'Date Picker',
                'type' => 'date-picker',
                'icon' => 'fas fa-calendar-alt',
                'description' => 'date picker fields'
            ],

            [
                'name' => 'Range Button',
                'type' => 'range-button',
                'icon' => 'fas fa-exchange-alt',
                'description' => 'range slider'
            ],

            [
                'name' => 'Drop Down',
                'type' => 'drop-down',
                'icon' => 'fas fa-chevron-down',
                'description' => 'drop-down fields'
            ],

            [
                'name' => 'Text',
                'type' => 'text-area',
                'icon' => 'fas fa-font',
                'description' => 'text fields'
            ],

            [
                'name' => 'Html',
                'type' => 'html',
                'icon' => 'fas fa-code',
                'description' => 'html elements'
            ],

            [
                'name' => 'Total',
                'type' => 'total',
                'icon' => 'fas fa-calculator',
                'description' => 'total fields'
            ],

            [
                'name' => 'Line',
                'type' => 'line',
                'icon' => 'fas fa-ruler-horizontal',
                'description' => 'horizontal ruler'
            ],

            [
                'name' => 'Quantity',
                'type' => 'quantity',
                'icon' => 'fas fa-hand-peace',
                'description' => 'quantity fields'
            ],

            [
                'name' => 'Multi Range',
                'type' => 'multi-range',
                'icon' => 'fas fa-exchange-alt',
                'description' => 'multi-range field'
            ],

            [
                'name' => 'Toggle Button',
                'type' => 'toggle',
                'icon' => 'fas fa-toggle-on',
                'description' => 'toggle fields'
            ],
        ];
    }


    public static function get_tab_pages()
    {
        return ['calculator', 'conditions', 'settings'];
    }

    public static function settings_data()
    {
        return [
            'general' => [
                'header_title' => 'Total Summary',
                'descriptions' => 'show',
                'boxStyle' => 'vertical',
            ],
            'currency' => [
                'currency' => '$',
                'num_after_integer' => 2,
                'decimal_separator' => '.',
                'thousands_separator' => ',',
                'currencyPosition' => 'left_with_space',
            ],
            'formFields' => [
                'fields' => [],
                'emailSubject' => '',
                'contactFormId' => '',
                'accessEmail' => false,
                'adminEmailAddress' => '',
                'submitBtnText' => 'Submit',
                'allowContactForm' => false,
                'body' => 'Dear sir/madam\n' .
                    'We would be very grateful to you if you could provide us the quotation of the following=>\n' .
                    '\nTotal Summary\n' .
                    '[ccb-subtotal]\n' .
                    'Total=> [ccb-total-0]\n' .
                    'Looking forward to hearing back from you.\n' .
                    'Thanks in advance',
                'payment' => false,
                'paymentMethod' => '',
            ],

            'paypal' => [
                'enable' => false,
                'description' => '[ccb-total-0]',
                'paypal_email' => '',
                'currency_code' => '',
                'paypal_mode' => 'sandbox',
            ],

            'wooCommerce' => [
                'enable' => false,
                'product_id' => '',
                'redirect_to' => 'cart',
                'description' => '[ccb-total-0]',
            ],

            'stripe' => [
                'enable' => false,
                'secretKey' => '',
                'publishKey' => '',
                'description' => '[ccb-total-0]',

            ],
            'recaptcha' => [
                'enable' => false,
                'siteKey' => '',
                'secretKey' => '',
            ],

            'icon' => 'fas fa-cogs',
            'type' => 'Cost Calculator Settings',
        ];
    }
}