import color from "./color-field";

export default {
    props: [ 'element', 'field', 'index'],
    components: {
        'color-field': color,
    },
    data(){
        return {
            id: this.randomID(),
            store: {},
        }
    },

    methods: {
        change: function () {
            let vm = this;
            vm.store[vm.field.name] = vm.field.value;
            vm.field.default = vm.field.value;
            if(vm.element.name === 'range-button')
                vm.renderRange();
            else if(vm.element.name === 'radio-button')
                vm.renderRadio();
            else if(vm.element.name === 'checkbox')
                vm.renderCheckboxes();
            else if(vm.element.name === 'toggle')
                vm.renderToggle();

            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        },


        renderCheckboxes() {
            let vm = this;
            this.$nextTick( () => {
                let $ = jQuery;
                let style = '';
                let id = 'ccb-checkbox-style';
                style += `.calculator-settings .calc-checkbox-item label::before  {background-color: ${vm.element.fields[2].value} !important; border: 1px solid ${vm.element.fields[1].value} !important; } `; //1 => "b_Color"; 3 => "bg_color"
                style += `.calculator-settings .calc-checkbox-item input[type="checkbox"]:checked ~ label:before { border: 1px solid  ${vm.element.fields[2].value} !important; background: ${vm.element.fields[3].value} !important; } `; //"checkbox_color"
                style += `.calculator-settings .calc-checkbox-item label::after { border-left: 2px solid ${vm.element.fields[4].value} !important; border-bottom: 2px solid ${vm.element.fields[4].value} !important;} `; // "checkedColor"
                if($('#' + id).length) $('#' + id).remove();
                let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

                $('head').append(innerStyle);
            })
        },

        renderRadio() {
            let vm = this;
            this.$nextTick(function () {
                let $ = jQuery;
                let style = '';
                let id = 'ccb-radio-style';

                style += `.calculator-settings .calc-radio-item input[type="radio"] { border: 1px solid ${vm.element.fields[1].value} !important; } `; //""radioBorder""
                style += `.calculator-settings .calc-radio-item input[type="radio"] { background-color: ${vm.element.fields[2].value} !important; } `; //"radioBackground"
                style += `.calculator-settings .calc-radio-item input[type='radio']:checked:before { background: ${vm.element.fields[2].value} !important; } `; //"radioBackground"
                style += `.calculator-settings .calc-radio-item input[type='radio']:checked { background: ${vm.element.fields[3].value} !important; } `; // "radioChecked"
                style += `.calculator-settings .calc-radio-item input[type='radio']:checked { border: 0 !important;  } `;

                if($('#' + id).length) $('#' + id).remove();
                let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

                $('head').append(innerStyle);
            })
        },

        renderRange: function () {
            let vm = this;

            this.$nextTick(function () {
                let $ = jQuery;
                let style = '';
                let id = 'ccb-range-slider-style';

                style +=   `.e-control-wrapper.e-slider-container.e-material-slider .e-slider .e-handle.e-handle-first,
                        .e-slider-tooltip.e-tooltip-wrap.e-popup,
                        .e-control-wrapper.e-slider-container .e-slider .e-handle {
                          background: ${ vm.element.fields[2].value } !important;
                        }`;

                style +=   `.e-slider-tooltip.e-tooltip-wrap.e-popup:after {
                              border-color: ${ vm.element.fields[2].value } transparent transparent transparent !important;
                        }`;

                style +=   `.e-control-wrapper.e-slider-container .e-slider .e-range {
                             background: ${ vm.element.fields[1].value } !important;
                        }`;

                style +=   `.e-control-wrapper.e-slider-container.e-horizontal .e-slider-track {
                             background: ${ vm.element.fields[0].value } !important;
                        }`;

                if($('#' + id).length) $('#' + id).remove();
                let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

                $('head').append(innerStyle);
            })
        },

        renderToggle: function () {
            let vm = this;

            this.$nextTick(function () {
                let $ = jQuery;
                let style = '';
                let id = 'ccb-toggle-style';

                style += `.calculator-settings .calc-toggle label:after { background-color: ${vm.element.fields[1].value} !important; } `;
                style += `.calculator-settings .calc-toggle label  { background: ${vm.element.fields[2].value} !important; } `;
                style += `.calculator-settings .calc-toggle input:checked + label   { background: ${vm.element.fields[3].value} !important; } `;

                if($('#' + id).length) $('#' + id).remove();
                let innerStyle = '<style type="text/css" id="' + id + '">'+ style +' </style>';

                $('head').append(innerStyle);
            })
        },

    },

    template: `
                <ul class="list-group" id="generator-option">
                    <li class="list-group-item">
                        <div class="option_name">
                            <div class="ccb-color-picker m-b-15">
                                <color-field @changed="change" :field="field" :id="randomID()"></color-field>
                            </div>
                        </div>
                    </li>
                </ul>
    `,
}