<?php

namespace Codesmiths\LaravelOcrSpace;

use Illuminate\Support\ServiceProvider;

class OcrSpaceServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ocr-space.php', 'ocr-space');
    }

    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        // Publish the config file.
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/ocr-space.php' => config_path('ocr-space.php'),
            ], 'laravel-ocr-space');
        }
    }
}
