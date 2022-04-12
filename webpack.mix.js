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

mix.styles([
    'resources/front/css/bootstrap.css',
    'resources/front/css/style.css',
    'resources/front/icons/css/font-awesome.min.css',
], 'public/css/styles.css');

mix.scripts([
    'resources/front/js/jquery.js',
    'resources/front/js/scroll.js',
], 'public/js/scripts.js');

mix.copyDirectory('resources/front/img', 'public/img');
mix.copyDirectory('resources/front/fonts', 'public/fonts');
mix.copyDirectory('resources/front/icons', 'public/icons');
