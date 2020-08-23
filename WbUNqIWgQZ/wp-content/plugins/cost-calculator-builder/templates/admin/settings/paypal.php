<?php if(ccb_pro_active()) :
    do_action('render-paypal');
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
            <h6><?php echo __('Enable PayPal', 'cost-calculator-builder') ?></h6>
        </div>
        <div>
            <div class="list-content" style="margin-top: 0">
                <input type="text" placeholder="<?php echo __('- PayPal Email -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-content">
                <select>
                    <option value="" selected><?php echo __('- Select Currency Symbol -', 'cost-calculator-builder') ?></option>
                </select>
            </div>

            <div class="list-content">
                <select>
                    <option value="" selected><?php echo __('- Select type of .... -', 'cost-calculator-builder') ?></option>
                </select>
            </div>

            <div class="list-content">
                <textarea></textarea>
                <p class="ccb-desc">[ccb-total-0] <?php echo __('will be changed into total', 'cost-calculator-builder') ?> </p>
            </div>
        </div>
    </div>
<?php endif;?>