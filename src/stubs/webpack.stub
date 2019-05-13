require('laravel-mix-purgecss')

const mix = require('laravel-mix')
const tailwind = require('tailwindcss')

mix.setPublicPath('public')
  .less('resources/less/app.less', 'public/css')
  .js('resources/js/app.js', 'public/js')
  .options({
    postCss: [
      tailwind('./tailwind.config.js'),
    ]
  })

if (mix.inProduction()) {
  mix.purgeCss().version()
}
