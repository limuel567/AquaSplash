let mix = require('laravel-mix');

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

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
                Popper: ['popper.js', 'default'],
            })
        ]
    };
});


mix.js('resources/js/app.js', 'public/backend/js')
    .sass('resources/sass/app.scss', 'public/backend/css')
    .copyDirectory('resources/static/images','public/backend/images')
    .scripts([
        'resources/frontend/js/vendor/jquery-v3.3.1.min.js',
        'resources/frontend/js/vendor/popper.min.js',
        'resources/frontend/js/vendor/bootstrap.min.js',
        'resources/frontend/js/baguetteBox.min.js',
        'resources/frontend/js/owl.carousel.min.js',
        'resources/frontend/js/moment.min.js',
        'resources/frontend/js/bootstrap-datetimepicker.min.js',
        'resources/frontend/js/main.js',
    ], 'public/frontend/js/app.js')
    .styles([
        'resources/frontend/sass/vendor/bootstrap.min.css',
        'resources/frontend/sass/vendor/font-awesome.min.css',
        'resources/frontend/sass/vendor/banguetteBox.min.css',
        'resources/frontend/sass/vendor/bootstrap-datetimepicker.min.css',
        'resources/frontend/sass/vendor/owl.carousel.min.css',
        'resources/frontend/sass/vendor/main.css',
        'resources/frontend/sass/vendor/responsive.css',
    ], 'public/frontend/css/app.css')
    .copyDirectory('resources/frontend/img','public/frontend/images')
    .version()
    .sourceMaps();
