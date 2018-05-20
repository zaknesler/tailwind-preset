let mix = require('laravel-mix');

require('laravel-mix-purgecss');
require('laravel-mix-tailwind');

mix.setPublicPath('public')
  .less('resources/assets/less/app.less', 'public/css')
  .js('resources/assets/js/app.js', 'public/js')
  .tailwind();

if (mix.inProduction()) {
  mix.purgeCss().version();
}
