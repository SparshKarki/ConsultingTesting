<?php

use cBuidler\classes\CCBTemplate;

if (!isset($calc_id)) return;

$container_style = 'v-container';
$settings = get_option('stm_ccb_form_settings_' . $calc_id);

if(!empty($settings) && isset($settings[0]) && isset($settings[0]['general']))
    $settings = $settings[0];

if(empty($settings['general']))
    $settings = \cBuidler\Classes\CCBSettingsData::settings_data();

$box_style = isset($settings['general']['boxStyle']) ? $settings['general']['boxStyle'] : 'vertical';
$settings['calc_id'] = $calc_id;
$settings['title']   = get_post_meta($calc_id, 'stm-name', true);

if(!empty($settings['formFields']['body']))
    $settings['formFields']['body'] = str_replace('<br>', PHP_EOL, $settings['formFields']['body']);

$styles = get_post_meta($calc_id, 'ccb-custom-styles', true);
$data = [
    'settings'   => $settings,
    'currency'   => ccb_parse_settings($settings),
    'fields'     => get_post_meta($calc_id, 'stm-fields', true),
    'formula'    => get_post_meta($calc_id, 'stm-formula', true),
    'conditions' => apply_filters('calc-render-conditions', [], $calc_id),
    'styles'     => !empty($styles) ? $styles : \cBuidler\Classes\CCBCustomFields::custom_default_styles(),
];

if(isset($is_customize))
    $box_style = 'horizontal';

$custom_defined = false;
if(isset($is_preview))
    $custom_defined = true;


if($box_style === 'horizontal')
    $container_style = 'h-container';

wp_localize_script( 'calc-builder-main-js', 'calc_data_' . $calc_id, $data );

?>
<?php if(!isset($is_preview)): ?>
<div class="calculator-settings" >
<?php endif ?>
    <calc-builder-front custom="<?php echo esc_attr($custom_defined)?>" :data="<?php echo esc_attr(json_encode($data, JSON_UNESCAPED_UNICODE))?>" inline-template :id="<?php echo esc_attr($calc_id)?>">
        <div ref="calc"
             class="calc-container"
             data-calc-id="<?php echo esc_attr($calc_id)?>"
             :class="'<?php echo esc_attr($box_style)?>'"
        >

            <loader  v-if="loader"></loader>
            <template>

                <div class="calc-fields calc-list" :style="$store.getters.getCustomStyles['<?php echo esc_attr($container_style)?>']" :class="{loaded: !loader, 'payment' :  getHideCalc}"  v-if="!loader">
                    <div class="calc-item-title">
                        <h4 :style="$store.getters.getCustomStyles['headers']"><?php echo esc_attr($settings['title'])?></h4>
                    </div>
                    <!-- List of Fields -->
                    <?php if(!empty(get_post_meta($calc_id, 'stm-fields', true))):?>
                        <?php foreach (get_post_meta($calc_id, 'stm-fields', true) as $field):?>
                            <?php if($field['type'] === 'Date Picker'):?>
                                <?php if(ccb_pro_active()): ?>
                                    <?php
                                      echo \cBuidler\Classes\CCBProTemplate::load('frontend/fields/cost-date-picker', ['field' => $field])
                                    ?>
                                <?php endif;?>
                            <?php elseif( !empty($field['alias']) && $field['type'] !== 'Total'): ?>
                                <component
                                        v-if="fields['<?php echo esc_attr($field['alias'])?>']"
                                        inline-template
                                        style="<?php esc_attr($box_style) ?>"
                                        is="<?php echo esc_attr($field['_tag']) ?>"
                                        field="<?php echo esc_attr(json_encode($field, JSON_UNESCAPED_UNICODE))?>"
                                    <?php
                                    echo isset($field['alias']) ?  esc_attr("v-model=fields['{$field['alias']}'].value") : '';
                                    ?>
                                    <?php
                                    echo isset($field['_event']) ?  esc_attr("@{$field['_event']}=change") : '';
                                    ?>
                                >
                                    <?php echo CCBTemplate::load_template('frontend/fields/' . $field['_tag'], array('field' => (object)$field), true); ?>
                                </component>
                            <?php elseif( empty($field['alias']) && $field['type'] !== 'Total'): ?>
                                <component
                                        inline-template
                                        style="<?php esc_attr($box_style) ?>"
                                        is="<?php echo esc_attr($field['_tag']) ?>"
                                        field="<?php echo esc_attr(json_encode($field, JSON_UNESCAPED_UNICODE))?>"
                                >
                                    <?php echo CCBTemplate::load_template('frontend/fields/' . $field['_tag'], array('field' => (object)$field), true); ?>
                                </component>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif;?>
                </div>

                <div class="calc-subtotal calc-list " :class="{loaded: !loader}" :style="$store.getters.getCustomStyles['<?php echo esc_attr($container_style)?>']">
                    <div class="calc-item title">
                        <h4 :style="$store.getters.getCustomStyles['headers']"><?php echo isset($settings['general']['header_title']) ? $settings['general']['header_title'] : ''; ?></h4>
                    </div>
                    <div class="calc-subtotal-list">
                        <template v-for="field in Object.values(calcStore)" v-if="field.alias.indexOf('total') === -1 && settings && settings.general.descriptions === 'show'">

                            <div class="sub-list-item" :style="$store.getters.getCustomStyles['total-summary']" :class="field.alias">
                                <span class="sub-item-title" > {{ field.label | to_short(50) }}</span>
                                <span class="sub-item-value"> {{ field.converted }} </span>
                            </div>

                            <div class="sub-list-item inner" v-if="field.options && field.options.length" :style="$store.getters.getCustomStyles['total-summary']" :class="field.alias">
                                <div class="sub-inner" v-for="option in field.options">
                                    <span class="sub-item-title"> {{ option.label | to_short }} </span>
                                    <span class="sub-item-value"> {{ option.converted }} </span>
                                </div>
                            </div>
                        </template>

                        <div class="sub-list-item total" v-for="item in formula" :id="item.alias">
                            <span class="sub-item-title" :style="$store.getters.getCustomStyles['total']"> {{ item.label }} </span>
                            <span class="sub-item-value" :style="$store.getters.getCustomStyles['total']"> {{ item.converted }} </span>
                        </div>
                        <?php if(ccb_pro_active()):?>
                            <cost-pro-features inline-template>
                                <?php echo \cBuidler\Classes\CCBProTemplate::load('frontend/pro-features', ['settings' => $settings])?>
                            </cost-pro-features>
                        <?php endif;;?>
                    </div>
                </div>
            </template>
        </div>
    </calc-builder-front>
<?php if(!isset($is_preview)): ?>
</div>
<?php endif ?>
