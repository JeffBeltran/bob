<?php

namespace Jeffbeltran\Bob;

use Illuminate\Support\ServiceProvider;
use Jeffbeltran\Bob\Commands\BobCommand;

class BobServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/bob.php' => config_path('bob.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/bob'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_bob_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_bob_table.php'),
                ], 'migrations');
            }

            $this->commands([
                BobCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bob');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bob.php', 'bob');
    }
}
