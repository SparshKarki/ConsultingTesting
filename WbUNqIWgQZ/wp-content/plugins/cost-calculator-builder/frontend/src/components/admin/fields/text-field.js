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
        textField: {},
    }),

    mounted() {
        this.textField = { ...this.resetValue(), ...this.field };
        if (this.textField._id === null) {
            this.textField._id = this.order;
            this.textField.label = this.textField.label || `Text Area (${this.textField._id})`;
        }
    },

    methods: {
        resetValue() {
            return {
                label: '',
                _event: '',
                _id: null,
                description: '',
                placeholder: '',
                _tag: 'cost-text',
                type: 'Text Area',
                additionalCss: '',
                additionalStyles: '',
                icon: 'fas fa-font',
            };
        },
    },
}