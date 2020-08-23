<div class="radio-wrapper">
    <div class="list-row">
        <div class="list-content">
            <select v-model="lineField.size">
                <option value="" selected><?php echo __('- Select Size -', 'cost-calculator-builder')?></option>
                <option value="1px"><?php echo __('small', 'cost-calculator-builder')?></option>
                <option value="2px"><?php echo __('medium', 'cost-calculator-builder')?></option>
                <option value="4px"><?php echo __('large', 'cost-calculator-builder')?></option>
            </select>
        </div>

        <div class="list-content">
            <select v-model="lineField.style">
                <option value="" selected><?php echo __('- Select Style -', 'cost-calculator-builder')?></option>
                <option value="solid"><?php echo __('solid', 'cost-calculator-builder')?></option>
                <option value="dashed"><?php echo __('dashed', 'cost-calculator-builder')?></option>
            </select>
        </div>

        <div class="list-content">
            <select v-model="lineField.len">
                <option value="" selected><?php echo __('- Select length -', 'cost-calculator-builder')?></option>
                <option value="25%"><?php echo __('short', 'cost-calculator-builder')?></option>
                <option value="50%"><?php echo __('medium', 'cost-calculator-builder')?></option>
                <option value="100%"><?php echo __('long', 'cost-calculator-builder')?></option>
            </select>
        </div>

        <div class="list-content">
            <h6><?php echo __('Additional Classes', 'cost-calculator-builder')?></h6>
            <textarea v-model="lineField.additionalStyles"></textarea>
        </div>
    </div>

    <div class="list-row" style="margin-top: 20px">
        <div class="list-content ccb-flex">

            <div class="list-content--header">
                <button type="button" class="green" @click="$emit( 'save', lineField, id, index)">
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
