export default  {
    props: {
        field: [Object, String],
    },

    data: () => ({
        labelId: '',
        textField: null,
    }),

    created() {
        this.textField = this.parseComponentData();
        this.labelId = 'text_area_'
    },
}