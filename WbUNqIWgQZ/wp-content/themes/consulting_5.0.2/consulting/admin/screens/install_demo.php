<?php

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

$demos = array(
    'layout_1' => array(
        'label' => esc_html__('New York', 'consulting'),
    ),
    'layout_geneva' => array(
        'label' => esc_html__('Geneva', 'consulting'),
    ),
    'layout_liverpool' => array(
        'label' => esc_html__('Liverpool', 'consulting'),
    ),
    'layout_budapest' => array(
        'label' => esc_html__('Budapest', 'consulting'),
    ),
    'layout_ankara' => array(
        'label' => esc_html__('Ankara', 'consulting'),
    ),
    'layout_osaka' => array(
        'label' => esc_html__('Osaka', 'consulting'),
    ),
    'layout_barcelona' => array(
        'label' => esc_html__('Barcelona', 'consulting'),
    ),
    'layout_melbourne' => array(
        'label' => esc_html__('Melbourne', 'consulting'),
    ),
    'layout_lyon' => array(
        'label' => esc_html__('Lyon', 'consulting'),
    ),
    'layout_stockholm' => array(
        'label' => esc_html__('Stockholm', 'consulting'),
    ),
    'layout_lisbon' => array(
        'label' => esc_html__('Lisbon', 'consulting'),
    ),
    'layout_berlin' => array(
        'label' => esc_html__('Berlin', 'consulting'),
    ),
    'layout_los_angeles' => array(
        'label' => esc_html__('Los Angeles', 'consulting'),
    ),
    'layout_zurich' => array(
        'label' => esc_html__('Zurich', 'consulting'),
    ),
    'layout_mumbai' => array(
        'label' => esc_html__('Mumbai', 'consulting'),
    ),
    'layout_2' => array(
        'label' => esc_html__('Shanghai', 'consulting'),
    ),
    'layout_new_delhi' => array(
        'label' => esc_html__('New Delhi', 'consulting'),
    ),
    'layout_12' => array(
        'label' => esc_html__('Singapore', 'consulting'),
    ),
    'layout_8' => array(
        'label' => esc_html__('Seoul', 'consulting'),
    ),
    'layout_6' => array(
        'label' => esc_html__('London', 'consulting'),
    ),
    'layout_13'      => array(
        'label' => esc_html__('Sao Paulo', 'consulting'),
    ),
    'layout_brussels' => array(
        'label' => esc_html__('Brussels', 'consulting'),
    ),
    'layout_3'      => array(
        'label' => esc_html__('Tokyo', 'consulting'),
    ),
    'layout_marseille'      => array(
        'label' => esc_html__('Marsseille', 'consulting'),
    ),
    'layout_toronto' => array(
        'label' => esc_html__('Toronto', 'consulting'),
    ),
    'layout_beijing'      => array(
        'label' => esc_html__('Beijing', 'consulting'),
    ),
    'layout_milan' => array(
        'label' => esc_html__('Milan', 'consulting'),
    ),
    'layout_7'      => array(
        'label' => esc_html__('Madrid', 'consulting'),
    ),
    'layout_9'      => array(
        'label' => esc_html__('Frankfurt', 'consulting'),
    ),
    'layout_amsterdam'      => array(
        'label' => esc_html__('Amsterdam', 'consulting'),
    ),
    'layout_vienna' => array(
        'label' => esc_html__('Vienna', 'consulting'),
    ),
    'layout_19' => array(
        'label' => esc_html__('Oslo', 'consulting'),
    ),
    'layout_4'      => array(
        'label' => esc_html__('Sydney', 'consulting'),
    ),
    'layout_14' => array(
        'label' => esc_html__('Abu Dhabi', 'consulting'),
    ),
    'layout_5' => array(
        'label' => esc_html__('Moscow', 'consulting'),
    ),
    'layout_15' => array(
        'label' => esc_html__('Dublin', 'consulting'),
    ),
    'layout_11' => array(
        'label' => esc_html__('Paris', 'consulting'),
    ),
    'layout_denver' => array(
        'label' => esc_html__('Denver', 'consulting'),
    ),
    'layout_17' => array(
        'label' => esc_html__('Dubai', 'consulting'),
    ),
    'layout_davos' => array(
        'label' => esc_html__('Davos', 'consulting'),
    ),
    'layout_istanbul' => array(
        'label' => esc_html__('Istanbul', 'consulting'),
    ),
    'layout_20' => array(
        'label' => esc_html__('Rome', 'consulting'),
    ),
    'layout_san_francisco' => array(
        'label' => esc_html__('San Francisco', 'consulting'),
    ),
    'layout_10' => array(
        'label' => esc_html__('Hong Kong', 'consulting'),
    ),
    'layout_18' => array(
        'label' => esc_html__('Tehran', 'consulting'),
    ),
    'layout_16' => array(
        'label' => esc_html__('Tel Aviv', 'consulting'),
    ),
);

$auth_code = stm_check_auth();
$plugins = consulting_require_plugins(true);


?>
<div class="wrap about-wrap stm-admin-wrap  stm-admin-demos-screen">
    <?php stm_get_admin_tabs('demos'); ?>

    <?php if (!empty($auth_code)):
        $current_demo = get_option('consulting_layout', '');
        ?>
        <div class="stm_demo_import_choices">
            <script type="text/javascript">
                var stm_layouts = {};
            </script>
            <?php foreach ($demos as $demo_key => $demo_value): ?>
                <script type="text/javascript">
                    stm_layouts['<?php echo esc_attr($demo_key); ?>'] = <?php echo json_encode(consulting_layout_plugins($demo_key)); ?>;
                </script>
                <label class="<?php if ($demo_key == $current_demo) echo 'active'; ?>">
                    <div class="inner">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/admin/assets/img/layouts/' . $demo_key . '.jpg'); ?>"/>
                        <?php if ($demo_key == $current_demo): ?>
                            <div class="installed"><?php esc_html_e('Installed', 'consulting'); ?></div>
                        <?php else: ?>
                            <div class="install"
                                 data-name="<?php echo esc_attr($demo_value['label']); ?>"
                                 data-layout="<?php echo esc_attr($demo_key); ?>"><?php esc_html_e('Import', 'consulting'); ?></div>
                        <?php endif; ?>
                        <span class="stm_layout__label"><?php echo esc_attr($demo_value['label']); ?></span>
                    </div>
                </label>
            <?php endforeach; ?>
        </div>


        <div class="stm_install__demo_popup">
            <div class="stm_install__demo_popup_close"></div>
            <div class="inner">

                <!-- Privacy Policy -->
                <div class="privacy_policy">
                    <h4><?php esc_html_e('Privacy Policy', 'consulting'); ?></h4>
                    <div class="stm_install__demo_popup_close"></div>
                    <div class="stm_plugins_status">
                        <?php require_once 'privacy_policy.php'; ?>
                    </div>
                    <div class="privacy_policy_button decline"
                         data-value="decline"><?php esc_html_e('Decline', 'consulting'); ?></div>
                    <div class="privacy_policy_button"
                         data-value="accept"><?php esc_html_e('Accept', 'consulting'); ?></div>
                    <input type="hidden" name="skip_api" id="skip_api" value="0"/>
                </div>

                <div class="choose_builder" style="display: none;">
                    <h4><?php esc_html_e('Choose Builder', 'consulting'); ?></h4>
                    <div class="stm_install__demo_popup_close"></div>
                    <div class="stm_plugins_status">
                        <?php require_once 'choose_plugin.php'; ?>
                    </div>
                </div>

                <div class="demo_install" style="display: none;">
                    <h4><?php esc_html_e('Demo Installation', 'consulting'); ?></h4>
                    <div class="stm_install__demo_popup_close"></div>
                    <div class="stm_plugins_status">
                        <?php foreach ($plugins as $plugin):
                            $active = (consulting_check_plugin_active($plugin['slug'])) ? 'installed' : 'not-installed';
                            $active_text = ($active == 'installed') ? esc_html__('Installed & Activated', 'consulting') : esc_html__('Not installed', 'consulting');
                            ?>
                            <div id="<?php echo sanitize_text_field('stm_' . $plugin['slug']); ?>"
                                 class="stm_single_plugin_info <?php echo esc_attr($active); ?>"
                                 data-active="<?php echo esc_attr($active); ?>"
                                 data-slug="<?php echo sanitize_text_field($plugin['slug']); ?>">
                                <div class="image">
                                    <img
                                            src="<?php echo esc_url(get_template_directory_uri() . '/admin/assets/img/plugins/' . $plugin['slug'] . '.png'); ?>"/>
                                </div>
                                <div class="title"><?php echo sanitize_text_field($plugin['name']); ?></div>
                                <div class="status">
                                    <span><?php echo sanitize_text_field($active_text); ?></span>
                                    <div class="loading-dots"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="stm_content_status">
                            <div class="image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/admin/assets/img/plugins/demo.png'); ?>"/>
                            </div>
                            <div class="title"><?php esc_html_e('Demo content', 'consulting'); ?></div>
                            <div class="status"><span></span>
                                <div class="loading-dots"></div>
                            </div>
                        </div>
                    </div>
                    <div class="stm_install__demo_start"><?php esc_html_e('Setup Layout', 'consulting'); ?></div>
                </div>

            </div>
        </div>
    <?php else: ?>
        <div class="stm-admin-message">
            <?php printf(wp_kses_post(__('Please enter your Activation Token before running the Consulting.', 'consulting'))); ?>
        </div>
    <?php endif; ?>

</div>

<script type="text/javascript">
    (function ($) {
        var builder = 'js_composer';
        var plugins = <?php echo html_entity_decode(json_encode(wp_list_pluck($plugins, 'slug'))); ?>;
        var layout = 'default';
        var layout_name = 'New York';

        var plugin = false;
        var layout_plugins = [];
        var installation = false;

        <?php if(!empty($_GET['layout_importing'])): ?>
        layout = '<?php echo esc_js($_GET['layout_importing']); ?>';
        <?php if(!empty($demos[$_GET['layout_importing']])): ?>
        layout_name = '<?php echo esc_js($demos[$_GET['layout_importing']]['label']); ?>';
        <?php endif; ?>

        <?php if(!empty($_GET['builder'])): ?>
        builder = '<?php echo esc_js(sanitize_text_field($_GET['builder'])) ?>';
        if(builder === 'elementor') {
            layout_plugins.push('consulting-elementor-widgets');
        }
        <?php endif; ?>

        /* Privacy Policy */
        $('.stm_install__demo_popup .privacy_policy').hide();
        $('.stm_install__demo_popup .demo_install').show();
        <?php endif; ?>

        $(document).ready(function () {
            next_installable();
            show_popup();

            <?php if(!empty($_GET['layout_importing'])): ?>
            layout = '<?php echo esc_js($_GET['layout_importing']); ?>';

            $('.stm_demo_import_choices .install').click();

            setTimeout(function () {
                $('.stm_install__demo_popup .inner .stm_install__demo_start').click();
            }, 1000);

            <?php if(!empty($_GET['builder'])): ?>
            builder = '<?php echo esc_js(sanitize_text_field($_GET['builder'])) ?>';
            if (builder === 'elementor') {
                layout_plugins.push('consulting-elementor-widgets');
            }
            <?php endif; ?>

            layout_plugins.push(builder);
            hide_plugins(layout);

            window.history.pushState('', '', '<?php echo esc_url(remove_query_arg(array('layout_importing', 'builder'))) ?>');
            <?php endif; ?>

            $('.stm_install__demo_popup .inner .stm_install__demo_start').on('click', function (e) {
                e.preventDefault();

                if ($(this).attr('target') === '_blank') {
                    var win = window.open($(this).attr('href'), '_blank');
                    win.focus();

                    return;
                }

                if (!$(this).hasClass('installing')) {
                    next_installable();

                    if (!plugin) {
                        /* Plugins installed, Install demo */
                        performAjax('import_demo');
                    } else {
                        /* Install plugin */
                        performAjax(plugins[plugin]);
                    }
                }
            });

            /* Privacy Policy */
            $('.privacy_policy_button').on('click', function (e) {
                e.preventDefault();

                $('.stm_install__demo_popup .privacy_policy').hide();
                $('.stm_install__demo_popup .choose_builder').show();

                if ($(this).data('value') === 'decline') {
                    $('#skip_api').val(1);
                }

            });

            $('.choose_plugin__choice').on('click', function (e) {
                e.preventDefault();

                $('.stm_install__demo_popup .choose_builder').hide();
                $('.stm_install__demo_popup .demo_install').show();

                builder = $(this).attr('data-builder');

                layout_plugins.push(builder);
                if (builder === 'elementor') {
                    layout_plugins.push('consulting-elementor-widgets');
                }
                next_installable();
                hide_plugins(layout);


            });

        });

        function performAjax(plugin_slug) {
            installation = true;
            var installing = "<?php esc_html_e('Installing', 'consulting'); ?>";
            var installed = "<?php esc_html_e('Installed & Activated', 'consulting'); ?>";
            var $current_plugin = $('#stm_' + plugin_slug);

            <?php if(!empty($_GET['layout_importing'])): ?>
            layout = '<?php echo esc_js($_GET['layout_importing']); ?>';

            <?php if(!empty($demos[$_GET['layout_importing']])): ?>
            layout_name = '<?php echo esc_js($demos[$_GET['layout_importing']]['label']); ?>';
            <?php endif; ?>

            <?php if(!empty($_GET['builder'])): ?>
            builder = '<?php echo esc_js($_GET['builder']); ?>';
            if (builder === 'elementor') {
                layout_plugins.push('consulting-elementor-widgets');
            }
            <?php endif; ?>

            <?php endif; ?>

            $.ajax({
                url: ajaxurl,
                dataType: 'json',
                context: this,
                data: {
                    'layout': layout,
                    'plugin': plugin_slug,
                    'action': 'consulting_install_plugin',
                    'security': consulting_install_plugin,
                    'builder': builder
                },
                beforeSend: function () {
                    $current_plugin
                        .addClass('installing')
                        .find('.status > span').text(installing);
                    $('.stm_install__demo_popup .inner .stm_install__demo_start').addClass('installing');
                },
                complete: function (data) {
                    $current_plugin
                        .removeClass('installing')
                        .find('.status > span').html(installed).text();

                    var dt = data.responseJSON;
                    if (typeof dt.next !== 'undefined') {
                        plugin = dt.plugin_slug;
                        performAjax(dt.next);
                    }

                    if (typeof dt.activated !== 'undefined' && dt.activated) {
                        plugin = dt.plugin_slug;
                        $current_plugin.removeClass('.not-installed').addClass('installed').attr('data-active', 'installed');
                    }

                    if (typeof dt.import_demo !== 'undefined' && dt.import_demo) {
                        install_demo()
                    }
                },
                error: function () {
                    window.location.href += '&layout_importing=' + layout + '&builder=' + builder;
                }

            });
        }

        function install_demo() {
            installation = true;
            var importing_demo_text = "<?php esc_html_e('Importing Demo', 'consulting'); ?>";
            var imported_demo_text = "<?php esc_html_e('Imported', 'consulting'); ?>";
            var nonce = "<?php echo esc_js(wp_create_nonce('stm_demo_import_content')); ?>";

            <?php if(!empty($_GET['layout_importing'])): ?>
            layout = '<?php echo esc_js($_GET['layout_importing']); ?>';
            <?php if(!empty($demos[$_GET['layout_importing']])): ?>
            layout_name = '<?php echo esc_js($demos[$_GET['layout_importing']]['label']); ?>';
            <?php endif; ?>
            <?php endif; ?>

            $.ajax({
                url: ajaxurl,
                dataType: 'json',
                context: this,
                data: {
                    'demo_template': layout,
                    'action': 'stm_demo_import_content',
                    'builder': builder,
                    'nonce': nonce
                },
                beforeSend: function () {
                    $('.stm_content_status').addClass('installing');
                    $('.stm_content_status .status > span').text(importing_demo_text);
                },
                complete: function (data) {
                    installation = false;
                    $('.stm_install__demo_popup .inner .stm_install__demo_start').removeClass('installing');
                    $('.stm_content_status').removeClass('installing').addClass('installed');
                    $('.stm_content_status .status > span').text(imported_demo_text);

                    var dt = data.responseJSON;
                    if (typeof dt.title !== 'undefined' && typeof dt.url !== 'undefined') {
                        var demo_start = '.stm_install__demo_popup .inner .stm_install__demo_start';
                        $(demo_start).text(dt.title);
                        $(demo_start).attr('href', dt.url);
                        $(demo_start).attr('target', '_blank');
                        $('<a class="stm_install_demo_to" href="' + dt.theme_options + '">' + dt.theme_options_title + '</a>').insertBefore(demo_start);
                    }
                }
            });
        }

        function show_popup() {
            $('.stm_demo_import_choices .install').on('click', function (e) {

                e.preventDefault();
                layout = $(this).attr('data-layout');
                layout_name = $(this).attr('data-name');

                <?php if(!empty($_GET['layout_importing'])): ?>
                layout = '<?php echo esc_js($_GET['layout_importing']); ?>';
                <?php if(!empty($demos[$_GET['layout_importing']])): ?>
                layout_name = '<?php echo esc_js($demos[$_GET['layout_importing']]['label']); ?>';
                <?php endif; ?>
                <?php endif; ?>

                hide_plugins(layout);
                $('.stm_install__demo_popup').addClass('active');
            });

            $('.stm_install__demo_popup_close').on('click', function (e) {
                e.preventDefault();
                if (!installation) {
                    $('.stm_install__demo_popup').removeClass('active');
                    $('.stm_install__demo_popup .choose_builder').show();
                    $('.stm_install__demo_popup .demo_install').hide();

                    /*Remove Builder*/
                    var builder_index = stm_layouts[layout].indexOf(builder);
                    if (builder_index > -1) {
                        stm_layouts[layout].splice(builder_index, 1);
                    }

                    /*Remove Consulting elementor Widgets*/
                    var cons_builder_index = stm_layouts[layout].indexOf('consulting-elementor-widgets');
                    if (cons_builder_index > -1) {
                        stm_layouts[layout].splice(cons_builder_index, 1);
                    }
                }
            });
        }

        function next_installable() {
            $('.stm_single_plugin_info').each(function () {
                var active = $(this).attr('data-active');
                var currentPlugin = $(this).attr('data-slug');
                if (active === 'not-installed' && !plugin && layout_plugins.indexOf(currentPlugin) !== -1) plugin = currentPlugin;
            });
        }

        function hide_plugins(layout) {
            layout_plugins = stm_layouts[layout];

            $('.stm_single_plugin_info').each(function () {
                var plugin_slug = $(this).attr('data-slug');
                if (layout_plugins.indexOf(plugin_slug) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        }

    })(jQuery);
</script>