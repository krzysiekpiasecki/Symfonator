var Encore = require('@symfony/webpack-encore');

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
    })
    .enableBuildNotifications() // show OS notifications when builds finish/fail
    // create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();