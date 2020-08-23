export default {
    props: {
        field: {
            type: Object,
            default: {},
        },

        id: {
            default: null,
        },

        order: {
            default: 0,
        },

        index: {
            default: null,
        },
    },

    data: () => ({
        radioField: {},
    }),

    mounted() {
        this.radioField = { ...this.resetValue(), ...this.field };
        if (this.radioField._id === null) {
            this.radioField._id = this.order;
            this.radioField.alias = this.radioField.alias + this.radioField._id;
        }

        if(!this.radioField.default)  this.radioField.default = '';
    },

    computed: {
        options() {
            let options = [];
            if(this.radioField && this.radioField.options)
              options = Array.from(this.radioField.options).filter(e => e.optionText);

            if(!this.radioField.default)  this.radioField.default = '';

            return options;
        }
    },

    methods: {
        resetValue() {
            return {
                label: '',
                _id: null,
                default: '',
                onValue: null,
                description: '',
                _event: 'change',
                allowRound: false,
                additionalCss: '',
                _tag: 'cost-radio',
                additionalStyles: '',
                allowCurrency: false,
                type: 'Radio Button',
                icon: 'fas fa-dot-circle',
                alias: 'radio_field_id_',
                options: [
                    {
                        optionText: '',
                        optionValue: '',
                    }
                ],
            };
        },

        changeDefault(event, val, index) {
            const vm = this;
            let [,indexValue] = vm.radioField.default.split('_');
            if(indexValue == index) vm.radioField.default = val + '_' + index;
        },

        removeOption(index, optionValue) {
            if (this.radioField.default === optionValue + '_' + index)
                this.radioField.default = '';
            this.radioField.options.splice(index, 1)
        },

        addOption: function () {
            this.radioField.options.push({optionText: '', optionValue: '',});
        },
    },
}