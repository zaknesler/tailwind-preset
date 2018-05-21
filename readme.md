## Tailwind CSS Front-end Preset

This preset will replace the default Bootstrap scaffolding with a custom Tailwind CSS preset. This preset includes the Vue JavaScript framework, and is compiled using Laravel Mix and PurgeCSS.

### Installation

To install this preset, you must first add it as a composer dependency. Laravel will automatically register the service provider for you.

```
composer install zaknes/tailwind-preset
```

Next, install either the `tailwind` preset or the `tailwind-auth` preset. The `tailwind-auth` preset will also install the authentication views, routes, and a controller.

```
php artisan preset tailwind

// or

php artisan preset tailwind-auth
```

Install the NPM dependencies.

```
npm install
```

Now just compile the assets using any of the laravel build scripts (dev, prod, watch).

```
npm run dev
```

Make sure your database is configured and migrated, and you're done!
