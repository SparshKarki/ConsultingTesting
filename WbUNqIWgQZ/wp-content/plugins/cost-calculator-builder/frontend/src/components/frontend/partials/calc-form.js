import parser from '@plugins/parser'
import payment from "./payment";
const $ = jQuery;
export default {

    components: {
        'calc-payments': payment,
    },

    data: () => ({
        close: false,
        $current: null,
        afterPayment: '',
        stripe: false,
        loader: false,
        redirectData: {},
        sendFields: [
            {name: 'name', required: true, value: ''},
            {name: 'email', required: true, value: ''},
            {name: 'phone', required: true, value: ''},
            {name: 'message', required: false, value: ''},
        ],
        errorCaptcha: false,
        errorMessage: false,
        successMessage: false,

        requires: [
            {required: false},
            {required: false},
            {required: false},
            {required: false},
        ],
    }),

    mounted() {
        setTimeout(() => {
            this.$current = this.$store.getters.getCurrent;
            this.renderCaptchaFunc();
            this.renderCaptchaScript();
        }, 500);
    },

    computed: {

        getHideCalc: {
            get() {
                return this.$store.getters.getHideCalc;
            },

            set(val) {
                this.$store.commit('updateHideCalc', val);
            }
        },

        getSettings() {
            return this.$store.getters.getSettings
        },

        getStripeSettings() {
            return this.getSettings
                ? this.getSettings.stripe
                : {}
        },

        formData() {
            return this.getSettings.formFields;
        },

        open: {
            get() {
                return this.$store.getters.getOpen
            },

            set(val) {
                this.$store.dispatch('updateOpenAction', val);
            }
        }
    },

    methods: {
        async sendData() {
            const vm = this;
            let access = true;

            if (typeof grecaptcha !== 'undefined' && this.getSettings.recaptcha.enable) {
                let ccb_recaptcha = '';
                $('.g-rec').each(() => {
                    if ($(this).attr('id') == this.$store.getters.getSettings['calc_id'])
                        ccb_recaptcha = grecaptcha.getResponse($(this).data('widget_id'));
                    grecaptcha.reset($(this).data('widget_id'));
                });

                if (!ccb_recaptcha) {
                    this.errorCaptcha = true;
                    this.successMessage = false;
                    return;
                }
            }

            vm.sendFields.forEach((element, index) => {
                if (element.required && !(element.value.length > 0)) {
                    vm.requires[index].required = true;
                    access = false;
                } else
                    vm.requires[index].required = false;
            });

            if (access) {
                vm.loader = true;
                let data = {
                    mainInfo: '',
                    action: 'contact_form',
                    sendFields: vm.sendFields,
                    clientEmail: vm.sendFields[1].value,
                    subject:   this.formData.emailSubject,
                    calcTotals: this.$store.getters.getFormula,
                    userEmail: this.formData.adminEmailAddress,
                    descriptions: this.$store.getters.getSubtotal,
                };

                const response = await this.$store.dispatch('sendForm', data);
                if(response.success) {
                    setTimeout(() => {
                        vm.errorCaptcha = false;
                        vm.errorMessage = false;
                        vm.successMessage = true;
                        vm.resetFields();

                        if ( this.formData.payment && this.formData.paymentMethod )
                           this.renderPaymentAfterSubmit(this.formData.paymentMethod);
                        else
                            vm.loader = false

                    }, 500)
                }
            } else {
                vm.errorMessage = true;
                vm.errorCaptcha = false;
                vm.successMessage = false;
            }
        },

        toggleOpen() {
            this.open = true;

            const texts = this.$current.querySelectorAll('.calc-item textarea');
            const textAreasText = typeof texts !== "undefined"
                ? Array.from(texts).map(el => el && el.value + '\n').join('')
                : '';

            if( this.formData.contactFormId ) {
                let subtotal = '';
                let text = this.formData.body;

                Array.from(this.$store.getters.getSubtotal)
                    .forEach( element => {
                        if(element.alias.indexOf('total') === -1) {
                            subtotal += `${element.label}`;
                            if(element.extra) subtotal +=  ` ${element.extra}`;
                            subtotal += ` ${element.converted}` + '\n';
                        }
                    });

                if (text.indexOf('[ccb-subtotal]') !== -1) {
                    let regex = '[ccb-subtotal]';
                    text = text.replaceAll(regex, subtotal);
                }

                Array.from(this.$store.getters.getFormula)
                    .forEach( ( element, index ) => {
                        if (text.indexOf('[ccb-total-' + index + ']') !== -1) {
                            let regex = '[ccb-total-' + index + ']';
                            text = text.replaceAll(regex, element.converted);
                        }
                    });


                const $form = this.$current.querySelector('.wpcf7-form');
                let $textarea = $form.querySelector('textarea');

                if(textAreasText) text += '\n' + textAreasText;
                if($textarea) $textarea.value = parser(text);
                if(typeof wpcf7 !== "undefined") {
                    $( 'div.wpcf7 > form' ).each( function() {
                        let $form = $( this );
                        wpcf7.initForm( $form );
                        if ( wpcf7.cached ) {
                            wpcf7.refill( $form );
                        }
                    });
                    if($('.ajax-loader').length > 1) $('.ajax-loader').last().remove();
                }
            }else {
                this.sendFields[3].value += '\n' + textAreasText.trim();
            }

            document.addEventListener( 'wpcf7mailsent', event => {
                if ( this.formData.payment && this.formData.paymentMethod )
                         this.renderPaymentAfterSubmit(this.formData.paymentMethod, true);
            })
        },

        resetFields() {
            let vm = this;
            vm.sendFields.forEach(function (element) {
                element.value = '';
            });
        },

        renderCaptchaFunc() {
            const vm = this;
            if(this.getSettings.hasOwnProperty('recaptcha') && this.getSettings.recaptcha.enable)
                window.ccbCaptchaFnc = () => {
                    this.$current.querySelectorAll('.g-rec')
                        .forEach( element => {
                            let ccb_id = grecaptcha.render(element.getAttribute('id'), {'sitekey': vm.getSettings.recaptcha.siteKey});
                            element.setAttribute('data-widget_id', ccb_id);
                        });
                }
        },

        renderCaptchaScript() {
            if(this.getSettings.hasOwnProperty('recaptcha') && this.getSettings.recaptcha.enable) {
                const script = document.createElement('script');
                script.src = 'https://www.google.com/recaptcha/api.js?onload=ccbCaptchaFnc&render=explicit';
                script.setAttribute('defer', '');
                script.setAttribute('async', '');
                const firstScriptTag = document.querySelectorAll('script')[0];
                firstScriptTag.parentNode.insertBefore(script, firstScriptTag);
            }
        },

        renderPaymentAfterSubmit(type, isCForm7 = false) {
            const vm = this;
            this.afterPayment = type;
            switch (type) {
                case 'woocommerce': {
                    vm.$store.dispatch('applyWoo');
                    break;
                }
                case 'paypal': {

                    const data = {
                        action: 'paypal_redirect',
                        paypal_info: this.getSettings.paypal,
                        calcTotals: this.$store.getters.getFormula,
                        descriptions: this.$store.getters.getSubtotal,
                        thousands_separator: this.getSettings.currency.thousands_separator,
                    };
                    this.$store.commit('updateMethodCommit', 'paypal');
                    this.$store.dispatch('fetchPayment', data);
                    break;
                }
                case 'stripe': {
                    if(isCForm7) {
                        this.$store.dispatch('updateStripeAction', true);
                    }

                    vm.loader = false;
                    this.stripe = true;

                    setTimeout(() => {
                        vm.successMessage = false;
                    }, 2000);

                    break;
                }

                default: break;
            }
        },
    }
}