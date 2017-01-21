const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {

    // compile sass
    mix.sass('app.scss');

    // compile javascript
    mix.webpack('app.js');

    // Version files
    mix.version([
      'css/app.css',
      'js/app.js'
    ]);

    mix.browserSync({
      proxy: 'http://well-done.dev'
    });
});
