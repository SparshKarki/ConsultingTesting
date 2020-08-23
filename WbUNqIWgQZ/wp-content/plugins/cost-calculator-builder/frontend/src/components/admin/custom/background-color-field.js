import color from './color-field'
export default {
    props: [ 'element', 'field', 'index'],
    components: {
        'color-field': color,
    },
    data(){
        return {
            id: this.randomID(),
            store: {},
            type: 'solid',
            solid_id: '',
            gradientDefault: '',
            solidDefault: '',
            gradient_id: '',
        }
    },
    created(){
        let vm = this;
        vm.type = vm.field.default;
        vm.solid_id = 'solid_' + this.randomID();
        vm.gradient_id = 'gradient' + this.randomID();
    },

    methods: {
        change: function () {
            let vm = this, current = vm.field[vm.type];
            vm.field.default = vm.type;
            vm.field[vm.type].default = current.value;

            if(vm.type === 'solid'){
                vm.store['background-image'] = '';
                vm.store['background-color'] = current.value;
            }
            else{
                vm.store['background-image'] = '';
                vm.store['background-image'] = 'linear-gradient(to right, ' + current[0].value  +', '+ current[1].value +')';

                vm.field[vm.type][0].default = current[0].value;
                vm.field[vm.type][1].default = current[1].value;
            }

            setTimeout(function () {
                vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
            }, 10)
        },
    },

    watch: {

        type: function (val) {
            this.change();
        }
    },

    template: `
                <div>
                    <div class="ccb-toggle">
                        <input type="radio" @change="type = 'solid'" :name="'radio-' + id" :id="solid_id" :checked="type === 'solid'" />
                        <label :for="solid_id">Solid</label>
                        <input type="radio" @change="type = 'gradient'" :name="'radio-' + id" :id="gradient_id" :checked="type === 'gradient'"/>
                        <label :for="gradient_id">Gradient</label>
                    </div>
                    
                    <ul class="list-group" id="generator-option" v-if="type === 'solid'">
                        <li class="list-group-item">
                            <div class="option_name">
                                <div class="ccb-color-picker m-b-15">
                                    <keep-alive>
                                        <color-field @changed="change" :field="field.solid" :id="randomID()"></color-field>
                                    </keep-alive>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group" id="generator-option" v-else>
                        <li class="list-group-item">
                            <div class="option_name">
                                <div class="ccb-color-picker m-b-15 ccb-gradient-picker">
                                    <template v-for="gradient_field in field.gradient">   
                                        <color-field @changed="change" :field="gradient_field" :id="randomID()"></color-field>
                                    </template>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
    `,
}