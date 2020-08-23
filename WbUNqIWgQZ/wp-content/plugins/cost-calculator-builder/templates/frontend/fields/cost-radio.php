<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length" :id="radioField.alias">
    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span> {{ radioField.label }} </span>
    </div>

    <div class="calc-radio" :class="'calc_' + radioField.alias" :class="'calc_' + radioField.alias">
        <div class="calc-radio-item" v-for="(element, index) in getOptions">
            <input :id="radioLabel + index" type="radio" :name="radioLabel" v-model="radioValue" :value="element.value" :class="radioField.additionalStyles">
            <label :for="radioLabel + index" :style="$store.getters.getCustomStyles['radio-button']">{{ element.label }}</label>
        </div>
    </div>
    <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ radioField.description }}</p>
</div>