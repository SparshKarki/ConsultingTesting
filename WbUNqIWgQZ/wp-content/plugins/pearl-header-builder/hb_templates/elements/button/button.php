<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!empty($element['data'])):
    $btn_c = array(
        'stm_btn',
        'stm_hb_mbc',
        'stm_hb_sbc_h'
    );

    $icon = $text = $url = '';
    if(!empty($element['data']['icon'])) {
        $icon = $element['data']['icon'];
        $btn_c[] = (empty($element['data']['icon_position'])) ? 'btn_icon-left' : $element['data']['icon_position'];
    }

    $btn_c[] = (empty($element['data']['style'])) ? 'btn_outline' : $element['data']['style'];

    $url = (!empty($element['data']['url'])) ? $element['data']['url'] : '';

    $text = (!empty($element['data']['text'])) ? $element['data']['text'] : '';
    ?>

    <a href="<?php echo esc_url($url); ?>" class="<?php echo implode(' ', $btn_c); ?>">
        <i class="btn__icon <?php echo esc_attr($icon); ?>"></i>
        <span class="btn__text"><?php echo esc_html($text); ?></span>
    </a>

<?php endif; ?>