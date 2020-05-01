<?php

namespace ZakNesler\TailwindPreset;

use Illuminate\Support\Str;
use Laravel\Ui\Presets\Preset;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;

class TailwindPreset extends Preset
{
    /**
     * Setup basic assets.
     *
     * @return void
     */
    protected static function setup()
    {
        static::ensureResourceDirectoriesExist();
        static::updatePackages();

        static::installScripts();
        static::installStyles();
        static::updateExampleComponent();

        static::removeNodeModules();
    }

    /**
     * Install single welcome view.
     *
     * @return void
     */
    public static function install()
    {
        static::setup();

        static::installViews('default', [
            'welcome.stub',
        ]);
    }

    /**
     * Install authentication files.
     *
     * @return void
     */
    public static function installAuth()
    {
        static::setup();
        static::installAuthRoutes();

        static::createResourceDirectories([
            'views/auth/passwords',
            'views/errors',
            'views/layouts/partials',
        ]);

        static::installViews('auth', [
            'auth/passwords/confirm.stub',
            'auth/passwords/email.stub',
            'auth/passwords/reset.stub',
            'auth/login.stub',
            'auth/register.stub',
            'auth/verify.stub',
            'errors/404.stub',
            'errors/419.stub',
            'errors/500.stub',
            'errors/503.stub',
            'layouts/partials/_header.stub',
            'layouts/base.stub',
            'home.stub',
            'welcome.stub',
        ]);

        copy(
            base_path('vendor/laravel/ui/stubs/migrations/2014_10_12_100000_create_password_resets_table.php'),
            base_path('database/migrations/2014_10_12_100000_create_password_resets_table.php')
        );

        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());
        copy(__DIR__.'/stubs/en.stub', resource_path('lang/en.json'));
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            '@tailwindcss/custom-forms' => '^0.2',
            'autoprefixer' => '^9.7',
            'axios' => '^0.19',
            'cross-env' => '^6.0',
            'laravel-mix' => '^5.0',
            'tailwindcss' => '^1.4',
            'vue' => '^2.6',
            'vue-template-compiler' => '^2.6',
        ];
    }

    /**
     * Create directories if they do not already exist.
     *
     * @param  array  $dirs
     * @return void
     */
    protected static function createResourceDirectories($dirs)
    {
        $filesystem = new Filesystem;

        foreach ($dirs as $dir) {
            if (! is_dir($dir = resource_path($dir))) {
                $filesystem->makeDirectory($dir, 0755, true);
            }
        }
    }

    /**
     * Copy the view stubs over to the application and rename them.
     *
     * @param  string  $baseDir
     * @param  array  $views
     * @return void
     */
    protected static function installViews($baseDir, $views)
    {
        $filesystem = new Filesystem;

        foreach ($views as $view) {
            $filesystem->copy(
                __DIR__.'/stubs/views/'.$baseDir.'/'.$view,
                resource_path('views/'.str_replace('stub', 'blade.php', $view))
            );
        }
    }

    /**
     * Install authentication routes if they are not present.
     *
     * @return void
     */
    protected static function installAuthRoutes()
    {
        if (Str::contains(file_get_contents(base_path('routes/web.php')), 'Auth::routes();')) {
            return;
        }

        file_put_contents(
            base_path('routes/web.php'),
            "\nAuth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n",
            FILE_APPEND
        );
    }

    /**
     * Compile the HomeController class.
     *
     * @return void
     */
    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__.'/stubs/controllers/HomeController.stub')
        );
    }

    /**
     * Create any directories that do not exist.
     *
     * @return void
     */
    protected static function ensureResourceDirectoriesExist()
    {
        $filesystem = new Filesystem;

        collect(['css', 'js/components'])
            ->each(function ($dir) use ($filesystem) {
                if (! is_dir(resource_path($dir))) {
                    $filesystem->makeDirectory(resource_path($dir), 0755, true);
                }
            });
    }

    /**
     * Install all JavaScript files.
     *
     * @return void
     */
    protected static function installScripts()
    {
        (new Filesystem)->delete(base_path('webpack.mix.js'));

        copy(__DIR__.'/stubs/tailwind.stub', base_path('tailwind.config.js'));
        copy(__DIR__.'/stubs/webpack.stub', base_path('webpack.mix.js'));

        copy(__DIR__.'/stubs/js/app.stub', resource_path('js/app.js'));
        copy(__DIR__.'/stubs/js/bootstrap.stub', resource_path('js/bootstrap.js'));
    }

    /**
     * Install stylesheets.
     *
     * @return void
     */
    protected static function installStyles()
    {
        copy(__DIR__.'/stubs/css/tailwind.stub', resource_path('css/tailwind.css'));
    }

    /**
     * Update the example Vue component.
     *
     * @return void
     */
    protected static function updateExampleComponent()
    {
        copy(
            __DIR__.'/stubs/js/components/ExampleComponent.stub',
            resource_path('js/components/ExampleComponent.vue')
        );
    }
}
