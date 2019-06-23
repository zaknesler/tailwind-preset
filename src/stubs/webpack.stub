require('laravel-mix-purgecss')

const mix = require('laravel-mix')

mix.setPublicPath('public')
  .postCss('resources/css/tailwind.css', 'public/css/app.css', [
    require('tailwindcss'),
    require('autoprefixer'),
  ])
  .js('resources/js/app.js', 'public/js')

if (mix.inProduction()) {
  mix.purgeCss().version()
}
