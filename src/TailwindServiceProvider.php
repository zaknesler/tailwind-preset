<?php

namespace ZakNesler\TailwindPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class TailwindServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('tailwind', function ($command) {
            Tailwind::install();

            $this->installMessage($command);
        });

        PresetCommand::macro('tailwind-auth', function ($command) {
            Tailwind::installWithAuth();

            $this->installMessage($command);
        });
    }

    /**
     * Print message after successful installation.
     *
     * @param  \Illuminate\Console\Command  $command
     * @return void
     */
    protected function installMessage($command)
    {
        $command->info('Tailwind scaffolding installed successfully.');
        $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
