export default  {
    props: {
        value: {
            default: 0,
            type: [Number, String]
        },

        field: [Object, String],
    },

    data: () => ({
        quantityField: null,
    }),

    watch: {
        value(val) {
            this.quantityValue = +val;
        }
    },

    computed: {
        quantityValue: {
            get() {
                return this.value
            },

            set(val) {
                this.$emit(this.quantityField._event, +val, this.quantityField.alias);
            },
        }
    },

    created() {
        this.quantityField = this.parseComponentData();
        this.quantityValue = this.value;
    },

    methods: {
        increment() {
            this.quantityValue += 1;
        },

        decrement() {
           this.quantityValue -= 1;
        },
    }
}