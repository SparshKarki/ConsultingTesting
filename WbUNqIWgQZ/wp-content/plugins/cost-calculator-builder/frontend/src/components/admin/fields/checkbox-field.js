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
        checkboxField: {},
    }),

    mounted() {
        this.checkboxField = {...this.resetValue(), ...this.field};
        if (this.checkboxField._id === null) {
            this.checkboxField._id = this.order;
            this.checkboxField.alias = this.checkboxField.alias + this.checkboxField._id;
        }
    },

    methods: {
        resetValue() {
            return {
                _id: null,
                label: '',
                description: '',
                _event: 'change',
                type: 'Checkbox',
                allowRound: false,
                additionalCss: '',
                additionalStyles: '',
                allowCurrency: false,
                _tag: 'cost-checkbox',
                icon: 'fas fa-check-square',
                alias: 'checkbox_field_id_',
                options: [
                    {
                        optionText: '',
                        optionValue: '',
                    }
                ],
            };
        },

        removeOption(index, optionValue) {
            if (this.checkboxField.default === optionValue + '_' + index)
                this.checkboxField.default = '';
            this.checkboxField.options.splice(index, 1)
        },

        addOption: function () {
            this.checkboxField.options.push({optionText: '', optionValue: '',});
        },
    },
}