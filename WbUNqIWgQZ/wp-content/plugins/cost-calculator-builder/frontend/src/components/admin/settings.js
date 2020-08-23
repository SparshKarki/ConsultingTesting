export default  {
    props: {
        settings: {},
    },
    data: () => ({
        id: null,
        settingsField: null,
        disablePayments: [
            {disabled: false, name: 'paypal'},
            {disabled: false, name: 'stripe'},
            {disabled: false, name: 'woocommerce'},
        ],
        currencies: [
            {alias: 'Euro', value: 'EUR'},
            {alias: 'Thai baht', value: 'THB'},
            {alias: 'Swiss franc', value: 'CHF'},
            {alias: 'Czech koruna', value: 'CZK'},
            {alias: 'Danish krone', value: 'DKK'},
            {alias: 'Indian rupee', value: 'INR'},
            {alias: 'Mexican peso', value: 'MXN'},
            {alias: 'Polish złoty', value: 'PLN'},
            {alias: 'Russian ruble', value: 'RUB'},
            {alias: 'Swedish krona', value: 'SEK'},
            {alias: 'Brazilian real', value: 'BRL'},
            {alias: 'Japanese yen 1', value: 'JPY'},
            {alias: 'Pound sterling', value: 'GBP'},
            {alias: 'Canadian dollar', value: 'CAD'},
            {alias: 'Norwegian krone', value: 'NOK'},
            {alias: 'Philippine peso', value: 'PHP'},
            {alias: 'Hong Kong dollar', value: 'HKD'},
            {alias: 'Singapore dollar', value: 'SGD'},
            {alias: 'Australian dollar', value: 'AUD'},
            {alias: 'Hungarian forint 1', value: 'HUF'},
            {alias: 'Israeli new shekel', value: 'ILS'},
            {alias: 'New Zealand dollar', value: 'NZD'},
            {alias: 'Malaysian ringgit 2', value: 'MYR'},
            {alias: 'New Taiwan dollar 1', value: 'TWD'},
            {alias: 'United States dollar', value: 'USD'},
        ],
        modes: [
            {alias: 'Live', value: 'live'},
            {alias: 'Sandbox', value: 'sandbox'}
        ],
    }),

    created() {
        this.id = this.$store.getters.getId;
        this.settingsField = this.$store.getters.getSettings;
        this.checkPaymentStatus();
    },

    methods: {
        checkPaymentStatus: function () {
            let vm = this;
            vm.disablePayments.forEach(element => {
                vm.disablePayments[0].disabled = (vm.settingsField.paypal.enable && vm.settingsField.paypal.paypal_email !== "") && true;
                vm.disablePayments[1].disabled = (vm.settingsField.stripe.enable && vm.settingsField.stripe.secretKey !== "" && vm.settingsField.stripe.publishKey !== "") && true;
                vm.disablePayments[2].disabled = (vm.settingsField.wooCommerce.enable && vm.settingsField.wooCommerce.product_id !== "") && true;

                if(element.name === vm.settingsField.formFields.paymentMethod && !element.disabled) vm.settingsField.formFields.paymentMethod = "";
            });
        },
    },

    updated() {
        let vm = this;
        vm.settingsField.formFields.allowContactForm = parseInt( vm.settingsField.formFields.contactFormId ) || false;
        vm.checkPaymentStatus();
    },
}