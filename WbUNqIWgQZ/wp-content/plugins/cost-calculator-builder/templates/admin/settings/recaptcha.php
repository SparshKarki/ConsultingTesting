<?php if(ccb_pro_active()) :
    do_action('render-recaptcha');
    ?>
<?php else:?>
    <div class="list-row">
        <?php
        echo \cBuidler\Classes\CCBTemplate::load('/admin/partials/pro-feature');
        ?>
        <div class="list-header">
            <div class="ccb-switch">
                <input type="checkbox"/>
                <label></label>
            </div>
            <h6><?php echo __('Enable reCAPTCHA', 'cost-calculator-builder') ?></h6>
        </div>
        <div >
            <div class="list-content" style="margin-top: 0">
                <input type="text" placeholder="<?php echo __('- Paste reCAPTCHA Site Key -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-content">
                <input type="text" placeholder="<?php echo __('- Paste reCAPTCHA Secret Key -', 'cost-calculator-builder') ?>">
            </div>
        </div>
    </div>
<?php endif;?>