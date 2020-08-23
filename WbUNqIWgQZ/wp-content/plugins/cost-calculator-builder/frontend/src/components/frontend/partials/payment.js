export default {
    props: {
        form: {
            default: false,
        },

        after: {
            default: '',
        }
    },
    data: () => ({
        loader: false,

        stripe: {
            stripe: '',
            stripeCard: '',
            stripeComplete: '',
        },

        payment: {
            status: '',
            message: '',
        },
    }),

    computed: {

        getHideCalc: {
            get() {
                return this.$store.getters.getHideCalc;
            },

            set(val) {
                this.$store.commit('updateHideCalc', val);
            }
        },

        getMethod: {
            get() {
                return this.$store.getters.getMethod;
            },

            set(value) {

                this.payment.status = '';
                this.payment.message = '';

                if (value === 'stripe') {
                    this.generateStripe();
                }

                this.$store.dispatch('updateMethodAction', value);
            },
        },

        getStripeSettings() {
            return this.getSettings
                ? this.getSettings.stripe
                : {}
        },

        getPayPalSettings() {
            return this.getSettings
                ? this.getSettings.paypal
                : {}
        },

        getSettings() {
            return this.$store.getters.getSettings
        }
    },

    created() {
        if(this.after && this.after === 'stripe') {
            this.getMethod = this.after;
            this.getHideCalc = true;
        }
    },

    methods: {
        async applyPayment() {
            this.loader = true;
            const data = {
                action: '',
                item_name: this.getSettings.title
            };

            if( this.getMethod === 'paypal' ) {

                data.action = 'paypal_redirect';
                data.descriptions = this.$store.getters.getSubtotal;
                data.calcTotals = this.$store.getters.getFormula;
                data.paypal_info = this.getSettings.paypal;
                data.thousands_separator = this.getSettings.currency.thousands_separator;

            } else if( this.getMethod === 'stripe' ) {

                await this.stripe.stripe.createToken(this.stripe.stripeCard).then(result =>  {

                    if ( result.error ) {
                        this.payment.message = result.error.message;
                        this.payment.status = result.error;
                    } else {
                        data.action = 'stripe_redirect';
                        data.token_id = result.token.id;
                        data.stripe_info = this.getStripeSettings;
                        data.calcTotals = this.$store.getters.getFormula;
                    }

                })
            }

            const result = await this.$store.dispatch('fetchPayment', data);
            setTimeout(() => {
                if(result) {
                    this.loader = false;
                    this.payment.status  = result.status;
                    this.payment.message = result.message;
                }

            }, 500);
        },

        generateStripe( access = true ) {
            let vm = this;
            this.$nextTick( () => {
                const stripe_id = this.getStripeSettings.publishKey;
                if ( !stripe_id.length && access ) {

                    vm.payment.status = 'danger';
                    vm.payment.message = 'Something went wrong';
                    return false;

                } else if( access ) {

                    vm.payment.status = '';
                    vm.payment.message = '';

                }

                vm.stripe.stripe = Stripe(stripe_id);
                let elements = vm.stripe.stripe.elements();

                vm.stripe.stripeCard = elements.create('card');
                vm.stripe.stripeCard.mount('#ccb_stripe_' + vm.getSettings.calc_id);
                vm.stripe.stripeCard.addEventListener('change',  event => {
                    vm.stripe.stripeComplete = event.complete;
                });
            });
        },
    },
}