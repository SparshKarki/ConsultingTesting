<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length"  :id="rangeField.alias" >
    <div class="calc-range" :class="'calc_' + rangeField.alias">
        <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']" style="display: flex; justify-content: space-between">
            <span> {{ rangeField.label }} </span>
            <span> {{ rangeValue }} {{ rangeField.sign ? rangeField.sign : '' }}</span>
        </div>
        <div :class="'range_' + rangeField.alias"></div>
        <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ rangeField.description }}</p>
    </div>
</div>