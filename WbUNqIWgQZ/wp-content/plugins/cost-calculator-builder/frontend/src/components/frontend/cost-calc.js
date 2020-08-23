import html from './fields/cost-html'
import line from './fields/cost-line'
import text from './fields/cost-text'
import radio from './fields/cost-radio'
import range from './fields/cost-range'
import toggle from './fields/cost-toggle'
import checkbox from './fields/cost-checkbox'
import quantity from './fields/cost-quantity'
import dropDown from './fields/cost-drop-down'
import multiRange from './fields/cost-multi-range'
import costProFeatures from './partials/pro-features'

String.prototype.replaceAll = function (search, replace) {
    return this.split(search).join(replace);
};

export default {

    props: {
        id: null,
        data: [],
        custom: 0,
    },

    data() {
        return {
            fields: {},
            formula: '',
            settings: {},
            calcStore: {},
            conditions: {},
            formulaConst: [],

            $calc: null,
            tempVal: {},
            valuesStore: {},
        }
    },

    components: {
        'cost-html': html,
        'cost-line': line,
        'cost-text': text,
        'cost-radio': radio,
        'cost-range': range,
        'cost-toggle': toggle,
        'cost-quantity': quantity,
        'cost-checkbox': checkbox,
        'cost-drop-down': dropDown,
        'cost-multi-range': multiRange,
        'cost-pro-features': costProFeatures,
    },

    computed: {
      getSettings() {
          return this.$store.getters.getSettings
      },

      getHideCalc: {
          get() {
              return this.$store.getters.getHideCalc;
          },

          set(val) {
              this.$store.commit('updateHideCalc', val);
          }
      },

      loader: {
         get() {
             return this.$store.getters.getMainLoader;
         },

         set(val) {
            this.$store.commit('updateMainLoader', val);
         }
      },

      currencySettings() {
          return this.getSettings.currency;
      }
    },

    mounted() {

        const custom = !!(parseInt(this.custom));
        if(this.$refs.calc && !custom)
            this.calc_data = window['calc_data_' + this.$refs.calc.dataset.calcId];
        else if (this.custom)
            this.calc_data = this.data

        if( typeof this.calc_data !== "undefined" && this.calc_data && this.calc_data.hasOwnProperty('fields' ) ) {
            if( typeof this.calc_data !== "undefined" && this.calc_data.formula )
                this.$store.commit('updateCustomStyles', this.calc_data.styles);

            if(typeof this.calc_data !== "undefined" && this.calc_data.conditions)
                this.conditions = this.calc_data.conditions;

            if( typeof this.calc_data !== "undefined" && this.calc_data.formula )
                this.formulaConst = this.calc_data.formula;

            if( typeof this.calc_data !== "undefined" && this.calc_data.settings ) {
                this.settings = this.calc_data.settings;
                this.$store.commit('updateSettings', this.settings);
            }


            if( Array.isArray( this.calc_data.fields ) ) {
                this.calc_data.fields
                    .filter( field => field.alias )
                    .forEach( field => {
                        const data = {
                            id: field._id,
                            unit: field.unit,
                            label: field.label,
                            alias: field.alias,
                            round: field.allowRound,
                            currency: field.allowCurrency,
                            value: field.default ? field.default : 0,
                        };

                        if( field.default ) {
                            data.default = field.default;
                        }

                        if( field.type === 'Total' )
                            data.value = field.costCalcFormula;

                        this.fields[field.alias] = data;
                    });
            }
            this.apply();
        }

        if(this.$refs.calc)
            this.$store.dispatch('updateCurrentAction', this.$refs.calc)
    },

    methods: {
        apply(applyCondition = true) {

            this.render();
            this.renderTotalField();
            this.readyAvailable();
            this.clearFormula();

            this.calculate();

            if(applyCondition)
                this.renderCondition();

            this.$store.commit('updateFormula', this.formula);
            this.$store.commit('updateSubtotal', Object.values(this.calcStore));
            this.$store.dispatch('updateOpenAction', false);

            setTimeout(() => {
                this.loader = false;
            }, 1000)
        },

        change(value, alias, label) {
            value = value ? value : 0
            if(typeof this.fields[alias] !== "undefined") {
                this.fields[alias].value = value;
                if(typeof label !== "undefined")
                    this.fields[alias].extraLabel = label;
            }

            this.apply();
        },

        render() {
            const vm = this;
            const fields = Object.values( vm.fields );
            if ( fields.length ) {
                 fields
                   .forEach( element => {
                       if( element.alias.indexOf('total') === -1 ) {
                           let value = element.time ? element.time
                               : element.value ? element.value : 0;
                           switch ( typeof value ) {
                               case 'string': {
                                   if(value.indexOf('_') !== -1) {
                                      let [fieldValue,] = value.split('_');
                                       fieldValue = isNaN(+fieldValue) ? 0 : +fieldValue;
                                       fieldValue = element.round ? Math.round(+fieldValue) : +fieldValue;
                                       fieldValue = element.unit ? fieldValue * element.unit : +fieldValue;
                                       const extra = element.extraLabel ? `(${element.extraLabel})` : undefined;
                                       vm.$set(vm.calcStore, element.alias, {
                                           extra,
                                           value: fieldValue,
                                           alias: element.alias,
                                           label: element.label,
                                           converted: this.currencyFormat(fieldValue, element, this.currencySettings),
                                       });
                                   }else if(element.alias.indexOf('date')) {
                                       vm.$set(vm.calcStore, element.alias, {
                                           alias: element.alias,
                                           label: element.label,
                                           value: element.time ? element.time : 0,
                                           converted: element.date ? element.date : 0,
                                       });
                                   }

                                   break
                               }
                               case 'number': {
                                   const extra = element.extraLabel ? `(${element.extraLabel})` : undefined;

                                   if(element.alias.indexOf('date') !== -1) {
                                       vm.$set(vm.calcStore, element.alias, {
                                           extra,
                                           alias: element.alias,
                                           label: element.label,
                                           value: element.time ? element.time : 0,
                                           converted: element.date ? element.date : 0,
                                       });
                                   } else {
                                       value = element.round ? Math.round(value) : value;
                                       value = element.unit ? value * element.unit : value;
                                       vm.$set(vm.calcStore, element.alias, {
                                           extra,
                                           value,
                                           alias: element.alias,
                                           label: element.label,
                                           converted: this.currencyFormat(value, element, this.currencySettings),
                                       });
                                   }

                                   break;
                               }
                               case 'object': {
                                   if( typeof value !== "undefined" && value.hasOwnProperty('length')) {
                                       value
                                           .forEach(i => {
                                               let val = element.round ? Math.round(i.value) : i.value;
                                                   val = element.unit ? val * element.unit : val;
                                               i.value = val;
                                               i.converted = this.currencyFormat(val, element, this.currencySettings);
                                           });

                                       let sum = value.reduce( (a,b) => a + b.value , 0);
                                       sum = Number.isInteger(+sum) ? +sum : (+sum).toFixed(2);
                                       const extra = `(${value.map(e => e.label).join(', ')})`;

                                       vm.$set(vm.calcStore, element.alias, {
                                           extra,
                                           value: sum,
                                           options: value,
                                           label: element.label,
                                           alias: element.alias,
                                           converted: this.currencyFormat(sum, element, this.currencySettings),
                                       });

                                   }

                                   break;
                               }
                           }
                       } else {

                           element.value =  element.round ? Math.round(element.value) : element.value;

                           vm.$set(vm.calcStore, element.alias, {
                               value: element.value,
                               label: element.label,
                               alias: element.alias,
                               converted: this.currencyFormat(element.value, element, this.currencySettings),
                           });
                       }
                   });
            }
        },

        readyAvailable() {
            const vm = this;
            if( vm.formula && vm.formula.length ) {
                vm.formula = Object.assign([],  vm.parseFormula(vm.formula, Object.values(vm.calcStore)));
            }


        },

        renderTotalField() {
            this.formula = JSON.parse(JSON.stringify(this.formulaConst));
            this.formula.forEach( item => {
                this.formula.forEach( itemInner => {
                    if( item.formula.indexOf(itemInner.alias) !== -1 ) {
                        item.formula = item.formula.replaceAll( itemInner.alias, itemInner.formula );
                    }
                });
            });
        },

        parseFormula(formula, fields) {
            formula
                .forEach(item => {
                    fields
                        .forEach(field => {
                            let count = 0;
                            while (item.formula.indexOf(field.alias) !== -1) {
                                item.formula.trim();
                                let posStart = item.formula.indexOf(field.alias);
                                let length = field.alias.length;
                                let last = item.formula[posStart + length];
                                last = last === ' ' ? NaN : last;
                                if (isNaN(last)) {
                                    item.formula = item.formula.replace(field.alias, field.value);
                                } else {
                                    let alias = field.alias + last;
                                    let found = fields.find(elem => elem && elem.alias === alias);

                                    if (typeof found !== "undefined" && found.alias)
                                        item.formula = item.formula.replace(found.alias, found.value);
                                }

                                count++;
                                if (count === 100) break;
                            }
                        })
                });

            return formula;
        },

        clearFormula() {
            let replacement = [ 'radio_field_id_', 'multi_range_field_id_', 'range_field_id_', 'toggle_field_id_', 'quantity_field_id_', 'dropDown_field_id_', 'checkbox_field_id_', 'datePicker_field_id_', 'total_field_id_' ];
            const vm = this;
            vm.formula.forEach( element => {
                let i = 0;

                while (element.formula.indexOf('_field_id_') !== -1) {
                    let position = element.formula.indexOf(replacement[i]);
                    if (position !== -1) {
                        let temp = element.formula.substr(position, replacement[i].length + 2);
                        let lastIndex = temp[temp.length - 1];

                        if(parseInt(lastIndex) !== parseInt(lastIndex)) {
                            temp = element.formula.substr(position, replacement[i].length + 1);
                        }
                        element.formula = element.formula.replace(temp, 0);

                    } else {
                        i++;
                    }
                }
            });
        },

        calculate() {
            this.formula
                .forEach( element => {
                    let summary = eval(element.formula);
                    element.total = summary !== summary || !isFinite(summary) ? 0 : summary;
                    element.converted = this.currencyFormat(element.total, {currency: true}, this.currencySettings);
                });
        },

        stmCalendarField(alias) {

            if(typeof this.fields[alias] !== "undefined") {
                let tempVal;
                let time = null;
                let value = this.fields[alias].value;

                if (value.length) {
                    time = value[1] - value[0];
                    tempVal = value[0].toLocaleDateString() + ' - ' + value[1].toLocaleDateString();
                } else {
                    let date = new Date(value);
                    time = (date - Date.now());
                    tempVal = date.toLocaleDateString();
                }

                time = time > 0 ? Math.round(time / 1000 / 3600 / 24) : 0;
                time = typeof time === 'number' ? time + 1 : 0;

                this.fields[alias].time = time;
                this.fields[alias].date = tempVal;
                this.change(value, alias);
            }
        },

        renderCondition() {
            if(this.conditions && typeof this.conditions.links !== "undefined") {
                const vm = this;
                const $ = jQuery;
                const calcId = this.$store.getters.getSettings['calc_id'];

                setTimeout(() => {
                    this.$calc = $(`*[data-calc-id="${calcId}"]`);

                    this.conditions.links.forEach((element, eIndex) => {
                        // options
                        const optionsTo = element.options_to;
                        const optionsFrom = element.options_from;
                        // option left wrap for action
                        let elementRightWrap = this.$calc.find('#' + optionsTo.alias);
                        // if is not calculable
                        if( (!optionsTo.hasOwnProperty('alias') && elementRightWrap.length === 0)) {
                            elementRightWrap = this.$calc.find('#id_for_label_' + optionsTo._id);
                        }

                        if(element && typeof element.condition !== "undefined" && typeof optionsFrom !== "undefined") {
                            element.condition.forEach((condition, index) => {
                                const found = Object.values(vm.calcStore).find(e => e && e.alias === optionsFrom.alias);
                                const key = 'element_' + eIndex + index;

                                vm.valuesStore[key] = typeof vm.valuesStore[key] !== "undefined" ? vm.valuesStore[key] : {};

                                if(typeof found !== "undefined" && vm.valuesStore[key][found.alias] !== found.value ) {
                                    vm.valuesStore[key][found.alias] = JSON.parse(JSON.stringify(found.value));

                                    if (found.hasOwnProperty('options') && found.alias.indexOf('checkbox') !== -1) {
                                        if(found.options.length === 0) {
                                            vm.valuesStore[key][found.alias] = 0;
                                            vm.conditionStart(found, condition, elementRightWrap, optionsTo, null);
                                        } else {
                                            found.options.forEach(e => vm.conditionStart(found, condition, elementRightWrap, optionsTo, e.value));
                                        }

                                    } else {
                                        vm.conditionStart(found, condition, elementRightWrap, optionsTo, found.value)
                                    }
                                }

                            })
                        }
                    });

                    setTimeout(() => {
                        this.apply(false);
                    }, 0);
                });
            }
        },

        conditionStart(found, condition, elementRightWrap, optionsTo, value) {

            let result = eval( value + condition.condition + condition.value + '');

            if( result )
                setTimeout(() => {
                    this.conditionInit( elementRightWrap, condition.action, optionsTo, value, condition.setVal );
                }, 0);
            else
                this.conditionInitToggle( elementRightWrap, condition.action, optionsTo, value, condition.setVal );
        },

        conditionInit(elementRightWrap, action, optionsTo, value, setVal) {
            const vm = this;

            switch (action) {
                case 'Disable': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if (calc.alias === optionsTo.alias)
                            this.$calc.find('.calc_' + calc.alias).addClass('calc-field-disabled');

                        if(calc.alias.indexOf('range') !== -1)
                            this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => {
                                if(i !== 0) e.disabled = true
                            });

                        if(calc.alias.indexOf('multi') !== -1)
                            this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => e.disabled = true)
                    });

                    break;
                }

                case 'Unset': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if ( calc.alias === optionsTo.alias) {
                            this.fields[calc.alias].value = 0   ;
                        }
                    });

                    break
                }


                case 'Hide (leave in Total)': {
                    elementRightWrap.slideUp();
                    this.$calc.find('.' + optionsTo.alias).slideDown();

                    Object.values(vm.calcStore).forEach( calc => {
                        if ( calc.alias === optionsTo.alias && typeof this.tempVal[calc.alias] !== "undefined") {
                            this.fields[calc.alias].value = JSON.parse(JSON.stringify(this.tempVal[calc.alias]));
                        }
                    });

                    break;
                }

                case 'Show': {
                    Object.values(vm.calcStore).forEach( ( calc ) => {
                        if(calc.alias === optionsTo.alias && typeof this.tempVal[calc.alias] !== "undefined") {
                            this.fields[calc.alias].value = JSON.parse(JSON.stringify(this.tempVal[calc.alias]));
                            elementRightWrap.slideDown();
                            this.$calc.find('.' + optionsTo.alias).slideDown();
                            delete this.tempVal[calc.alias];
                        }
                    });

                    break
                }

                case 'Hide': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if ( calc.alias === optionsTo.alias ) {
                            elementRightWrap.slideUp();
                            this.$calc.find('.' + optionsTo.alias).slideUp();
                            this.tempVal[calc.alias] = JSON.parse( JSON.stringify( calc.value ) );
                            this.fields[calc.alias].value = 0;
                        }
                    });

                    break
                }

                case 'Set value': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if(calc.alias === optionsTo.alias) {
                            this.fields[calc.alias].value = setVal;
                        }
                    });
                    break
                }

                case 'Set value and disable': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if(calc.alias === optionsTo.alias) {
                            this.fields[calc.alias].value = setVal;
                            this.$calc.find('.calc_' + calc.alias).addClass('calc-field-disabled');

                            if(calc.alias.indexOf('range') !== -1)
                                this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => {
                                    if(i !== 0)  e.disabled = true
                                })

                            if(calc.alias.indexOf('multi') !== -1)
                                this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => e.disabled = true)
                        }
                    });
                    break
                }

                default: {
                    break;
                }
            }
        },

        conditionInitToggle(elementRightWrap, action, optionsTo) {
            const vm = this;
            switch (action) {
                case 'Disable': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if (calc.alias === optionsTo.alias)
                            this.$calc.find('.calc_' + calc.alias).removeClass('calc-field-disabled');

                        if(calc.alias.indexOf('range') !== -1)
                            this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) =>  {
                                if(i !== 0) e.disabled = false
                            })

                        if(calc.alias.indexOf('multi') !== -1)
                            this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) =>  {
                                e.disabled = false
                            })
                    });

                    break;
                }

                case 'Hide (leave in Total)': {
                    elementRightWrap.slideDown();
                    break
                }

                case 'Hide': {

                    Object.values(vm.calcStore).forEach( calc => {
                        if ( calc.alias === optionsTo.alias && typeof this.tempVal[calc.alias] !== "undefined") {
                            elementRightWrap.slideDown();
                            this.$calc.find('.' + optionsTo.alias).slideDown();
                            this.fields[calc.alias].value = JSON.parse(JSON.stringify(this.tempVal[calc.alias]));
                            delete this.tempVal[calc.alias];
                        }
                    });

                    break
                }

                case 'Set value and disable': {
                    Object.values(vm.calcStore).forEach( calc => {
                        if(calc.alias === optionsTo.alias) {
                            this.$calc.find('.calc_' + calc.alias).removeClass('calc-field-disabled');
                            if(calc.alias.indexOf('range') !== -1)
                                this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => {
                                    if(i !== 0) e.disabled = false
                                });

                            if(calc.alias.indexOf('multi') !== -1)
                                this.$calc.find('.calc_' + calc.alias + ' input').each((i, e) => {
                                    e.disabled = false
                                });
                        }
                    });

                    break
                }

                default:
                    break
            }

        },
    },

    filters: {
        'dots': (value, price, style) => {

            const strLen = (value + price).length;
            const count = style === 'vertical' ?  16 : 80;
            const labelLen = style === 'vertical' ?  26 : 50;
            const len = labelLen - strLen < 0 ? 0 : labelLen - strLen;

            return  strLen > labelLen ? '.'.repeat(count) : '.'.repeat(parseInt(count + len));
        },

        to_short(value, len = 40) {
            if(len && value.length >= len) {
                return value.substring(0, len) + '...';
            }

            return value;
        }
    },
}