<template>
    <div id="cew_patch_app">

        <intro v-if="step === 1"></intro>

        <post-types v-if="step === 2"></post-types>

        <patch v-if="step === 3"></patch>

    </div>
</template>

<script>

    import {mapState} from 'vuex'
    import Intro from './components/Intro'
    import PostTypes from './components/PostTypes'
    import Patch from './components/Patch'

    export default {
        name: 'App',

        components: {
            PostTypes,
            Intro,
            Patch,
        },

        computed: {
            ...mapState([
                'step',
            ]),
        },

        data: () => ({}),
    };
</script>

<style lang="scss">
    @import "assets/scss/patch";
</style>