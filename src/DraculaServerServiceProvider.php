<?php

namespace Lameck\Dracula\Server;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;

class DraculaServerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        
        $this->loadRoutesFrom (__DIR__."/routes/web.php");
        $this->loadViewsFrom (__DIR__."/./../resources/views","Lameck\Dracula\Server");
    }

    public function registerPublishables()
    {
        $path = dirname(__DIR__);
        $publishable = 
        [
            /*'template' => [
                $path . "/publishable/img" => public_path('lameck/dracula/img'),
            ],*/
            'seeds' => [
                $path . "/publishable/database/seeds" => database_path('seeds'),
            ]
        ];
        foreach($publishable as $group => $paths){
            $this->publishes($paths,$group);
        }
    }
}
