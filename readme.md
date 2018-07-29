## Tailwind CSS Laravel Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknesler/tailwind-preset/v/stable)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![Total Downloads](https://poser.pugx.org/zaknesler/tailwind-preset/downloads)](https://packagist.org/packages/zaknesler/tailwind-preset)
[![License](https://poser.pugx.org/zaknesler/tailwind-preset/license)](https://packagist.org/packages/zaknesler/tailwind-preset)

This preset will replace the default Bootstrap scaffolding with a custom Tailwind CSS preset. This preset includes the Vue JavaScript framework, and is compiled using Laravel Mix and PurgeCSS.

[**Demo**](https://preset.zaknesler.com) &middot; [View Screenshots](preview.md)

### Installation

> **Warning**: Installing presets will affect your existing views and assets. Presets should be installed on a fresh installation of Laravel.

To install, you must first add it as a composer dependency. Laravel will automatically register the service provider for you.

```
composer require zaknesler/tailwind-preset
```

Next, install either the `tailwind` preset or the `tailwind-auth` preset. The `tailwind-auth` preset includes authentication views, routes, and a controller.

```
php artisan preset tailwind

// or

php artisan preset tailwind-auth
```

Install the NPM packages using your favorite package manager.

```
yarn install
```

Now just compile the assets using any of the Laravel build scripts (dev, prod, watch).

```
yarn run dev
```

Make sure your database is configured and migrated, and you're done. At this point, you are free to remove the composer dependency, as it is no longer needed.

```
composer remove zaknesler/tailwind-preset
```
