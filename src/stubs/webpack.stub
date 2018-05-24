let mix = require('laravel-mix');
let tailwind = require('tailwindcss');

require('laravel-mix-purgecss');

mix.setPublicPath('public')
  .less('resources/assets/less/app.less', 'public/css')
  .js('resources/assets/js/app.js', 'public/js')
  .options({
    postCss: [
      tailwind('./tailwind.js'),
    ]
  });

if (mix.inProduction()) {
  mix.purgeCss().version();
}
