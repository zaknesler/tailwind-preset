## Tailwind CSS Laravel Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknesler/tailwind-preset/v/stable)](https://packagist.org/packages/zaknesler/tailwind-preset) [![Total Downloads](https://poser.pugx.org/zaknesler/tailwind-preset/downloads)](https://packagist.org/packages/zaknesler/tailwind-preset) [![License](https://poser.pugx.org/zaknesler/tailwind-preset/license)](https://packagist.org/packages/zaknesler/tailwind-preset)

A Laravel 7+ front-end preset for [Tailwind CSS](https://tailwindcss.com). This preset comes bundled with Vue.js and an example component, as well as a responsive navigation menu.

This preset uses Laravel Mix to compile and minify assets. Tailwind 1.4 includes PurgeCSS by default, and this preset is configured to purge the proper files.

> This preset is built for Laravel 7 and up. For Laravel 5 or 6, please use [version 5.0](https://github.com/zaknesler/tailwind-preset/tree/a35309799e93fe384d16ead531add16b98b634e1).

**[Live Demo](https://preset.zaknesler.com)** &middot; [Example Repository](https://github.com/zaknesler/tw-preset-demo)

<details>
<summary>View screenshots</summary>

<img alt="Welcome page" src="https://user-images.githubusercontent.com/7189795/80769741-37d0d700-8b1c-11ea-9b16-e76fd8cde9f4.png">

<img alt="Login page" src="https://user-images.githubusercontent.com/7189795/80769744-399a9a80-8b1c-11ea-9caf-00783b9acc80.png">

<img alt="Home page" src="https://user-images.githubusercontent.com/7189795/80769745-3acbc780-8b1c-11ea-9010-25d38f9a3288.png">

</details>

### Warning
Laravel presets are meant to be installed onto a fresh instance of Laravel. This preset will **overwrite** your existing views, assets, and Home controller. Please use with caution.

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

Tailwind is built to be fully customizable. The `tailwind.config.js` file that this preset provides includes a handful of customization options to help get you started, including adding [Inter](https://fonts.google.com/specimen/Inter) to the default font stack, as well as a `theme` color palette, as well as configuration for the [Tailwind custom-forms](https://tailwindcss-custom-forms.netlify.app/) plugin.

The `theme` color palette, by default, simply destructures Tailwind's blue color palette, but can be easily swapped out for your own color keys. For more information, visit the [Tailwind color customization page](https://tailwindcss.com/docs/customizing-colors).

I have tried to design this preset to use as many Tailwind features as possible. This includes using a plugin, overriding default theme values, configuration destructuring, and using PurgeCSS. To get the most out of Tailwind, it is recommended that you take a deep dive into Tailwind's [incredible documentation](https://tailwindcss.com/docs/installation), and more importantly... get your hands dirty with it!

### Localization

This preset includes text that is already configured to be easily translated. An `en.json` file will be copied into your application's `resources/lang` directory when you install the authentication scaffolding. This file includes keys for all of the on-screen text found in this preset.

To translate these values, duplicate the `en.json` file and rename it to `{language}.json`, and begin translating the values for each `"key": "value"` pair. For more about localization, please refer to the [Laravel documentation](https://laravel.com/docs/6.x/localization).
