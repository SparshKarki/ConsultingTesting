<div class="radio-wrapper">
    <div class="list-row">

        <div class="list-content">
            <input type="text" placeholder="<?php echo __('- Field Label -', 'cost-calculator-builder')?>" v-model.trim="radioField.label">
        </div>

        <div class="list-content">
            <input type="text" placeholder="<?php echo __('- Field Description -', 'cost-calculator-builder')?>" v-model.trim="radioField.description">
        </div>

        <div class="list-content">
            <select v-model="radioField.default">
                <option value="" selected><?php echo __('- Select A Default Value -', 'cost-calculator-builder')?></option>
                <option v-for="(value, index) in options" :key="index"  :value="value.optionValue + '_' + index">{{value.optionText}}</option>
            </select>
        </div>

        <div class="list-header ccb-modal-list" style="margin-top: 38px">
            <div class="ccb-switch">
                <input type="checkbox"  v-model="radioField.allowCurrency"/>
                <label></label>
            </div>
            <h6><?php echo __('Currency Symbol On Total Description Disabled', 'cost-calculator-builder')?></h6>
        </div>

        <div class="list-header ccb-modal-list">
            <div class="ccb-switch">
                <input type="checkbox"  v-model="radioField.allowRound"/>
                <label></label>
            </div>
            <h6><?php echo __('Round Value To Whole Disabled', 'cost-calculator-builder')?></h6>
        </div>

        <div class="list-content">
            <div class="list-content--header">
                <button type="button" class="green" @click="addOption">
                    <i class="fas fa-cog"></i>
                    <span><?php echo __('Add Radio Options', 'cost-calculator-builder')?></span>
                </button>
            </div>

            <div class="add-options"  v-for="(option, index) in radioField.options">
                <div class="options">
                    <input type="text" placeholder="<?php echo __('- Option Label -', 'cost-calculator-builder')?>"
                           v-model="option.optionText" @input="changeDefault(event, option.optionValue, index)">
                </div>
                <div class="options">
                    <input type="number" placeholder="<?php echo __('- Option Value -', 'cost-calculator-builder')?>"
                           v-model="option.optionValue" @input="changeDefault(event, option.optionValue, index)">
                </div>
                <div class="delete-option" @click.prevent="removeOption(index, option.optionValue)">
                    <span>
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="list-content">
            <h6><?php echo __('Additional Classes', 'cost-calculator-builder')?></h6>
            <textarea v-model="radioField.additionalStyles"></textarea>
        </div>
    </div>

    <div class="list-row" style="margin-top: 20px">
        <div class="list-content ccb-flex">

            <div class="list-content--header">
                <button type="button" class="green" @click="$emit( 'save', radioField, id, index)">
                    <i class="fas fa-cog"></i>
                    <span><?php echo __('Save Settings', 'cost-calculator-builder')?></span>
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
