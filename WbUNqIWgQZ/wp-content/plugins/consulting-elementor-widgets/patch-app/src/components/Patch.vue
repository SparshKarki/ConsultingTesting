<template>
    <div class="patch">

        <div class="terminal-logger">
            <div class="inner" id="terminal-logger">
                <p v-for="consoleTextSingle in consoleText" v-html="consoleTextSingle"></p>
            </div>
        </div>

        <div class="selectedPostTypes mg-b-30">
            <h5>Selected Post types</h5>
            <div class="selectedPostType" v-for="selectedPostType in selectedPostTypes">
                {{postTypes[selectedPostType]}}
            </div>
        </div>

        <div class="u-full-width u-cf">
            <a class="button button-primary u-pull-right" href="#" @click.prevent="initPatch()" v-if="!patchEnded">Start</a>
            <a class="button button-primary u-pull-right" :href="vars['endpoints']['site_url']" target="_blank" v-else>View site</a>

            <a class="button u-pull-left" href="#" @click.prevent="$store.commit('changeStep', 2)">Back</a>
        </div>

    </div>
</template>

<script>

    import {mapState, mapActions} from 'vuex'

    export default {
        name: 'Patch',
        data: () => {
            return {
                start: false,
            }
        },
        computed: {
            ...mapState([
                'consoleText',
                'postTypes',
                'selectedPostTypes',
                'patchEnded',
                'vars'
            ]),
        },
        methods: {
            ...mapActions([]),
            initPatch() {
                this.$store.dispatch('initPatch', true);
            },
            scrollToBottom() {

            },
        },
        mounted: function () {
            let _this = this;

            if (!_this.consoleText.length) {
                this.$store.commit('addConsoleText', 'If you ready to go, Press "Start" button');
            }

        },
        watch: {
            consoleText: function () {
                this.scrollToBottom();
            }
        }
    }
</script>
