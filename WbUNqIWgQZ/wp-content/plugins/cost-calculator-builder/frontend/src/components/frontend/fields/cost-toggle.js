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
        toggleField: {},
        toggleValue: [],
    }),

    created() {
        this.toggleField = this.parseComponentData();
        this.toggleLabel = 'toggle_' + this.randomID();
        this.applyCss();
    },

    computed: {

        getStyles() {
            return this.$store.getters.getCustomStyles
        },

        getOptions() {
            let result = [];
            if (this.toggleField.options) {
                result = Array.from(this.toggleField.options).map((element, index) => {
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
    },

    watch: {
        value(val) {
            if(typeof val === 'string' && val.toString().indexOf('_') === -1) {
                this.temp.forEach(element => {

                    const chValue = val + '_' + element.id;
                    const found = this.toggleValue.find(e => e.temp === chValue)

                    if(chValue === element.value && typeof found === "undefined") {
                        jQuery('#' + this.toggleField.alias).find('input').each((e, i) => {
                            i.checked = i.value === chValue
                        });
                        this.toggleValue.push({value: +val, label: element.label, temp: chValue});
                    }
                });
                this.change({}, {}, false);
            }

        }
    },

    methods: {
        change(event, label, def = true) {
            const vm = this;
            if ( def && event.target.checked ) {
                vm.toggleValue.push({value: parseFloat(event.target.value), temp: event.target.value, label});
            } else if( def ) {
                if(vm.toggleValue.length === 1)
                    vm.toggleValue = [];
                else
                    vm.toggleValue = vm.toggleValue.filter(e => e.temp !== event.target.value);
            }
            this.$emit(vm.toggleField._event, vm.toggleValue, vm.toggleField.alias);
        },

        toggle( selector, label ) {
            const element = document.querySelector('#' + selector );
            if ( element ) {
                element.checked = !element.checked;

                this.change({ target: element }, label );
            }
        },

        applyCss() {
            let style = '';
            const $ = jQuery;
            const id = 'ccb-toggle-style';
            const styles = this.getStyles;
            if(!styles.hasOwnProperty('toggle'))
                return;
            const toggle = styles['toggle'];
            style += `.calculator-settings .calc-toggle label:after { background-color: ${toggle.circleColor} !important; } `;
            style += `.calculator-settings .calc-toggle label  { background: ${toggle.bg_color} !important; } `;
            style += `.calculator-settings .calc-toggle input:checked + label   { background: ${toggle.checkedColor} !important; } `;

            if($('#' + id).length) $('#' + id).remove();
            let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

            $('head').append(innerStyle);
        }
    },
}