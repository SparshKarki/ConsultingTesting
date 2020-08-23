<div class="ccb-panel-header">
    <div class="ccb-panel-header-content">
        <div class="ccb-panel-wrapper">
            <div class="left">
                <div class="left__wrapper">
                    <span>
                        <img src="<?php echo esc_url(CALC_URL . '/frontend/dist/img/icon-100x100.png') ?>">
                    </span>
                    <span> <?php echo __('Cost Calculator', 'cost-calculator-builder') ?></span>
                </div>
            </div>
            <div class="right">
                <div class="button-wrapper">
                    <button @click.prevent="openExisting" :class="{'create-type': $store.getters.getModalType === 'existing'}">
                            <span>
                                <i class="fas fa-stream"></i>
                                <?php echo __('My Calculators', 'cost-calculator-builder') ?>
                            </span>
                    </button>
                    <?php if(isset($is_custom)):?>
                    <button class="create-type" @click.prevent="saveChanges">
                        <span>
                            <i class="fas fa-save"></i>
                            <?php echo __('Save changes', 'cost-calculator-builder') ?>
                        </span>
                    </button>
                    <?php else:?>
                    <button :class="{'create-type': editable && $store.getters.getModalType !== 'existing', disabled: $store.getters.getCreateNew}" @click.prevent="createId(true)">
                        <span>
                            <i class="fas fa-plus-circle"></i>
                            <?php echo __('Create new', 'cost-calculator-builder') ?>
                        </span>
                    </button>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
</div>