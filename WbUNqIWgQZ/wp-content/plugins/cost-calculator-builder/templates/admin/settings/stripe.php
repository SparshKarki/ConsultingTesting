<?php if(ccb_pro_active()) :
    do_action('render-stripe');
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
            <h6><?php echo __('Enable Stripe', 'cost-calculator-builder') ?></h6>
        </div>
        <div>
            <div class="list-content" style="margin-top: 0">
                <input type="text" placeholder="<?php echo __('- Stripe Publish Key -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-content">
                <input type="text" placeholder="<?php echo __('- Stripe Secret Key -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-content">
                <textarea></textarea>
                <p class="ccb-desc">[ccb-total-0] <?php echo __('will be changed into total', 'cost-calculator-builder') ?> </p>
            </div>
        </div>
    </div>
<?php endif?>