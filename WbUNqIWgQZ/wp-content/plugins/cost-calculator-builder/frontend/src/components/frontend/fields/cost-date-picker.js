export default  {
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

        console.log(this.dateField)
    },

    methods: {
        resetValue() {
            return {
                label: '',
                l_id: null,
                range: '0',
                description: '',
                placeholder: '',
                _event: 'click',
                type: 'Date Picker',
                _tag: 'date-picker',
                additionalStyles: '',
                additionalCss: '',
                icon: 'fa-calendar-week',
                alias: 'datePicker_field_id_',
            };
        },
    }
}