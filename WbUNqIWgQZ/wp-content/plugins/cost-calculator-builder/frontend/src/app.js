// import currency from "./filters/currency" // currency format filter
import Vue from '@libs/vue/vue.min'
import mixin from '@mixins/index' // mixin/
import store from '@store/index' // vuex
import CBuilder from '@components/admin/main' // main-component admin
import CBuilderFront from '@components/frontend/cost-calc' // main-component front
import loader from '@components/loader' // pre-loader
import uriPlugin from '@plugins/checkUri' // uri plugin
import DatePicker from '@libs/vue/vue2-datepicker'
import _ from '@libs/lodash'
import draggable from '@libs/vue/draggable'
import Vuex from '@libs/vue/vuex'

import '@scss/front.scss';
import '@scss/style.scss';

// import

Vue.use(Vuex);

const $ = jQuery;
$( document ).ready(function() {

    Vue.mixin(mixin); // register global mixin for all fields components
    Vue.use(uriPlugin); // register helper function globally
    Vue.component('cost-date-picker', DatePicker);
    Vue.component('draggable', draggable);
    Vue.component('loader', loader); // register loader component globally

    $('.calculator-settings').each(function () {
        // stored.push(clone_store);
        new Vue({
            el: $(this)[0],

            beforeCreate() {
                this.$store = createStore(_.cloneDeep(store));
            },

            components: {  // init components
                'calc-builder': CBuilder, // Main component for admin Builder
                'calc-builder-front': CBuilderFront, // Front main component and Preview
            },
            data: { // local store
                active_content: 'general', // builder tab page
            },
        });
    })
});

function createStore (store) {
    return new Vuex.Store(store);
}