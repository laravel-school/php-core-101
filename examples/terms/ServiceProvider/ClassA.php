<?php

namespace App\Terms\ServiceProvider;

class ClassA
{
    protected $classB;

    public function __construct(ClassB $classB)
    {
        $this->classB = $classB;
    }
}
