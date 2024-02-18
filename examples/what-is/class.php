<?php

/**
 * ================================================================
 * CLASS
 * ================================================================
 *
 * This is an empty class
 * The class name is arbitrary and can be changed to anything based on your purpose
 */
class MyClass {

    /**
     * PROPERTY
     *
     * This is a property
     * The property name is arbitrary
     */
    public string $task;

    /**
     * METHOD
     *
     * This is a method
     * The method name is arbitrary and can be changed to anything based on your purpose
     * The method name should be in camelCase followed by the word "function".
     */
    public function doSomething() {
        $this->task = "Do something";
    }
}

/**
 * ================================================================
 * OBJECT
 * ================================================================
 *
 * An object is an instance of a class.
 * An object is created using the "new" keyword followed by the class name.
 * The object is assigned to a variable for the further use.
 * The variable name is arbitrary and can be changed to anything based on your purpose.
 */
$object = new MyClass();
