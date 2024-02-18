<?php

class Father
{
    public string $hairColor;
    public string $eyeColor;
    public string $skinColor;

    public function introduce() {
        echo "I am the father. I have " . $this->hairColor . " hair, " . $this->eyeColor . " eyes, and " . $this->skinColor . " skin.";
    }
}

/**
 * ================================================================
 * INHERITANCE
 * ================================================================
 *
 * Inheritance is a mechanism in which one class acquires the property and behavior of another class.
 * The class that inherits the properties and behavior is called the child class.
 * The class whose properties and behavior are inherited is called the parent class.
 * The child class can have its own properties and behavior in addition to the parent class.
 */
class Son extends Father
{
    public string $height;
    public string $weight;

    public function introduce()
    {
        echo "I am the son. I have ".$this->hairColor." hair, ".$this->eyeColor." eyes, and ".$this->skinColor." skin. I am ".$this->height." tall and ".$this->weight." heavy.";
    }
}
