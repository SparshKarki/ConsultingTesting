export default {
    props: {},
    mounted() {
        if (this.$refs.title)
            this.$refs.title.focus();
    },

    computed: {
        access() {
            return this.$store.getters.getAccess;
        },

        dragOptions() {
            return {
                animation: 200,
                group: "description",
                disabled: false,
                ghostClass: "ghost"
            };
        },

        getTitle: {
            get() {
                return this.$store.getters.getTitle
            },

            set(newValue) {
                this.$store.commit('setTitle', newValue);
            },
        }
    },

    watch: {
        builder() {
            this.checkAvailable();
        }
    },

    methods: {

        saveTitle() {
            if( this.$store.getters.getDisableInput === false && this.$store.getters.getTitle !== '' )
                this.$store.commit('setDisabledInput', true);
        },

        enableInput() {

            this.$refs.title.focus();
            if( this.$store.getters.getDisableInput === true )
                this.$store.commit('setDisabledInput', false);
        },

        removeFromBuilder(id) {
            this.$store.commit('removeFromBuilder', id);
        },

        editField(type, id) {
            if(typeof type === 'string')
                type = type.toLowerCase().replace(' ', '-');

            this.$store.commit('setEditID', id);
            this.$store.commit('setType', type);
            this.$store.commit('setModalType', 'add-field');
        },

        allowAccess() {
            if ( this.$store.getters.getTitle !== '' ) {
                this.$store.commit('changeAccess', true);
                this.$store.commit('setDisabledInput', true);
            }
        },

        checkAvailable() {
            this.$store.commit('checkAvailable');
        },

        addField(type) {
            if (typeof type !== 'undefined') {
                this.$store.dispatch('setFieldId');
                this.$store.commit('setType', type);
                this.$store.commit('setModalType', 'add-field');
            }
        },

        log(event) {
            const current = event.added;
            if ( current ) {
                this.$store.commit('setIndex', current.newIndex);
                this.$store.commit('setType', current.element.type);
                this.$store.commit('setModalType', 'add-field');
            }
        },
    },
};