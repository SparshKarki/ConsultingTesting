<div class="modal-header preview" v-if="$store.getters.getConditionData">
    <div class="modal-header__title">
        <div class="modal-title"><span style="color: #000000 !important;"><?php echo __('Edit Link', 'cost-calculator-builder')?>:</span> {{$store.getters.getConditionData.optionFrom.label || 'Element From'}} <span style="opacity: 0.7; padding: 0 5px">&rarr;</span> {{$store.getters.getConditionData.optionTo.label || 'Element From'}} </div>
    </div>
</div>
<div class="modal-body condition">
    <div class="ccb-select-label-wrap" v-if="$store.getters.getConditionModel.length">
        <label class="ccb-select-label"><?php echo __('Condition', 'cost-calculator-builder')?></label>
        <label class="ccb-select-label"><?php echo __('Value', 'cost-calculator-builder')?></label>
        <label class="ccb-select-label"><?php echo __('Action', 'cost-calculator-builder')?></label>
    </div>
    <div class="ccb-select-wrap" v-for="(model, index) in $store.getters.getConditionModel" v-if="$store.getters.getConditionModel.length">

        <select class="ccb-condition-select" v-model="model.condition">
            <option value=""><?php echo __('Select Condition', 'cost-calculator-builder')?></option>
            <option v-for="(value, key) in  $store.getters.operatorsByTag($store.getters.getConditionData.optionFrom._tag)" :value="key">{{value}}</option>
        </select>

        <select class="ccb-condition-select" v-model="model.value" v-if="$store.getters.getConditionData.type === 'select'">
            <option  value=""><?php echo __('- Select Option -', 'cost-calculator-builder')?></option>
            <option v-for="item in $store.getters.getConditionOptions" :value="item.optionValue">{{item.optionText}}</option>
        </select>

        <input v-else type="number" class="ccb-condition-select" v-model="model.value">
        <select class="ccb-condition-select" v-model="model.action" v-if="$store.getters.getConditionData.actionType === 'calc'">
            <option  value=""><?php echo __('- Select Action -', 'cost-calculator-builder')?></option>
            <option
                    :value="item"
                    v-for="item in $store.getters.getConditionActions"
            >
                {{ item }}
            </option>
        </select>

        <select class="ccb-condition-select" v-model="model.action"  v-else-if="$store.getters.getConditionData.actionType === 'pro'"   >
            <option  value=""><?php echo __('- Select Action -', 'cost-calculator-builder')?></option>
            <option v-for="item in $store.getters.getProActions" :value="item">{{ item }}</option>
        </select>

        <select class="ccb-condition-select" v-model="model.action"  v-else>
            <option  value=""><?php echo __('- Select Action -', 'cost-calculator-builder')?></option>
            <option v-for="item in $store.getters.getSimpleActions" :value="item">{{item === 'Show' ? 'Show' : 'Hide'}}</option>
        </select>

        <input v-if="model.action === 'Set value' || model.action === 'Set value and disable'" type="number" class="ccb-condition-select" v-model="model.setVal">

        <div class="remove-wrap">
            <i class="far fa-times-circle" @click.prevent="removeRow(index)"></i>
        </div>
    </div>
    <div v-if="!$store.getters.getConditionModel.length" class="modal-body">
        <p style="color: #333333; width: 100%; text-align: center; padding: 5px; opacity: .7"><?php echo __('No Conditions Yet', 'cost-calculator-builder')?></p>
    </div>
</div>
<div class="modal-footer" style="padding: 5px 0; display: block">
    <div class="list-row existing">
        <div class="list-content" style="display: flex; justify-content: space-between">

            <div class="list-btn-item">
                <button  @click.prevent="addModel"  type="button" class="green">
                    <i class="fas fa-plus"></i>
                    <span><?php echo __('Add condition', 'cost-calculator-builder')?></span>
                </button>
            </div>

            <div class="list-btn-item" style="display: flex">
                <button type="button" class="white" @click.prevent="removeLink()" style="margin-right: 10px">
                    <i class="fas fa-trash"></i>
                    <span><?php echo __('Delete Link', 'cost-calculator-builder')?></span>
                </button>

                <button type="button" class="green" @click.prevent="saveLink">
                    <i class="fas fa-save"></i>
                    <span><?php echo __('Save Link', 'cost-calculator-builder')?></span>
                </button>
            </div>
        </div>
    </div>
</div>`