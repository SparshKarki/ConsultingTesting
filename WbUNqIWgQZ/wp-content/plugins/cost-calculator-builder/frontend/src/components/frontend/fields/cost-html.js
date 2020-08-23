export default  {
    props: {
        field: [Object, String],
    },

    data: () => ({
        htmlContent: '',
        htmlField: null,
    }),

    created() {
        this.htmlField = this.parseComponentData();
        this.htmlContent = this.htmlField.htmlContent;
    },
}