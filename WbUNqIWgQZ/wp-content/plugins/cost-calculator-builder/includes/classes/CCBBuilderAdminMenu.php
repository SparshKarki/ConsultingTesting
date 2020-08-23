<?php

namespace cBuidler\Classes;

class CCBBuilderAdminMenu {
    public function __construct()
    {
        add_action('admin_menu', array($this, 'settings_menu'), 20);
    }

    public static function init() {
        return new CCBBuilderAdminMenu();
    }

    public function settings_menu() {
        add_menu_page(
            'Cost Calculator',
            'Cost Calculator',
            'manage_options',
            'cost_calculator_builder',
            array($this, 'render_page'),
            '   dashicons-welcome-widgets-menus', 110
        );

        add_submenu_page( null, 'Custom Calculator', 'Custom Calculator', 'manage_options', 'cost_calculator_custom',  array($this, 'calc_custom_page'));
    }

    public function render_page() {
        require_once CALC_PATH . '/templates/admin/main-settings.php';
    }

    public function calc_custom_page() {
        require_once CALC_PATH . '/templates/admin/custom.php';
    }
}