<?php

namespace App\Terms\Container;

class Container
{
    protected $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function make($key)
    {
        if (isset($this->bindings[$key])) {
            return call_user_func($this->bindings[$key], $this);
        }

        throw new \Exception("No binding found for $key");
    }
}
