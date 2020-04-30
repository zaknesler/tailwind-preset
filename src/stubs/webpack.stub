const mix = require('laravel-mix')

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/tailwind.css', 'public/css/app.css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])

if (mix.inProduction()) {
    mix.version()
}
