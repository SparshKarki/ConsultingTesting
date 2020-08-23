import color from './color-field'
export default {
    props: [ 'element', 'field', 'index'],
    components: {
        'color-field': color,
    },
    data: function(){
        return {
            id: null,
            type: 'outline',
            store: {},
            line: null,
            range: null,
            color: null,
        }
    },
    created() {
        let vm   = this;
        vm.id    = this.randomID();
        vm.line  = vm.field.line.options;
        vm.range = vm.field.range;
        vm.color = vm.field.color;
    },

    methods: {
        change: function (event, type = '') {
            let vm = this, keys = [];

            if(type && type !== "null"){
                vm.type = type;
                type = type === "outline" ? '' : type;
            }

            for(let key in vm.range)
                keys.push(vm.range[key].value + vm.range[key].dimension);

            vm.store[vm.field.name] = type + ' ' + keys.join(' ') + ' ' + this.hexToRgbA(vm.field.color.shadow_color.value, vm.field.opacity.value);
            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        },
    },

    template: `  <ul class="list-group " id="generator-option">
                    <li class="list-group-item" v-for="(element) in range">
                        <div class="option_name ccb-border-radius">
                            {{element.label}}
                        </div>
                        <div class="ccb-range-slider">
                            <input type="range" @change="change" :min="element.min" v-model="element.value" :step="element.step" :max="element.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{element.value}}{{element.dimension}}</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="option_name ccb-border-radius">
                            {{field.opacity.label}}
                        </div>
                        <div class="ccb-range-slider">
                            <input type="range" :min="field.opacity.min" @change="change" v-model="field.opacity.value" :step="field.opacity.step" :max="field.opacity.max" class="ccb-range-slider__range">
                            <span class="ccb-range-slider__value">{{field.opacity.value}}</span>
                        </div>
                    </li>
                    <li class="list-group-item" v-for="(element) in color">
                         <div class="option_name">
                            <div class="ccb-color-picker m-b-15">
                                <color-field @changed="change" :field="element" :id="randomID()"></color-field>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ccb-radio">
                        <div class="ccb-toggle">
                            <template v-for="(element, key) in line">
                                <input type="radio" @change="change(event, element.value)" :name="'line-' + id" :id="element.label + id" :checked="element.value === type"/>
                                <label :for="element.label + id"> {{element.label}}</label>
                            </template>
                        </div>
                    </li>
                </ul>`,
}