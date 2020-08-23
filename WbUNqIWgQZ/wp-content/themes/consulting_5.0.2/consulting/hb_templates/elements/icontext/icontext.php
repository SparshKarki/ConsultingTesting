<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php if(!empty($element['data'])): ?>
    <div class="hb-icontext">
        <?php if(!empty($element['data']['icon'])): ?>
            <i class="stm-icontext__icon <?php echo esc_attr($element['data']['icon']); ?>"></i>
        <?php endif; ?>
        <?php if(!empty($element['data']['title'])): ?>
            <span class="hb-icontext__text"><?php echo esc_attr($element['data']['title']); ?></span>
        <?php endif; ?>
    </div>
<?php endif; ?>