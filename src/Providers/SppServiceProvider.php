<?php namespace primarypartition\spp\Providers;
/**
 * SamplePhpPackage
 * 
 */

use Illuminate\Support\Facades\App;

class SppServiceProvider extends SppServiceProvider
{    
    /**
     * 
     */
    public function boot()
    {     
        parent::boot();       
        
        /**
         * Config file package client
         * 
         */
        $this->publishes([    
                          __DIR__.'../../config/spp.php' => config_path('spp.php'),
                        ], 'config');
    }
    
    /**
     * 
     */
    public function register()
    {        
        parent::register();
        
        /**
         * Repository
         * 
         */
        App::bind('\\primarypartition\\spp\\\\lib\\contracts\\repo\\IAccountRepo',
                         '\\primarypartition\\spp\\lib\\repo\\AccountRepo'); 
    }
}
