import color from "./color-field";

export default {
    props: ['element', 'field', 'index'],
    components: {
        'color-field': color,
    },
    data(){
        return {
            store: {},
            id: this.randomID(),
            range: null,
            color: null,
            position: null,
            drop_down: null,
            text_shadow: null,
        }
    },

    created(){
        let vm = this;
        vm.range       = vm.field.range;
        vm.color       = vm.field.color;
        vm.position    = vm.field.position;
        vm.drop_down   = vm.field.drop_down;
        vm.text_shadow = vm.field.text_shadow;
    },

    methods: {
        change: function () {
            let vm = this, keys = [];

            for(let key in vm.drop_down)
                vm.store[vm.drop_down[key].name] = vm.drop_down[key].value === 'select' ? 'inherit' : vm.drop_down[key].value;

            for(let key in vm.range)
                vm.store[vm.range[key].name] = vm.range[key].default.value + vm.range[key].dimension;

            for(let key in vm.text_shadow.options)
                keys.push(vm.text_shadow.options[key].value + vm.text_shadow.options[key].dimension);

            vm.store[vm.color.name] = vm.color.value ? vm.color.value : vm.color.default;
            vm.store[vm.text_shadow.name] = keys.join(' ') + ' ' + this.hexToRgbA(vm.text_shadow.color.value,vm.text_shadow.opacity.value);

            vm.field.color.default = vm.store[vm.color.name];
            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        }
    },

    template: `                                       
                 <ul class="list-group">
                    <li class="list-group-item">
                        <color-field @changed="change" :field="color" :id="randomID()"></color-field>
                    </li>
                    <li class="list-group-item" v-for="item in drop_down">
                        <div class="option_name ccb-border-radius">
                            {{item.label}}
                        </div>
                        <div class="ccb-border-radius">                     
                           <select @change="change" :id="'ccb_label_0_calc_id_' + id" v-model="item.value">
                                <optgroup label="Drop Down field">
                                    <template v-for="(element) in item.options">
                                        {{element}}
                                        <option :value="element">{{element === 'select' ? 'inherit' : element}}</option>
                                    </template>
                                </optgroup>
                            </select>
                        </div>    
                    </li>
                    <li class="list-group-item" v-for="element in range">
                         <div class="option_name ccb-border-radius">
                            {{element.label}}
                        </div>
                        <div class="ccb-range-slider">
                            <input type="range" @change="change" :min="element.default.min" v-model="element.default.value" :step="element.default.step" :max="element.default.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{element.default.value}}{{element.default.dimension}}</span>
                        </div>
                    </li> 
                    <li class="list-group-item">
                        <div class="option_name">
                            {{text_shadow.label}}
                        </div>
                        <div class="text-shadow-wrapper">                     
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <template v-for="element in text_shadow.options">
                                         <div>
                                              <div class="option_name">
                                                   {{element.label}}
                                              </div>
                                              <div class="ccb-range-slider">
                                                  <input type="range" @change="change" :min="element.min" v-model="element.value" :step="element.step" :max="element.max" class="ccb-range-slider__range">
                                                  <span class="ccb-range-slider__value">{{element.value}}{{element.dimension}}</span>
                                              </div> 
                                         </div>
                                    </template>
                                    
                                        <div>
                                              <div class="option_name">
                                                   {{text_shadow.opacity.label}}
                                              </div>
                                              <div class="ccb-range-slider">
                                                  <input type="range" @change="change" :min="text_shadow.opacity.min" v-model="text_shadow.opacity.value" :step="text_shadow.opacity.step" :max="text_shadow.opacity.max" class="ccb-range-slider__range">
                                                  <span class="ccb-range-slider__value">{{text_shadow.opacity.value}}</span>
                                              </div> 
                                         </div>
                                      
                                    <color-field @changed="change" :field="text_shadow.color" :id="randomID()"></color-field>
                                </li>
                            </ul>
                        </div>    
                    </li>
                </ul>     
              `,
}