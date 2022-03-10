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

mix.js('resources/js/app.js', 'public/js/app.js')
   // .sass('resources/sass/oneTouch/one-plus-style.scss', 'public/theme/css/one_plus_style.css')
    .sass('public/theme/onePlus/style.scss', 'public/theme/onePlus/min.css')
   .sass('resources/sass/app.scss', 'public/css');
