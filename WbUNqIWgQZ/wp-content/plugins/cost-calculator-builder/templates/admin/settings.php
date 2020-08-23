<div class="ccb-page-content settings">
    <div class="settings-wrapper">
        <div class="ccb-settings-sidebar">
            <div class="ccb-sidebar-item" :class="{active: active_content === 'general'}"
                 @click.prevent="active_content = 'general'">
                <i class="fas fa-cog"></i>
                <p class=""><?php echo __('General', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'currency'}"
                 @click.prevent="active_content = 'currency'">
                <i class="fas fa-coins"></i>
                <p class=""><?php echo __('Currency', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'form'}"
                 @click.prevent="active_content = 'form'">
                <i class="fas fa-envelope"></i>
                <p class=""><?php echo __('Send Form', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'wooCommerce'}"
                 @click.prevent="active_content = 'wooCommerce'">
                <i class="fas fa-shopping-cart"></i>
                <p class=""><?php echo __('WooCommerce', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'stripe'}"
                 @click.prevent="active_content = 'stripe'">
                <i class="fab fa-stripe-s"></i>
                <p class=""><?php echo __('Stripe', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'paypal'}"
                 @click.prevent="active_content = 'paypal'">
                <i class="fab fa-paypal"></i>
                <p class=""><?php echo __('PayPal', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>

            <div class="ccb-sidebar-item" :class="{active: active_content === 'recaptcha'}"
                 @click.prevent="active_content = 'recaptcha'">
                <i class="fas fa-robot"></i>
                <p class=""><?php echo __('reCAPTCHA', 'cost-calculator-builder') ?></p>
                <i class="fas fa-chevron-right after"></i>
            </div>
        </div>
        <div class="ccb-sidebar-content">
            <div class="ccb-sidebar-content-list" v-if="active_content === 'general'">
                <div class="list-row">
                    <div class="list-content">
                        <input type="text" v-model.trim="settingsField.general.header_title" placeholder="<?php echo __('- Total Descriptions Header Title -', 'cost-calculator-builder') ?>">
                    </div>

                    <div class="list-content">
                        <select v-model="settingsField.general.boxStyle">
                            <option value="" selected disabled><?php echo __('- Select Calculator Box Style -', 'cost-calculator-builder') ?></option>
                            <option value="vertical"><?php echo __('Vertical', 'cost-calculator-builder') ?></option>
                            <option value="horizontal"><?php echo __('Horizontal', 'cost-calculator-builder') ?></option>
                        </select>
                    </div>

                    <div class="list-content">
                        <select v-model="settingsField.general.descriptions">
                            <option value="" selected disabled><?php echo __('- Select Descriptions Option -', 'cost-calculator-builder') ?></option>
                            <option value="show"><?php echo __('show', 'cost-calculator-builder') ?></option>
                            <option value="hide"><?php echo __('hide', 'cost-calculator-builder') ?></option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="ccb-sidebar-content-list" v-if="active_content === 'currency'">
                <div class="list-row">
                    <div class="list-content">
                        <input v-model="settingsField.currency.currency" type="text" placeholder="<?php echo __('- Type Currency Symbol -', 'cost-calculator-builder') ?>">
                    </div>
                    <div class="list-content">
                        <select v-model="settingsField.currency.currencyPosition">
                            <option value="" selected disabled><?php echo __('- Select Currency Position -', 'cost-calculator-builder') ?></option>
                            <option value="left"><?php echo __('Left', 'cost-calculator-builder') ?></option>
                            <option value="right"><?php echo __('Right', 'cost-calculator-builder') ?></option>
                            <option value="left_with_space"><?php echo __('Left with space', 'cost-calculator-builder') ?></option>
                            <option value="right_with_space"><?php echo __('Right with space', 'cost-calculator-builder') ?></option>
                        </select>
                    </div>

                    <div class="list-content">
                        <input type="text" v-model="settingsField.currency.thousands_separator" placeholder="<?php echo __('- Type Thousands Separator -', 'cost-calculator-builder') ?>">
                    </div>

                    <div class="list-content">
                        <input type="text" v-model="settingsField.currency.decimal_separator" placeholder="<?php echo __('- Type Decimal Separator -', 'cost-calculator-builder') ?>">
                    </div>

                    <div class="list-content">
                        <input type="text" v-model="settingsField.currency.num_after_integer" placeholder="<?php echo __('- Type Number Of Characters After Integer -', 'cost-calculator-builder') ?>">
                    </div>
                </div>
            </div>

            <div class="ccb-sidebar-content-list" v-if="active_content === 'form'">
                <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/settings/send-form');
                ?>
            </div>


            <div class="ccb-sidebar-content-list" v-if="active_content === 'wooCommerce'">
                <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/settings/wooCommerce');
                ?>
            </div>

            <div class="ccb-sidebar-content-list" v-if="active_content === 'stripe'">
                <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/settings/stripe');
                ?>
            </div>

            <div class="ccb-sidebar-content-list" v-if="active_content === 'paypal'">
                <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/settings/paypal');
                ?>
            </div>

            <div class="ccb-sidebar-content-list" v-if="active_content === 'recaptcha'">
                <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/settings/recaptcha');
                ?>
            </div>
        </div>
    </div>
</div>
