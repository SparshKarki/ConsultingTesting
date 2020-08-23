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
        lineField: {},
    }),

    mounted() {
        this.lineField = { ...this.resetValue(), ...this.field };

        if (this.lineField._id === null) {
            this.lineField._id = this.order;
            this.lineField.label = this.lineField.label || `Line (${this.lineField._id})`;
        }
    },

    methods: {
        resetValue() {
            return {
                label: '',
                _event: '',
                _id: null,
                len: '25%',
                size: '1px',
                type: 'Line',
                style: 'solid',
                description: '',
                placeholder: '',
                _tag: 'cost-line',
                additionalCss: '',
                additionalStyles: '',
                icon: 'fas fa-ruler-horizontal',
            };
        },
    },
}