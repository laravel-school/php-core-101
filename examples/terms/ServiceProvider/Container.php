<?php

namespace App\Terms\ServiceProvider;

class Container
{
    protected $bindings = [];

    protected $instances = [];

    protected $providers = [];

    // Bind a new instance of a class into the container
    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    // Bind a singleton instance of a class into the container
    public function singleton($key, $value)
    {
        $this->instances[$key] = $value;
    }

    // Resolve the instance from the container
    public function make($key)
    {
        // If we have already resolved this instance in the past, we will return it
        if (isset($this->instances[$key])) {
            return $this->instances[$key];
        }

        // If we have a binding for the key, we will resolve it and store it in the instances array
        if(isset($this->bindings[$key])) {
            $instance =  call_user_func($this->bindings[$key], $this);

            if(isset($this->instances[$key])) {
                $this->instances[$key] = $instance;
            }

            return $instance;
        }

        throw new \Exception("No binding found for $key");
    }

    // Register a new service provider into the container
    public function register($provider)
    {
        if (!in_array($provider, $this->providers)) {
            // Create a new instance of the provider and register it
            $object = new $provider($this);
            $object->register();

            // Store the provider in the providers array
            $this->providers[] = $provider;
        }
    }
}
