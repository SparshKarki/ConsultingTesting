<div class="quantity-wrapper">
    <div class="list-row">
        <div class="list-content">
            <input type="text" placeholder="<?php echo __('- Field Label -', 'cost-calculator-builder')?>" v-model.trim="quantityField.label">
        </div>

        <div class="list-content">
            <input type="text" placeholder="<?php echo __('- Field Description -', 'cost-calculator-builder')?>" v-model.trim="quantityField.description">
        </div>

        <div class="list-content">
            <input type="text" placeholder="<?php echo __('- Field Placeholder -', 'cost-calculator-builder')?>" v-model.trim="quantityField.placeholder">
        </div>

        <div class="list-content">
            <input type="number" placeholder="<?php echo __('- Default Value -', 'cost-calculator-builder')?>" v-model="quantityField.default">
        </div>

        <div class="list-content">
            <input type="number" placeholder="<?php echo __('- Unit -', 'cost-calculator-builder')?>" v-model="quantityField.unit">
        </div>

        <div class="list-header ccb-modal-list" style="margin-top: 38px">
            <div class="ccb-switch">
                <input type="checkbox" v-model="quantityField.allowCurrency"/>
                <label></label>
            </div>
            <h6><?php echo __('Currency Symbol On Total Description Disabled', 'cost-calculator-builder')?></h6>
        </div>

        <div class="list-header ccb-modal-list">
            <div class="ccb-switch">
                <input type="checkbox" v-model="quantityField.allowRound"/>
                <label></label>
            </div>
            <h6><?php echo __('Round Value To Whole Disabled', 'cost-calculator-builder')?></h6>
        </div>

        <div class="list-content">
            <h6><?php echo __('Additional Classes', 'cost-calculator-builder')?></h6>
            <textarea v-model="quantityField.additionalStyles"></textarea>
        </div>
    </div>

    <div class="list-row" style="margin-top: 20px">
        <div class="list-content ccb-flex">

            <div class="list-content--header">
                <button type="button" class="green" @click="$emit( 'save', quantityField, id, index)">
                    <i class="fas fa-cog"></i>
                    <span><?php echo __('Save Settings')?></span>
                </button>
            </div>

            <div class="list-content--header">
                <button type="button" class="white" @click="$emit( 'cancel' )">
                    <i class="fas fa-cog"></i>
                    <span><?php echo __('Cancel Settings', 'cost-calculator-builder')?></span>
                </button>
            </div>

        </div>
    </div>
</div>