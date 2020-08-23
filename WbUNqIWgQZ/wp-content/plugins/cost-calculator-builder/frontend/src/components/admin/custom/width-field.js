export default {
    props: [ 'element', 'field', 'index'],
    data(){
        return {
            defaults: null,
            dimension: 'px',
        }
    },

    created(){
        let vm = this;
        vm.defaults  = this.field.default;
        vm.dimension = this.field.dimension;
    },

    methods: {
        change: function () {
            let vm = this, val = {};
            val[vm.field.name] = vm.defaults.value + vm.dimension;
            vm.$emit('change',vm.element.name, val, vm.field, vm.index);
        },
    },

    template: `<ul class="list-group-item">
                        <li class="list-group">
                            <div class="ccb-range-slider">
                                <input type="range" @change="change" :min="defaults.min" v-model="defaults.value" :step="defaults.step" :max="defaults.max" class="ccb-range-slider__range">
                                <span class="ccb-range-slider__value">{{defaults.value}}{{dimension}}</span>
                            </div>
                        </li>
               </ul>
              `,
}