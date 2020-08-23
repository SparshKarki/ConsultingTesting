<div class="calc-item" :id="'id_for_label_' + lineField._id" v-if="Object.keys($store.getters.getCustomStyles).length">
    <div class="ccb-line" :class="lineField.additionalStyles" :style="getLine"></div>
</div>