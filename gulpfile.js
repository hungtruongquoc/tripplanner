var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.phpUnit();
    mix.sass(['materialize/sass/materialize.scss', 'app.scss', 'trips/*.scss'])
        .styles(['/iconsmind/style.css', 'app.css'], 'public/css/all.css', 'public/css/');
    //mix.coffee(['app/global.coffee', 'app/trips/create.coffee'],'public/js/app')
    mix.coffee(['app/*.coffee', 'app/trips/*.coffee'],'public/js/app')
        .scripts(['app/materialize.min.js', 'app/app.js'],'public/js', 'public/js');
});
