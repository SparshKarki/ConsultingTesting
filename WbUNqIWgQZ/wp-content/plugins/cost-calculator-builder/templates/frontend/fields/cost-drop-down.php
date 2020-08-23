<div class="calc-item ccb-field" v-if="Object.keys($store.getters.getCustomStyles).length" :id="dropDownField.alias">
    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span>{{ dropDownField.label }}</span>
    </div>
    <div :class="'calc_' + dropDownField.alias">
        <select placeholder="test" class="calc-drop-down ccb-field vertical" v-model="selectValue" :class="dropDownField.additionalStyles" :style="$store.getters.getCustomStyles['drop-down']" >
            <option value="0" selected><?php echo __('- Select value -', 'cost-calculator-builder')?></option>
            <option v-for="element in getOptions" :key="element.value" :value="element.value">{{element.label}}</option>
        </select>
    </div>
    <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ dropDownField.description }}</p>
</div>