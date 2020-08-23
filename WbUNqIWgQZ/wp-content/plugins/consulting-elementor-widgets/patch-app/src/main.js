import Vue from 'vue'
import App from './App.vue'
import store from './store/store';
import VueTyperPlugin from 'vue-typer'

Vue.config.productionTip = false;

Vue.use(VueTyperPlugin);

new Vue({
    store,
    render: h => h(App)
}).$mount('#cew_patch_app');