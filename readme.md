## Tailwind CSS Laravel Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknesler/tailwind-preset/v/stable)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![Total Downloads](https://poser.pugx.org/zaknesler/tailwind-preset/downloads)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![License](https://poser.pugx.org/zaknesler/tailwind-preset/license)](https://packagist.org/packages/zaknesler/tailwind-preset)

This is a Laravel front-end preset for Tailwind CSS. This preset will replace the default Bootstrap scaffolding, including the example Vue.js component. It will also compile the assets using Laravel Mix and PurgeCSS in order to generate the smallest files possible.

[**Demo**](https://preset.zaknesler.com) &middot; [View Screenshots](preview.md)

### Installation

> **Warning**: Installing this preset will **overwrite** your existing views and assets, and should only be installed on a fresh installation of Laravel. Please use with caution.

To install this preset, you must first require the composer dependency. Laravel will automatically register the service provider for you.

```
composer require zaknesler/tailwind-preset
```

Next, install either the `tailwind` or the `tailwind-auth` preset. The `tailwind-auth` preset includes authentication views, routes, and a controller.

```
php artisan preset tailwind

// or

php artisan preset tailwind-auth
```

> **Note:** If you install the `tailwind-auth` preset on a version of Laravel that is older than 5.7, you may delete the `views/auth/verify.blade.php` file, as it will not be used.

Install the NPM packages using your favorite package manager.

```
yarn // npm install
```

Now you can compile the assets using any of the Laravel build scripts (dev, prod, watch).

```
yarn dev // npm run dev
```

Ensure that your database is properly configured and migrated, and you're done! At this point, you may remove the composer dependency, as it is no longer needed.

```
composer remove zaknesler/tailwind-preset
```
