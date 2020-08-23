export default {
    props: {
        field: [Object, String],
        value: {
            default: '',
        },
    },
    data: () => ({
        dropDownField: {},
    }),


    created() {
        this.dropDownField = this.parseComponentData();
        this.selectValue = this.value;
    },

    watch: {
        value(val) {
            if(val && val.toString().indexOf('_') === -1)
                Array.from(this.dropDownField.options).forEach((element, index) => {
                    if ( element.optionValue ===  val) {
                        this.selectValue = val + '_' + index;
                    }
                })
        }
    },

    computed: {
        getOptions() {
            let result = [];
            if (this.dropDownField.options) {
                result = Array.from(this.dropDownField.options).map((element, index) => {
                    return {
                        label: element.optionText,
                        value: `${element.optionValue}_${index}`,
                    }
                })
            }
            return result;
        },
        selectValue: {
            get() {
                return this.value;
            },

            set(value) {
                if(!value) return;
                let [, index] = value.split('_');
                let option = null;

                this.getOptions
                    .forEach(( element, key ) => {
                    if(!option && element.value == value && index == key){
                        option = JSON.parse(JSON.stringify(element));
                    }
                });

                setTimeout(() => {
                    this.$emit(this.dropDownField._event, value, this.dropDownField.alias, option ? option.label : '');
                })
            }
        },
    }
}