var Encore = require('@symfony/webpack-encore');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

Encore
    .addEntry('app', './src/app.js') // will create public/build/app.js and public/build/app.css
    .setOutputPath('public/assets') // the project directory where all compiled assets will be stored
    .setPublicPath('/assets') // the public path used by the web server to access the previous directory
    .enableSassLoader() // allow sass/scss files to be processed
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild() // empty the outputPath dir before each build
    .autoProvideVariables({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        Popper: ['popper.js', 'default']
    }).addPlugin(
        new SWPrecacheWebpackPlugin(
        {
            cacheId: 'Symfonator',
            dontCacheBustUrlsMatching: /\.\w{8}\./,
            filename: 'service-worker.js',
            minify: true,
            navigateFallback: 'index.html',
            staticFileGlobsIgnorePatterns: [/\.map$/, /asset-manifest\.json$/],
        })
    )
    .enableBuildNotifications() // show OS notifications when builds finish/fail
    // create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();