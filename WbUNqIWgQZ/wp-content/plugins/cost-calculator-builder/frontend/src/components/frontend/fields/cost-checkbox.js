export default {
    props: {
        field: [Object, String],
        value: {
            default: '',
        },
    },
    data: () => ({
        temp: [],
        radioLabel: '',
        checkboxField: {},
        checkboxValue: [],
    }),

    created() {
        this.checkboxField = this.parseComponentData();
        this.checkboxLabel = 'option_' + this.randomID();
        this.applyCss();
    },

    watch: {
        value(val) {
            if(typeof val === 'string' && val.toString().indexOf('_') === -1) {

                this.temp.forEach((element, index) => {
                    const chValue = val + '_' + element.id;
                    const found = this.checkboxValue.find(e => e.temp === chValue)
                    if(chValue === element.value && typeof found === "undefined") {
                        jQuery('#' + this.checkboxField.alias).find('input').each((e, i) => i.checked = i.value === chValue);
                        this.checkboxValue.push({value: +val, label: element.label, temp: chValue});
                    }
                });
                this.change({}, {}, false);
            }

        }
    },

    computed: {
        getOptions() {
            let result = [];
            if (this.checkboxField.options) {
                result = Array.from(this.checkboxField.options).map((element, index) => {
                    return {
                        id: index,
                        label: element.optionText,
                        value: `${element.optionValue}_${index}`,
                    }
                })
            }
            this.temp = Object.assign([], this.temp, result);
            return result;
        },

        getStyles() {
          return this.$store.getters.getCustomStyles
        },
    },

    methods: {

        change(event, label, def = true) {
            const vm = this;

            if (def && event.target.checked) {
                vm.checkboxValue.push({value: parseFloat(event.target.value), label, temp: event.target.value});
            } else if ( def ){
                if(vm.checkboxValue.length === 1)
                    vm.checkboxValue = [];
                else
                    vm.checkboxValue = vm.checkboxValue.filter(e => e.temp !== event.target.value);
            }
            this.$emit(vm.checkboxField._event, vm.checkboxValue, vm.checkboxField.alias);
        },

        applyCss() {
            let style = '';
            const $ = jQuery;
            const styles = this.getStyles;
            const id = 'ccb-checkbox-style';

            if(!styles.hasOwnProperty('checkbox'))
                return;
            const checkbox = styles['checkbox'];

            style += `.calculator-settings .calc-checkbox-item label::before  {background-color: ${checkbox.checkedColor} !important; border: 1px solid ${checkbox.b_color} !important; } `; //1 => "b_Color"; 3 => "bg_color"
            style += `.calculator-settings .calc-checkbox-item input[type="checkbox"]:checked ~ label:before { border: 1px solid  ${checkbox.checkedColor} !important; background: ${checkbox.bg_color} !important; } `; //"checkbox_color"
            style += `.calculator-settings .calc-checkbox-item label::after { border-left: 2px solid ${checkbox.checkbox_color} !important; border-bottom: 2px solid ${checkbox.checkbox_color} !important;} `; // "checkedColor"

            if($('#' + id).length) $('#' + id).remove();
            let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

            $('head').append(innerStyle);
        }
    }
}