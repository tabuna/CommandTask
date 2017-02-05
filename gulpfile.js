var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.less('./resources/assets/less/app.less', './public/dist/css/app.css');
    mix.copy('./resources/assets/vendor/bootstrap/dist/fonts/', './public/dist/fonts');
    mix.copy('./resources/assets/vendor/simple-line-icons/fonts/','./public/dist/fonts');

    mix.scripts([
        "./resources/assets/vendor/jquery/dist/jquery.min.js",
        "./resources/assets/vendor/bootstrap/dist/js/bootstrap.min.js",
        './resources/assets/vendor/bootstrap-maxlength/src/bootstrap-maxlength.js',
        './resources/assets/vendor/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',

        "./resources/assets/vendor/vue/dist/vue.min.js",
        "./resources/assets/vendor/vue-resource/dist/vue-resource.js",
        "./resources/assets/js/app.js",
        "./resources/assets/js/modules/**",
        "./resources/assets/js/components/**",
        "./resources/assets/js/directives/**",
    ], './public/dist/js/app.js');


});
