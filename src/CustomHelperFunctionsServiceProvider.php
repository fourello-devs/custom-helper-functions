<?php

namespace FourelloDevs\CustomHelperFunctions;

use FourelloDevs\CustomHelperFunctions\Macros\ArrMacros;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use ReflectionException;

class CustomHelperFunctionsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     * @throws ReflectionException
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'fourello-devs');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'fourello-devs');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        // if ($this->app->runningInConsole()) {
        //    $this->bootForConsole();
        // }

        // Boot Arr
        Arr::mixin(new ArrMacros);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/custom-helper-functions.php', 'custom-helper-functions');

        // Register the service the package provides.
        // $this->app->singleton('custom-helper-functions', function ($app) {
        //     return new CustomHelperFunctions;
        // });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // return ['custom-helper-functions'];
        return [];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        // $this->publishes([
        //     __DIR__.'/../config/custom-helper-functions.php' => config_path('custom-helper-functions.php'),
        // ], 'custom-helper-functions.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/fourello-devs'),
        ], 'custom-helper-functions.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/fourello-devs'),
        ], 'custom-helper-functions.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/fourello-devs'),
        ], 'custom-helper-functions.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
