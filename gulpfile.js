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
    mix.styles([
        "bootstrap-datetimepicker.min.css",
        "bootstrap.min.css",
        "font-awesome.min.css",
        "4-col-portfolio.css",
        "dataTables.css",
        "custom.css"
    ])

    mix.scripts([
        'jquery.min.js',
        'ajaxSetup.js',
        'bootstrap.min.js',
        'moment.min.js',
        'fr.js',
        'bootstrap-datetimepicker.min.js',
        'dataTables.js',
        'custom.js'
    ]);
});
