<?php

namespace Artan\DocumentationGenerator;

use Illuminate\Support\ServiceProvider;

use Artan\DocumentationGenerator\Commands\DocumentationGenerateCommand;
use Artan\DocumentationGenerator\Controllers\DocumentationController;

class DocumentationGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                DocumentationGenerateCommand::class,
            ]);
        }
        
        // Routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/views', 'documentation');

        // Publishes
        $this->publishes([
            __DIR__.'/config/documentation-generator.php' => config_path('documentation-generator.php'),
            __DIR__.'/views' => resource_path('views/artan'),
        ]);

    }
}
