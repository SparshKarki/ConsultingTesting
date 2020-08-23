import flowChart from './condition/flow-chart'

export default {
    components: {
        'flow-chart': flowChart,
    },

    props: ['available', 'conditions'],
    data() {
        return {

            elements: [],
            tempModel: [],
            newNodeLabel: '',
            currentId: null,
            scene: {
                centerX: 1024,
                centerY: 140,
                scale: 1,
                nodes: [],
                links: []
            },
            condition: {
                hide: false,
                open: false,
            },

            conditionData: {},
        }
    },

    computed: {

        getElements() {
            return this.$store.getters.getBuilder
                .filter(element => element.label !== undefined && element.label !== null && element.label !== '')
        },

        scene() {
            return {
                centerX: 1024,
                centerY: 140,
                scale: 1,
                nodes: [],
                links: []
            }
        }
    },

    methods: {

        refreshAvailable() {
            let vm = this;
            vm.conditions = vm.$store.getters.getConditions || {};
            vm.scene.nodes = vm.conditions.nodes || [];
            vm.scene.links = vm.conditions.links || [];
        },

        addNode(element) {
            if(!element) return;
            let maxID = Math.max(0, ...this.scene.nodes.map((link) => {
                return link.id
            }));

            let calculable = (['cost-html', 'cost-line', 'cost-text'].indexOf(element._tag)) === -1;

            this.scene.nodes.push({
                y: 50,
                x: -400,
                calculable,
                id: maxID + 1,
                options: element,
                icon: element.icon,
                label: element.label,
            });

            this.change();
        },

        saveConditionSettings() {
            const data = {
                nodes: this.scene.nodes,
                links: this.scene.links,
            };

            this.$emit('save', data);
        },

        newNode(field) {
            const vm = this;
            vm.addNode(field);
        },

        linkEdit(event, data) {
            let vm = this;

            const link = document.querySelector(`[data-link='${data.id}']`);
            if(typeof link !== "undefined") link.classList.add('ccb-link-active');

            this.$store.commit('updateConditionData', {});
            this.$store.commit('updateConditionModel', []);

            vm.conditionData.id = data.id;
            vm.conditionData.optionTo = data.options_to;
            vm.conditionData.optionFrom = data.options_from;
            vm.conditionData.type = (['cost-range', 'cost-quantity', 'cost-multi-range', 'date-picker', 'cost-total'].indexOf( vm.conditionData.optionFrom._tag)) !== -1 ? 'input' : 'select';
            vm.conditionData.actionType = (['cost-html', 'cost-line', 'cost-text', 'cost-total'].indexOf(vm.conditionData.optionTo._tag)) !== -1 ? 'simple' : 'calc';
            vm.conditionData.actionType = (['cost-multi-range', 'date-picker'].indexOf(vm.conditionData.optionTo._tag)) !== -1 ? 'pro' : vm.conditionData.actionType;


            if(vm.conditionData.type === 'select')
                this.$store.commit('updateConditionOptions', vm.conditionData.optionFrom.options);

            if(data.condition)
                this.$store.commit('updateConditionModel', JSON.parse(JSON.stringify(data.condition)));

            this.$store.commit('updateConditionData', vm.conditionData);
            this.$store.commit('setModalType', 'condition');
        },

        removeCondition(index) {
            this.tempModel.splice(index, 1);
        },

        saveCondition() {
            let vm = this;

            vm.scene.links.forEach(element => {
                if(element.id === vm.conditionData.id) element.condition = vm.tempModel;
            });

            jQuery('.ccb-link-active').removeClass('ccb-link-active');
            vm.clearValues();
        },

        clearValues() {
            let vm = this;
            vm.condition.open = false;
            vm.condition.hide = true;
            vm.currentId = null;
            vm.tempModel = [];
            vm.conditionData = {};

            setTimeout(() => vm.condition.hide = false, 130);
        },

        change() {
            const vm = this;
            vm.$nextTick(() => {
                const data = {
                    nodes: vm.scene.nodes,
                    links: vm.scene.links,
                };

                vm.$emit('save', data);
            })
        }
    },

    filters: {
        'to-short': (value) => {
            if(value.length >= 23) {
                return value.substring(0, 20) + '...';
            }
            return value;
        },
    },

    created() {
        const vm = this;
        vm.refreshAvailable();
    },

    updated() {

    },
}