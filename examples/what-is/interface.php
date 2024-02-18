<?php

/**
 * INTERFACE
 *
 * An interface is a set of methods that a class must implement all the methods whoever wants to implements this interface.
 */
interface Car
{
    public function color($name);

    public function wheels();

    public function engine();

    public function speed();

    public function price();
}


/**
 * IMPLEMENTATION
 *
 * A class can implement an interface using the "implements" keyword.
 * A class can implement multiple interfaces.
 * A class must implement all the methods of the interface.
 */
class BMW implements Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
    }

    public function wheels()
    {
        echo "The car has 4 wheels<br>";
    }

    public function engine()
    {
        echo "The car has a V8 engine<br>";
    }

    public function speed()
    {
        echo "The car can go up to 200 mph<br>";
    }

    public function price()
    {
        echo "The price of the car is $100,000<br>";
    }
}

// Another implementation on an interface
class Mercedes implements Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
    }

    public function wheels()
    {
        echo "The car has 4 wheels<br>";
    }

    public function engine()
    {
        echo "The car has a V12 engine<br>";
    }

    public function speed()
    {
        echo "The car can go up to 250 mph<br>";
    }

    public function price()
    {
        echo "The price of the car is $150,000<br>";
    }
}

// Again another implementation on an interface
class Toyota implements Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
    }

    public function wheels()
    {
        echo "The car has 4 wheels<br>";
    }

    public function engine()
    {
        echo "The car has a V6 engine<br>";
    }

    public function speed()
    {
        echo "The car can go up to 180 mph<br>";
    }

    public function price()
    {
        echo "The price of the car is $50,000<br>";
    }
}
