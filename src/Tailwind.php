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
        static::updatePackages();
        static::updateWebpackConfiguration();

        static::ensureComponentDirectoryExists();
        static::updateExampleComponent();
        static::updateBootstrapping();
        static::installLess();
        static::installTailwindConfiguration();

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
            "\nAuth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n",
            FILE_APPEND
        );

        (new Filesystem)->copyDirectory(__DIR__.'/stubs/views', resource_path('views'));
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
            'less' => '^3.0.2',
            'less-loader' => '^4.1.0',
            'laravel-mix-purgecss' => '^2.1.0',
            'laravel-mix-tailwind' => '^0.1.0',
        ], Arr::except($packages, [
            'bootstrap',
            'popper.js',
            'jquery',
            'lodash'
        ]));
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
            file_get_contents(__DIR__.'/stubs/controllers/HomeController.stub.php')
        );
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
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

    /**
     * Update the example Vue component.
     *
     * @return void
     */
    protected static function updateExampleComponent()
    {
        (new Filesystem)->delete(resource_path('assets/js/components/Example.js'));
        (new Filesystem)->delete(resource_path('assets/js/components/ExampleComponent.vue'));

        copy(
            __DIR__.'/stubs/js/components/ExampleComponent.stub.vue',
            resource_path('assets/js/components/ExampleComponent.vue')
        );
    }

    /**
     * Install less files.
     *
     * @return void
     */
    protected static function installLess()
    {
        (new Filesystem)->deleteDirectory(resource_path('assets/sass'));

        if (!file_exists(resource_path('assets/less'))) {
            mkdir(resource_path('assets/less'), 0777, true);
        }

        copy(__DIR__.'/stubs/less/app.stub.less', resource_path('assets/less/app.less'));
    }

    /**
     * Install Tailwind configuration.
     *
     * @return void
     */
    protected static function installTailwindConfiguration()
    {
        copy(__DIR__.'/stubs/tailwind.stub.js', base_path('tailwind.js'));
    }
}
