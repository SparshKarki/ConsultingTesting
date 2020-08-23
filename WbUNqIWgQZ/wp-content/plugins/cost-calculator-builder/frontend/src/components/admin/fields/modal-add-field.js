import text from './text-field'
import html from './html-field'
import line from './line-field'
import range from './range-field'
import radio from './radio-field'
import total from './total-field'
import toggle from './toggle-field'
import multiRange from './multi-range'
import checkbox from './checkbox-field'
import quantity from './quantity-field'
import dropDown from './drop-down-field'
import datePicker from './date-picker-field'

import CBuilderFront from '@components/frontend/cost-calc' // main-component front
import demoImport from '../partials/demo-import'

export default {

    data: () => ({
        access: true,
        builderData: {},
        modal: {
            isOpen: false,
            hide: false,
            data: {},
        },
    }),

    components: {
        'html-field': html,
        'line-field': line,
        'total-field': total,
        'toggle-field': toggle,
        'text-area-field': text,
        'checkbox-field': checkbox,
        'quantity-field': quantity,
        'range-button-field': range,
        'drop-down-field': dropDown,
        'radio-button-field': radio,
        'multi-range-field': multiRange,
        'date-picker-field': datePicker,

        'calc-builder-front': CBuilderFront, // Front main component and Preview
        'demo-import': demoImport,
    },

    computed: {
        getType() {
            const type = this.$store.getters.getType;
            const data = this.$store.getters.getFields;
            const modalData = data.find(e => e.type === type);

            this.builderData = this.$store.getters.getFieldData(this.$store.getters.getEditID);

            if( type && typeof modalData !== "undefined") {
                this.modal.data = modalData;
            }

            return type;
        },

        getIndex() {
            return this.$store.getters.getIndex;
        },

        getEditID() {
            return this.$store.getters.getEditID;
        },

        getOrderId() {
           this.$store.dispatch('setFieldId');
           return  this.$store.getters.getFieldId;
        },

        getModalType() {
            const type = this.$store.getters.getModalType;
            if(type !== '') this.modal.isOpen = true;
            return type;
        }
    },


    methods: {
        addToBuilder(data, id, index) {
            this.closeModal();
            this.$store.commit('addToBuilder', {data, id, index});
            this.$store.commit('checkAvailable');
            // this.orderId = null;
        },

        closeModal() {
            const vm = this;
            vm.modal.isOpen = false;
            vm.modal.hide = true;
            this.$store.commit('setType', '');
            this.$store.commit('setModalType', '');

            this.$store.commit('setIndex', null);
            this.$store.commit('setEditID', null);
            this.$store.commit('setFieldId', null);
            this.$store.commit('checkAvailable');

            setTimeout(() => {
                vm.access = true;
                vm.modal.hide = false;
            }, 200)
        },

        async createNew(url, type) {
            this.closeModal();
            this.$store.commit('updateMainLoader', true);

            if (typeof type !== 'undefined')
                await this.$store.dispatch('saveSettings', false, false);

            await this.$store.dispatch('createId');
            url += '&action=edit&id=' + this.$store.getters.getId;
            await window.location.replace(url);
        },
    }
}