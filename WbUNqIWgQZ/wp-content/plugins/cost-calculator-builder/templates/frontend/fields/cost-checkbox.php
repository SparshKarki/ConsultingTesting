<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length" :id="checkboxField.alias">
    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span> {{ checkboxField.label }} </span>
    </div>

    <div class="calc-checkbox" :class="'calc_' + checkboxField.alias">
        <div class="calc-checkbox-item" v-for="( element, index ) in getOptions">
            <input type="checkbox" :id="checkboxLabel + index" :value="element.value" @change="change(event, element.label)" :class="checkboxField.additionalStyles">
            <label :for="checkboxLabel + index">
                <span :style="$store.getters.getCustomStyles['checkbox']">{{ element.label }}</span>
            </label>
        </div>
        <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ checkboxField.description }}</p>
    </div>
</div>