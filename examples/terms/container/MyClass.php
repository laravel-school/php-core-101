<?php

namespace App\Terms\Container;

class MyClass
{
    public function someExecution(): string
    {
        // Create a new instance of a container
        $container = new Container();

        // Bind the classB to the container
        $container->bind('classB', function () {
            return new ClassB();
        });

        // Bind the classA to the container, which depends on classB
        $container->bind('classA', function ($container) {
            return new ClassA($container->make('classB'));
        });

        // Resolve the classA from the container and execute it
        $classA = $container->make('classA');
        return $classA->execute();
    }
}
