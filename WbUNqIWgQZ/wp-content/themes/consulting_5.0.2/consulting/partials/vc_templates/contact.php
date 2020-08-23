<?php
/**
 * @var $style
 * @var $name
 * @var $image
 * @var $image_size
 * @var $job
 * @var $phone
 * @var $phone_two
 * @var $email
 * @var $skype
 * @var $css_class
 */

if ($style == 'style_2') : ?>
    <div class="stm_contact_two<?php echo esc_attr($css_class); ?> clearfix">
        <?php if (!empty($image['thumbnail'])) { ?>
            <div class="stm_contact_image">
                <?php echo consulting_filtered_output($image['thumbnail']); ?>
            </div>
        <?php } ?>
        <div class="stm_contact_info">
            <h5 class="no_stripe"><?php echo esc_html($name); ?></h5>
            <?php if ($job) { ?>
                <div class="stm_contact_job"><?php echo esc_html($job); ?></div>
            <?php } ?>
            <?php if ($phone || $phone_two) { ?>
                <div class="stm_contact_row"><i class="fa fa-phone"></i> <?php echo esc_html($phone); ?>
                    <br/><?php echo esc_html($phone_two); ?></div>
            <?php } ?>
            <?php if ($email) { ?>
                <div class="stm_contact_row"><i class="fa fa-envelope"></i> <a
                        href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email); ?></a>
                </div>
            <?php } ?>
            <?php if ($skype) { ?>
                <div class="stm_contact_row"><i class="fa fa-skype"></i> <a
                        href="skype:<?php echo esc_attr($skype); ?>"><?php echo esc_html($skype); ?></a></div>
            <?php } ?>
        </div>
    </div>
<?php else: ?>
    <div class="stm_contact<?php echo esc_attr($css_class); ?> clearfix">
        <?php if (!empty($image['thumbnail'])) { ?>
            <div class="stm_contact_image">
                <?php echo consulting_filtered_output($image['thumbnail']); ?>
            </div>
        <?php } ?>
        <div class="stm_contact_info">
            <h5 class="no_stripe"><?php echo esc_html($name); ?></h5>
            <?php if ($job) { ?>
                <div class="stm_contact_job"><?php echo esc_html($job); ?></div>
            <?php } ?>
            <?php if ($email) { ?>
                <div class="stm_contact_row"><?php esc_html_e('Email: ', 'consulting'); ?><a
                        href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email); ?></a>
                </div>
            <?php } ?>
            <?php if ($skype) { ?>
                <div class="stm_contact_row"><?php esc_html_e('Skype: ', 'consulting'); ?><a
                        href="skype:<?php echo esc_attr($skype); ?>"><?php echo esc_html($skype); ?></a></div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>