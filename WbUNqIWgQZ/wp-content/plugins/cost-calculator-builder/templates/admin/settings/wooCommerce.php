<?php if(ccb_pro_active()) :
    do_action('render-wooCommerce');
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
            <h6><?php echo __('Enable WooCommerce', 'cost-calculator-builder') ?></h6>
        </div>
        <div>
            <div class="list-content" style="margin-top: 0">
                <select>
                    <option value="" selected><?php echo __('- Select WooCommerce Product -e', 'cost-calculator-builder') ?></option>
                </select>
            </div>

            <div class="list-content">
                <h6><?php echo __('Redirect after Submits', 'cost-calculator-builder') ?></h6>
                <div class="ccb-radio-wrapper">
                    <input id="redirect_to_cart" type="radio"  name="redirect_to" value="cart" checked>
                    <label for="redirect_to_cart">
                        <?php echo __('to Cart page', 'cost-calculator-builder') ?>
                    </label>

                    <input id="redirect_to_checkout" type="radio" name="redirect_to" value="checkout">
                    <label for="redirect_to_checkout">
                        <?php echo __('to Checkout page', 'cost-calculator-builder') ?>
                    </label>
                </div>
            </div>

            <div class="list-content">
                <textarea></textarea>
                <p class="ccb-desc">[ccb-total-0] <?php echo __('will be changed into total', 'cost-calculator-builder') ?> </p>
            </div>
        </div>
    </div>
<?php endif;?>