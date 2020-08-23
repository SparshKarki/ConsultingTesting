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
        multiRange: null,
        multiRangeValue: 0,
        leftVal: 0,
        rightVal: 0,
        min: 0,
        max: 100,
        step: 1,
    }),

    created() {
        this.multiRange = this.parseComponentData();

        if(this.multiRange.alias) {
            this.min = this.multiRange.minValue;
            this.max = (+this.multiRange.maxValue) + (+this.multiRange.minValue);
            this.step = this.multiRange.step;

            this.leftVal = this.multiRange.default_left;
            this.rightVal = this.multiRange.default_right;
            this.applyCss();
        }
    },

    mounted() {
        this.renderRange();
        this.change();
    },

    computed: {
        getStyles() {
            return this.$store.getters.getCustomStyles
        },
    },

    methods: {
        renderRange() {
            const vm = this;
            let rangeObj = new Slider({
                min: this.min, max: this.max,
                value: [this.leftVal, this.rightVal],
                step: this.step,
                type: 'Range',
                tooltip: {
                    isVisible: true,
                    showOn: 'Focus',
                    placement: 'Before'
                },
                change: args => {
                    const [left, right] = args.value;
                    vm.leftVal = left;
                    vm.rightVal = right;
                    this.change();
                }
            });
            rangeObj.appendTo( `.range_${vm.multiRange.alias}`);
        },

        change() {
            const value = this.rightVal - this.leftVal;
            this.$emit(this.multiRange._event, +value, this.multiRange.alias);
        },

        applyCss() {
            let style = '';
            const $ = jQuery;
            const id = 'ccb-multi-slider-style';
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
    }
}