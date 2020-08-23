<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
$image_id = $image = '';
$image_dark_id = $image_dark = '';

$consulting_config = consulting_config();
$logo_tmp_src = $consulting_config['layout'] . '/';

$post_id = get_the_ID();

/*Get image id*/
if(!empty($element['data']['uselogo']) and stm_hb_check_string($element['data']['uselogo'])) {
	$image_id = stm_hb_get_option('logo', false, $element['pearl_header_builder']);
	$image_dark_id = stm_hb_get_option('logo_dark', false, $element['pearl_header_builder']);
} elseif(!empty($element['value'])) {
	$image_id = $element['value'];
    $image_dark_id = $element['value'];
}

/*Default width*/
$attrs = array();
$size = 'full';
if(!empty($element['data']['width'])) {
	$attrs['style'] = 'width:' . intval($element['data']['width']) . 'px';
}

/*Get image*/
$image = wp_get_attachment_image($image_id, 'full', false, $attrs);
$image_dark = wp_get_attachment_image($image_dark_id, 'full', false, $attrs);

/*Get url*/
$url = get_home_url();
if(!empty($element['data']['url'])) {
	$url = $element['data']['url'];
}

if(!empty($image) || !empty($image_dark)):
    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
    ?>

	<div class="stm-logo">
		<a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($image_alt); ?>">
            <?php if ( ! get_post_meta( $post_id, 'enable_header_transparent', true ) ): ?>
                <?php echo wp_kses_post($image_dark); ?>
            <?php else: ?>
                <?php echo wp_kses_post($image); ?>
            <?php endif; ?>
		</a>
	</div>
  <?php else : ?>
    <?php if ( ! get_post_meta( $post_id, 'enable_header_transparent', true ) ): ?>
        <?php $logo = get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg'; ?>
    <?php else: ?>
        <?php $logo = get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_default.svg'; ?>
    <?php endif; ?>
    <div class="stm-logo">
        <a href="<?php echo esc_url($url); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: 184px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
    </div>

<?php endif; ?>