// Admin store
import Vue from '@libs/vue/vue.min'
import settings from './admin/settings'
import condition from './admin/condition'
import calculator from './admin/calculator'

// Frontend store
import payments from './frontend/payments'
import wooCommerce from "./frontend/wooCommerce";
import calcForm from "./frontend/calcForm";
import axios from 'axios';

export default {
    state: {
        modalType: '',
        createUrl: '',
        createNew: false,
        subtotal: [],
        formula : [],
        open: false,
        $current: null,

        isExisting: true,
    },

    getters: {
        getOpen: s => s.open,
        getFormula: s => s.formula,
        getCurrent: s => s.$current,
        getSubtotal: s => s.subtotal,
        getCreateUrl: s => s.createUrl,
        getModalType: s => s.modalType,
        getCreateNew: s =>  s.createNew,
        getIsExisting: s =>  s.isExisting,
    },

    mutations: {
        setCreateNew(state, val) {
            state.createNew = val;
        },

        setModalType(state, type) {
            state.modalType = type;
        },

        setCreateUrl(state, url) {
            state.createUrl = url;
        },

        updateSubtotal(state, subtotal) {
            state.subtotal = subtotal;
        },

        updateFormula(state, formula) {
            state.formula = formula;
        },

        updateOpen(state, val) {
            state.open = val;
        },

        updateCurrent(state, val) {
            state.$current = val;
        },

        updateIsExisting(state, val) {
            state.isExisting = val;
        }
    },

    actions: {
        async saveSettings({commit, getters}, isEdit = false, reload = true) {
            const form_data = new FormData;
            form_data.append('action', 'save_settings');
            form_data.append('id', getters.getId);
            form_data.append('title', getters.getTitle);
            form_data.append('builder',  JSON.stringify(getters.getBuilder));
            form_data.append('formula', JSON.stringify(getters.getFormulas));
            form_data.append('settings', JSON.stringify(getters.getSettings));
            form_data.append('conditions', JSON.stringify(getters.getConditions));
            await axios.post(window.ajaxurl, form_data)
                .then(response => {
                    const result = response.data
                    if( result && result.success && reload ) {
                        const url = isEdit ? location.href : `${location.href}&action=edit&id=${getters.getId}`;
                        window.location.replace(url)
                    }
                 })
        },

        updateOpenAction({commit}, val) {
            commit('updateOpen', val);
        },

        updateCurrentAction({commit}, val) {
            commit('updateCurrent', val);
        }
    },

    modules: {
        // admin
        settings,
        condition,
        calculator,

        // front
        payments,
        wooCommerce,
        calcForm,
    },
};