export default {
    props: {
        width: {
            default: '60px',
        },

        height: {
            default: '60px',
        },

        border: {
            default: '2px solid #00b163'
        },
    },

    created() {

    },


    computed: {
        generateStyle() {
            return {
                width: this.width,
                height: this.height,
                border: this.borderColor,
            }
        }
    },

    template: `<div class="ccb-loader" :style="generateStyle"></div>`
}