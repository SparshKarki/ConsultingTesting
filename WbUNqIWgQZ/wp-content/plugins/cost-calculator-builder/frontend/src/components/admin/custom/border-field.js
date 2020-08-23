import color from './color-field'

export default {
    props: [ 'element', 'field', 'index'],
    components: {
        'color-field': color,
    },
    data: function(){
        return {
            store:  {},
            defaults: null,
            id: this.randomID(),
            dimension: 'px',
        }
    },
    created() {
        let vm       = this;
        vm.defaults  = vm.field.default;
        vm.color     = vm.defaults.color.value;
        vm.dimension = vm.field.dimension;
    },

    methods: {
        change: function (event, isGlobal = false) {
            let val = [], vm = this;
            for(let key in vm.defaults.width.options){
                if(isGlobal){
                    val.push(vm.defaults.value + vm.dimension);
                    vm.defaults.width.options[key].value = vm.defaults.value;
                } else{
                    val.push(vm.defaults.width.options[key].value + vm.dimension);
                }
            }


            vm.store[vm.defaults.width.name] = val.join(' ');
            vm.store[vm.defaults.style.name] = vm.defaults.style.value;
            vm.store[vm.defaults.color.name] = vm.defaults.color.value;
            vm.defaults.color.default = vm.defaults.color.value;
            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        }
    },
    template: `           
                <ul class="list-group" id="generator-option" >
                    <li class="list-group-item">
                        <div class="option_name ccb-border-radius">
                            {{defaults.style.label}}
                        </div>
                        <div class="ccb-border-radius">                     
                           <select :id="'ccb_label_0_calc_id_' + id" v-model="defaults.style.value" @change="change">
                                <optgroup label="Drop Down field">
                                    <template v-for="(element) in defaults.style.options">
                                        {{element}}
                                        <option :value="element">{{element}}</option>
                                    </template>
                                </optgroup>
                            </select>
                        </div>    
                    </li>
                    <li class="list-group-item">
                        <div class="ccb-color-picker m-b-15">
                            <color-field @changed="change" v-model="defaults.color.value" :field="defaults.color" :id="randomID()"></color-field>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="option_name ccb-border-radius">
                            {{field.default.label}}
                        </div>
                        <div class="ccb-range-slider">
                            <input type="range" :min="defaults.min" @change="change(event, true)" v-model="defaults.value" :step="defaults.step" :max="defaults.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{defaults.value}}{{field.dimension}}</span>
                        </div>
                    </li>
                    <li class="list-group-item" v-for="(element,key) in defaults.width.options">
                        <div class="option_name ccb-border-radius">
                            {{element.label}}
                        </div>
                        <div class="ccb-range-slider">                     
                            <input type="range" :min="defaults.min" @change="change" v-model=" defaults.width.options[key].value" :step="defaults.step" :max="defaults.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{defaults.width.options[key].value}}{{dimension}}</span>
                        </div>    
                    </li>
                </ul>
                `,
}