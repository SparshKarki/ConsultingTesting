import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        step: 1,
        vars: cew_patch_vars,
        postTypes: [],
        selectedPostTypes: ['page', 'post'],
        consoleText : [],
        patchEnded : false
    },
    getters: {},
    actions: {
        getPostTypesList({commit, state}) {
            axios(state.vars.endpoints.post_types_list).then(resp => {
                commit('getPostTypes', resp.data);
            });
        },
        savePostTypes({commit, state}, data) {
            commit('savePostType', data);
        },
        initPatch({commit, state, dispatch}, init) {
            if(init) commit('addConsoleText', 'Getting post to patch');

            axios(state.vars.endpoints.retrieve_post + '&post_types=' + state.selectedPostTypes.join(',') ).then(resp => {
                let data = resp.data;
                if(!data.error) {
                    commit('addConsoleText', `Post found - "${data.post.title}". Launching patcher.` );
                    dispatch('patchPost', data.post.id);
                } else {
                    commit('addConsoleText', `No posts to patch found. Stopping` );
                    commit('patchStatus', true);
                }
            });
        },
        patchPost({commit, state, dispatch}, post_id) {
            axios(state.vars.endpoints.patch_post + '&post_id=' + post_id ).then(resp => {
                let data = resp.data;
                if(!data.error) {
                    commit('addConsoleText', data.message );
                    dispatch('initPatch', false);
                }
            });
        }
    },
    mutations: {
        changeStep(state, step) {
            state.step = step;
        },
        getPostTypes(state, data) {
            state.postTypes = data;
        },
        savePostType(state, data) {
            state.selectedPostTypes = data;
            /*and change step*/
            state.step = 3;
        },
        addConsoleText(state, text) {
            state.consoleText.unshift(text);
        },
        patchStatus(state, data) {
            state.patchEnded = data;
        }
    },
});