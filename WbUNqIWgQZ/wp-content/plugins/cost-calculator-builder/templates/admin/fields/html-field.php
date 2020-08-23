<div class="html-wrapper">
    <div class="list-row">

        <div class="list-content">
            <h6><?php echo __('HTML5 Code', 'cost-calculator-builder')?></h6>
            <textarea v-model="htmlField.htmlContent"></textarea>
        </div>

        <div class="list-content">
            <h6><?php echo __('Additional Classes', 'cost-calculator-builder')?></h6>
            <textarea  v-model="htmlField.additionalStyles"></textarea>
        </div>
    </div>

    <div class="list-row" style="margin-top: 20px">
        <div class="list-content ccb-flex">

            <div class="list-content--header">
                <button type="button" class="green" @click="$emit( 'save', htmlField, id, index)">
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