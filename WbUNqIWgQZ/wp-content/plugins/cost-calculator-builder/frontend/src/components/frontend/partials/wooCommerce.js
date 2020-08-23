export default {
    data: () =>  ({
        loader: false,
        message: false,
    }),

    methods: {
        async applyWoo() {
            this.loader = true;
            const result = await this.$store.dispatch('applyWoo');
            this.loader = result;
            // this.message = !result;
        }
    },

    computed: {
        getSettings() {
            return this.$store.getters.getSettings
        },

        getWooSettings() {
            return this.getSettings.wooCommerce
        }
    },
}