const mix = require('laravel-mix')
const tailwind = require('tailwindcss')
require('laravel-mix-purgecss')

mix.setPublicPath('public')
  .less('resources/less/app.less', 'public/css')
  .js('resources/js/app.js', 'public/js')
  .options({
    postCss: [
      tailwind('./tailwind.js'),
    ]
  })

if (mix.inProduction()) {
  mix.purgeCss().version()
}
