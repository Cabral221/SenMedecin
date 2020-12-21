const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

    mix.js('node_modules/owl.carousel/dist/owl.carousel.js', 'public/js/owl.js')
    .styles('node_modules/owl.carousel/dist/assets/owl.carousel.css', 'public/css/owl.css')