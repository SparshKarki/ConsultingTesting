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
        dropField: {},
    }),

    mounted() {
        this.dropField = {...this.resetValue(), ...this.field};
        if (this.dropField._id === null) {
            this.dropField._id = this.order;
            this.dropField.alias = this.dropField.alias + this.dropField._id;
        }

        if(!this.dropField.default)  this.dropField.default = '';
    },

    methods: {
        resetValue() {
            return {
                label: '',
                _id: null,
                default: '',
                description: '',
                _event: 'change',
                type: 'Drop Down',
                allowRound: false,
                additionalCss: '',
                additionalStyles: '',
                allowCurrency: false,
                _tag: 'cost-drop-down',
                icon: 'fas fa-chevron-down',
                alias: 'dropDown_field_id_',
                options: [
                    {
                        optionText: '',
                        optionValue: '',
                    },
                ],
            };
        },

        changeDefault(event, val, index) {
            const vm = this;
            let [,indexValue] = vm.dropField.default.split('_');
            if(indexValue == index) vm.dropField.default = val + '_' + index;
        },

        removeOption(index, optionValue) {
            if (this.dropField.default === optionValue + '_' + index)
                this.dropField.default = '';
            this.dropField.options.splice(index, 1)
        },

        addOption: function () {
            this.dropField.options.push({optionText: '', optionValue: '',});
        },
    },
}