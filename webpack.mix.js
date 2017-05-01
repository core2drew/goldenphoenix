const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix
   .sass('resources/assets/sass/main.scss', 'public/css')
   .sass('resources/assets/sass/underconstruction.scss','public/css')
   .sass('resources/assets/sass/onepage.scss','public/css')
   .js('resources/assets/js/goldenApp.js','public/js')
   .js('resources/assets/js/controllers/contactController.js','public/js/controllers')
   .version();
