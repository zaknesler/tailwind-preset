<?php

namespace ZakNesler\TailwindPreset;

use Laravel\Ui\UiCommand;
use Illuminate\Support\ServiceProvider;

class TailwindServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tailwind', function ($command) {
            if ($command->option('auth')) {
                TailwindPreset::installAuth();
                $command->callSilent('ui:controllers');

                $command->info('Tailwind authentication scaffolding installed successfully.');
            } else {
                TailwindPreset::install();

                $command->info('Tailwind scaffolding installed successfully.');
            }

            $command->comment('Please run "yarn && yarn dev" or "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
