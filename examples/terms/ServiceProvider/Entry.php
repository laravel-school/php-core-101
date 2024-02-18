<?php

namespace App\Terms\ServiceProvider;

class Entry
{
    public function index()
    {
        $container = new Container();
        $container->register(AppServiceProvider::class);

        $classA = $container->make('ClassA');
        echo $classA->execute();
    }
}
