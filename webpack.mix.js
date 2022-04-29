const mix = require('laravel-mix');

// admin
mix.copyDirectory('resources/admin', 'public/admin');
// front
mix.copyDirectory('resources/front', 'public/front');
mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
