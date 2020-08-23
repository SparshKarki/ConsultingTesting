export default {
    state: {
        forms: [],
        products: [],
        settings: {
            general: {
                header_title: 'Total Summary',
                descriptions: 'show',
                boxStyle: 'vertical',
            },
            currency: {
                currency: '$',
                num_after_integer: 2,
                decimal_separator: '.',
                thousands_separator: ',',
                currencyPosition: 'left_with_space',
            },
            formFields: {
                fields: [],
                emailSubject: '',
                contactFormId: '',
                accessEmail: false,
                adminEmailAddress: '',
                submitBtnText: 'Submit',
                allowContactForm: false,
                body:   'Dear sir/madam\n' +
                    'We would be very grateful to you if you could provide us the quotation of the following:\n' +
                    '\nTotal Summary\n' +
                    '[ccb-subtotal]\n' +
                    'Total: [ccb-total-0]\n' +
                    'Looking forward to hearing back from you.\n' +
                    'Thanks in advance',
                payment: false,
                paymentMethod: '',
            },

            paypal: {
                enable: false,
                description: '[ccb-total-0]',
                paypal_email: '',
                currency_code: '',
                paypal_mode: 'sandbox',
            },

            wooCommerce: {
                enable: false,
                product_id: '',
                redirect_to: 'cart',
                description: '[ccb-total-0]',
            },

            stripe: {
                enable: false,
                secretKey: '',
                publishKey: '',
                description: '[ccb-total-0]',
            },
            recaptcha: {
                enable: false,
                siteKey: '',
                secretKey: '',
            },

            icon: 'fas fa-cogs',
            type: 'Cost Calculator Settings',
        }
    },

    mutations: {
        updateAll(state, response) {
            state.forms = response.forms;
            state.products = response.products;

            if(response.settings && response.settings.general)
                 state.settings = response.settings;
        },

        updateSettings(state, settings) {
            state.settings = settings;
        },
    },

    getters: {
        getForms: state => state.forms,
        getSettings: state => state.settings,
        getProducts: state => state.products,
    },
}