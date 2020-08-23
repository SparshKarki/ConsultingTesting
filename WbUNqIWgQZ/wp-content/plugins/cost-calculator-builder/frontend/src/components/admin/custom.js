import color from './custom/color-field'
import width from './custom/width-field'
import border from './custom/border-field'
import boxShadow from './custom/box-shadow-field'
import bRadius from './custom/border-radius-field'
import indentation from './custom/indentation-field'
import bgColor from './custom/background-color-field'
import singleColor from './custom/single-color-field'
import textSettings from './custom/text-settings-field'
import CBuilderFront from '@components/frontend/cost-calc' // main-component front
export default {
    props: ['calc'],
    components: {
        'color-field': color,
        'width-field': width,
        'border-field': border,
        'box-shadow-field': boxShadow,
        'border-radius-field': bRadius,
        'indentation-field': indentation,
        'background-color-field': bgColor,
        'single-color-field': singleColor,
        'text-settings-field': textSettings,

        'calc-builder-front': CBuilderFront, // Front main component and Preview
    },

    data: () => ({
        fields: {},
        styles: {},
        hasAccess: true,
        $accordion: null,
        container: 'v-container',
        $accordion_header: null,
    }),

    async mounted() {
        await this.$store.dispatch('edit_calc', {id:this.calc});
        this.fields = this.$store.getters.getCustomFields;
        this.styles = this.$store.getters.getCustomStyles;

        let timeId = setInterval( () => {
            this.$accordion = jQuery('.ccb-js-accordion');
            this.$accordion_header = this.$accordion.find('.ccb-js-accordion-header');
            if (jQuery('.ccb-js-accordion-header').length) {
                jQuery(document).ready( () => {
                    this.render().init({speed: 300, oneOpen: true});
                });
                clearInterval(timeId);
            }
        }, 2000);
    },

    methods: {
        render() {
            let accordion = ( $ => {

                let settings = {
                    speed: 400,
                    oneOpen: false
                };

                return {
                    init:  ($settings) => {
                        this.$accordion_header.on('click', function () {
                            accordion.toggle($(this));

                        });

                        $.extend(settings, $settings);

                        if (settings.oneOpen && $('.ccb-js-accordion-item.ccb-active').length > 1) {
                            $('.ccb-js-accordion-item.ccb-active:not(:first)').removeClass('ccb-active');
                        }

                        $('.ccb-js-accordion-item.ccb-active').find('> .ccb-js-accordion-body').show();
                    },
                    toggle: function ($this) {

                        if (settings.oneOpen && $this[0] != $this.closest('.ccb-js-accordion').find('> .ccb-js-accordion-item.ccb-active > .ccb-js-accordion-header')[0]) {
                            $this.closest('.ccb-js-accordion')
                                .find('> .ccb-js-accordion-item')
                                .removeClass('ccb-active')
                                .find('.ccb-js-accordion-body')
                                .slideUp()
                        }

                        $this.closest('.ccb-js-accordion-item').toggleClass('ccb-active');
                        $this.next().stop().slideToggle(settings.speed);
                    }
                }
            })(jQuery);

            return accordion;
        },
        storeStyles(name, obj, field, index){
            if(typeof this.fields[name] !== "undefined")
                this.fields[name].fields[index] = field;

            if(typeof obj === "object" && typeof this.styles[name] !== "undefined") {

                for(let o in obj)
                    this.$set(this.styles[name], o, obj[o]);

                const data = {fields: this.fields, styles: this.styles};
                this.$store.dispatch('updateCustomChanges', data);
            }
        },
    }

}