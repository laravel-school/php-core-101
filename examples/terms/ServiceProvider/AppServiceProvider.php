<?php

namespace App\Terms\ServiceProvider;

class AppServiceProvider
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    // Register the service provider
    public function register()
    {
        // Bind the ClassB class to the container
        $this->container->singleton('ClassB', function(){
            return new ClassB;
        });

        // Bind the ClassA class to the container
        $this->container->bind('ClassA', function($container){
            return new ClassA($container->make('ClassB'));
        });
    }
}
