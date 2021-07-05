const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.styles([
        'public/css/app.css'
    ],
    'public/css/main.css'
)
