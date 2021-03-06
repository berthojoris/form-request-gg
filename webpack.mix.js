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

mix.js('resources/js/ticket.js', 'public/js')
    .js('resources/js/admin_ticket.js', 'public/js')
    .js('resources/js/admin_user.js', 'public/js')
    .js('resources/js/admin_role.js', 'public/js')
    .js('resources/js/admin_permission.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/css/ticket.css',
    ], 'public/css/ticket.css')
    .sourceMaps();