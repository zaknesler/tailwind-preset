<?php

namespace ZakNesler\TailwindPreset;

use Illuminate\Support\Arr;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class Tailwind extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::replaceExampleComponent();
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    /**
     * Install authentication files.
     *
     * @return void
     */
    public static function installWithAuth()
    {
        static::install();

        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        (new Filesystem)->copyDirectory(__DIR__.'/stubs/views', resource_path('views'));
    }

    /**
     * Replace the example Vue component with one tailored for Tailwind.
     *
     * @return void
     */
    protected static function replaceExampleComponent()
    {
        (new Filesystem)->deleteDirectory(resource_path('assets/js/components/ExampleComponent.vue'));

        copy(
            __DIR__.'/stubs/js/components/ExampleComponent.stub.vue',
            resource_path('assets/js/components/ExampleComponent.vue')
        );
    }

    /**
     * Update the welcome page.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));
        copy(__DIR__.'/stubs/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    protected static function scaffoldAuth()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory();

            $files->delete(base_path('yarn.lock'));
        });
    }

    /**
     * Install the HomeController.
     *
     * @return void
     */
    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__.'/stubs/controllers/HomeController.stub.php')
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
        return array_merge([
            'vue' => '^2.5.16',
            'laravel-mix-purgecss' => '^2.1.0',
            'less' => '^3.0.2',
            'less-loader' => '^4.1.0',
            'tailwindcss' => '^0.5.3',
        ], Arr::except($packages, [
            'bootstrap',
            'popper.js',
            'jquery',
            'lodash'
        ]));
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/stubs/tailwind.stub.js', base_path('tailwind.js'));
        copy(__DIR__.'/stubs/webpack.stub.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/stubs/js/app.stub.js', resource_path('assets/js/app.js'));
        copy(__DIR__.'/stubs/js/bootstrap.stub.js', resource_path('assets/js/bootstrap.js'));
    }
}
