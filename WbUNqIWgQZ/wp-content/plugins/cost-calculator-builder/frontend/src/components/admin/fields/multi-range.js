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
        multiRangeField: {},
    }),

    mounted() {
        this.multiRangeField = { ...this.resetValue(), ...this.field };
        if (this.multiRangeField._id === null) {
            this.multiRangeField._id = this.order;
            this.multiRangeField.alias = this.multiRangeField.alias + this.multiRangeField._id;
        }
    },

    methods: {
        resetValue: function () {
            return {
                step: 1,
                unit: 1,
                label: '',
                _id:  null,
                minValue: 0,
                maxValue: 100,
                description: '',
                _event: 'change',
                default_left: 0,
                default_right: 50,
                additionalCss: '',
                allowRound: false,
                type: 'Multi Range',
                additionalStyles: '',
                allowCurrency: false,
                _tag: 'cost-multi-range',
                icon: 'fas fa-exchange-alt',
                alias: 'multi_range_field_id_',
            }
        },
    },
}