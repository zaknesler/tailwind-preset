## Tailwind CSS Front-end Preset

[![Latest Stable Version](https://poser.pugx.org/zaknes/tailwind-preset/v/stable)](https://packagist.org/packages/zaknes/tailwind-preset)
[![Total Downloads](https://poser.pugx.org/zaknes/tailwind-preset/downloads)](https://packagist.org/packages/zaknes/tailwind-preset)
[![License](https://poser.pugx.org/zaknes/tailwind-preset/license)](https://packagist.org/packages/zaknes/tailwind-preset)

This preset will replace the default Bootstrap scaffolding with a custom Tailwind CSS preset. This preset includes the Vue JavaScript framework, and is compiled using Laravel Mix and PurgeCSS.

> **Warning**: Installing presets may affect your existing views. It is recommended that you install presets on a fresh installation of Laravel.

<a href="preview.md" target="_blank">View Screenshots &rarr;</a>

### Installation

To install this preset, you must first add it as a composer dependency. Laravel will automatically register the service provider for you.

```
composer require zaknes/tailwind-preset
```

Next, install either the `tailwind` preset or the `tailwind-auth` preset. The `tailwind-auth` preset will also install the authentication views, routes, and a controller.

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

Make sure your database is configured and migrated, and you're done!
