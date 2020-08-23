export default {
    state: {

    },

    mutations: {

    },

    actions: {
        async applyWoo({getters}) {

            const getSettings = getters.getSettings;
            const action = 'woo_redirect';
            const descriptions = getters.getSubtotal
                ? getters.getSubtotal.filter(item => item.alias && item.alias.indexOf('total') === -1)
                : [];

            const wooData = {
                descriptions,
                woo_info: getSettings.wooCommerce,
                item_name: getSettings.title,
                calcTotals: getters.getFormula,
            };

            const response = await fetch(ajax_window.ajax_url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
                },
                body: `action=${action}&data=` +  encodeURIComponent(JSON.stringify(wooData)),
            });

            const resJson = await response.json();
            if ( resJson.success ) {
                location.href = resJson.page;
            }

            return false;
        }
    },

    getters: {

    },
}