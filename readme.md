## Tailwind CSS Laravel Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknesler/tailwind-preset/v/stable)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![Total Downloads](https://poser.pugx.org/zaknesler/tailwind-preset/downloads)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![License](https://poser.pugx.org/zaknesler/tailwind-preset/license)](https://packagist.org/packages/zaknesler/tailwind-preset)

This is a Laravel front-end preset for Tailwind CSS. This preset will replace the default Bootstrap scaffolding, including the example Vue.js component. It will also compile the assets using Laravel Mix and PurgeCSS in order to generate the smallest files possible.

[**Demo**](https://preset.zaknesler.com) &middot; [View Screenshots](screenshots.md)

### Installation

> **Warning**: Installing this preset will **overwrite** your existing views and assets, and should only be installed on a fresh instance of Laravel. Please use with caution.

To install this preset, you must first require the composer dependency in your application. Laravel will automatically register the service provider for you.

```
composer require zaknesler/tailwind-preset
```

Now, install either the `tailwind` or the `tailwind-auth` preset. The `tailwind-auth` preset includes the authentication scaffolding normally generated when `php artisan make:auth` is executed.

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

Ensure that your database is properly configured and migrated, and you're done!
