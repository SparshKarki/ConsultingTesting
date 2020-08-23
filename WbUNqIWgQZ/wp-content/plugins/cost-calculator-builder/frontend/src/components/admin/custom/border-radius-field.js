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
        let vm = this;
        vm.defaults  = vm.field.default;
        vm.demension = vm.field.demension;
    },

    methods: {
        change: function (event, isGlobal = false) {
            let val = [], vm = this;

            if(vm.defaults && vm.defaults.radius) {
                for(let key in vm.defaults.radius.options){
                    if(isGlobal){
                        val.push(vm.defaults.value + vm.dimension);
                        vm.defaults.radius.options[key].value = vm.defaults.value;
                    } else{
                        val.push(vm.defaults.radius.options[key].value + vm.dimension);
                    }
                }

                vm.store[vm.defaults.radius.name] = val.join(' ');
            }

            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        }
    },

    template: `           
                <ul class="list-group" id="generator-option" >
                    <li class="list-group-item">
                        <div class="option_name ccb-border-radius">
                            {{field.default.label}}
                        </div>
                        <div class="ccb-range-slider">
                            <input type="range" :min="defaults.min" @change="change(event, true)" v-model="defaults.value" :step="defaults.step" :max="defaults.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{defaults.value}}{{field.dimension}}</span>
                        </div>
                    </li>
                    <template v-if="defaults && defaults.radius">
                        <li class="list-group-item" v-for="(element,key) in defaults.radius.options">
                            <div class="option_name ccb-border-radius">
                                {{element.label}}
                            </div>
                            <div class="ccb-range-slider">                     
                                <input type="range" :min="defaults.min" @change="change" v-model=" defaults.radius.options[key].value" :step="defaults.step" :max="defaults.max" class="ccb-range-slider__range">
                                <span class="ccb-range-slider__value">{{defaults.radius.options[key].value}}{{field.dimension}}</span>
                            </div>    
                        </li>
                    </template>
                </ul>
                `,
}