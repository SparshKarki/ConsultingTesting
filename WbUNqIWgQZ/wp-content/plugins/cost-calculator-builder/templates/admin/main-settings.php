<div class="ccb-settings-wrapper calculator-settings">
    <calc-builder inline-template>
        <div class="ccb-settings-container">
            <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/partials/header') ?>
            <div class="ccb-settings-content">

                <div class="ccb-tabs-wrapper">

                    <div class="ccb-page" :class="{active: active_tab === 'calculator'}"
                         @click="active_tab = 'calculator'">
                        <i class="fas fa-calculator"></i>
                        <span> <?php echo __('Calculator', 'cost-calculator-builder') ?></span>
                    </div>

                    <div class="ccb-page" :class="{disabled: disabled, active: active_tab === 'conditions'}"
                         @click="active_tab = 'conditions'">
                        <i class="fas fa-cube"></i>
                        <span> <?php echo __('Conditions', 'cost-calculator-builder') ?></span>
                    </div>

                    <div class="ccb-page" :class="{disabled: disabled, active: active_tab === 'settings'}" @click="active_tab = 'settings'">
                        <i class="fas fa-cog"></i>
                        <span><?php echo __('Settings', 'cost-calculator-builder') ?></span>
                    </div>

                </div>

                <div class="ccb-settings-section">

                    <loader v-if="loader"></loader>

                    <template v-else-if="editable">
                        <img class="ccb-arrow" src="<?php echo esc_url(CALC_URL . '/frontend/dist/img/arrow.png')?>" alt="">
                        <div  class="ccb-create-id">
                            <span><?php echo __("it's empty here", 'cost-calculator-builder') ?></span>
                            <p>
                                <?php echo __('Click a button to create a calculator.', 'cost-calculator-builder') ?>
                            </p>
                        </div>
                    </template>

                    <template v-else>

                        <keep-alive>

                            <?php $tabs = \cBuidler\Classes\CCBSettingsData::get_tab_pages(); ?>
                            <?php foreach ($tabs as $tab): ?>
                                <component
                                        inline-template
                                        ref="<?php echo esc_attr($tab) ?>"
                                        @save="saveCondition"
                                        is="<?php echo esc_attr($tab)?>-page"
                                        v-if="'<?php echo $tab?>' === active_tab"
                                >
                                    <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/' . $tab) ?>
                                </component>
                            <?php endforeach; ?>

                        </keep-alive>
                    </template>

                </div>
            </div>
            <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/modal') ?>
            <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/partials/footer') ?>
        </div>
    </calc-builder>
</div>