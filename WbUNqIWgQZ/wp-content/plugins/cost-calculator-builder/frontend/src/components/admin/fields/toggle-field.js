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
        toggleField: {},
    }),

    mounted() {
        this.toggleField = { ...this.resetValue(), ...this.field };
        if (this.toggleField._id === null) {
            this.toggleField._id = this.order;
            this.toggleField.alias = this.toggleField.alias + this.toggleField._id;
        }
    },

    methods: {
        resetValue() {
            return {
                _id: null,
                label: '',
                description: '',
                _event: 'change',
                type: 'Toggle',
                allowRound: false,
                additionalCss: '',
                additionalStyles: '',
                allowCurrency: false,
                _tag: 'cost-toggle',
                icon: 'fas fa-toggle-on',
                alias: 'toggle_field_id_',
                options: [
                    {
                        optionText: '',
                        optionValue: '',
                    }
                ],
            };
        },

        removeOption(index, optionValue) {
            if (this.toggleField.default === optionValue + '_' + index)
                this.toggleField.default = '';
            this.toggleField.options.splice(index, 1)
        },

        addOption: function () {
            this.toggleField.options.push({optionText: '', optionValue: '',});
        },
    },
}