<?php

namespace ZakNesler\TailwindPreset;

use Illuminate\Container\Container;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset;

class Tailwind extends Preset
{
    /**
     * Setup basic assets.
     *
     * @return void
     */
    private static function setup()
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

        File::copyDirectory(__DIR__.'/stubs/views/default', resource_path('views'));
    }

    /**
     * Install authentication files.
     *
     * @return void
     */
    public static function installWithAuth()
    {
        static::setup();
        static::installAuthRoutes();

        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        File::copyDirectory(__DIR__.'/stubs/views/auth', resource_path('views'));
    }

    /**
     * Install authentication routes if they are not present.
     *
     * @return void
     */
    protected static function installAuthRoutes()
    {
        if (str_contains(file_get_contents(base_path('routes/web.php')), 'Auth::routes();')) {
            return;
        }

        file_put_contents(
            base_path('routes/web.php'),
            "\nAuth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n",
            FILE_APPEND
        );
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
            'axios' => '^0.18.0',
            'cross-env' => '^5.2.0',
            'laravel-mix' => '^2.1.14',
            'laravel-mix-purgecss' => '^3.0.0',
            'less' => '^3.8.1',
            'less-loader' => '^4.1.0',
            'tailwindcss' => '^0.7.2',
            'vue' => '^2.5.17',
        ];
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
        if (! file_exists(resource_path('less'))) {
            File::makeDirectory(resource_path('less'), 0755, true);
        }

        if (! file_exists(resource_path('js'))) {
            File::makeDirectory(resource_path('js'), 0755, true);
        }

        if (! file_exists(resource_path('js/components'))) {
            File::makeDirectory(resource_path('js/components'), 0755, true);
        }
    }

    /**
     * Install all JavaScript files.
     *
     * @return void
     */
    protected static function installScripts()
    {
        copy(__DIR__.'/stubs/tailwind.stub', base_path('tailwind.js'));
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
        File::deleteDirectory(resource_path('sass'));

        copy(__DIR__.'/stubs/less/app.stub', resource_path('less/app.less'));
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
