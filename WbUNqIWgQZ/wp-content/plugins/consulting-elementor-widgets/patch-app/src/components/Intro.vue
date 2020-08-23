<template>
    <div class="hello">
        <h4>Welcome to Patch</h4>
        <p>
            We are highly recommend you to create backup of your site. Please activate both WPBakery Page Builder and Elementor plugins.
        </p>
        <p>
            <strong>Note:</strong> Not all converted modules will be the same as they were in WPBakery Page Builder, due to some differences between plugins.
            But we will take care about almost all aspects of your content. After the patch we dont recommend to use both Builders, as it reflects on the site speed.
        </p>
        <a class="button button-primary" href="#" @click.prevent="$store.commit('changeStep', 2)">I made back-up and ready to proceed!</a>
    </div>
</template>

<script>

    export default {
        name: 'Intro',
        props: ['value'],
        methods: {
        }
    }
</script>
