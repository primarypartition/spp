<?php namespace primarypartition\spp\Providers;
/**
 * primarypartition package service provider
 * 
 */

use Illuminate\Support\ServiceProvider;

class PpServiceProvider extends ServiceProvider
{    
    /**
     * 
     */
    public function boot()
    {                 
        /**
         * Autoload files
         * 
         */
        include __DIR__.'../../autoload.php';   
         
        /**
         * Routes
         * 
         */
        if (! $this->app->routesAreCached())
        {
            include __DIR__.'../../Http/routes.php'; 
        }       
        
        /**
         * Config file package default
         * 
         */
        $this->mergeConfigFrom(__DIR__.'../../config/pp.php', 'pp');   

        /**
         * Global migrations
         * 
         */
        $this->publishes([
                                      __DIR__.'../../database/migrations/' => database_path('migrations'),
                                    ], 'migrations');         

        /**
         * Global assets
         * 
         */
        $this->publishes([
                                      __DIR__.'../../public/vendor/primarypartition' => public_path('vendor/primarypartition'),
                                     ], 'public');

        /**
         * Global views
         * 
         */
        $this->publishes([
                                      __DIR__.'../../views/vendor/primarypartition' => resource_path('views/vendor/primarypartition'),                                       
                                    ], 'views');
        
        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__.'../../views/vendor/primarypartition', 'primarypartition');
    }
    
    /**
     * 
     */
    public function register()
    {                
    
    }
}
