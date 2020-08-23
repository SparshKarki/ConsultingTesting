export default {
    props: ['element', 'field', 'index'],
    data: function(){
        return {
            store: {},
            defaults: null,
            dimension: 'px',
            id: this.randomID(),
        }
    },

    created() {
        let vm = this;
        vm.defaults  = vm.field.default;
    },

    methods: {
        change: function (event, isGlobal = false) {
            let val = [], vm = this;

            for(let key in vm.defaults.options)
                val.push(vm.defaults.options[key].value);

            vm.store[vm.field.name] = val.join(' ');
            vm.$emit('change',vm.element.name, vm.store, vm.field, vm.index);
        }
    },

    template: `                                       
                <ul class="list-group" id="generator-option" >
                    <li class="list-group-item" v-for="(element,key) in defaults.options">
                        <div class="option_name ccb-border-radius">
                            {{element.label}}
                        </div>
                        <div >                     
                            <input type="text" @input="change" v-model="defaults.options[key].value" class="ccb-indentation-field">
                        </div>    
                    </li>
                </ul>
                `,
}