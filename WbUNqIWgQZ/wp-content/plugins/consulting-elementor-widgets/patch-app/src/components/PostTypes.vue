<!--eslint no-undef: ["error", { "typeof": true }]-->

<template>
    <div class="patch">
        <div class="patch-head">
            <h4>Select Post types</h4>
            <span class="select-all" @click="addAll">Select all</span>
        </div>

        <div class="patch-post-types mg-b-30">
            <label v-for="(postTypeLabel, postType) in postTypes">

                <div>

                    <div class="inner" :class="{'active' : savedPostTypes.includes(postType)}">
                        <input type="checkbox" v-model="savedPostTypes" v-bind:value="postType">
                        <span></span>

                        <span class="label-body">{{postTypeLabel}}</span>
                    </div>

                </div>

            </label>
        </div>

        <div class="u-full-width u-cf" v-if="postTypes.length !== 0">
            <a class="button button-primary u-pull-right" v-if="savedPostTypes.length" href="#" @click.prevent="save">Proceed</a>
            <a class="button u-pull-left" href="#" @click.prevent="$store.commit('changeStep', 1)">Back</a>
        </div>

        <div v-else class="mg-b-30">
            Loading post types...
        </div>

    </div>
</template>

<script>

    import {mapState, mapActions} from 'vuex'

    export default {
        name: 'PostTypes',
        data: () => {
            return {
                savedPostTypes: []
            }
        },
        computed: {
            ...mapState([
                'postTypes',
                'selectedPostTypes',
            ]),
        },
        methods: {
            ...mapActions([
                'savePostTypes'
            ]),
            save: function () {
                this.$store.dispatch('savePostTypes', this.savedPostTypes);
            },
            addAll : function() {

                this.savedPostTypes = [];
                for(let postType  in this.postTypes) {
                    if(this.postTypes.hasOwnProperty(postType)) {
                        this.savedPostTypes.push(postType);
                    }
                }

                console.log(this.postTypes, this.savedPostTypes);
            }
        },
        mounted: function () {
            this.$store.dispatch('getPostTypesList');
        },
    }
</script>
