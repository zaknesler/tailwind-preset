## Tailwind CSS Laravel Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknesler/tailwind-preset/v/stable)](https://packagist.org/packages/zaknesler/tailwind-preset) [![Total Downloads](https://poser.pugx.org/zaknesler/tailwind-preset/downloads)](https://packagist.org/packages/zaknesler/tailwind-preset) [![License](https://poser.pugx.org/zaknesler/tailwind-preset/license)](https://packagist.org/packages/zaknesler/tailwind-preset)

Laravel 7+ front-end preset for [Tailwind CSS](https://tailwindcss.com). Includes Vue.js (and an example component), a clean and fully-responsive UI, and the utilization of Blade components to reduce code duplication.

This preset also uses Laravel Mix to compile and minify assets. Tailwind comes packaged with PurgeCSS, and this preset is configured to purge the proper files.

> This preset is built for Laravel 7 and up. For Laravel 5 or 6, please use [version 5.0](https://github.com/zaknesler/tailwind-preset/tree/v5.0.0).

<!-- **[Live Demo](https://preset.zak.bz)** &middot; [Example Repository](https://github.com/zaknesler/tw-preset-demo) -->

<details>
<summary>View preview screenshots</summary>

![Welcome View](https://user-images.githubusercontent.com/7189795/91107549-8b26e200-e643-11ea-82f7-27ef51da169d.png)

![Login View](https://user-images.githubusercontent.com/7189795/91107547-8b26e200-e643-11ea-9684-fe576feb187b.png)

![Home View](https://user-images.githubusercontent.com/7189795/91107546-8b26e200-e643-11ea-9a38-8d5007c3f6c5.png)

![Responsive Nav](https://user-images.githubusercontent.com/7189795/91107548-8b26e200-e643-11ea-8f40-48449450dc60.png)

</details>

### Warning

> Laravel presets are designed to be installed onto a fresh instance of Laravel. This preset will **overwrite** your existing views, assets, and Home controller. Please use with caution.

### Installation

1. Require the composer dependency. Laravel will automatically register the package.

   ```bash
   composer require zaknesler/tailwind-preset --dev
   ```

2. Install the preset:

   ```bash
   php artisan ui tailwind --auth

   # Without authentication scaffolding
   php artisan ui tailwind
   ```

3. Install the npm dependencies using your preferred package manager:

   ```bash
   # Using Yarn
   yarn

   # Using npm
   npm install
   ```

4. Compile assets:

   ```bash
   # Using Yarn
   yarn dev

   # Using npm
   npm run dev
   ```

### Customization

Tailwind is built to be fully customizable, and thus, the `tailwind.config.js` file that comes with this preset includes a handful of customizations to help get you started. These include adding [Inter](https://fonts.google.com/specimen/Inter) to the default font stack, a `theme` color palette for quick customization, as well as configuration for the [Tailwind custom-forms](https://tailwindcss-custom-forms.netlify.app/) plugin.

The `theme` color palette, by default, simply destructures Tailwind's blue color palette, but can be easily swapped out for your own color palette. For more information, visit the [Tailwind color customization page](https://tailwindcss.com/docs/customizing-colors).

This preset is designed to utilize many Tailwind features, including using a plugin, overriding default theme values, extracting components using `@apply`, and configuration for PurgeCSS. To really get the most out of Tailwind, you need to use it! Take a deep dive into Tailwind's [incredible documentation](https://tailwindcss.com/docs/installation), and most importantly... get your hands dirty with it! I hope this preset helps you out!
