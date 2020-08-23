import { enableRipple } from '@syncfusion/ej2-base';
enableRipple(true);
import { Slider } from '@syncfusion/ej2-inputs';

export default {
    props: {
        value: {
            default: 0,
            type: [Number, String]
        },

        field: [Object, String],
    },
    data: () => ({
        rangeValue: 0,
        rangeField: null,
        min: 0,
        max: 100,
        step: 1,
    }),

    watch: {
        value(val) {
            this.rangeValue = +val;
            this.change();
        },
    },

    computed: {
        getStyles() {
            return this.$store.getters.getCustomStyles
        },
    },

    created() {
        this.rangeField = this.parseComponentData();
        if(this.rangeField.alias) {
            this.rangeValue = this.rangeField.default ? this.rangeField.default : 0;
            this.min = this.rangeField.minValue;
            this.max = (+this.rangeField.maxValue) + (+this.rangeField.minValue);
            this.step = this.rangeField.step;
            this.applyCss();
        }
    },

    mounted() {
        this.renderRange();
        this.change();
    },

    methods: {
        renderRange() {
            const vm = this;
            let rangeObj = new Slider({
                min: this.min,
                max: this.max,
                value: this.rangeValue,
                step: this.step,
                type: 'MinRange',
                tooltip: {
                    isVisible: true,
                    placement: 'Before'
                },
                change: args => {
                    this.rangeValue = args.value
                    this.change();
                },
            });
            rangeObj.appendTo( `.range_${vm.rangeField.alias}`);

        },

        change() {
            this.$emit(this.rangeField._event, +this.rangeValue, this.rangeField.alias);
        },

        applyCss() {
            let style = '';
            const $ = jQuery;
            const id = 'ccb-range-slider-style';
            const styles = this.getStyles;
            if(!styles.hasOwnProperty('range-button'))
                return;
            const range = styles['range-button'];


            style +=   `.e-control-wrapper.e-slider-container.e-material-slider .e-slider .e-handle.e-handle-first,
                        .e-slider-tooltip.e-tooltip-wrap.e-popup,
                        .e-control-wrapper.e-slider-container .e-slider .e-handle {
                          background: ${range.circleColor} !important;
                        }`;

            style +=   `.e-slider-tooltip.e-tooltip-wrap.e-popup:after {
                              border-color: ${range.circleColor} transparent transparent transparent !important;
                        }`;

            style +=   `.e-control-wrapper.e-slider-container .e-slider .e-range {
                             background: ${range.lineColor} !important;
                        }`;

            style +=   `.e-control-wrapper.e-slider-container.e-horizontal .e-slider-track {
                             background: ${range.fColor} !important;
                        }`;

            if($('#' + id).length) $('#' + id).remove();
            let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';
            $('head').append(innerStyle);
        }
    },
}