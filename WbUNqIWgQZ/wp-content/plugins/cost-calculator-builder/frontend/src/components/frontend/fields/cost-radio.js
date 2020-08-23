export default {
    props: {
        field: [Object, String],
        value: {
            default: '',
        },
    },
    data: () => ({
        radioField: {},
        radioLabel: '',
    }),

    created() {
        this.radioField = this.parseComponentData();
        this.radioLabel = this.randomID();
        this.radioValue = this.value;
        this.applyCss();
    },

    watch: {
        value(val) {
            if(val && val.toString().indexOf('_') === -1)
                Array.from(this.radioField.options).forEach((element, index) => {
                    if( element.optionValue ===  val) {
                        this.radioValue = val + '_' + index;
                    }
                })
        }
    },

    computed: {
        getStyles() {
            return this.$store.getters.getCustomStyles
        },

        radioValue: {
            get() {
                return this.value;
            },

            set(value) {
                if(!value) return;

                let [, index] = value.split('_');
                let option = null;

                this.getOptions
                    .forEach(( element, key ) => {
                        if(!option && element.value === value && index == key){
                            option = JSON.parse(JSON.stringify(element));
                        }
                    });

                const val = option ? value : ''
                const label = option ? option.label : ''
                this.$emit(this.radioField._event, val, this.radioField.alias, label);
            }
        },

        getOptions() {
            let result = [];
            if (this.radioField.options) {
                result = Array.from(this.radioField.options).map((element, index) => {
                    return {
                        label: element.optionText,
                        value: `${element.optionValue}_${index}`,
                    }
                })
            }

            return result;
        },
    },

    methods: {
        applyCss() {
            let style = '';
            const $ = jQuery;
            const id = 'ccb-radio-style';
            const styles = this.getStyles;
            if(!styles.hasOwnProperty('radio-button'))
                return;
            const radio = styles['radio-button'];

            style += `.calculator-settings .calc-radio-item input[type="radio"] { border: 1px solid ${radio.radioBorder} !important; } `; //""radioBorder""
            style += `.calculator-settings .calc-radio-item input[type="radio"] { background-color: ${radio.radioBackground} !important; } `; //"radioBackground"
            style += `.calculator-settings .calc-radio-item input[type='radio']:checked:before { background: ${radio.radioBackground} !important; } `; //"radioBackground"
            style += `.calculator-settings .calc-radio-item input[type='radio']:checked { background: ${radio.radioChecked} !important; } `; // "radioChecked"
            style += `.calculator-settings .calc-radio-item input[type='radio']:checked { border: 0 !important;  } `;

            if($('#' + id).length) $('#' + id).remove();
            let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

            $('head').append(innerStyle);
        }
    },
}