<?php if(ccb_pro_active()) :
    do_action('render-send-form');
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
            <h6><?php echo __('Enable Contact Form', 'cost-calculator-builder') ?></h6>
        </div>
        <div>
            <div class="list-content" style="margin-top: 0">
                <select>
                    <option value="" selected><?php echo __('Default', 'cost-calculator-builder') ?></option>
                </select>
            </div>

            <template>

                <div class="list-content">
                    <input type="text" placeholder="<?php echo __('- Type Email -', 'cost-calculator-builder') ?>">
                </div>

                <div class="list-content">
                    <input type="text" placeholder="<?php echo __('- Type Subject -', 'cost-calculator-builder') ?>">
                </div>

            </template>
            <template>

                <div class="list-content">
                    <textarea></textarea>
                    <p class="ccb-desc">[ccb-total-0] <?php echo __('will be changed into total', 'cost-calculator-builder') ?> </p>
                </div>

            </template>

            <div class="list-content">
                <input type="text" placeholder="<?php echo __('- Type Button Text -', 'cost-calculator-builder') ?>">
            </div>

            <div class="list-header" style="margin-top: 25px">
                <div class="ccb-switch">
                    <input type="checkbox"/>
                    <label></label>
                </div>
                <h6><?php echo __('Redirect to payment after submit', 'cost-calculator-builder') ?></h6>
            </div>

            <div class="list-content" style="margin-top: 0">
                <select>
                    <option value="" selected><?php echo __('Default2', 'cost-calculator-builder') ?></option>
                </select>
                <p class="ccb-desc"><?php echo __('Only Enabled Payment Methods will be available here. You can enable and setup Payments via Settings main menu.', 'cost-calculator-builder')?></p>
            </div>
        </div>
    </div>
<?php endif;?>