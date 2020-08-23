<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length" :id="toggleField.alias">
    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span> {{ toggleField.label }} </span>
    </div>

    <div class="calc-toggle" :class="'calc_' + toggleField.alias">
        <div class="calc-switch"  v-for="( element, index ) in getOptions">
            <input type="checkbox" :id="toggleLabel + index" :value="element.value" @change="change(event, element.label)">
            <label :for="toggleLabel + index" :class="toggleField.additionalStyles"></label>
            <span @click="toggle(toggleLabel + index, element.label)" :style="$store.getters.getCustomStyles['toggle']">{{ element.label }}</span>
        </div>
    </div>
    <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ toggleField.description }}</p>
</div>
