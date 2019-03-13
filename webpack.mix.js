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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/cropper.js', 'public/js')
    .js('resources/assets/js/cropper_config.js', 'public/js')
    .js('resources/assets/js/homepage.js', 'public/js')
    .js('resources/assets/js/perinatal.js', 'public/js')
    .js('resources/assets/js/blog.js', 'public/js')

    .copy('resources/assets/js/summernote.js', 'public/summernote/summernote-custom.js')

   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/homepage.scss', 'public/css')
   .sass('resources/assets/sass/cropper-style.scss', 'public/css')
   .sass('resources/assets/sass/perinatal.scss', 'public/css')
   .sass('resources/assets/sass/blog.scss', 'public/css');
