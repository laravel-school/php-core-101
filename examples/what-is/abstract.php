<?php

abstract class Car
{
    abstract public function color($name);

    abstract public function speed();

    abstract public function price();

    public function wheels()
    {
        echo "The car has 4 wheels<br>";
    }
}


/**
 * ABSTRACT CLASS
 *
 * An abstract class is a class that cannot be instantiated directly.
 * It is a class that is only meant to be inherited by other classes.
 */
class BMW extends Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
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

/**
 * Another implementation on an abstract class
 */
class Mercedes extends Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
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

/**
 * Again another implementation on an abstract class
 */
class Toyota extends Car
{
    public function color($name)
    {
        echo "The color of the car is " . $name . "<br>";
    }

    public function speed()
    {
        echo "The car can go up to 150 mph<br>";
    }

    public function price()
    {
        echo "The price of the car is $50,000<br>";
    }
}
