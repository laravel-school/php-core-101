<?php

namespace App\Terms\Singleton;

class Entry
{
    public function exectue()
    {
        // Create a new instance of the Container
        $container = new Container();

        // Bind the classB to the container as a singleton
        $container->singleton(ClassB::class, function () {
            return new ClassB();
        });

        // Bind the classA to the container which is not a singleton, which depends on classB
        $container->bind(ClassA::class, function ($container) {
            return new ClassA($container->make(ClassB::class));
        });

        // Resolve the ClassB from the container multiple times
        $classB1 = $container->make('ClassB');
        $classB2 = $container->make('ClassB');

        // This will output "Singleton" because the classB is a singleton
        echo $classB1 === $classB2 ? 'Singleton' : 'Not Singleton';

        $classA = $container->make('ClassA');
        echo $classA->execute();
    }
}
