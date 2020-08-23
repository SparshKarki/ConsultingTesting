import Vue from '@libs/vue/vue.min'
export default {
    state: {
        id: null,
        type: '',
        title: '',
        fields: [],
        builder: [],
        index: null,
        formula: [],
        existing: [],
        loader: true,
        getFieldId: 0,
        access: false,
        getEditID: null,

        custom_styles: {},
        custom_fields: {},
        disableInput: false,

        allowStripe: false,
    },

    actions: {
        setFieldId({commit, getters}) {
            commit('setFieldId', getters.generateId)
        },

        updateStripeAction({commit}, val) {
            commit('updateStripeCommit', val)
        },

        async edit_calc({commit, state, getters}, {id}) {
            const fields = await fetch(ajaxurl + `?action=edit_calc&calc_id=${id}`);
            const response = await fields.json();

            if (response.success) {

                commit('setResponseData', response);
                commit('changeAccess', true);
                commit('setDisabledInput', true);

                // pro-features
                commit('updateAll', state);
                commit('setConditions', state.conditions)

            }
        },

        async createId({commit, getters}) {
            if (!getters.getCreateNew) {
                commit('setCreateNew', true);
                const data = await fetch(ajaxurl + `?action=create_id`);
                const response = await data.json();
                commit('setResponseData', response);
                await commit('setCreateNew', false);
                commit('updateAll', response);
            }
        },

        async fetchExisting({commit}) {
            const data = await fetch(ajaxurl + `?action=get_existing`);
            const response = await data.json();
            commit('setResponseData', response);
        },

        async duplicateCalc({commit}, id) {
            const data = await fetch(`${ajaxurl}?action=duplicate_calc&calc_id=${id}`);
            const response = await data.json();
            commit('setResponseData', response);

        },

        async deleteCalc({commit}, id) {
            const data = await fetch(`${ajaxurl}?action=delete_calc&calc_id=${id}`);
            const response = await data.json();
            commit('setResponseData', response);
        },

        async saveCalc({commit, getters}) {
            const data = await fetch(ajaxurl + `?action=save_calc`);
            const response = await data.json();

            if (response.success) {
                return true;
            }
        },

        async updateCustomChanges({commit}, data) {
            commit('updateCustomStyles', data.styles);
            commit('updateCustomFields', data.fields);
        },

        async updateStyles({commit,getters}) {
            commit('updateMainLoader', true);
            const data = {
                id: getters.getId,
                fields: getters.getCustomFields,
                styles: getters.getCustomStyles,
            };

            const encoded = encodeURIComponent(JSON.stringify(data));

            await fetch(window.ajaxurl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Cache-Control': 'no-cache',
                },
                body: 'action=save_custom&data=' + encoded,
                credentials: 'same-origin'
            }).then(() => {
                commit('updateMainLoader', false);
            })
        }
    },

    mutations: {
        changeAccess(state, val) {
            state.access = val;
        },

        setType(state, type) {
            state.type = type;
        },

        setId(state, id) {
            state.id = id;
        },

        setEditID(state, getEditID) {
            state.getEditID = getEditID;
        },

        setFields(state, fields) {
            state.fields = fields;
        },

        setTitle(state, title) {
            state.title = title;
        },

        setIndex(state, index) {
            state.index = index;
        },

        setBuilder(state, builder) {
            state.builder = builder;
        },

        updateMainLoader(state, value) {
            state.loader = value;
        },

        setExisting(state, existing) {
            state.existing = existing;
        },

        updateCustomStyles(state, custom_styles) {
            state.custom_styles = custom_styles;
        },

        updateCustomFields(state, custom_fields) {
            state.custom_fields = custom_fields;
        },

        updateStripeCommit(state, val) {
            state.allowStripe = val;
        },

        addBuilder(state, value, index) {
            if (typeof index !== "undefined")
                state.builder[index] = value
            else
                state.builder.push(value)
        },

        setFieldId(state, id) {
            state.getFieldId = id;
        },

        setDisabledInput(state, val) {
            state.disableInput = val;
        },

        setResponseData(state, response) {
            for (let [key, value] of Object.entries(response)) {
                if (key === 'settings') {
                    /* If settings type is  array convert to object*/
                    const settings = Object.assign({}, response.settings);
                    value = settings.hasOwnProperty('general') ? settings : undefined;
                }

                // /* Change state if settings is valid data */
                if(typeof value !== "undefined")
                     state[key] = value;
            }
        },

        checkAvailable(state) {
            if (typeof state.builder !== "undefined")
                state.builder.forEach((value, index) => {
                    if (typeof value === "undefined" || !value.hasOwnProperty('_id')) {
                        state.builder.splice(index, 1);
                    }
                });
        },

        addToBuilder(state, fieldData) {
            if (fieldData.id === null) {
                if (fieldData.index || fieldData.index === 0) {

                    const len = state.builder.length + 1;
                    fieldData.index = (parseInt(fieldData.index) > state.builder.length)
                        ? state.builder.length
                        : fieldData.index;

                    let current = state.builder[fieldData.index];

                    for (let i = fieldData.index; i < len; i++) {
                        let next = state.builder[i + 1];
                        state.builder[i + 1] = current;
                        current = next;
                    }

                    state.builder[fieldData.index] = fieldData.data;
                } else {
                    state.builder.push(fieldData.data);
                }
            } else {
                state.builder[fieldData.id] = fieldData.data;
            }
        },

        removeFromBuilder(state, id) {
            state.builder = state.builder.filter(field => field && field._id !== id);
        },
    },

    getters: {
        getId: state => state.id,

        getType: state => state.type,

        getIndex: state => state.index,

        getTitle: state => state.title,

        getAccess: state => state.access,

        getEditID: state => state.getEditID,

        getMainLoader: state => state.loader,

        getExisting: state => state.existing,

        // getModalData: state => state.modalData,

        getFields: state => state.fields || [],

        getAllowStripe: state => state.allowStripe,

        getBuilder: state => state.builder || [],

        getFieldId: state => state.getFieldId || 0,

        getDisableInput: state => state.disableInput,

        getCustomStyles: state => state.custom_styles,

        getCustomFields: state => state.custom_fields,

        getFieldData: state => id => {
            return state.builder.find((e, i) => i === id) || {};
        },

        generateId(state) {
            let id = 0;
            let hasAccess = true;

            const ids = [];
            state.builder.forEach(e => ids.push(parseInt(e._id)));

            for (let i = 0; i < ids.length; i++)
                if (!ids.includes(i) && hasAccess) {
                    hasAccess = false;
                    id = i;
                }

            if (hasAccess) id = state.builder.length;
            return id;
        },

        getFormulas: function (state) {
            let _formula = '';
            const data = [];
            state.builder.forEach(function (element) {
                if (element.type === 'Total') {
                    data.push({
                        id: element._id,
                        alias: element.alias,
                        label: element.label,
                        formula: element.costCalcFormula
                    });
                }
            });


            if (!data.length) {
                state.builder.forEach(function (element) {
                    if (element.alias)
                        _formula += element.alias + ' + ';
                });

                let last = _formula.lastIndexOf(" ") - 1;
                _formula = _formula.substring(0, last);
                data.push({label: 'Total', formula: _formula, symbol: ''});
            }

            state.formula = data;
            return data;
        },
    }
}