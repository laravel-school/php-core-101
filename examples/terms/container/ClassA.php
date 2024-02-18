<?php

namespace App\Terms\Container;

class ClassA
{
    public function __construct(public ClassB $classB)
    {
    }

    public function execute(): string
    {
        return $this->classB->doSomething();
    }
}
