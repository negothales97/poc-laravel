const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
// Versionamento
if (mix.inProduction()) {
    mix.version();
}