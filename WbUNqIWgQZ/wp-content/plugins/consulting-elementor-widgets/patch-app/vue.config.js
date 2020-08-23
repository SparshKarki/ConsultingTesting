module.exports = {
    filenameHashing: false,
    productionSourceMap: false,
    publicPath: "/hybrid/wp-content/plugins/consulting-elementor-widgets/patch-app/dist",
    devServer: {
        proxy: 'http://consulting.loc/',
    }
};