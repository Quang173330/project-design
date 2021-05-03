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

mix.styles('resources/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .styles('resources/css/color4.css', 'public/css/color4.css')
    .styles('resources/css/css.css', 'public/css/css.css')
    .styles('resources/css/flaticon.css', 'public/css/flaticon.css')
    .styles('resources/css/font-awesome.css', 'public/css/font-awesome.css')
    .styles('resources/css/ion.rangeSlider.min.css', 'public/css/ion.rangeSlider.min.css')
    .styles('resources/css/magnific-popup.css', 'public/css/magnific-popup.css')
    .styles('resources/css/nice-select.css', 'public/css/nice-select.css')
    .styles('resources/css/responsive.css', 'public/css/responsive.css')
    .styles('resources/css/style.css', 'public/css/style.css')
    .styles('resources/css/swiper.min.css', 'public/css/color4.css')
