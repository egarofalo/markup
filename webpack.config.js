let Encore = require("@symfony/webpack-encore");
const manifest = require("./assets/assets.json");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = (env) => {
    // will output scripts
    manifest.entries.forEach((element) => {
        Encore.addEntry(element.output, element.input);
    });

    // will output styles
    manifest.styleEntries.forEach((element) => {
        Encore.addStyleEntry(element.output, element.input);
    });

    Encore

        // the project directory where compiled assets will be stored
        .setOutputPath(manifest.outputPath)

        // the public path used by the web server to access the previous directory
        .setPublicPath(manifest.publicPath)
        .setManifestKeyPrefix("")

        // empty the outputPath dir before each build
        .cleanupOutputBeforeBuild()

        // show OS notifications when builds finish/fail
        .enableBuildNotifications()

        // allow legacy applications to use $/jQuery as a global variable this allow to prevent require jquery in our scripts
        //.autoProvidejQuery()

        // tell Webpack to output a separate runtime.js file
        // this file must be included via a script tag before all other JavaScript files output by Encore.
        .enableSingleRuntimeChunk()

        // this creates a 'shared.js' entry file with jQuery, Bootstrap and other shared modules
        .createSharedEntry(
            manifest.sharedEntry.output,
            manifest.sharedEntry.input
        )

        // minify images
        .addPlugin(
            new ImageminPlugin({
                disable: !Encore.isProduction(),
            })
        )

        // source maps
        .enableSourceMaps(!Encore.isProduction())

        // uncomment if you use Sass/SCSS files
        .enableSassLoader()

        // uncomment to create hashed filenames (e.g. app.abc123.css)
        .enableVersioning(Encore.isProduction())

        // enable autoprefixer
        .enablePostCssLoader();

    /*
        // Change the fonts options loader
        .configureLoaderRule("fonts", (loaderRule) => {
            loaderRule.options = Object.assign(loaderRule.options, {
                publicPath: manifest.fullPublicPath,
            });
        })

        // Change the images options loader
        .configureLoaderRule("images", (loaderRule) => {
            loaderRule.options = Object.assign(loaderRule.options, {
                publicPath: manifest.fullPublicPath,
            });
        });
        */

    if (process.argv.indexOf("--browsersync") > -1) {
        // add BrowserSync plugin
        Encore.addPlugin(new BrowserSyncPlugin(manifest.browserSync));
    }

    return Encore.getWebpackConfig();
};
