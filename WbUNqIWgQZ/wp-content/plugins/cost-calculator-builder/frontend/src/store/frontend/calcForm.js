export default {
    state: {
        hideCalc: false,
    },

    getters: {
        getHideCalc: s => s.hideCalc,
    },

    mutations: {
        updateHideCalc(state, val) {
            state.hideCalc = val;
        }
    },

    actions: {
        async sendForm({commit}, data) {
            if( data.action ) {
                const encoded = encodeURIComponent(JSON.stringify(data));
                const response = await fetch(ajax_window.ajax_url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                    },
                    body: `action=${data.action}&data=` +  encoded,
                });

                return  await response.json();
            }
        }
    },
}