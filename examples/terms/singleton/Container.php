<?php

namespace App\Terms\Singleton;
class Container
{
    protected $bindings = [];

    protected $instances = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function singleton($key, $value)
    {
        $this->instances[$key] = $value;
    }

    public function make($key)
    {
        // If we have already resolved this instance in the past, we will return it
        if (isset($this->instances[$key])) {
            return $this->instances[$key];
        }

        // If we have a binding for the key, we will resolve it and store it in the instances array
        if (isset($this->bindings[$key])) {
            return call_user_func($this->bindings[$key], $this);
        }

        throw new \Exception("No binding found for $key");
    }
}
