import Vue from '@libs/vue/vue.min'
export default {
    state: {
        conditions: {
            nodes: [],
            links: [],
        },
        conditionData: {},
        conditionModel: [],

        options: [],
        typeofAction: 'calc',
        actionsForSimpleFields: ['Show', 'Hide (leave in Total)'],
        actionsForProFields: ['Show', 'Hide', 'Hide (leave in Total)', 'Disable'],
        actions: ['Hide', 'Show', 'Hide (leave in Total)', 'Unset', 'Set value', 'Set value and disable'],
        cOperators: {
            'cost-total' : {'==': 'is equal to', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-range' : {'==': 'is equal to', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-radio' : {'==': 'is selected', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-toggle' : {'==': 'is equal to', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-checkbox' : {'==': 'is selected', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-quantity' : {'==': 'is equal to', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-drop-down' : {'==': 'is selected', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
            'cost-multi-range' : {'==': 'is equal to', '<=': 'is inferior to', '>=' : 'is superior to', '!=' : 'is different than'},
        },
    },

    mutations: {
        setConditions(state, conditions){
            state.conditions = conditions;
        },

        updateConditionData(state, data) {
            state.conditionData = data;
        },

        updateConditionModel(state, model) {
            state.conditionModel = model;
        },

        updateConditionOptions(state, options) {
            state.options = options;
        },

        addConditionData(state) {
            const defaultModal = {
                value: '',
                setVal: '',
                action: '',
                hide: false,
                open: false,
                condition: '',
                type: 'select',
                optionTo: state.conditionData.optionTo,
                optionFrom: state.conditionData.optionFrom,
            };
            state.conditionModel.push(defaultModal) ;
        }
    },

    getters: {
        getConditions(state) {
            return state.conditions;
        },

        getConditionData(state) {
            return  state.conditionData;
        },

        getConditionModel(state) {
            return state.conditionModel;
        },

        getSimpleActions(state) {
            return state.actionsForSimpleFields;
        },

        getProActions (state) {
            return state.actionsForProFields
        },

        getConditionActions(state) {
            return state.actions;
        },

        getTypeOfAction(state) {
            return state.typeofAction;
        },

        getConditionOptions(state) {
            return state.options;
        },

        operatorsByTag: state => index => {
            if(typeof state.cOperators[index] !== "undefined")
                return state.cOperators[index];
            return [];
        },
    },

    actions: {
        updateLink({getters, commit}) {
            if(typeof getters.getConditions.links !== "undefined") {
                getters.getConditions.links.forEach( element => {
                    if(element.id === getters.getConditionData.id)
                        element.condition = getters.getConditionModel;
                });
            }
        },

        removeLink({getters, commit}) {

            if(typeof getters.getConditions.links !== "undefined") {
                const data = {
                    nodes: getters.getConditions.nodes
                };

                data.links = getters.getConditions.links.filter(element => element.id !== getters.getConditionData.id);
                commit('setConditions', data);
            }
        },
    }
}