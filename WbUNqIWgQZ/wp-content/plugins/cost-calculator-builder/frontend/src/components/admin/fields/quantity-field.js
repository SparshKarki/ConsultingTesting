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
        quantityField: {},
    }),

    mounted() {
        this.quantityField = { ...this.resetValue(), ...this.field };
        if (this.quantityField._id === null) {
            this.quantityField._id = this.order;
            this.quantityField.alias = this.quantityField.alias + this.quantityField._id;
        }
    },

    methods: {
        resetValue() {
            return {
                unit: 1,
                label: '',
                _id:  null,
                default: '',
                description: '',
                placeholder: '',
                _event: 'keyup',
                type: 'Quantity',
                allowRound: false,
                additionalCss: '',
                additionalStyles: '',
                allowCurrency: false,
                _tag: 'cost-quantity',
                icon: 'fas fa-hand-peace',
                alias: 'quantity_field_id_',
            };
        },
    },
}