import settings from './settings'
import condition from './condition'
import calculator from './calculator'
import modalAddField from './fields/modal-add-field'
import custom from "./custom";

const CBuilder = {
    data: () => ({
        id: null,
        disabled: true,
        editable: false,
        hasAccess: false,
        active_tab: 'calculator',
        type: 'existing',
        copy: {
            text: 'Copy',
            type: 'hidden',
        },
    }),

    components: {
        'settings-page': settings,
        'conditions-page': condition,
        'calculator-page': calculator,
        'modal-add-field': modalAddField,

        'ccb-customize': custom,
    },

    computed: {
        view() {
            return this.active_tab;
        },

        loader: {
            get() {
                return this.$store.getters.getMainLoader;
            },

            set(value) {
                this.$store.commit('updateMainLoader', value);
            }
        },
    },

    async mounted() {

        if(this.$checkUri('action') === '') {
            await this.$store.dispatch('fetchExisting');
            this.editable = true;
        } else if ( this.$checkUri('action') === 'edit' && this.$checkUri('id') !== '' && this.$checkUri('id') ) {
            await this.$store.dispatch('edit_calc', {id: this.$checkUri('id')});
            this.disabled = false;
        }

        this.fields = this.$store.getters.getFields;
        this.toggleLoader();
    },

    methods: {
        copyText(id) {
            const copyText = document.querySelector(`.calc-short-code[data-id='${id}']`);
            if( copyText ) {
                copyText.setAttribute('type', 'text');
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                copyText.setAttribute('type', 'hidden');
                this.copy.text = 'Copied';
            }
        },

        openExisting() {
            this.$store.commit('setModalType', 'existing')
        },

        openPreview() {
            this.$store.commit('setModalType', 'preview')
        },

        editCalc(url) {
            if( typeof url !== "undefined")
                window.location.replace(url);
        },

        toggleLoader() {
            setTimeout(() => {
                this.loader = false;
            }, 1000);
        },

        saveCondition(conditionData) {
            this.$store.commit('setConditions', conditionData);
        },

        addModel() {
            this.$store.commit('addConditionData');
        },

        close() {
            if(typeof this.$refs['calc-modal'] !== "undefined") {
                this.$refs['calc-modal'].closeModal();
            }
        },

        saveLink() {
            this.$store.dispatch('updateLink');
            this.close();
        },

        removeRow(index) {
            let models = this.$store.getters.getConditionModel.filter((e, i) => i !== index);
            this.$store.commit('updateConditionModel', models);
        },

        removeLink(id) {
            this.$store.dispatch('removeLink', id);

            if(typeof this.$refs['conditions'] !== "undefined") {
                this.$refs['conditions'].refreshAvailable();
                this.$store.commit('updateConditionData', {});
                this.$store.commit('updateConditionModel', []);
            }

            this.close();
        },

        async duplicateCalc(id) {
            await this.$store.dispatch('duplicateCalc', id);
        },

        async deleteCalc(id) {
            await this.$store.dispatch('deleteCalc', id);
        },

        async saveSettings() {
            this.loader = true;
            const isEdit = (this.$checkUri('action') === 'edit');
            this.$store.dispatch('saveSettings', isEdit);

            setTimeout(() => {
                this.loader = false;
            }, 1000);
        },

        async cancel() {
            if(this.$checkUri('action') !== 'edit'){
                await this.$store.dispatch('deleteCalc', this.$store.getters.getId);
            }
            location.reload();
        },

        async createId(createId = false) {

            if(this.$checkUri('action') === 'edit' || this.$store.getters.getId) {
                this.$store.commit('setModalType', 'create-new');
                return;
            }

            this.loader = true;
            await this.$store.dispatch('createId');

            if(this.$store.getters.getId) {
                this.editable = false;
                this.disabled = false;
                this.id = this.$store.getters.getId;
            }

            this.toggleLoader();
        },

        async saveChanges() {
            await this.$store.dispatch('updateStyles')
        },
    }
};

export default CBuilder;