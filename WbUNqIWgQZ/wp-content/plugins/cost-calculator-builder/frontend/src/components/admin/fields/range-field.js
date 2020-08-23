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
        rangeField: {},
    }),

    mounted() {
        this.rangeField = { ...this.resetValue(), ...this.field };
        if (this.rangeField._id === null) {
            this.rangeField._id = this.order;
            this.rangeField.alias = this.rangeField.alias + this.rangeField._id;
        }
    },

    methods: {
        resetValue: function () {
            return {
                step: 1,
                unit: 1,
                sign: '',
                label: '',
                default: '',
                _id:  null,
                minValue: 0,
                maxValue: 100,
                description: '',
                _event: 'change',
                additionalCss: '',
                allowRound: false,
                _tag: 'cost-range',
                additionalStyles: '',
                allowCurrency: false,
                type: 'Range Button',
                icon: 'fas fa-exchange-alt',
                alias: 'range_field_id_',
            }
        },
    },
}