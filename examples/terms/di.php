<?php

/**
 * Using classes to create objects WITHOUT dependency injection
 */
class ClassB
{
    public function doSomething(): string
    {
        return 'Class B is doing something';
    }
}
class ClassA
{
    public function exectue(): string
    {
        $classB = new ClassB();
        return $classB->doSomething();
    }
}


/**
 * Using classes to create objects WITH dependency injection
 */
class ClassC
{
    public ClassB $classB;

    public function __construct(ClassB $classB)
    {
        $this->classB = $classB;
    }

    public function execute(): string
    {
        return $this->classB->doSomething();
    }
}

$classB = new ClassB();
$classC = new ClassC($classB);
$classC->execute();

/**
 * ============================================================================
 * Benefits of using dependency injection
 * ============================================================================
 *
 * Decoupling: ClassC is no longer tightly coupled to ClassB. It doesn't need to know how ClassB is constructed or any of its dependencies.
 * Flexibility: You can pass different implementations of ClassB (like subclasses or mocks for testing) without changing ClassC's code.
 * Testability: It's easier to test ClassC by mocking ClassB since you can pass a mock or a stub instance of ClassB when testing ClassA.
 */
