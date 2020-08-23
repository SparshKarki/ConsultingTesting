<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length" :id="quantityField.alias">

    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span> {{ quantityField.label }} </span>
    </div>

    <div class="calc-input-wrapper ccb-field" :class="'calc_' + quantityField.alias">
        <input :placeholder="quantityField.placeholder" type="number" :class="quantityField.additionalStyles" v-model.trim="quantityValue" class="calc-input number ccb-field vertical" :style="$store.getters.getCustomStyles['quantity']">
        <span class="ccb-arrow-up ccb-arrow" @click.prevent="increment"></span>
        <span class="ccb-arrow-down ccb-arrow" @click.prevent="decrement"></span>
    </div>
    <p class="calc-description" :style="$store.getters.getCustomStyles['descriptions']">{{ quantityField.description }}</p>
</div>