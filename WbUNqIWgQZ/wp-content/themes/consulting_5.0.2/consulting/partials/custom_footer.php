<?php if(get_theme_mod('footer_custom_settings', false)): ?>

    <?php
    $footer_custom_settings_color_text = get_theme_mod( 'footer_custom_settings_color_text' );
    $footer_custom_settings_color_link = get_theme_mod( 'footer_custom_settings_color_link' );
    $footer_custom_settings_color_link_hover = get_theme_mod( 'footer_custom_settings_color_link_hover' );
    $footer_custom_settings_color_bg = get_theme_mod( 'footer_custom_settings_color_bg' );
    $footer_custom_settings_bg_img = get_theme_mod( 'footer_custom_settings_bg_img' );
    $footer_custom_settings_bg_overlay = get_theme_mod( 'footer_custom_settings_bg_overlay' );
    ?>
    <style type="text/css">
        #footer .footer_widgets .widget .widget_title {
            border-top: transparent !important;
        }
        <?php if(!empty($footer_custom_settings_color_text)): ?>
        body #footer,
        body #footer div, body #footer div:before, body #footer div:after,
        body #footer h1,body #footer h2,body #footer h3,body #footer h4,body #footer h5,body #footer h6,
        body #footer p, body #footer p:before, body #footer p:after,
        body #footer span, body #footer span:before, body #footer span:after {
            color: <?php echo esc_attr($footer_custom_settings_color_text) ?> !important;
        }
        <?php endif; ?>
        <?php if(!empty($footer_custom_settings_color_link)): ?>
        body #footer a:not([class^="social-"]) {
            color: <?php echo esc_attr($footer_custom_settings_color_link) ?> !important;
        }
        <?php endif; ?>
        <?php if(!empty($footer_custom_settings_color_link_hover)): ?>
        body #footer a:not([class^="social-"]):hover {
            color: <?php echo esc_attr($footer_custom_settings_color_link_hover) ?> !important;
        }
        <?php endif; ?>
        <?php if(!empty($footer_custom_settings_color_bg)): ?>
        body #footer {
            background-color: <?php echo esc_attr($footer_custom_settings_color_bg) ?> !important;
        }
        <?php endif; ?>
        <?php if(!empty($footer_custom_settings_bg_img)): ?>
        body #footer {
            background-image: url(<?php echo esc_url($footer_custom_settings_bg_img) ?>) !important;
            background-size: cover;
            background-position: 50% 0;
        }
        <?php if(!empty($footer_custom_settings_bg_overlay)): ?>
        body #footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: <?php echo esc_attr($footer_custom_settings_bg_overlay) ?> !important;
            opacity: 0.6;
        }
        <?php endif; ?>
        <?php endif; ?>
    </style>

<?php endif; ?>