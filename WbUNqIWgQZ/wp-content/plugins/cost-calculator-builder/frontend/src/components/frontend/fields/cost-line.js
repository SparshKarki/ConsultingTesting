export default  {
    props: {
        field: [Object, String],
    },

    data: () => ({
        lineField: null,
    }),

    created() {
        this.lineField = this.parseComponentData();
    },

    computed: {

        getLine() {
            let result = {};

            if(typeof this.lineField !== "undefined" && this.lineField.size) {
                result.width = this.lineField.width;
                result.borderBottomWidth = this.lineField.size;
                result.borderBottomStyle = this.lineField.style;
            }
            const custom = this.$store.getters.getCustomStyles['hr-line'];
            return {...result, ...custom}
        },
    }

}