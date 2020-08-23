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
        dateField: {},
    }),

    mounted() {
        this.dateField = {...this.resetValue(), ...this.field};
        if (this.dateField._id === null) {
            this.dateField._id = this.order;
            this.dateField.alias = this.dateField.alias + this.dateField._id;
        }
    },

    methods: {
        resetValue() {
            return {
                _id: null,
                label: '',
                range: '0',
                description: '',
                placeholder: '',
                _event: 'click',
                type: 'Date Picker',
                _tag: 'date-picker',
                additionalStyles: '',
                icon: 'fas fa-calendar-alt',
                alias: 'datePicker_field_id_',
            };
        },
    }
}