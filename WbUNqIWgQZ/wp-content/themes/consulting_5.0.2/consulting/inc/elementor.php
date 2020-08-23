<?php

function consulting_locate_template($template_name)
{
    $template_name = '/partials/vc_templates/' . $template_name . '.php';

    return locate_template($template_name);

}

function consulting_load_template($template_name, $vars = array())
{
    ob_start();
    extract($vars);
    include(consulting_locate_template($template_name));
    return apply_filters("consulting_template_{$template_name}", ob_get_clean(), $vars);
}

function consulting_show_template($template_name, $vars = array())
{
    echo consulting_load_template($template_name, $vars);
}

add_action('admin_init', function () {
    delete_transient('elementor_activation_redirect');
});
